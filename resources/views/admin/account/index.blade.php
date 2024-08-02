@extends('layouts.admin') 
@section('content')
<div class="col-lg-12 mt-1">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <h4>{{ session('status') }}</h4>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert-items">
                        <div class="alert alert-danger" role="alert">
                            <h4>{{ session('error') }}</h4>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row mb-1">
                <h4 class="header-title col-6">List Account</h4>
                <div class="col-1 offset-5">
                    <form action="{{route('user.create')}}">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                    </form>
                </div>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table id="datatable" class="table text-center table-striped table-bordered dt-responsive nowrap">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>
                                    @if($user->avatar !== null)
                                        <img src="{{asset('frontend/images/users/'.$user->avatar)}}" alt="">
                                    @else
                                        <img src="{{asset('frontend/images/users/avatar.png')}}" alt="">
                                    @endif
                                </td>
                                <td class="username-table"><a href="{{route('user.edit', $user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->roles}}</td>
                                <td>
                                    <form action="{{route('user.edit', $user->id)}}" class="form-action">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                    </form>
                                    <form action="{{route('user.destroy', $user->id)}}" method="POST" id="delete-form" class="form-action">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you want delete?');"                                
                                            class="btn btn-danger btn-sm">
                                            <i class="ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    table{
        /* overflow-x: scroll; */
    }
    table th:first-child{
        width: 50px;
    }
    tbody tr{
        height: 40px;
        line-height: 40px;
    }

    .btn, .form-action{
        display: inline;
    }

    table td img{
        width: 45px;
        height: 45px;
    }

    .username-table a:hover{
        text-decoration: underline;
    }
</style>
@endsection
