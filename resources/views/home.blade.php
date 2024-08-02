@extends('layouts.admin') @section('content')
<!-- Show Total -->
<div class="row">
    <div class="col-lg-6 col-xl-3">
        <div class="card widget-box-three">
            <div class="card-body">
                <div class="float-right mt-2">
                    <i class="mdi mdi-account-convert display-3 m-0"></i>
                </div>
                <div class="overflow-hidden">
                    <p class="text-uppercase font-weight-medium text-truncate mb-2">Total User</p>
                    <h2 class="mb-0"><span data-plugin="counterup">{{$countUsers}}</span></h2>
                    <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Update:</span> {{$now}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card widget-box-three">
            <div class="card-body">
                <div class="float-right mt-2">
                    <i class="mdi mdi-layers display-3 m-0"></i>
                </div>
                <div class="overflow-hidden">
                    <p class="text-uppercase font-weight-medium text-truncate mb-2">Total Company</p>
                    <h2 class="mb-0"><span data-plugin="counterup">{{$countCompanys - 1}}</span></h2>
                    <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Update:</span> {{$now}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card widget-box-three">
            <div class="card-body">
                <div class="float-right mt-2">
                    <i class="mdi mdi-ship-wheel display-3 m-0"></i>
                </div>
                <div class="overflow-hidden">
                    <p class="text-uppercase font-weight-medium text-truncate mb-2">Total Vessel</p>
                    <h2 class="mb-0"><span data-plugin="counterup">{{$countVessels}}</span></h2>
                    <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Update:</span> {{$now}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card widget-box-three">
            <div class="card-body">
                <div class="float-right mt-2">
                    <i class="mdi mdi-chart-areaspline display-3 m-0"></i>
                </div>
                <div class="overflow-hidden">
                    <p class="text-uppercase font-weight-medium text-truncate mb-2">Vessel Expiry</p>
                    <h2 class="mb-0"><span data-plugin="counterup">{{$countVesselExpiry}}</span></h2>
                    <p class="text-muted mt-2 m-0"><span class="font-weight-medium">Update:</span> {{$now}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- Show total End -->

<!-- Table list Vessel Expiry Date -->
<div class="col-lg-12">
    <div class="demo-box">
        <h4 class="header-title">List Vessels</h4>
        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Vessel Name</th>
                        <th>AMSA UVI</th>
                        <th>Company</th>
                        <th>Cos Expiry Date</th>
                        <th>Coo Expiry Date</th>
                        <th>Equipment Status</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach($vessels as $key => $vessel)
                    @if(
                        $vessel->cos_expiry_date <= $now ||
                        $vessel->coo_expiry_date <= $now ||
                        $vessel->class_cert_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
                        $vessel->trailer_reg_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
                        $vessel->rcd_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
                        $vessel->megger_test_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
                        $vessel->ecoc_expiry_date <= date('Y-m-d', strtotime($now. '+90days')) || 
                        $vessel->gas_coc_expiry_date <= date('Y-m-d', strtotime($now. '+90days'))
                    )
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td><a href="{{route('vessel.edit', $vessel->id)}}">{{$vessel->name}}</a></td>
                        <td>{{$vessel->amsa_uvi}}</td>     
                        <td>{{$vessel->company->name}}</td>                 
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
                        <td>
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
                    </tr>
                    @endif
                    @endforeach                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table list Vessel Expiry Date End -->

@endsection
