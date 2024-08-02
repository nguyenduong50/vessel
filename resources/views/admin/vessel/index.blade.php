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
                <h4 class="header-title col-6">List Vessel</h4>
                <div class="col-1 offset-5">
                    <form action="{{route('vessel.create')}}">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                    </form>
                </div>
            </div>

            <div class="single-table">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">#</th>
                                <th scope="col">Vessel Name</th>
                                <th scope="col">AMSA UVI</th>
                                <th scope="col">Company</th>
                                <th scope="col">Cos Expiry Date</th>
                                <th scope="col">Coo Expiry Date</th>
                                <th scope="col">Equipment Status</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vessels as $key => $vessel)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td id="td-name"><a href="{{route('vessel.edit', $vessel->id)}}">{{$vessel->name}}</a></td>
                                <td><a href="{{route('vessel.edit', $vessel->id)}}">{{$vessel->amsa_uvi}}</a></td>
                                <td>
                                    {{$vessel->company->name}}
                                </td>
                                <td>
                                    @if($vessel->cos_expiry_date <= $now)
                                    <span class="text-danger">
                                        {{$vessel->cos_expiry_date}}
                                    </span>
                                    @else
                                    <span>
                                        {{$vessel->cos_expiry_date}}
                                    </span>
                                    @endif
                                </td>
                                <td class="tabledit-view-mode">
                                    @if($vessel->coo_expiry_date <= $now)
                                        <span class="text-danger">
                                            {{$vessel->coo_expiry_date}}
                                        </span>
                                    @else
                                        <span>
                                            {{$vessel->coo_expiry_date}}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    @if(
                                        $vessel->cos_expiry_date === null ||
                                        $vessel->survey_anniversary_date === null ||
                                        $vessel->class_cert_expiry_date === null || 
                                        $vessel->coo_expiry_date === null ||
                                        $vessel->trailer_reg_expiry_date === null || 
                                        $vessel->rcd_test_expiry_date === null || 
                                        $vessel->megger_test_expiry_date === null || 
                                        $vessel->ecoc_expiry_date === null || 
                                        $vessel->gas_coc_expiry_date === null
                                    )
                                        <span></span>
                                    @elseif(
                                        $vessel->cos_expiry_date <= $now_sub_90 ||
                                        $vessel->survey_anniversary_date <= $now_sub_90 ||
                                        $vessel->class_cert_expiry_date <= $now_sub_90 || 
                                        $vessel->coo_expiry_date <= $now_sub_90 ||
                                        $vessel->trailer_reg_expiry_date <= $now_sub_90 || 
                                        $vessel->rcd_test_expiry_date <= $now_sub_90 || 
                                        $vessel->megger_test_expiry_date <= $now_sub_90 || 
                                        $vessel->ecoc_expiry_date <= $now_sub_90 || 
                                        $vessel->gas_coc_expiry_date <= $now_sub_90
                                    )
                                        <span class="text-danger">Out of date</span>
                                    @elseif(
                                        ($vessel->cos_expiry_date > $now_sub_90 && $vessel->cos_expiry_date < $now) || 
                                        ($vessel->survey_anniversary_date > $now_sub_90 && $vessel->survey_anniversary_date < $now) || 
                                        ($vessel->class_cert_expiry_date > $now_sub_90 && $vessel->class_cert_expiry_date < $now) || 
                                        ($vessel->coo_expiry_date > $now_sub_90 && $vessel->coo_expiry_date < $now) ||
                                        ($vessel->trailer_reg_expiry_date > $now_sub_90 && $vessel->trailer_reg_expiry_date < $now) || 
                                        ($vessel->rcd_test_expiry_date > $now_sub_90 && $vessel->rcd_test_expiry_date < $now) || 
                                        ($vessel->megger_test_expiry_date > $now_sub_90 && $vessel->megger_test_expiry_date < $now) || 
                                        ($vessel->ecoc_expiry_date > $now_sub_90 && $vessel->ecoc_expiry_date < $now) || 
                                        ($vessel->gas_coc_expiry_date > $now_sub_90 && $vessel->gas_coc_expiry_date < $now)
                                    )
                                        <span class="text-warning">Duc soon</span>
                                    @else
                                        <span class="text-success">Current</span>
                                    @endif
                                </td>
                                <td>
                                    <!-- <form action="{{route('vessel.show', $vessel->id)}}" class="form-action">
                                        <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>                                                              
                                    </form> -->
                                    <form action="{{route('vessel.edit', $vessel->id)}}" class="form-action">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></button>
                                    </form>
                                    <!-- <php
                                        $vesselID = $vessel->id;

                                        echo "<button class='btn btn-primary btn-sm' onclick='editTable($vesselID)'><i class='fas fa-pencil-alt'></i></button>"
                                    ?> -->
                                    <form action="{{route('vessel.destroy', $vessel->id)}}" method="POST" id="delete-form" class="form-action">
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
    thead{
        font-size: 14px;
    }
    tbody tr{
        height: 40px;
        line-height: 40px;
    }

    .btn, .form-action{
        display: inline;
    }

    table tr td a:hover{
        text-decoration: underline;
    }
</style>

<script>
    function editTable(vesselID){
        alert(vesselID);
    }
</script>
@endsection
