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
                <h4 class="header-title col-6">List Company</h4>
                <div class="col-1 offset-5">
                    <form action="{{route('company.create')}}">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                    </form>
                </div>
            </div>
            <div class="single-table">
                <div class="table-responsive">
                    <table id="datatable-fixed-header" class="table text-center table-striped table-bordered dt-responsive nowrap">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Description</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $key => $company)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td><a href="{{route('company.edit', $company->id)}}">{{$company->name}}</a></td>
                                <td>
                                    @if($company->status == 1)
                                        <span class="text-success">Active</span>
                                    @else
                                        <span class="text-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>{{$company->description}}</td>
                                <td>
                                    <form action="{{route('company.edit', $company->id)}}" class="form-action">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                    </form>
                                    <form action="{{route('company.destroy', $company->id)}}" method="POST" id="delete-form" class="form-action">
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
    tbody tr{
        height: 40px;
        line-height: 40px;
    }

    .btn, .form-action{
        display: inline;
    }
</style>
@endsection
