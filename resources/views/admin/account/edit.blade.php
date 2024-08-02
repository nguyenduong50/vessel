@extends('layouts.admin') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Edit User Account</h4>
            <div>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
            </div>
            <form class="needs-validation row" novalidate="" action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT') @csrf
                <div class="col-md-3">
                    <label for="" class="row d-flex justify-content-center">Avatar</label>
                    <div class="row d-flex justify-content-center">
                        @if($user->avatar !== null)
                            <img src="{{asset('frontend/images/users/'.$user->avatar)}}" alt="" id="avatar"> 
                        @else
                            <img src="{{asset('frontend/images/users/avatar.png')}}" alt="" id="avatar">
                        @endif 
                    </div>
                    <div class="row d-flex justify-content-center mt-2">
                        <input type="file" id="file-input" class="" name="avatar">
                        <label for="file-input" id="label-file-input" class="border border-1">Upload</label>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" readonly/>
                            <input type="checkbox" id="checkbox-change-password" onclick=changeCheckbox()>
                            <label for="checkbox-change-password">Change password</label>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" value="{{$user->phoneNumber}}" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" value="{{$user->address}}" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" value="{{$user->password}}" readonly/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Role</label>
                            <select name="roles" id="role-select" class="form-control" onchange="roleChange()">
                                @if($user->roles == 'admin')
                                    <option value="admin" selected>Admin</option>
                                    <option value="staff">Staff</option>
                                    <option value="userGuest">User Guest</option>
                                @endif
                                @if($user->roles == 'staff')
                                    <option value="admin">Admin</option>
                                    <option value="staff" selected>Staff</option>
                                    <option value="userGuest">User Guest</option>
                                @endif
                                @if($user->roles == 'userGuest')
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                    <option value="userGuest" selected>User Guest</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Company</label>
                            <select name="company_id" id="company-select" class="form-control">
                                @foreach($companies as $key => $company)
                                    @if($user->company->id ===  $company->id)
                                        <option value="{{$company->id}}" selected>{{$company->name}}</option>
                                    @else
                                        <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-end">
                            <a class="btn btn-danger btn-sm text-white" href="{{route('user.index')}}">Cancel</a>
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    form .btn {
        font-size: 16px;
        font-weight: bold;
    }

    select.form-control {
        padding: 5px 12.8px !important;
    }

    #file-input {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    #label-file-input{
        padding: 7px 25px;
        cursor: pointer;
    }

    #label-file-input:hover{
        background-color: #88808049;
        /* color: #fff; */
    }

    #avatar{
        width: 150px;
        height: 150px;
    }

    form .btn{
        font-size: 14px;
    }

    form a.btn{
        font-weight: 500;
        margin-right: 3px;
    }
</style>

<script>
    //=====================Variable=====================//

    //Upload Image avatar
    let fileInput = document.getElementById("file-input");
    let avatar = document.getElementById("avatar");

    //=====================Function=====================//

    function roleChange(){
        const roleSelect = document.getElementById("role-select");
        const companySelect = document.getElementById("company-select");

        if(roleSelect.value == "admin" || roleSelect.value == "staff"){
            companySelect.style.display = 'none';
        }
        else{
            companySelect.style.display = 'block';
        }
    }

    //=====================Event=====================//

    //Upload Image avatar
    fileInput.addEventListener('change', function(){
        avatar.src = window.URL.createObjectURL(fileInput.files[0]);
    })

    //Change password
    function changeCheckbox(){
        let checkboxChangePassword = document.getElementById("checkbox-change-password");
        let password = document.getElementById("password");
        let passwordConfirm = document.getElementById("password-confirm");
    
        if(checkboxChangePassword.checked === true){
            password.readOnly = false;
            passwordConfirm.readOnly = false;

            password.value = '';
            passwordConfirm.value = '';

            password.focus();
        }
        else{
            password.readOnly = true;
            passwordConfirm.readOnly = true;

            password.value = '{{$user->password}}';
            passwordConfirm.value = '{{$user->password}}';
        }
    }

    //=====================Default program/=====================//

    roleChange()

</script>

@endsection
