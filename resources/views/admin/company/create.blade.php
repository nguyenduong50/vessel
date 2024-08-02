@extends('layouts.admin') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Create new company</h4>
            <form class="needs-validation row" novalidate="" action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 row">
                    <div class="col-md-4">
                        <label for="">Company Name</label>
                        <input type="text" class="form-control" name="name" />
                    </div>
                    <div class="col-md-4">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="">Description</label>
                        <input type="text" class="form-control" name="description" />
                    </div>
                </div>
                <div class="col-12 row mt-3">
                    <div class="col-md-4">
                        <label for="">Company Representative</label>
                        <input type="text" class="form-control" name="represent" />
                    </div>
                    <div class="col-md-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="represent_email" />
                    </div>
                    <div class="col-md-4">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" placeholder="" name="represent_phone" />
                    </div>
                </div>
                <div class="col-12 row mt-3">
                    <div class="col-md-4">
                        <label for="">Company Address</label>
                        <input type="text" class="form-control" name="company_address" />
                    </div>
                    <div class="col-md-4">
                        <label for="">Company Website</label>
                        <input type="text" class="form-control" name="company_website" />
                    </div>
                    <div class="col-md-4">
                        <label for="">Company Telephone number</label>
                        <input type="text" class="form-control" placeholder="" name="company_phone" />
                    </div>
                </div>
                <div class="col-12 row mt-3">
                    <div class="col d-flex justify-content-end">
                        <a class="btn btn-danger btn-sm text-white" href="{{route('company.index')}}">Cancel</a>
                        <button class="btn btn-primary btn-sm" type="submit">Save</button>
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

    form .btn {
        font-size: 14px;
    }

    form a.btn {
        /* font-weight: 500; */
        margin-right: 3px;
    }
</style>
@endsection
