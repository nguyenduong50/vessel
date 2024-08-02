@extends('layouts.admin') 
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Create new Vessel</h4>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <form class="needs-validation" novalidate="" action="{{route('vessel.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner" role="tab" aria-controls="profile" aria-selected="false">Owner Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="hull-tab" data-toggle="tab" href="#hull" role="tab" aria-controls="contact" aria-selected="false">Hull type and Dimensions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="machinery-tab" data-toggle="tab" href="#machinery" role="tab" aria-controls="contact" aria-selected="false">Machinery & Electrical</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="propulsion-tab" data-toggle="tab" href="#propulsion" role="tab" aria-controls="contact" aria-selected="false">Propulsion System</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="contact" aria-selected="false">Safety Equipment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="fire-tab" data-toggle="tab" href="#fire" role="tab" aria-controls="contact" aria-selected="false">Fire Equipment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="contact" aria-selected="false">Other Equipment</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <!-- Tab 1 - General -->
                                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="vessel-name">Vessel Name</label>
                                                            <input type="text" class="form-control" id="vessel-name" placeholder="" name="name" required />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="vessel-id">Vessel ID</label>
                                                            <input type="text" class="form-control" id="vessel-id" placeholder="" name="vessel_id" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="amsa_uvi">AMSA UVI</label>
                                                            <input type="text" class="form-control" id="amsa_uvi" placeholder="" name="amsa_uvi" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="trailer_reg_no">Trailer Reg No.</label>
                                                            <input type="text" class="form-control" id="trailer_reg_no" placeholder="" name="trailer_reg_no" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="home_port">Home Port</label>
                                                            <input type="text" class="form-control" id="home_port" name="home_port" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="builder">Builder</label>
                                                            <input type="text" class="form-control" id="builder" placeholder="" name="builder" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="build_year">Built Year</label>
                                                            <input type="number" class="form-control" id="build_year" name="build_year" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="builders_plate_no">Builders Plate No.</label>
                                                            <input type="text" class="form-control" id="builders_plate_no" name="builders_plate_no" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="survey_class">Survey Class</label>
                                                            <input type="text" class="form-control" id="survey_class" name="survey_class" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="survey_authority">Survey Authority</label>
                                                            <input type="text" class="form-control" id="survey_authority" name="survey_authority" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 3 -->
                                                    <div class="form-row">
                                                        <div class="col-md-8 mb-3">
                                                            <label for="note">Notes</label>
                                                            <input type="text" class="form-control" id="note" name="note" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="work_order_no">Work Order No</label>
                                                            <input type="text" class="form-control" id="work_order_no" name="work_order_no" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 4 -->
                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="description">Description and Use of Vessel</label>
                                                            <textarea name="description" id="" rows="3" class="form-control" placeholder="" name="description"></textarea>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 5 -->
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="no_of_crew">No. of Crew</label>
                                                            <input type="text" class="form-control" id="no_of_crew" placeholder="" name="no_of_crew" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="no_of_pax">No. of Pax (Total)</label>
                                                            <input type="text" class="form-control" id="no_of_pax" placeholder="" name="no_of_pax" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="no_of_berthed">No. of Berthed Pax</label>
                                                            <input type="text" class="form-control" id="no_of_berthed" placeholder="" name="no_of_berthed" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="no_of_unberthed_pax">No. of Unberthed Pax</label>
                                                            <input type="text" class="form-control" id="no_of_unberthed_pax" placeholder="" name="no_of_unberthed_pax" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 6 -->
                                                    <h5 class="my-3 text-center">Cerfiticates</h5>
                                                    <div class="form-row">
                                                        <div class="col-md-5 col-lg-4 mb-3">
                                                            <select name="" id="selected-cerfiticates" class="form-control" onchange="changeSelectorCerfiticates()">
                                                                <option value="0" selected>Do not enter data</option>
                                                                <option value="1">Enter data</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row data-cerfiticates" style="display: none">                                                       
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="cos_expiry_date">CoS Expiry Date</label>
                                                            <input type="date" class="form-control" id="cos_expiry_date" placeholder="" name="cos_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="survey_anniversary_date">Survey Anniversary Date</label>
                                                            <input type="date" class="form-control" id="survey_anniversary_date" placeholder="" name="survey_anniversary_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="class_cert_expiry_date">Class Cert Expiry Date</label>
                                                            <input type="date" class="form-control" id="class_cert_expiry_date" placeholder="" name="class_cert_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>                                                    
                                                    </div>
                                                    <!-- Row 7 -->
                                                    <div class="form-row data-cerfiticates" style="display: none">
                                                        <div class="col-lg-3 mb-3">
                                                            <label for="coo_expiry_date">CoO Expiry Date</label>
                                                            <input type="date" class="form-control" id="coo_expiry_date" placeholder="" name="coo_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="trailer_reg_expiry_date">Trailer Reg. Expiry Date</label>
                                                            <input type="date" class="form-control" id="trailer_reg_expiry_date" placeholder="" name="trailer_reg_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="rcd_test_expiry_date">RCD test Expiry Date</label>
                                                            <input type="date" class="form-control" id="rcd_test_expiry_date" placeholder="" name="rcd_test_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 8 -->
                                                    <div class="form-row data-cerfiticates" style="display: none">                                                       
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="megger_test_expiry_date">Megger test Expiry Date</label>
                                                            <input type="date" class="form-control" id="megger_test_expiry_date" placeholder="" name="megger_test_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <label for="ecoc_expiry_date">eCoC Expiry Date</label>
                                                            <input type="date" class="form-control" id="ecoc_expiry_date" placeholder="" name="ecoc_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label for="gas_coc_expiry_date">Gas CoC Expiry Date</label>
                                                            <input type="date" class="form-control" id="gas_coc_expiry_date" placeholder="" name="gas_coc_expiry_date" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 2 - Owner -->
                                    <div class="tab-pane fade" id="owner" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <h6 for="owner">Owner</h6>
                                                            <select class="form-control" name="company_id" id="owner">
                                                                @foreach($companies as $key => $company)
                                                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <h6>Contact Person Details</h6>
                                                    <div class="form-row">                                               
                                                        <div class="col-md-4 mb-3">
                                                            <label for="captain">Name</label>
                                                            <input type="text" class="form-control" id="captain" name="captain" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="phone_captain">Phone No.</label>
                                                            <input type="tel" class="form-control" id="phone_captain" name="phone_captain" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="mobile_captain">Mobile No.</label>
                                                            <input type="tel" class="form-control" id="mobile_captain" name="mobile_captain" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="email_captain">Email</label>
                                                            <input type="email" class="form-control" id="email_captain" name="email_captain" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                    <!-- Row 3 -->
                                                    <h6>Line Manager Details</h6>
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="line_manager">Name</label>
                                                            <input type="text" class="form-control" id="line_manager" name="line_manager" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="phone_line_manager">Phone No.</label>
                                                            <input type="tel" class="form-control" id="phone_line_manager" name="phone_line_manager" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="mobile_line_manager">Mobile No.</label>
                                                            <input type="tel" class="form-control" id="mobile_line_manager" name="mobile_line_manager" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="email_line_manager">Email</label>
                                                            <input type="email" class="form-control" id="email_line_manager" name="email_line_manager" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 3 - Hull type and Dimension -->
                                    <div class="tab-pane fade" id="hull" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="hull_type">Hull Type</label>
                                                            <input type="text" class="form-control" id="hull_type" name="hull_type" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="hull_material">Hull Material</label>
                                                            <input type="text" class="form-control" id="hull_material" name="hull_material" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="make_and_model">Make and Model</label>
                                                            <input type="text" class="form-control" id="make_and_model" name="make_and_model" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <div class="form-row">
                                                        <div class="col-md-2 mb-3">
                                                            <label for="loa">LOA (m)</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" step=0.1 class="form-control" id="loa" name="loa" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="measured_length">Measured Length (m)</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" step=0.1 class="form-control" id="measured_length" name="measured_length" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="breadth">Breadth (m)</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" step=0.1 class="form-control" id="breadth" name="breadth" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <div class="form-row">
                                                        <div class="col-md-2 mb-3">
                                                            <label for="depth">Depth (m)</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" step=0.1 class="form-control" id="depth" name="depth" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 mb-3">
                                                            <label for="draft">Draft (m)</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" step=0.1 class="form-control" id="draft" name="draft" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="full_load_displacement">Full Load Displacement (t)</label>
                                                            <input type="number" step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" id="full_load_displacement" name="full_load_displacement" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 4 - Machinery -->
                                    <div class="tab-pane fade" id="machinery" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <h5 class="my-3">Main Engine Details</h5>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>ME No.</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Serial No.</th>
                                                                    <th>Max. Power(KW)</th>
                                                                    <th>RPM</th>
                                                                    <th>Add/Remove</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="table-MainEngine" >
                                                                <tr id="Main1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="main_engine_me_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="main_engine_make_and_model[]"></td>
                                                                    <td><input type="text" class="form-control" name="main_engine_serial_no[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="main_engine_max_power[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="main_engine_rpm[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btnAddMainEngine"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <h5 class="my-3">Gearbox Details</h5>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Gearbox No.</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Serial No.</th>
                                                                    <th>Reduction ratio</th>
                                                                    <th>Use</th>
                                                                    <th>Add/Remove</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-gearbox" >
                                                                <tr id="gearbox1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="gearbox_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="gearbox_make_and_model[]"></td>
                                                                    <td><input type="text" class="form-control" name="gearbox_serial_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="gearbox_reduction_ratio[]"></td>
                                                                    <td><input type="text" class="form-control" name="gearbox_use[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-gearbox"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 3 -->
                                                    <h5 class="my-3">Auxiliary Engine Details</h5>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Aux No.</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Serial No.</th>
                                                                    <th>Max. Power (kW)</th>
                                                                    <th>RPM</th>
                                                                    <th>Location</th>
                                                                    <th>Use</th>
                                                                    <th>Add/Remove</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-auxiliary-engine" >
                                                                <tr id="aux1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="aux_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="aux_make_and_model[]"></td>
                                                                    <td><input type="text" class="form-control" name="aux_serial_no[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="aux_max_power[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="aux_rpm[]"></td>
                                                                    <td><input type="text" class="form-control" name="aux_location[]"></td>
                                                                    <td><input type="text" class="form-control" name="aux_use[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-aux"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 4 -->
                                                    <h5 class="my-3">Generator/Alternator Details</h5>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>No.</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Serial No.</th>
                                                                    <th>AC/DC</th>
                                                                    <th>kVa</th>
                                                                    <th>Volts</th>
                                                                    <th>Phase</th>
                                                                    <th>Frequency (Hz)</th>
                                                                    <th>Driven by</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-generator" >
                                                                <tr id="generator1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="generator_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="generator_make_and_model[]"></td>
                                                                    <td><input type="text" class="form-control" name="generator_serial_no[]"></td>
                                                                    <td><input type="text" class="form-control" name="generator_ac_dc[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_kva[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_volts[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_phase[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_frequency[]"></td>
                                                                    <td><input type="text" class="form-control" name="generator_driven_by[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-generator"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 5 - Propulsion -->
                                    <div class="tab-pane fade" id="propulsion" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="">Type of Propulsion</label>
                                                            <select class="form-control" name="type_propulsion_id" id="type_propulsion_id" onchange="changeTypePropulsion()" required>
                                                                <!-- <option value="0">Select Type</option> -->
                                                                @foreach($typePropulsions as $key => $typePropulsion)
                                                                    <option value="{{$typePropulsion->id}}">{{$typePropulsion->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="">Quantity</label>
                                                            <input type="number" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="propulsion_quantity" />
                                                        </div>
                                                    </div>
                                                    <!-- Row 2.1 -->
                                                    <div class="form-row" id="propeller">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="propeller_make_model">Propeller Make and Model</label>
                                                            <input type="text" class="form-control" id="propeller_make_model" name="propeller_make_model" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="propeller_material">Propeller Material</label>
                                                            <input type="text" class="form-control" id="propeller_material" name="propeller_material" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="propeller_diameter">Propeller Diameter (mm)</label>
                                                            <input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" id="propeller_diameter" name="propeller_diameter" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Row 2.2 -->
                                                    <div class="form-row" id="shaft" style="display: none">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="shaft_make_model">Shaft Make Model</label>
                                                            <input type="text" class="form-control" id="shaft_make_model" name="shaft_make_model" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="shaft_material">Shaft Material</label>
                                                            <input type="text" class="form-control" id="shaft_material" name="shaft_material" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="shaft_diameter">Shaft Diameter (mm)</label>
                                                            <input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" id="shaft_diameter" name="shaft_diameter" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <!-- Row 3 -->
                                                    <div class="form-row" id="water-jet" style="display: none">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="water_jet_make_model">Water Jet Make Model</label>
                                                            <input type="text" class="form-control" id="water_jet_make_model" name="water_jet_make_model" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="water_jet_serial_no">Water Jet Serial No.</label>
                                                            <input type="text" class="form-control" id="water_jet_serial_no" name="water_jet_serial_no" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="water_jet_diameter">Water Jet Impeller Diameter (mm)</label>
                                                            <input type="number" step=0.1 class="form-control" id="water_jet_diameter" name="water_jet_diameter" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                    <!-- Row 4 -->
                                                    <div class="form-row" id="propulsion_description" style="display: none">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="propulsion_description">Description</label>
                                                            <input type="text" class="form-control" id="" name="propulsion_description" />
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>                                                     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 6 - Safety -->
                                    <div class="tab-pane fade" id="safety" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <h4 class="mb-3">Liferafts</h4>
                                                    <div class="form-row form-row-overflow">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr style="font-size: 14px">
                                                                    <th>#</th>
                                                                    <th>No.</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Type</th>
                                                                    <th>No. of Persons</th>
                                                                    <th>Serial No.</th>
                                                                    <th>Expiry Date</th>
                                                                    <th>Hydrostatic Release / Float Free</th>
                                                                    <th>Hydrostatic Release Serial No.</th>
                                                                    <th>Hydrostatic Release Expiry Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-liferafts" >
                                                                <tr id="liferafts1">
                                                                    <td>1</td>
                                                                    <td><input style="width: 80px" type="text" class="form-control" name="liferafts_no[]"></td>
                                                                    <td><input style="width: 120px" type="text" class="form-control" name="liferafts_make_and_model[]"></td>
                                                                    <td><input style="width: 80px" type="text" class="form-control" name="liferafts_type[]"></td>
                                                                    <td><input style="width: 120px" type="text" class="form-control" name="liferafts_no_of_persons[]"></td>
                                                                    <td><input style="width: 100px" type="text" class="form-control" name="liferafts_serial_no[]"></td>
                                                                    <td><input type="date" class="form-control" name="liferafts_expiry_date[]"></td>
                                                                    <td>
                                                                        <select style="width: 200px" name="liferafts_hydrostatic[]" id="" class="form-control input_liferafts_hydrostatic" onchange="changeTypeLifeRaft()">
                                                                            <option value="Hydrostatic Release">Hydrostatic Release</option>
                                                                            <option value="Float Free">Float Free</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><input style="width: 150px" type="text" class="form-control input_liferafts_hydrostatic_serial_no" name="liferafts_hydrostatic_serial_no[]" id=""></td>
                                                                    <td><input type="date" class="form-control input_liferafts_hydrostatic_serial_expiry" name="liferafts_hydrostatic_serial_expiry[]" id=""></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-liferafts"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <h4 class="mb-3">Life jackets</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Make and Model</th>
                                                                    <th>Quantity</th>
                                                                    <th>Serial No.</th>
                                                                    <th>Self-activating Light</th>
                                                                    <th>Self-activating Light Expiry Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-life-jackets" >
                                                                <tr id="lifejackets1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="life_jackets_type[]"></td>
                                                                    <td><input type="text" class="form-control" name="life_jackets_make_and_model[]"></td>
                                                                    <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="life_jackets_quantity[]"></td>
                                                                    <td><input type="text" class="form-control" name="life_jackets_serial_no[]"></td>
                                                                    <td>
                                                                        <select name="life_jackets_seft_activating_light[]" id="" class="form-control input_life_jackets_seft_activating_light" onchange="changeLifeJacket()">
                                                                            <option value="Y">Y</option>
                                                                            <option value="N">N</option>
                                                                        </select>
                                                                    </td>
                                                                    <td><input type="date" class="form-control input_life_jackets_seft_activating_light_expiry_date" name="life_jackets_seft_activating_light_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-life-jackets"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 4 -->
                                                    <h4 class="mb-3">Life buoys</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Quantity</th>
                                                                    <th>Attachment</th>
                                                                    <th>Expiry date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-life-buoys" >
                                                                <tr id="lifebuoys1">
                                                                    <td>1</td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="life_buoys_quantity[]"></td>
                                                                    <td><input type="text" class="form-control" name="life_buoys_attachment[]"></td>
                                                                    <td><input type="date" class="form-control" name="life_buoys_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-life-buoys"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 5 -->
                                                    <h4 class="mb-3">First Air Kit</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Quantity</th> 
                                                                    <th>Expiry date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-first-aid-kit" >
                                                                <tr id="firstaidkit1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="first_aid_kit_type[]"></td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="first_aid_kit_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="first_aid_kit_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-first-aid-kit"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 6 -->
                                                    <h4 class="mb-3">Pyrotechnics</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Quantity</th> 
                                                                    <th>Expiry date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-pyrotechnics" >
                                                                <tr id="pyrotechnics1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="pyrotechnics_type[]"></td>
                                                                    <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="pyrotechnics_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="pyrotechnics_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-pyrotechnics"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 7 -->
                                                    <h4 class="mb-3">Line throwing apparatus</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Quantity</th> 
                                                                    <th>Expiry date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-line-throwing-apparatus" >
                                                                <tr id="linethrowingapparatus1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="line_throwing_apparatus_type[]"></td>
                                                                    <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="line_throwing_apparatus_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="line_throwing_apparatus_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-line-throwing-apparatus"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 8 -->
                                                    <h4 class="mb-3">Breathing apparatus</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Quantity</th> 
                                                                    <th>Expiry date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-breathing-apparatus" >
                                                                <tr id="breathingapparatus1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="breathing_apparatus_type[]"></td>
                                                                    <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="breathing_apparatus_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="breathing_apparatus_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-breathing-apparatus"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 7 - Fire Equipment -->
                                    <div class="tab-pane fade" id="fire" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Make and Model</th> 
                                                                    <th>Capacity</th>
                                                                    <th>Quantity</th>
                                                                    <th>Service Expiry Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-fire-equipment" >
                                                                <tr id="fireequipment1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="fire_equipment_type[]"></td>
                                                                    <td><input type="text" class="form-control" name="fire_equipment_make_and_model[]"></td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="fire_equipment_capacity[]"></td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="fire_equipment_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="fire_equipment_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-fire-equipment"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab 8 - Other -->
                                    <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- Row 1 -->
                                                    <h4 class="mb-3">Radio</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Make and Model</th> 
                                                                    <th>Quantity</th>
                                                                    <th>Last check Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-radio" >
                                                                <tr id="radio1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="radio_type[]"></td>
                                                                    <td><input type="text" class="form-control" name="radio_make_and_model[]"></td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="radio_quantity[]"></td>
                                                                    <td><input type="date" class="form-control" name="radio_last_check_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-radio"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 2 -->
                                                    <h4 class="mb-3">EPIRB</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Make and Model</th> 
                                                                    <th>Serial No.</th>
                                                                    <th>Battery Expiry Date</th>
                                                                    <th>AMSA Reg. Expiry Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-epirp" >
                                                                <tr id="epirp1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="epirp_type[]"></td>
                                                                    <td><input type="text" class="form-control" name="epirp_make_and_model[]"></td>
                                                                    <td><input type="text" class="form-control" name="epirp_serial_no[]"></td>
                                                                    <td><input type="date" class="form-control" name="epirp_battery_expiry_date[]"></td>
                                                                    <td><input type="date" class="form-control" name="epirp_asma_expiry_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-epirp"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Row 3 -->
                                                    <h4 class="mb-3">Compass</h4>
                                                    <div class="form-row">
                                                        <table class="table table-hover border">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Type</th>
                                                                    <th>Make and Model</th> 
                                                                    <th>Card Diameter</th>
                                                                    <th>Last adjustment Date</th>
                                                                    <th>+/-</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tbody-compass" >
                                                                <tr id="compass1">
                                                                    <td>1</td>
                                                                    <td><input type="text" class="form-control" name="compass_type[]"></td>
                                                                    <td><input type="text" class="form-control" name="compass_make_and_model[]"></td>
                                                                    <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="compass_card_diameter[]"></td>
                                                                    <td><input type="date" class="form-control" name="compass_last_adjustment_date[]"></td>
                                                                    <td class="d-flex justify-content-center"><a href="javascript:void(0)" id="btn-add-compass"><i class="fa fa-plus"></i></a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{route('vessel.index')}}" class="btn btn-danger btn-sm">Cancel</a>
                                        <button class="btn btn-primary btn-sm" type="submit">Create</button>
                                    </div>
                                </div>
                            </div>
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

    select.form-control{
        padding: 5px 12.8px !important;
    }

    .btn{
        margin-left: 3px;
    }

    a.btn{
        font-weight: 500;
    }

    .form-row{
        overflow-x: scroll;
    }
</style>
<script>
    //=================Variable=================//

    //Main Engine
    const btnAddMainEngine = document.getElementById("btnAddMainEngine");
    const tableMainEngine = document.getElementById("table-MainEngine");
    var indexMainEngine = 1;

    //Gearbox
    const btnAddGearbox = document.getElementById("btn-add-gearbox");
    const tbodyGearbox = document.getElementById("tbody-gearbox");
    var indexGearbox = 1;;

    //Aux engine
    const btnAddAux = document.getElementById("btn-add-aux");
    const tbodyAux = document.getElementById("tbody-auxiliary-engine");
    var indexAux = 1;

    //Generator
    const btnAddGenerator = document.getElementById("btn-add-generator");
    const tbodyGenerator = document.getElementById("tbody-generator");
    var indexGenerator = 1;

    //Life rafts
    const btnAddLiferafts = document.getElementById("btn-add-liferafts");
    const tbodyLiferafts = document.getElementById("tbody-liferafts");
    var indexLiferafts = 1;

    //Life jacket
    const btnAddLifeJackets = document.getElementById("btn-add-life-jackets");
    const tbodyLifeJackets = document.getElementById("tbody-life-jackets");
    var indexLifeJackets = 1;

    //Lifebuoys
    const btnAddLifebuoys = document.getElementById("btn-add-life-buoys");
    const tbodyLifebuoys = document.getElementById("tbody-life-buoys");
    var indexLifebuoys = 1;

    //FirstAidKit
    const btnAddFirstAidKit = document.getElementById("btn-add-first-aid-kit");
    const tbodyFirstAidKit = document.getElementById("tbody-first-aid-kit");
    var indexFirstAidKit = 1;

    //Pyrotechnics
    const btnAddPyrotechnics = document.getElementById("btn-add-pyrotechnics");
    const tbodyPyrotechnics = document.getElementById("tbody-pyrotechnics");
    var indexPyrotechnics = 1;

    //BreathingApparatus
    const btnAddBreathingApparatus = document.getElementById("btn-add-breathing-apparatus");
    const tbodyBreathingApparatus = document.getElementById("tbody-breathing-apparatus");
    var indexBreathingApparatus = 1;

    //Line Throwing Apparatus
    const btnAddLineThrowingApparatus = document.getElementById("btn-add-line-throwing-apparatus");
    const tbodyLineThrowingApparatus = document.getElementById("tbody-line-throwing-apparatus");
    var indexLineThrowingApparatus = 1;

    //Fire Equipment
    const btnAddFireEquipment = document.getElementById("btn-add-fire-equipment");
    const tbodyFireEquipment = document.getElementById("tbody-fire-equipment");
    var indexFireEquipment = 1;

    //Radio
    const btnAddRadio = document.getElementById("btn-add-radio");
    const tbodyRadio = document.getElementById("tbody-radio");
    var indexRadio = 1;

    //Epirp
    const btnAddEpirp = document.getElementById("btn-add-epirp");
    const tbodyEpirp = document.getElementById("tbody-epirp");
    var indexEpirp = 1;

    //Compass
    const btnAddCompass = document.getElementById("btn-add-compass");
    const tbodyCompass = document.getElementById("tbody-compass");
    var indexCompass = 1;

    //=================Function=================//

    function changeSelectorCerfiticates(){
        const selectedCerfiticates = document.getElementById("selected-cerfiticates");
        const dataCerfiticates = document.querySelectorAll(".data-cerfiticates");

        if(selectedCerfiticates.value === "1"){
            for(let i = 0; i <= dataCerfiticates.length - 1; i++){
                dataCerfiticates[i].style.display = "flex";              
            }
        }
        else{
            for(let i = 0; i <= dataCerfiticates.length - 1; i++){
                dataCerfiticates[i].style.display = "none";
            }
        }

    }

    function numberKeyUp(event){
        if(event.keyCode === 69 || event.keyCode === 109 || event.keyCode === 107 || event.keyCode === 187){
            event.target.value = 0.1;
        }
        if(event.target.value < 0){
            event.target.value = 0.1;
        }
        if(event.target.value < 0){
            event.target.value = 1;
        }
    }
    
    function changeTypePropulsion(){
        const typePropulsionId = document.getElementById("type_propulsion_id");

        const propeller = document.getElementById("propeller");
        const shaft = document.getElementById("shaft");
        const waterJet = document.getElementById("water-jet");

        const propulsionDescription = document.getElementById("propulsion_description");
        
        if(typePropulsionId.value === "1"){           
            propeller.style.display = 'flex';
            shaft.style.display = 'flex';
        }
        else{
            propeller.style.display = 'none';
            shaft.style.display = 'none';
        }

        if(typePropulsionId.value === "2"){           
            waterJet.style.display = 'flex';
        }
        else{
            waterJet.style.display = 'none';
        }

        if(typePropulsionId.value === "5"){           
            propulsionDescription.style.display = 'flex';
        }
        else{
            propulsionDescription.style.display = 'none';
        }

    }

    function changeTypeLifeRaft(){
        const liferaftsHydrostaticFloat = document.querySelectorAll(".input_liferafts_hydrostatic");

        const liferaftsHydrostaticSerialNo = document.querySelectorAll(".input_liferafts_hydrostatic_serial_no");
        const liferaftsHydrostaticReleaseExpiryDate = document.querySelectorAll(".input_liferafts_hydrostatic_serial_expiry");

        for(let i = 0; i <= liferaftsHydrostaticFloat.length - 1; i++){
            if(liferaftsHydrostaticFloat[i].value === 'Hydrostatic Release'){
                liferaftsHydrostaticSerialNo[i].style.display = 'block';
                liferaftsHydrostaticReleaseExpiryDate[i].style.display = 'block';
            }else{
                liferaftsHydrostaticSerialNo[i].style.display = 'none';
                liferaftsHydrostaticReleaseExpiryDate[i].style.display = 'none';

                liferaftsHydrostaticSerialNo[i].value = 'N/a';
                liferaftsHydrostaticReleaseExpiryDate[i].value = 'N/a';
            }
        }

    }

    function changeLifeJacket(){
        const lifejacketSelfActivatingLight = document.querySelectorAll(".input_life_jackets_seft_activating_light");
        const lifejacketSelfActivatingLightExpiryDate = document.querySelectorAll(".input_life_jackets_seft_activating_light_expiry_date");

        for(let i = 0; i <= lifejacketSelfActivatingLight.length - 1; i++){
            if(lifejacketSelfActivatingLight[i].value ==="Y"){
                lifejacketSelfActivatingLightExpiryDate[i].style.display = 'block';
            }else{
                lifejacketSelfActivatingLightExpiryDate[i].style.display = 'none';
                lifejacketSelfActivatingLightExpiryDate[i].value = 'N/a';
            }
        }

    }

    //=================Event=================//

    //=====Main Engine start=====//

    //Insert row
    btnAddMainEngine.addEventListener('click', function(){
        tableMainEngine.insertAdjacentHTML('beforeend', `                                                  
        <tr id="Main${++indexMainEngine}">
            <td class="row-index"><p>${indexMainEngine}</p></td>
            <td><input type="text" class="form-control" name="main_engine_me_no[]"></td>
            <td><input type="text" class="form-control" name="main_engine_make_and_model[]"></td>
            <td><input type="text" class="form-control" name="main_engine_serial_no[]"></td>
            <td><input type="number" step=0.1 class="form-control" name="main_engine_max_power[]"></td>
            <td><input type="number" step=0.1 class="form-control" name="main_engine_rpm[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)" id="btnDeleteMainEngine${indexMainEngine}"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#table-MainEngine").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(4));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `Main${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexMainEngine--;
    });

    //=====Main Engine End=====//


    //=====Gearbox Start=====//

    //Insert new row
    btnAddGearbox.addEventListener('click', function(){
        tbodyGearbox.insertAdjacentHTML('beforeend', `                                                  
        <tr id="gearbox${++indexGearbox}">
            <td class="row-index"><p>${indexGearbox}</p></td>
            <td><input type="text" class="form-control" name="gearbox_no[]"></td>
            <td><input type="text" class="form-control" name="gearbox_make_and_model[]"></td>
            <td><input type="text" class="form-control" name="gearbox_serial_no[]"></td>
            <td><input type="text" class="form-control" name="gearbox_reduction_ratio[]"></td>
            <td><input type="text" class="form-control" name="gearbox_use[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)" id="btn-delete-gearbox"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-gearbox").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(7));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `gearbox${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexGearbox--;
    });

    //=====Gearbox End=====//

    //=====Aux engine Start=====//

    //Insert new row
    btnAddAux.addEventListener('click', function(){
        tbodyAux.insertAdjacentHTML('beforeend', `                                                  
        <tr id="aux${++indexAux}">
            <td class="row-index"><p>${indexAux}</p></td>
            <td><input type="text" class="form-control" name="aux_no[]"></td>
            <td><input type="text" class="form-control" name="aux_make_and_model[]"></td>
            <td><input type="text" class="form-control" name="aux_serial_no[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="aux_max_power[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="aux_rpm[]"></td>
            <td><input type="text" class="form-control" name="aux_location[]"></td>
            <td><input type="text" class="form-control" name="aux_use[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)" id="btn-delete-gearbox"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-auxiliary-engine").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(3));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `aux${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexAux--;
    });

    //=====Aux engine End=====//

    //=====Generator Start=====//

    //Insert new row
    btnAddGenerator.addEventListener('click', function(){
        tbodyGenerator.insertAdjacentHTML('beforeend', `                                                  
        <tr id="generator${++indexGenerator}">
            <td class="row-index"><p>${indexGenerator}</p></td>
            <td><input type="text" class="form-control" name="generator_no[]"></td>
            <td><input type="text" class="form-control" name="generator_make_and_model[]"></td>
            <td><input type="text" class="form-control" name="generator_serial_no[]"></td>
            <td><input type="text" class="form-control" name="generator_ac_dc[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_kva[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_volts[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_phase[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="generator_frequency[]"></td>
            <td><input type="text" class="form-control" name="generator_driven_by[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-generator").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(9));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `generator${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexGenerator--;
    });

    //=====Generator End=====//

    //=====Liferafts Start=====//

    //Insert new row
    btnAddLiferafts.addEventListener('click', function(){
        tbodyLiferafts.insertAdjacentHTML('beforeend', `                                                  
        <tr id="liferafts${++indexLiferafts}">
            <td class="row-index"><p>${indexLiferafts}</p></td>
            <td><input style="width: 80px" type="text" class="form-control" name="liferafts_no[]"></td>
            <td><input style="width: 120px" type="text" class="form-control" name="liferafts_make_and_model[]"></td>
            <td><input style="width: 80px" type="text" class="form-control" name="liferafts_type[]"></td>
            <td><input style="width: 120px" type="text" class="form-control" name="liferafts_no_of_persons[]"></td>
            <td><input style="width: 100px" type="text" class="form-control" name="liferafts_serial_no[]"></td>
            <td><input type="date" class="form-control" name="liferafts_expiry_date[]"></td>
            <td>
                <select style="width: 200px" name="liferafts_hydrostatic[]" id="" class="form-control input_liferafts_hydrostatic" onchange="changeTypeLifeRaft()">
                    <option value="Hydrostatic Release">Hydrostatic Release</option>
                    <option value="Float Free">Float Free</option>
                </select>
            </td>
            <td><input style="width: 150px" type="text" class="form-control input_liferafts_hydrostatic_serial_no" name="liferafts_hydrostatic_serial_no[]" id=""></td>
            <td><input type="date" class="form-control input_liferafts_hydrostatic_serial_expiry" name="liferafts_hydrostatic_serial_expiry[]" id=""></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-liferafts").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(9));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `liferafts${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexLiferafts--;
    });

    //=====Liferafts End=====//

    //=====Lifejackets Start=====//

    //Insert new row
    btnAddLifeJackets.addEventListener('click', function(){
        tbodyLifeJackets.insertAdjacentHTML('beforeend', `                                                  
        <tr id="life-jackets${++indexLifeJackets}">
            <td class="row-index"><p>${indexLifeJackets}</p></td>
            <td><input type="text" class="form-control" name="life_jackets_type[]"></td>
            <td><input type="text" class="form-control" name="life_jackets_make_and_model[]"></td>
            <td><input type="number" step=0.1 min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="life_jackets_quantity[]"></td>
            <td><input type="text" class="form-control" name="life_jackets_serial_no[]"></td>
            <td>
                <select name="life_jackets_seft_activating_light[]" id="" class="form-control input_life_jackets_seft_activating_light" onchange="changeLifeJacket()">
                    <option value="Y">Y</option>
                    <option value="N">N</option>
                </select>
            </td>
            <td><input type="date" class="form-control input_life_jackets_seft_activating_light_expiry_date" name="life_jackets_seft_activating_light_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-life-jackets").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(12));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `life-jackets${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexLifeJackets--;
    });

    //=====Lifejackets End=====//

    //=====Lifebuoys Start=====//

    //Insert new row
    btnAddLifebuoys.addEventListener('click', function(){
        tbodyLifebuoys.insertAdjacentHTML('beforeend', `                                                  
        <tr id="life-buoys${++indexLifebuoys}">
            <td class="row-index"><p>${indexLifebuoys}</p></td>
            <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="life_buoys_quantity[]"></td>
            <td><input type="text" class="form-control" name="life_buoys_attachment[]"></td>
            <td><input type="date" class="form-control" name="life_buoys_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-life-buoys").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(10));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `life-buoys${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexLifebuoys--;
    });

    //=====Lifebuoys End=====//

    //=====first aid kit Start=====//

    //Insert new row
    btnAddFirstAidKit.addEventListener('click', function(){
        tbodyFirstAidKit.insertAdjacentHTML('beforeend', `                                                  
        <tr id="firstaidkit${++indexFirstAidKit}">
            <td class="row-index"><p>${indexFirstAidKit}</p></td>
            <td><input type="text" class="form-control" name="first_aid_kit_type[]"></td>
            <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="first_aid_kit_quantity[]"></td>
            <td><input type="date" class="form-control" name="first_aid_kit_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-first-aid-kit").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(11));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `firstaidkit${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexFirstAidKit--;
    });

    //=====first aid kit End=====//

    //=====Pyrotechnics Start=====//

    //Insert new row
    btnAddPyrotechnics.addEventListener('click', function(){
        tbodyPyrotechnics.insertAdjacentHTML('beforeend', `                                                  
        <tr id="pyrotechnics${++indexPyrotechnics}">
            <td class="row-index"><p>${indexPyrotechnics}</p></td>
            <td><input type="text" class="form-control" name="pyrotechnics_type[]"></td>
            <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="pyrotechnics_quantity[]"></td>
            <td><input type="date" class="form-control" name="pyrotechnics_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-pyrotechnics").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(12));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `pyrotechnics${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexPyrotechnics--;
    });

    //=====Pyrotechnics End=====//

    //=====line throwing apparatus Start=====//

    //Insert new row
    btnAddLineThrowingApparatus.addEventListener('click', function(){
        tbodyLineThrowingApparatus.insertAdjacentHTML('beforeend', `                                                  
        <tr id="linethrowingapparatus${++indexLineThrowingApparatus}">
            <td class="row-index"><p>${indexLineThrowingApparatus}</p></td>
            <td><input type="text" class="form-control" name="line_throwing_apparatus_type[]"></td>
            <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="line_throwing_apparatus_quantity[]"></td>
            <td><input type="date" class="form-control" name="line_throwing_apparatus_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-line-throwing-apparatus").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(21));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `linethrowingapparatus${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexLineThrowingApparatus--;
    });

    //=====line throwing apparatus End=====//
    
    //=====breathing apparatus Start=====//

    //Insert new row
    btnAddBreathingApparatus.addEventListener('click', function(){
        tbodyBreathingApparatus.insertAdjacentHTML('beforeend', `                                                  
        <tr id="breathingapparatus${++indexBreathingApparatus}">
            <td class="row-index"><p>${indexBreathingApparatus}</p></td>
            <td><input type="text" class="form-control" name="breathing_apparatus_type[]"></td>
            <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="breathing_apparatus_quantity[]"></td>
            <td><input type="date" class="form-control" name="breathing_apparatus_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-breathing-apparatus").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(18));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `breathingapparatus${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexBreathingApparatus--;
    });

    //=====breathing apparatus End=====//

    //=====Fire equipment Start=====//

    //Insert new row
    btnAddFireEquipment.addEventListener('click', function(){
        tbodyFireEquipment.insertAdjacentHTML('beforeend', `                                                  
        <tr id="fireequipment${++indexFireEquipment}">
            <td class="row-index"><p>${indexFireEquipment}</p></td>
            <td><input type="text" class="form-control" name="fire_equipment_type[]"></td>
            <td><input type="text" class="form-control" name="fire_equipment_make_and_model[]"></td>
            <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="fire_equipment_capacity[]"></td>
            <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="fire_equipment_quantity[]"></td>
            <td><input type="date" class="form-control" name="fire_equipment_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-fire-equipment").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(13));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `fireequipment${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexFireEquipment--;
    });

    //=====Fire equipment End=====//

    //=====Radio Start=====//

    //Insert new row
    btnAddRadio.addEventListener('click', function(){
        tbodyRadio.insertAdjacentHTML('beforeend', `                                                  
        <tr id="radio${++indexRadio}">
            <td class="row-index"><p>${indexRadio}</p></td>
            <td><input type="text" class="form-control" name="radio_type[]"></td>
            <td><input type="text" class="form-control" name="radio_make_and_model[]"></td>
            <td><input type="number" min=0 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="radio_quantity[]"></td>
            <td><input type="date" class="form-control" name="radio_last_check_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-radio").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(5));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `radio${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexRadio--;
    });

    //=====Radio End=====//

    //=====Epirp Start=====//

    //Insert new row
    btnAddEpirp.addEventListener('click', function(){
        tbodyEpirp.insertAdjacentHTML('beforeend', `                                                  
        <tr id="epirp${++indexEpirp}">
            <td class="row-index"><p>${indexEpirp}</p></td>
            <td><input type="text" class="form-control" name="epirp_type[]"></td>
            <td><input type="text" class="form-control" name="epirp_make_and_model[]"></td>
            <td><input type="text" class="form-control" name="epirp_serial_no[]"></td>
            <td><input type="date" class="form-control" name="epirp_battery_expiry_date[]"></td>
            <td><input type="date" class="form-control" name="epirp_asma_expiry_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //=====Delete row=====//
    $("#tbody-epirp").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(5));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `epirp${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexEpirp--;
    });

    //=====Epirp End=====//

    //=====Compass Start=====//

    //Insert new row
    btnAddCompass.addEventListener('click', function(){
        tbodyCompass.insertAdjacentHTML('beforeend', `                                                  
        <tr id="compass${++indexCompass}">
            <td class="row-index"><p>${indexCompass}</p></td>
            <td><input type="text" class="form-control" name="compass_type[]"></td>
            <td><input type="text" class="form-control" name="compass_make_and_model[]"></td>
            <td><input type="number" min=0 step=0.1 onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="compass_card_diameter[]"></td>
            <td><input type="date" class="form-control" name="compass_last_adjustment_date[]"></td>
            <td class="d-flex justify-content-center remove"><a href="javascript:void(0)"><i class="ti-trash text-danger"></i></a></td>
        </tr>`)
    })

    //Delete row
    $("#tbody-compass").on("click", ".remove", function () {
        var child = $(this).closest("tr").nextAll();

        child.each(function () {
            var id = $(this).attr("id");
            var idx = $(this).children(".row-index").children("p");
            var dig = parseInt(id.substring(7));

            idx.html(`${dig - 1}`);

            $(this).attr("id", `compass${dig - 1}`);
        });

        $(this).closest("tr").remove();

        indexCompass--;
    });

    //=====Compass End=====//

    //===============Default programing===============//
    changeTypePropulsion();
</script>
@endsection
