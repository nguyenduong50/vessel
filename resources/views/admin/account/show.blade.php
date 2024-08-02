@extends('layouts.admin') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Create new User Account</h4>
            <div class="needs-validation row">
                <div class="col-md-3">
                    <label for="" class="row d-flex justify-content-center">Avatar</label>
                    <div class="row d-flex justify-content-center">
                        @if($user->avatar !== null)
                            <img src="{{asset('frontend/images/users/'.$user->avatar)}}" alt="" id="avatar"> 
                        @else
                            <img src="{{asset('frontend/images/users/avatar.png')}}" alt="" id="avatar">
                        @endif
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{$user->name}}" readonly/>
                        </div>
                        <div class="col-md-4">
                            <label for="">Email</label>
                            <input type="text" class="form-control" value="{{$user->email}}" readonly/>
                        </div>
                        <div class="col-md-4">
                            <label for="">Phone number</label>
                            <input type="text" class="form-control" value="{{$user->phoneNumber}}" readonly/>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label for="">Address</label>
                            <input type="text" class="form-control" value="{{$user->address}}" readonly/>
                        </div>
                        <div class="col-md-4">
                            <label for="">Role</label>
                            <input type="text" class="form-control" value="{{$user->roles}}" readonly/>
                        </div>
                        <div class="col-md-4">
                            <label for="">Company</label>
                            <input type="text" class="form-control" value="{{$user->company->name}}" readonly/>
                        </div>
                    </div>
                    <div class="row">
                        <form action="{{route('user.index')}}" class="offset-11 mt-3">
                            <button class="btn btn-primary btn-sm" type="submit">Back</button>
                        </form>
                    </div>
                </div>
            </div>
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

    #avatar{
        width: 150px;
        height: 150px;
    }
</style>

<script>
    let fileInput = document.getElementById("file-input");
    let avatar = document.getElementById("avatar");

    fileInput.addEventListener('change', function(){
        avatar.src = window.URL.createObjectURL(fileInput.files[0]);
    })
</script>

@endsection
