@extends('layouts.admin') @section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Show Vessel</h4>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner" role="tab" aria-controls="profile" aria-selected="false">Owner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="hull-tab" data-toggle="tab" href="#hull" role="tab" aria-controls="contact" aria-selected="false">Hull type - Dimensions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="machinery-tab" data-toggle="tab" href="#machinery" role="tab" aria-controls="contact" aria-selected="false">Machinery - Electrical</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="propulsion-tab" data-toggle="tab" href="#propulsion" role="tab" aria-controls="contact" aria-selected="false">Propulsion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="safety-tab" data-toggle="tab" href="#safety" role="tab" aria-controls="contact" aria-selected="false">Safety Equipment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="fire-tab" data-toggle="tab" href="#fire" role="tab" aria-controls="contact" aria-selected="false">Fire Equipment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="contact" aria-selected="false">Other</a>
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
                                                        <label for="vessel-name">Vessel name</label>
                                                        <input readonly type="text" class="form-control" id="vessel-name" value="{{$vessel->name}}" name="name" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="vessel-id">Vessel ID</label>
                                                        <input readonly type="text" class="form-control" id="vessel-id" value="{{$vessel->vessel_id}}" name="vessel_id" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="amsa_uvi">AMSA UVI</label>
                                                        <input readonly type="text" class="form-control" id="amsa_uvi" value="{{$vessel->amsa_uvi}}" name="amsa_uvi" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="trailer_reg_no">Trailer Reg No</label>
                                                        <input readonly type="text" class="form-control" id="trailer_reg_no" value="{{$vessel->trailer_reg_no}}" name="trailer_reg_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="home_port">Home port</label>
                                                        <input readonly type="text" class="form-control" id="home_port" value="{{$vessel->home_port}}" name="home_port" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="builder">builder</label>
                                                        <input readonly type="text" class="form-control" id="builder" value="{{$vessel->builder}}" name="builder" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="build_year">Builder year</label>
                                                        <input readonly type="number" class="form-control" id="build_year" value="{{$vessel->build_year}}" name="build_year" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="builders_plate_no">Builder plate NO</label>
                                                        <input readonly type="text" class="form-control" id="builders_plate_no" value="{{$vessel->builders_plate_no}}" name="builders_plate_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="survey_class">Survey class</label>
                                                        <input readonly type="text" class="form-control" id="survey_class" value="{{$vessel->survey_class}}" name="survey_class" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="survey_authority">Survey Authority</label>
                                                        <input readonly type="text" class="form-control" id="survey_authority" value="{{$vessel->survey_authority}}" name="survey_authority" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <div class="form-row">
                                                    <div class="col-md-8 mb-3">
                                                        <label for="note">Note</label>
                                                        <input readonly type="text" class="form-control" id="note" value="{{$vessel->note}}" name="note" />
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="work_order_no">Work order no</label>
                                                        <input readonly type="text" class="form-control" id="work_order_no" value="{{$vessel->work_order_no}}" name="work_order_no" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 4 -->
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="description">Description</label>
                                                        <textarea readonly name="description" id="" rows="10" class="form-control" placeholder="typing content" name="description">{{$vessel->description}}</textarea>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 5 -->
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="no_of_crew">No of crew</label>
                                                        <input readonly type="text" class="form-control" id="no_of_crew" value="{{$vessel->no_of_crew}}" name="no_of_crew" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="no_of_pax">No of pax</label>
                                                        <input readonly type="text" class="form-control" id="no_of_pax" value="{{$vessel->no_of_pax}}" name="no_of_pax" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="no_of_berthed">No of berthed</label>
                                                        <input readonly type="text" class="form-control" id="no_of_berthed" value="{{$vessel->no_of_berthed}}" name="no_of_berthed" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="no_of_unberthed_pax">No of unberthed pax</label>
                                                        <input readonly type="text" class="form-control" id="no_of_unberthed_pax" value="{{$vessel->no_of_unberthed_pax}}" name="no_of_unberthed_pax" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 6 -->
                                                <h5 class="my-3 text-center">Cerfiticates</h5>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="cos_expiry_date">cos expiry date</label>
                                                        @if($vessel->class_cert_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="cos_expiry_date" value="{{$vessel->cos_expiry_date}}" name="cos_expiry_date" />
                                                        @else
                                                            <input readonly type="text" class="form-control" id="cos_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="survey_anniversary_date">survey anniversary date</label>
                                                        @if($vessel->class_cert_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="survey_anniversary_date" value="{{$vessel->survey_anniversary_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="survey_anniversary_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="class_cert_expiry_date">class cert expiry date</label>
                                                        @if($vessel->class_cert_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="class_cert_expiry_date" value="{{$vessel->class_cert_expiry_date}}" />
                                                        @else
                                                            <input readonly type="text" class="form-control" id="class_cert_expiry_date" value="N/a" />
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="coo_expiry_date">coo expiry date</label>
                                                        @if($vessel->coo_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="coo_expiry_date" value="{{$vessel->coo_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="coo_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="trailer_reg_expiry_date">trailer reg expiry date</label>
                                                        @if($vessel->trailer_reg_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="trailer_reg_expiry_date" value="{{$vessel->trailer_reg_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="trailer_reg_expiry_date" value="N/a" />
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="rcd_test_expiry_date">rcd test expiry date</label>
                                                        @if($vessel->rcd_test_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="rcd_test_expiry_date" value="{{$vessel->rcd_test_expiry_date}}" />
                                                        @else
                                                            <input readonly type="text" class="form-control" id="rcd_test_expiry_date" value="N/a" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 7 -->
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="megger_test_expiry_date">megger test expiry date</label>
                                                        @if($vessel->megger_test_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="megger_test_expiry_date" value="{{$vessel->megger_test_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="megger_test_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="ecoc_expiry_date">ecoc expiry date</label>
                                                        @if($vessel->megger_test_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="ecoc_expiry_date" value="{{$vessel->ecoc_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="ecoc_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="gas_coc_expiry_date">gas coc expiry date</label>
                                                        @if($vessel->gas_coc_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="gas_coc_expiry_date" value="{{$vessel->gas_coc_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="gas_coc_expiry_date" value="N/a"/>
                                                        @endif
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
                                                        <label for="owner">Owner</label>
                                                        <input readonly type="text" class="form-control" value="{{$vessel->company->name}}">
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="captain">Captain</label>
                                                        <input readonly type="text" class="form-control" id="captain" value="{{$vessel->captain}}" name="captain" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="phone_captain">Phone captain</label>
                                                        <input readonly type="tel" class="form-control" id="phone_captain" value="{{$vessel->phone_captain}}" name="phone_captain" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="mobile_captain">Mobile captain</label>
                                                        <input readonly type="tel" class="form-control" id="mobile_captain" value="{{$vessel->mobile_captain}}" name="mobile_captain" />
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="email_captain">Captain email</label>
                                                        <input readonly type="email" class="form-control" id="email_captain" value="{{$vessel->email_captain}}" name="email_captain" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="line_manager">Line Manager</label>
                                                        <input readonly type="text" class="form-control" id="line_manager" value="{{$vessel->line_manager}}" name="line_manager" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="phone_line_manager">Phone line manager</label>
                                                        <input readonly type="tel" class="form-control" id="phone_line_manager" value="{{$vessel->phone_line_manager}}" name="phone_line_manager" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="mobile_line_manager">Mobile line manager</label>
                                                        <input readonly type="tel" class="form-control" id="mobile_line_manager" value="{{$vessel->mobile_line_manager}}" name="mobile_line_manager" />
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="email_line_manager">Email line manager </label>
                                                        <input readonly type="email" class="form-control" id="email_line_manager" value="{{$vessel->email_line_manager}}" name="email_line_manager" />
                                                        
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
                                                        <input readonly type="text" class="form-control" id="hull_type" value="{{$vessel->hull_type}}" name="hull_type" />
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="hull_material">Hull material</label>
                                                        <input readonly type="text" class="form-control" id="hull_material" value="{{$vessel->hull_material}}" name="hull_material" />
                                                        
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label for="make_and_model">Make and model</label>
                                                        <input readonly type="text" class="form-control" id="make_and_model" value="{{$vessel->make_and_model}}" name="make_and_model" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="loa">LOA (m)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="loa" value="{{$vessel->loa}}" name="loa" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="measured_length">Measured Length (m)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="measured_length" value="{{$vessel->measured_length}}" name="measured_length" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="breadth">Breadth (m)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="breadth" value="{{$vessel->breadth}}" name="breadth" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="depth">Depth (m)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="depth" value="{{$vessel->depth}}" name="depth" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="draft">Draft (m)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="draft" value="{{$vessel->draft}}" name="draft" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="full_load_displacement">Full Load Displacement (t)</label>
                                                        <input readonly type="number" step="0.1" class="form-control" id="full_load_displacement" value="{{$vessel->full_load_displacement}}" name="full_load_displacement" />
                                                        
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
                                                <h5 class="my-3">Main Engine</h5>

                                                <!-- Row 2 -->
                                                <h5 class="my-3">Gearbox</h5>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="gearbox_no">Gearbox no</label>
                                                        <input readonly type="text" class="form-control" id="gearbox_no" value="{{$vessel->gearbox_no}}" name="gearbox_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="gearbox_make_model">Make and model</label>
                                                        <input readonly type="text" class="form-control" id="gearbox_make_model" value="{{$vessel->gearbox_make_model}}" name="gearbox_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="gearbox_serial_no">Serial no</label>
                                                        <input readonly type="text" class="form-control" id="gearbox_reduction_ratio" value="{{$vessel->gearbox_serial_no}}" name="gearbox_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="gearbox_reduction_ratio">Reduction ratio</label>
                                                        <input readonly type="text" class="form-control" id="gearbox_reduction_ratio" value="{{$vessel->gearbox_reduction_ratio}}" name="gearbox_reduction_ratio" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="gearbox_use">Use</label>
                                                        <input readonly type="text" class="form-control" id="gearbox_use" value="{{$vessel->gearbox_use}}" name="gearbox_use" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <h5 class="my-3">Auxiliary Engine</h5>
                                                <div class="form-row">
                                                    <div class="col-md-1 mb-3">
                                                        <label for="aux_no">Aux No</label>
                                                        <input readonly type="text" class="form-control" id="aux_no" value="{{$vessel->aux_no}}" name="aux_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="aux_make_model">Make and model</label>
                                                        <input readonly type="text" class="form-control" id="aux_make_model" value="{{$vessel->aux_make_model}}" name="aux_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="aux_serial_no">Serial no</label>
                                                        <input readonly type="text" class="form-control" id="aux_serial_no" value="{{$vessel->aux_serial_no}}" name="aux_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="aux_max_power">Max power</label>
                                                        <input readonly type="number" class="form-control" id="aux_max_power" value="{{$vessel->aux_max_power}}" name="aux_max_power" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="aux_rpm">RPM</label>
                                                        <input readonly type="number" class="form-control" id="aux_rpm" value="{{$vessel->aux_rpm}}" name="aux_rpm" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="aux_location">Location</label>
                                                        <input readonly type="text" class="form-control" id="aux_location" value="{{$vessel->aux_location}}" name="aux_location" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="aux_use">Use</label>
                                                        <input readonly type="text" class="form-control" id="aux_use" value="{{$vessel->aux_use}}" name="aux_use" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 4 -->
                                                <h5 class="my-3">Generator - Alternator</h5>
                                                <div class="form-row">
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_no">No</label>
                                                        <input readonly type="text" class="form-control" id="generator_no" value="{{$vessel->generator_no}}" name="generator_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="generator_make_model">Make and model</label>
                                                        <input readonly type="text" class="form-control" id="generator_make_model" value="{{$vessel->generator_make_model}}" name="generator_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="generator_serial_no">Serial no</label>
                                                        <input readonly type="text" class="form-control" id="generator_serial_no" value="{{$vessel->generator_serial_no}}" name="generator_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_ac_dc">AC/DC</label>
                                                        <input readonly type="text" class="form-control" id="generator_ac_dc" value="{{$vessel->generator_ac_dc}}" name="generator_ac_dc" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_kva">kVa</label>
                                                        <input readonly type="number" class="form-control" id="generator_kva" value="{{$vessel->generator_kva}}" name="generator_kva" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_volts">Volts</label>
                                                        <input readonly type="number" class="form-control" id="generator_volts" value="{{$vessel->generator_volts}}" name="generator_volts" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_phase">Phase</label>
                                                        <input readonly type="number" class="form-control" id="generator_phase" value="{{$vessel->generator_phase}}" name="generator_phase" />
                                                        
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <label for="generator_frequency">Frequency</label>
                                                        <input readonly type="number" class="form-control" id="generator_frequency" value="{{$vessel->generator_frequency}}" name="generator_frequency" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="generator_driven_by">Driven by</label>
                                                        <input readonly type="text" class="form-control" id="generator_driven_by" value="{{$vessel->generator_driven_by}}" name="generator_driven_by" />
                                                        
                                                    </div>
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
                                                        <label for="type_propulsion_id">Type of propulsion</label>
                                                        <input readonly type="text" class="form-control" value="{{$vessel->typePropulsion->name}}">
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="propeller_make_model">Propeller make and model</label>
                                                        <input readonly type="text" class="form-control" id="propeller_make_model" value="{{$vessel->propeller_make_model}}" name="propeller_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="propeller_material">Propeller material</label>
                                                        <input readonly type="text" class="form-control" id="propeller_material" value="{{$vessel->propeller_material}}" name="propeller_material" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="propeller_diameter">Propeller diameter</label>
                                                        <input readonly type="number" class="form-control" id="propeller_diameter" value="{{$vessel->propeller_diameter}}" name="propeller_diameter" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="shaft_make_model">Shaft make model</label>
                                                        <input readonly type="text" class="form-control" id="shaft_make_model" value="{{$vessel->shaft_make_model}}" name="shaft_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="shaft_material">Shaft material</label>
                                                        <input readonly type="text" class="form-control" id="shaft_material" value="{{$vessel->shaft_material}}" name="shaft_material" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="shaft_diameter">Shaft diameter</label>
                                                        <input readonly type="number" class="form-control" id="shaft_diameter" value="{{$vessel->shaft_diameter}}" name="shaft_diameter" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="water_jet_make_model">Water jet make model</label>
                                                        <input readonly type="text" class="form-control" id="water_jet_make_model" value="{{$vessel->water_jet_make_model}}" name="water_jet_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="water_jet_serial_no">Water jet serial no</label>
                                                        <input readonly type="text" class="form-control" id="water_jet_serial_no" value="{{$vessel->water_jet_serial_no}}" name="water_jet_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="water_jet_diameter">Water jet diameter</label>
                                                        <input readonly type="number" class="form-control" id="water_jet_diameter" value="{{$vessel->water_jet_diameter}}" name="water_jet_diameter" />
                                                        
                                                    </div>
                                                </div>
                                                <!-- Row 4 -->
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="propulsion_description">Propulsion description</label>
                                                        <input readonly type="text" class="form-control" id="propulsion_description" value="{{$vessel->propulsion_description}}" name="propulsion_description" />
                                                        
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
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_no">No</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_no" value="{{$vessel->liferafts_no}}" name="liferafts_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_make_model" value="{{$vessel->liferafts_make_model}}" name="liferafts_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_type" value="{{$vessel->liferafts_type}}" name="liferafts_type" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_no_of_persons">No. of Persons</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_no_of_persons" value="{{$vessel->liferafts_no_of_persons}}" name="liferafts_no_of_persons" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_serial_no">Serial No.</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_serial_no" value="{{$vessel->liferafts_serial_no}}" name="liferafts_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="liferafts_expiry_date">Expiry date</label>
                                                        @if($vessel->liferafts_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="liferafts_expiry_date" value="{{$vessel->liferafts_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="liferafts_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="liferafts_hydrostatic_float">Hydrostatic Release / Float Free</label>
                                                        <select readonly name="liferafts_hydrostatic_float" id="liferafts_hydrostatic_float" class="form-control" onchange="changeTypeLifeRaft()">
                                                            @if($vessel->liferafts_hydrostatic_float === 'Hydrostatic Release')
                                                            <option value="Hydrostatic Release" selected>Hydrostatic Release</option>
                                                            <option value="Float Free">Float Free</option>
                                                            @else
                                                            <option value="Hydrostatic Release">Hydrostatic Release</option>
                                                            <option value="Float Free" selected>Float Free</option>
                                                            @endif
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="liferafts_hydrostatic_serial_no">Hydrostatic Release Serial No.</label>
                                                        <input readonly type="text" class="form-control" id="liferafts_hydrostatic_serial_no" value="{{$vessel->liferafts_hydrostatic_serial_no}}" name="liferafts_hydrostatic_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="liferafts_hydrostatic_release_expiry_date">Hydrostatic release expiry date</label>
                                                        @if($vessel->liferafts_hydrostatic_release_expiry_date !== null)
                                                            <input readonly
                                                                type="date"
                                                                class="form-control"
                                                                id="liferafts_hydrostatic_release_expiry_date"
                                                                value="{{$vessel->liferafts_hydrostatic_release_expiry_date}}"
                                                            />
                                                        @else
                                                            <input readonly
                                                                type="text"
                                                                class="form-control"
                                                                id="liferafts_hydrostatic_release_expiry_date"
                                                                value="N/a"
                                                            />
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <h4 class="mb-3">Life jackets</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="lifejacket_type" value="{{$vessel->lifejacket_type}}" name="lifejacket_type" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="lifejacket_make_model" value="{{$vessel->lifejacket_make_model}}" name="lifejacket_make_model" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" id="lifejacket_quantity" value="{{$vessel->lifejacket_quantity}}" name="lifejacket_quantity" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_serial_no">Serial No.</label>
                                                        <input readonly type="text" class="form-control" id="lifejacket_serial_no" value="{{$vessel->lifejacket_serial_no}}" name="lifejacket_serial_no" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_self_activating_light">Serial No.</label>
                                                        <select readonly name="lifejacket_self_activating_light" id="lifejacket_self_activating_light" class="form-control" onchange="changeLifeJacket()">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifejacket_self_activating_light_expiry_date">Expiry date</label>
                                                        @if($vessel->lifejacket_self_activating_light_expiry_date !== null)
                                                        <input readonly
                                                            type="date"
                                                            class="form-control"
                                                            id="lifejacket_self_activating_light_expiry_date"
                                                            value="{{$vessel->lifejacket_self_activating_light_expiry_date}}"
                                                        />
                                                        @else
                                                        <input readonly
                                                            type="text"
                                                            class="form-control"
                                                            id="lifejacket_self_activating_light_expiry_date"
                                                            value="N/a"
                                                        />
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 4 -->
                                                <h4 class="mb-3">Life buoys</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifebuoys_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" id="lifebuoys_quantity" value="{{$vessel->lifebuoys_quantity}}" name="lifebuoys_quantity" />
                                                        
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifebuoys_attachment">Attachment</label>
                                                        <select readonly name="lifebuoys_attachment" id="lifebuoys_attachment" class="form-control">
                                                            <option value="Light">Light</option>
                                                            <option value="Light & Smoke">Light & Smoke</option>
                                                            <option value="Line">Line</option>
                                                            <option value="Plain">Plain</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="lifebuoys_expiry_date">Expiry date</label>
                                                        @if($vessel->lifebuoys_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="lifebuoys_expiry_date" value="{{$vessel->lifebuoys_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="lifebuoys_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 5 -->
                                                <h4 class="mb-3">First Air Kit</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="first_aid_kit_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="first_aid_kit_type" value="{{$vessel->first_aid_kit_type}}"/>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="first_aid_kit_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" value="{{$vessel->first_aid_kit_quantity}}" id="first_aid_kit_quantity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="first_aid_expiry_date">Expiry date</label>
                                                        @if($vessel->first_aid_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="first_aid_expiry_date" value="{{$vessel->first_aid_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="first_aid_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 6 -->
                                                <h4 class="mb-3">Pyrotechnics</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="Pyrotechnics_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="Pyrotechnics_type" value="{{$vessel->Pyrotechnics_type}}" name="Pyrotechnics_type" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="Pyrotechnics_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" value="{{$vessel->Pyrotechnics_quantity}}" name="Pyrotechnics_quantity" id="Pyrotechnics_quantity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="Pyrotechnics_expiry_date">Expiry date</label>
                                                        @if($vessel->Pyrotechnics_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="Pyrotechnics_expiry_date" value="{{$vessel->Pyrotechnics_expiry_date}}" />
                                                        @else
                                                            <input readonly type="text" class="form-control" id="Pyrotechnics_expiry_date" value="N/a" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 7 -->
                                                <h4 class="mb-3">Line throwing apparatus</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="line_throwing_apparatus_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="line_throwing_apparatus_type" value="{{$vessel->line_throwing_apparatus_type}}" name="line_throwing_apparatus_type" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="line_throwing_apparatus_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" value="{{$vessel->line_throwing_apparatus_quantity}}" name="line_throwing_apparatus_quantity" id="line_throwing_apparatus_quantity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="line_throwing_apparatus_expiry_date">Expiry date</label>
                                                        @if($vessel->line_throwing_apparatus_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="line_throwing_apparatus_expiry_date" value="{{$vessel->line_throwing_apparatus_expiry_date}}" />
                                                        @else
                                                            <input readonly type="text" class="form-control" id="line_throwing_apparatus_expiry_date" value="N/a" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 8 -->
                                                <h4 class="mb-3">Breathing apparatus</h4>
                                                <div class="form-row">
                                                    <div class="col-md-2 mb-3">
                                                        <label for="breathing_apparatus_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="breathing_apparatus_type" value="{{$vessel->breathing_apparatus_type}}" name="breathing_apparatus_type" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="breathing_apparatus_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" value="{{$vessel->breathing_apparatus_quantity}}" name="breathing_apparatus_quantity" id="breathing_apparatus_quantity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="breathing_apparatus_expiry_date">Expiry date</label>
                                                        @if($vessel->breathing_apparatus_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="breathing_apparatus_expiry_date" value="{{$vessel->breathing_apparatus_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="breathing_apparatus_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
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
                                                    <div class="col-md-3 mb-3">
                                                        <label for="type_fire_equipment_id">Type</label>
                                                        <input readonly type="text" class="form-control" value="{{$vessel->type_fire_equipment}}">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="fire_equipment_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="fire_equipment_make_model" value="{{$vessel->fire_equipment_make_model}}" name="fire_equipment_make_model" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="fire_equipment_capacity">Capacity</label>
                                                        <input readonly type="text" class="form-control" id="fire_equipment_capacity" value="{{$vessel->fire_equipment_capacity}}" name="fire_equipment_capacity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="fire_equipment_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" id="fire_equipment_quantity" value="{{$vessel->fire_equipment_quantity}}" name="fire_equipment_quantity" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="fire_equipment_expiry_date">Expiry date</label>
                                                        @if($vessel->fire_equipment_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="fire_equipment_expiry_date" value="{{$vessel->fire_equipment_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="fire_equipment_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
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
                                                    <div class="col-md-3 mb-3">
                                                        <label for="radio_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="radio_type" value="{{$vessel->radio_type}}" name="radio_type" />
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="radio_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="radio_make_model" value="{{$vessel->radio_make_model}}" name="radio_make_model" />
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="radio_quantity">Quantity</label>
                                                        <input readonly type="number" class="form-control" id="radio_quantity" value="{{$vessel->radio_quantity}}" name="radio_quantity" />
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="radio_last_check_date">Last check date</label>
                                                        @if($vessel->radio_last_check_date !== null)
                                                            <input readonly type="date" class="form-control" id="radio_last_check_date" value="{{$vessel->radio_last_check_date}}"/>
                                                        @else
                                                            <input readonly type="date" class="form-control" id="radio_last_check_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 2 -->
                                                <h4 class="mb-3">EPIRP</h4>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="epirb_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="epirb_type" value="{{$vessel->epirb_type}}" name="epirb_type" />
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="epirb_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="epirb_make_model" value="{{$vessel->epirb_make_model}}" name="epirb_make_model" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="epirb_serial_no">Serial No.</label>
                                                        <input readonly type="number" class="form-control" id="epirb_serial_no" value="{{$vessel->epirb_serial_no}}" name="epirb_serial_no" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="epirb_battery_expiry_date">Battery Expiry Date</label>
                                                        @if($vessel->epirb_battery_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="epirb_battery_expiry_date" value="{{$vessel->epirb_battery_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="epirb_battery_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="epirb_amsa_reg_expiry_date">AMSA Reg. Expiry Date</label>
                                                        @if($vessel->epirb_amsa_reg_expiry_date !== null)
                                                            <input readonly type="date" class="form-control" id="epirb_amsa_reg_expiry_date" value="{{$vessel->epirb_amsa_reg_expiry_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="epirb_amsa_reg_expiry_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Row 3 -->
                                                <h4 class="mb-3">Compass</h4>
                                                <div class="form-row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="compass_type">Type</label>
                                                        <input readonly type="text" class="form-control" id="compass_type" value="{{$vessel->compass_type}}" name="compass_type" />
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="compass_make_model">Make and Model</label>
                                                        <input readonly type="text" class="form-control" id="compass_make_model" value="{{$vessel->compass_make_model}}" name="compass_make_model" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="compass_card_diameter">Card Diameter</label>
                                                        <input readonly type="text" class="form-control" id="compass_card_diameter" value="{{$vessel->compass_card_diameter}}" name="compass_card_diameter" />
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="compass_last_adjustment_date">Last adjustment Date</label>
                                                        @if($vessel->compass_last_adjustment_date !== null)
                                                            <input readonly type="date" class="form-control" id="compass_last_adjustment_date" value="{{$vessel->compass_last_adjustment_date}}"/>
                                                        @else
                                                            <input readonly type="text" class="form-control" id="compass_last_adjustment_date" value="N/a"/>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{route('vessel.index')}}" class="btn btn-primary btn-sm">Back</a>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn {
        font-size: 16px;
        font-weight: 500;
    }
</style>
@endsection
