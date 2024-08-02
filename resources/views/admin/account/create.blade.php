@extends('layouts.admin') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Create new User Account</h4>
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
            <form class="needs-validation row" novalidate="" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-3">
                    <label for="" class="row d-flex justify-content-center">Avatar</label>
                    <div class="row d-flex justify-content-center">
                        <img src="{{asset('frontend/images/users/avatar.png')}}" alt="" id="avatar"> 
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
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="col-md-4">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" required />
                        </div>
                        <div class="col-md-4">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" required />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address" />
                        </div>
                        <div class="col-md-4">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Role</label>
                            <select name="roles" id="role-select" class="form-control" onchange="roleChange()">
                                <option value="admin">Admin</option>
                                <option value="staff">Staff</option>
                                <option value="userGuest" selected>User Guest</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Company</label>
                            <select name="company_id" id="company-select" class="form-control">
                                @foreach($companies as $key => $company)
                                    <option value="{{$company->id}}">{{$company->name}}</option>
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

    fileInput.addEventListener('change', function(){
        avatar.src = window.URL.createObjectURL(fileInput.files[0]);
    })

    //=====================Default program/=====================//

    roleChange();

</script>

@endsection
