@extends('layouts.app') @section('content')
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
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
						<div class="needs-validation" novalidate="">
							<div class="card-body">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true">General</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="owner-tab" data-toggle="tab" href="#owner" role="tab" aria-controls="profile" aria-selected="false">Owner</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="hull-tab" data-toggle="tab" href="#hull" role="tab" aria-controls="contact" aria-selected="false">Hull type & Dimensions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="machinery-tab" data-toggle="tab" href="#machinery" role="tab" aria-controls="contact" aria-selected="false">Machinery & Electrical</a>
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
															<label for="vessel-name">Vessel Name</label>
															<input type="text" class="form-control" readonly value="{{$vessel->name}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="vessel-id">Vessel ID</label>
															<input type="text" class="form-control" readonly value="{{$vessel->vessel_id}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="amsa_uvi">AMSA UVI</label>
															<input type="text" class="form-control" readonly value="{{$vessel->amsa_uvi}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="trailer_reg_no">Trailer Reg No.</label>
															<input type="text" class="form-control" readonly value="{{$vessel->trailer_reg_no}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="home_port">Home Port</label>
															<input type="text" class="form-control" readonly value="{{$vessel->home_port}}" />

														</div>
													</div>
													<!-- Row 2 -->
													<div class="form-row">
														<div class="col-md-4 mb-3">
															<label for="builder">Builder</label>
															<input type="text" class="form-control" readonly value="{{$vessel->builder}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="build_year">Buildt year</label>
															<input type="number" class="form-control" readonly value="{{$vessel->build_year}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="builders_plate_no">Buildt plate No</label>
															<input type="text" class="form-control" readonly value="{{$vessel->builders_plate_no}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="survey_class">Survey Class</label>
															<input type="text" class="form-control" readonly value="{{$vessel->survey_class}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="survey_authority">Survey Authority</label>
															<input type="text" class="form-control" readonly value="{{$vessel->survey_authority}}" />

														</div>
													</div>
													<!-- Row 3 -->
													<div class="form-row">
														<div class="col-md-8 mb-3">
															<label for="note">Note</label>
															<input type="text" class="form-control" readonly value="{{$vessel->note}}" />

														</div>
														<div class="col-md-4 mb-3">
															<label for="work_order_no">Work Order No</label>
															<input type="text" class="form-control" readonly value="{{$vessel->work_order_no}}" />

														</div>
													</div>
													<!-- Row 4 -->
													<div class="form-row">
														<div class="col-md-12 mb-3">
															<label for="description">Description and Use of Vessel</label>
															<textarea name="description" id="" rows="10" class="form-control" readonly>{{$vessel->description}}</textarea>

														</div>
													</div>
													<!-- Row 5 -->
													<div class="form-row">
														<div class="col-md-3 mb-3">
															<label for="no_of_crew">No of Crew</label>
															<input type="text" class="form-control" readonly value="{{$vessel->no_of_crew}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="no_of_pax">No of Pax</label>
															<input type="text" class="form-control" readonly value="{{$vessel->no_of_pax}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="no_of_berthed">No of Berthed</label>
															<input type="text" class="form-control" id="no_of_berthed" readonly value="{{$vessel->no_of_berthed}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="no_of_unberthed_pax">No of Unberthed Pax</label>
															<input type="text" class="form-control" readonly value="{{$vessel->no_of_unberthed_pax}}" />

														</div>
													</div>
													<!-- Row 6 -->
													<h5 class="my-3 text-center">Cerfiticates</h5>
													<div class="form-row">
														<div class="col-md-2 mb-3">
															<label for="cos_expiry_date">CoS Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->cos_expiry_date}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="survey_anniversary_date">Survey Anniversary Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->survey_anniversary_date}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="class_cert_expiry_date">Class Cert Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->class_cert_expiry_date}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="coo_expiry_date">CoO Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->coo_expiry_date}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="trailer_reg_expiry_date">Trailer Reg. Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->trailer_reg_expiry_date}}" />

														</div>
													</div>
													<!-- Row 7 -->
													<div class="form-row">
														<div class="col-md-3 mb-3">
															<label for="rcd_test_expiry_date">RCD test Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->rcd_test_expiry_date}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="megger_test_expiry_date">Megger test Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->megger_test_expiry_date}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="ecoc_expiry_date">eCoC Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->ecoc_expiry_date}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="gas_coc_expiry_date">Gas CoC Expiry Date</label>
															<input type="date" class="form-control" readonly value="{{$vessel->gas_coc_expiry_date}}" />

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
															@foreach($companies as $key => $company) 
                                                            @if($vessel->company->id === $company->id)
                                                                <input type="text" class="form-control" id="captain" name="captain" value="{{$company->name}}" readonly />
															@endif 
                                                            @endforeach
														</div>
													</div>
													<!-- Row 2 -->
													<h6>Contact Person Details</h6>
													<div class="form-row">
														<div class="col-md-4 mb-3">
															<label for="captain">Name</label>
															<input type="text" class="form-control" readonly value="{{$vessel->captain}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="phone_captain">Phone No.</label>
															<input type="tel" class="form-control" readonly value="{{$vessel->phone_captain}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="mobile_captain">Mobile No.</label>
															<input type="tel" class="form-control" readonly value="{{$vessel->mobile_captain}}" />

														</div>
														<div class="col-md-4 mb-3">
															<label for="email_captain">Email</label>
															<input type="email" class="form-control" readonly value="{{$vessel->email_captain}}" />

														</div>
													</div>
													<!-- Row 3 -->
													<h6>Line Manager Details</h6>
													<div class="form-row">
														<div class="col-md-4 mb-3">
															<label for="line_manager">Name</label>
															<input type="text" class="form-control" readonly value="{{$vessel->line_manager}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="phone_line_manager">Phone No.</label>
															<input type="tel" class="form-control" readonly value="{{$vessel->phone_line_manager}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="mobile_line_manager">Mobile No.</label>
															<input type="tel" class="form-control" readonly value="{{$vessel->mobile_line_manager}}" />

														</div>
														<div class="col-md-4 mb-3">
															<label for="email_line_manager">Email</label>
															<input type="email" class="form-control" readonly value="{{$vessel->email_line_manager}}" />

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
															<input type="text" class="form-control" readonly value="{{$vessel->hull_type}}" />

														</div>
														<div class="col-md-4 mb-3">
															<label for="hull_material">Hull Material</label>
															<input type="text" class="form-control" readonly value="{{$vessel->hull_material}}" />

														</div>
														<div class="col-md-4 mb-3">
															<label for="make_and_model">Make and Model</label>
															<input type="text" class="form-control" readonly value="{{$vessel->make_and_model}}" />

														</div>
													</div>
													<!-- Row 2 -->
													<div class="form-row">
														<div class="col-md-1 mb-3">
															<label for="loa">LOA (m)</label>
															<input type="number" class="form-control" readonly value="{{$vessel->loa}}" />

														</div>
														<div class="col-md-2 mb-3">
															<label for="measured_length">Measured Length (m)</label>
															<input
																type="number"
                                                                readonly
																class="form-control"
																value="{{$vessel->measured_length}}"
															/>

														</div>
														<div class="col-md-1 mb-3">
															<label for="breadth">Breadth (m)</label>
															<input type="number" readonly class="form-control" value="{{$vessel->breadth}}" />

														</div>
														<div class="col-md-1 mb-3">
															<label for="depth">Depth (m)</label>
															<input type="number" readonly class="form-control" value="{{$vessel->depth}}" />

														</div>
														<div class="col-md-1 mb-3">
															<label for="draft">Draft (m)</label>
															<input type="number" class="form-control" readonly value="{{$vessel->draft}}" />

														</div>
														<div class="col-md-3 mb-3">
															<label for="full_load_displacement">Full Load Displacement (t)</label>
															<input
																type="number"														
																class="form-control"
                                                                readonly
																value="{{$vessel->full_load_displacement}}"
															/>
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
													<div class="form-row">
														<table class="table table-hover border">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Me No</th>
																	<th>Make and model</th>
																	<th>Serial no.</th>
																	<th>Max power</th>
																	<th>RPM</th>
																</tr>
															</thead>
															<tbody id="table-MainEngine">
																@if($mainEnginesCount > 0) 
                                                                @foreach($mainEngines as $key => $mainEngine) 
                                                                @if($key === 0)
																<tr id="Main{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_me_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_serial_no}}" /></td>
																	<td>
																		<input
																			type="number"
																			readonly
																			class="form-control"
																			value="{{$mainEngine->main_engine_max_power}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$mainEngine->main_engine_rpm}}"
																		/>
																	</td>
																	
																</tr>
																@else
																<tr id="Main{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_me_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$mainEngine->main_engine_serial_no}}" /></td>
																	<td>
																		<input
																			type="number"
																			readonly
																			class="form-control"														
																			value="{{$mainEngine->main_engine_max_power}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			readonly
																			class="form-control"
																			value="{{$mainEngine->main_engine_rpm}}"
																		/>
																	</td>
																	
																</tr>
																@endif 
                                                                @endforeach 
                                                                @else
																<tr id="Main1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="number" readonly class="form-control" /></td>																
																</tr>
																@endif
															</tbody>
														</table>
													</div>
													<!-- Row 2 -->
													<h5 class="my-3">Gearbox</h5>
													<div class="form-row">
														<table class="table table-hover border">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Me No</th>
																	<th>Make and model</th>
																	<th>Serial no.</th>
																	<th>Reduction ratio</th>
																	<th>Use</th>
																	
																</tr>
															</thead>
															<tbody id="tbody-gearbox">
																@if($gearboxsCount > 0) 
                                                                @foreach($gearboxs as $key => $gearbox) 
                                                                @if($key === 0)
																<tr id="gearbox{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																</tr>
																@else
																<tr id="gearbox{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$gearbox->gearbox_no}}" /></td>
																	
																</tr>
																@endif 
                                                                @endforeach 
                                                                @else
																<tr id="gearbox1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	
																</tr>
																@endif
															</tbody>
														</table>
													</div>
													<!-- Row 3 -->
													<h5 class="my-3">Auxiliary Engine</h5>
													<div class="form-row">
														<table class="table table-hover border">
															<thead>
																<tr>
																	<th>#</th>
																	<th>Aux No</th>
																	<th>Make and model</th>
																	<th>Serial no</th>
																	<th>Max power (kW)</th>
																	<th>RPM</th>
																	<th>Location</th>
																	<th>Use</th>
																	
																</tr>
															</thead>
															<tbody id="tbody-auxiliary-engine">
																@if($auxiliaryEnginesCount > 0) 
                                                                @foreach($auxiliaryEngines as $key => $auxiliaryEngine) 
                                                                @if($key === 0)
																<tr id="aux{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_serial_no}}" /></td>
																	<td>
																		<input
																			type="number"
																			readonly
																			class="form-control"
																			value="{{$auxiliaryEngine->aux_max_power}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$auxiliaryEngine->aux_rpm}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_location}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_use}}" /></td>
																	
																</tr>
																@else
																<tr id="aux{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_serial_no}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$auxiliaryEngine->aux_max_power}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$auxiliaryEngine->aux_rpm}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_location}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$auxiliaryEngine->aux_use}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="aux1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>																	
																</tr>
																@endif
															</tbody>
														</table>
													</div>
													<!-- Row 4 -->
													<h5 class="my-3">Generator - Alternator</h5>
													<div class="form-row">
														<table class="table table-hover border">
															<thead>
																<tr>
																	<th>#</th>
																	<th>No.</th>
																	<th>Make and model</th>
																	<th>Serial no.</th>
																	<th>AC/DC</th>
																	<th>kVa</th>
																	<th>Volts</th>
																	<th>Phase</th>
																	<th>Frequency (Hz)</th>
																	<th>Driven by</th>
																	
																</tr>
															</thead>
															<tbody id="tbody-generator">
																@if($generatorsCount > 0) 
                                                                @foreach($generators as $key => $generator) 
                                                                @if($key === 0)
																<tr id="generator{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_serial_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_ac_dc}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_kva}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_volts}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_phase}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_frequency}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_driven_by}}" /></td>																	
																</tr>
																@else
																<tr id="generator{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_serial_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_ac_dc}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_kva}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_volts}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_phase}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$generator->generator_frequency}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$generator->generator_driven_by}}" /></td>
																</tr>
																@endif @endforeach @else
																<tr id="generator1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
															<label for="type_propulsion_id">Type of propulsion</label>
															<select class="form-control" id="type_propulsion_id" readonly>
																<!-- <option value="0">Select type</option> -->
																@if($propulsion !== null) @foreach($typePropulsions as $key => $typePropulsion) @if($propulsion->type_propulsion_id == $typePropulsion->id)
																<option value="{{$typePropulsion->id}}" selected>{{$typePropulsion->name}}</option>
																@else
																<option value="{{$typePropulsion->id}}">{{$typePropulsion->name}}</option>
																@endif @endforeach @else @foreach($typePropulsions as $key => $typePropulsion)
																<option value="{{$typePropulsion->id}}">{{$typePropulsion->name}}</option>
																@endforeach @endif
															</select>

														</div>
													</div>
													<!-- Row 2.1 -->
													<div class="form-row" id="propeller">
														<div class="col-md-4 mb-3">
															<label for="propeller_make_model">Propeller Make and Model</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="propeller_make_model" readonly value="{{$propulsion->propeller_make_model}}" />
															@else
															<input type="text" class="form-control" id="propeller_make_model" readonly />
															@endif

														</div>
														<div class="col-md-4 mb-3">
															<label for="propeller_material">Propeller Material</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="propeller_material" readonly value="{{$propulsion->propeller_material}}" />
															@else
															<input type="text" class="form-control" id="propeller_material" readonly />
															@endif

														</div>
														<div class="col-md-4 mb-3">
															<label for="propeller_diameter">Propeller Diameter</label>
															@if($propulsion !== null)
															<input
																type="number"
																class="form-control"
																id="propeller_diameter"
																readonly
																value="{{$propulsion->propeller_diameter}}"
															/>
															@else
															<input type="number"  class="form-control" id="propeller_diameter" readonly />
															@endif

														</div>
													</div>
													<!-- Row 2.2 -->
													<div class="form-row" id="propeller">
														<div class="col-md-4 mb-3">
															<label for="shaft_make_model">Shaft Make Model</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="shaft_make_model" readonly value="{{$propulsion->shaft_make_model}}" />
															@else
															<input type="text" class="form-control" id="shaft_make_model" readonly />
															@endif

														</div>
														<div class="col-md-4 mb-3">
															<label for="shaft_material">Shaft Material</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="shaft_material" readonly value="{{$propulsion->shaft_material}}" />
															@else
															<input type="text" class="form-control" id="shaft_material" readonly />
															@endif

														</div>
														<div class="col-md-4 mb-3">
															<label for="shaft_diameter">Shaft Diameter</label>
															@if($propulsion !== null)
															<input
																type="number"
																class="form-control"
																id="shaft_diameter"
																readonly
																value="{{$propulsion->shaft_diameter}}"
															/>
															@else
															<input type="number"  class="form-control" id="shaft_diameter" readonly />
															@endif

														</div>
													</div>
													<!-- Row 3 -->
													<div class="form-row" id="water-jet">
														<div class="col-md-2 mb-3">
															<label for="water_jet_make_model">Water Jet Make Model</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="water_jet_make_model" readonly value="{{$propulsion->water_jet_make_model}}" />
															@else
															<input type="text" class="form-control" id="water_jet_make_model" readonly />
															@endif

														</div>
														<div class="col-md-2 mb-3">
															<label for="water_jet_serial_no">Water Jet Serial No.</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="water_jet_serial_no" readonly value="{{$propulsion->water_jet_serial_no}}" />
															@else
															<input type="text" class="form-control" id="water_jet_serial_no" readonly />
															@endif

														</div>
														<div class="col-md-2 mb-3">
															<label for="water_jet_diameter">Water Jet Diameter</label>
															@if($propulsion !== null)
															<input type="number" step="0.1" class="form-control" id="water_jet_diameter" readonly value="{{$propulsion->water_jet_diameter}}" />
															@else
															<input type="number" step="0.1" class="form-control" id="water_jet_diameter" readonly />
															@endif

														</div>
													</div>
													<!-- Row 4 -->
													<div class="form-row" id="description">
														<div class="col-md-12 mb-3">
															<label for="propulsion_description">Propulsion Description</label>
															@if($propulsion !== null)
															<input type="text" class="form-control" id="propulsion_description" readonly value="{{$propulsion->propulsion_description}}" />
															@else
															<input type="text" class="form-control" id="propulsion_description" readonly />
															@endif

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
																	<th>Make and model</th>
																	<th>Type</th>
																	<th>No. of Persons</th>
																	<th>Serial No.</th>
																	<th>Expiry Date</th>
																	<th>Hydrostatic Release / Float Free</th>
																	<th>Hydrostatic Release Serial No.</th>
																	<th>Hydrostatic Release Expiry Date</th>
																	
																</tr>
															</thead>
															<tbody id="tbody-liferafts">
																@if($liferaftssCount > 0) @foreach($liferaftss as $key => $liferafts) @if($key === 0)
																<tr id="liferafts{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input style="width: 80px" type="text" class="form-control" readonly value="{{$liferafts->liferafts_no}}" /></td>
																	<td><input style="width: 120px" type="text" class="form-control" readonly value="{{$liferafts->liferafts_make_and_model}}" /></td>
																	<td><input style="width: 80px" type="text" class="form-control" readonly value="{{$liferafts->liferafts_type}}" /></td>
																	<td><input style="width: 120px" type="text" class="form-control" readonly value="{{$liferafts->liferafts_no_of_persons}}" /></td>
																	<td><input style="width: 100px" type="text" class="form-control" readonly value="{{$liferafts->liferafts_serial_no}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$liferafts->liferafts_expiry_date}}" /></td>
																	<td>
																		<select style="width: 200px" readonly id="" class="form-control input_liferafts_hydrostatic" onchange="changeTypeLifeRaft()">
																			@if($liferafts->liferafts_hydrostatic === 'Hydrostatic Release')
																			<option value="Hydrostatic Release" selected>Hydrostatic Release</option>
																			<option value="Float Free">Float Free</option>
																			@else
																			<option value="Hydrostatic Release">Hydrostatic Release</option>
																			<option value="Float Free" selected>Float Free</option>
																			@endif
																		</select>
																	</td>
																	<td>
																		<input
																			style="width: 150px"
																			type="text"
																			class="form-control input_liferafts_hydrostatic_serial_no"
																			readonly
																			value="{{$liferafts->liferafts_hydrostatic_serial_no}}"
																			id=""
																		/>
																	</td>
																	<td>
																		<input
																			type="date"
																			class="form-control input_liferafts_hydrostatic_serial_expiry"
																			readonly
																			value="{{$liferafts->liferafts_hydrostatic_serial_expiry}}"
																			id=""
																		/>
																	</td>
																	
																</tr>
																@else
																<tr id="liferafts{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$liferafts->liferafts_no}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$liferafts->liferafts_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$liferafts->liferafts_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$liferafts->liferafts_no_of_persons}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$liferafts->liferafts_serial_no}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$liferafts->liferafts_expiry_date}}" /></td>
																	<td>
																		<select readonly id="" class="form-control input_liferafts_hydrostatic" onchange="changeTypeLifeRaft()">
																			@if($liferafts->liferafts_hydrostatic === 'Hydrostatic Release')
																			<option value="Hydrostatic Release" selected>Hydrostatic Release</option>
																			<option value="Float Free">Float Free</option>
																			@else
																			<option value="Hydrostatic Release">Hydrostatic Release</option>
																			<option value="Float Free" selected>Float Free</option>
																			@endif
																		</select>
																	</td>
																	<td>
																		<input
																			type="text"
																			class="form-control input_liferafts_hydrostatic_serial_no"
																			readonly
																			value="{{$liferafts->liferafts_hydrostatic_serial_no}}"
																			id=""
																		/>
																	</td>
																	<td>
																		<input
																			type="date"
																			class="form-control input_liferafts_hydrostatic_serial_expiry"
																			readonly
																			value="{{$liferafts->liferafts_hydrostatic_serial_expiry}}"
																			id=""
																		/>
																	</td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="liferafts1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	<td>
																		<select readonly id="" class="form-control input_liferafts_hydrostatic">
																			<option value="Hydrostatic Release">Hydrostatic Release</option>
																			<option value="Float Free">Float Free</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control input_liferafts_hydrostatic_serial_no" readonly id="" /></td>
																	<td><input type="date" class="form-control input_liferafts_hydrostatic_serial_expiry" readonly id="" /></td>
																	
																</tr>
																@endif
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
																	<th>Make and model</th>
																	<th>Quantity</th>
																	<th>Serial No.</th>
																	<th>Self-activating Light</th>
																	<th>Self-activating Light Expiry Date</th>
																	
																</tr>
															</thead>
															<tbody id="tbody-life-jackets">
																@if($lifeJacketssCount > 0) @foreach($lifeJacketss as $key => $lifeJackets) @if($key === 0)
																<tr id="lifejackets{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lifeJackets->life_jackets_quantity}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_serial_no}}" /></td>
																	<td>
																		<select readonly id="" class="form-control input_life_jackets_seft_activating_light" onchange="changeLifeJacket()">
																			@if($lifeJackets->life_jackets_seft_activating_light === 'Y')
																			<option value="Y" selected>Y</option>
																			<option value="N">N</option>
																			@else
																			<option value="Y">Y</option>
																			<option value="N" selected>N</option>
																			@endif
																		</select>
																	</td>
																	<td>
																		<input
																			type="date"
																			class="form-control input_life_jackets_seft_activating_light_expiry_date"
																			readonly
																			value="{{$lifeJackets->life_jackets_seft_activating_light_expiry_date}}"
																		/>
																	</td>
																	
																</tr>
																@else
																<tr id="lifejackets{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lifeJackets->life_jackets_quantity}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeJackets->life_jackets_serial_no}}" /></td>
																	<td>
																		<select readonly id="" class="form-control input_life_jackets_seft_activating_light" onchange="changeLifeJacket()">
																			@if($lifeJackets->life_jackets_seft_activating_light === 'Y')
																			<option value="Y" selected>Y</option>
																			<option value="N">N</option>
																			@else
																			<option value="Y">Y</option>
																			<option value="N" selected>N</option>
																			@endif
																		</select>
																	</td>
																	<td>
																		<input
																			type="date"
																			class="form-control input_life_jackets_seft_activating_light_expiry_date"
																			readonly
																			value="{{$lifeJackets->life_jackets_seft_activating_light_expiry_date}}"
																		/>
																	</td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="lifejackets1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number"  class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td>
																		<select readonly id="" class="form-control input_life_jackets_seft_activating_light">
																			<option value="Y">Y</option>
																			<option value="N">N</option>
																		</select>
																	</td>
																	<td><input type="date" class="form-control input_life_jackets_seft_activating_light_expiry_date" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-life-buoys">
																@if($lifeBuoyssCount > 0) @foreach($lifeBuoyss as $key => $lifeBuoys) @if($key === 0)
																<tr id="lifebuoys{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lifeBuoys->life_buoys_quantity}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeBuoys->life_buoys_attachment}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$lifeBuoys->life_buoys_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="lifebuoys{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lifeBuoys->life_buoys_quantity}}"
																		/>
																	</td>
																	<td><input type="text" class="form-control" readonly value="{{$lifeBuoys->life_buoys_attachment}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$lifeBuoys->life_buoys_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="lifebuoys1">
																	<td>1</td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-first-aid-kit">
																@if($firstAidKitsCount > 0) @foreach($firstAidKits as $key => $firstAidKit) @if($key === 0)
																<tr id="firstaidkit{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$firstAidKit->first_aid_kit_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$firstAidKit->first_aid_kit_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$firstAidKit->first_aid_kit_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="firstaidkit{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$firstAidKit->first_aid_kit_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$firstAidKit->first_aid_kit_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$firstAidKit->first_aid_kit_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="firstaidkit1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-pyrotechnics">
																@if($pyrotechnicssCount > 0) @foreach($pyrotechnicss as $key => $pyrotechnics) @if($key === 0)
																<tr id="pyrotechnics{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$pyrotechnics->pyrotechnics_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$pyrotechnics->pyrotechnics_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$pyrotechnics->pyrotechnics_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="pyrotechnics{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$pyrotechnics->pyrotechnics_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$pyrotechnics->pyrotechnics_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$pyrotechnics->pyrotechnics_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="pyrotechnics1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-line-throwing-apparatus">
																@if($lineThrowingsCount > 0) @foreach($lineThrowings as $key => $lineThrowing) @if($key === 0)
																<tr id="linethrowingapparatus{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$lineThrowing->line_throwing_apparatus_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lineThrowing->line_throwing_apparatus_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$lineThrowing->line_throwing_apparatus_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="linethrowingapparatus{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$lineThrowing->line_throwing_apparatus_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$lineThrowing->line_throwing_apparatus_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$lineThrowing->line_throwing_apparatus_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="linethrowingapparatus1">
																	<td>1</td>
																	<td><input type="text" class="form-control" /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-breathing-apparatus">
																@if($breathingsCount > 0) @foreach($breathings as $key => $breathing) @if($key === 0)
																<tr id="breathingapparatus{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$breathing->breathing_apparatus_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$breathing->breathing_apparatus_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$breathing->breathing_apparatus_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="breathingapparatus{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" name="breathing_apparatus_type[]" value="{{$breathing->breathing_apparatus_type}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$breathing->breathing_apparatus_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$breathing->breathing_apparatus_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="breathingapparatus1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-fire-equipment">
																@if($fireEquipmentsCount > 0 ) @foreach($fireEquipments as $key => $fireEquipment) @if($key === 0)
																<tr id="fireequipment{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$fireEquipment->fire_equipment_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$fireEquipment->fire_equipment_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$fireEquipment->fire_equipment_capacity}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$fireEquipment->fire_equipment_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$fireEquipment->fire_equipment_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="fireequipment{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$fireEquipment->fire_equipment_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$fireEquipment->fire_equipment_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$fireEquipment->fire_equipment_capacity}}"
																		/>
																	</td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$fireEquipment->fire_equipment_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" name="fire_equipment_expiry_date[]" value="{{$fireEquipment->fire_equipment_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="fireequipment1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="number" readonly class="form-control" /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-radio">
																@if($radiosCount > 0) @foreach($radios as $key => $radio) @if($key === 0)
																<tr id="radio{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$radio->radio_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$radio->radio_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$radio->radio_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$radio->radio_last_check_date}}" /></td>
																	
																</tr>
																@else
																<tr id="radio{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$radio->radio_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$radio->radio_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$radio->radio_quantity}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$radio->radio_last_check_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="radio1">
																	<td>1</td>
																	<td><input type="text" class="form-control" name="radio_type[]" /></td>
																	<td><input type="text" class="form-control" name="radio_make_and_model[]" /></td>
																	<td><input type="number" min="0" step="0.1" onkeyup="numberKeyUp(event)" onchange="numberKeyUp(event)" class="form-control" name="radio_quantity[]" /></td>
																	<td><input type="date" class="form-control" name="radio_last_check_date[]" /></td>
																	
																</tr>
																@endif
															</tbody>
														</table>
													</div>
													<!-- Row 2 -->
													<h4 class="mb-3">EPIRP</h4>
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
																	
																</tr>
															</thead>
															<tbody id="tbody-epirp">
																@if($epirpsCount > 0) @foreach($epirps as $key => $epirp) @if($key === 0)
																<tr id="epirp{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" value="{{$epirp->epirp_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$epirp->epirp_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$epirp->epirp_serial_no}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$epirp->epirp_battery_expiry_date}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$epirp->epirp_asma_expiry_date}}" /></td>
																	
																</tr>
																@else
																<tr id="epirp{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$epirp->epirp_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$epirp->epirp_make_and_model}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$epirp->epirp_serial_no}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$epirp->epirp_battery_expiry_date}}" /></td>
																	<td><input type="date" class="form-control" readonly value="{{$epirp->epirp_asma_expiry_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="epirp1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
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
																	
																</tr>
															</thead>
															<tbody id="tbody-compass">
																@if($compasssCount > 0) @foreach($compasss as $key => $compass) @if($key === 0)
																<tr id="compass{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$compass->compass_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$compass->compass_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"
																			class="form-control"
																			readonly
																			value="{{$compass->compass_card_diameter}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$compass->compass_last_adjustment_date}}" /></td>
																	
																</tr>
																@else
																<tr id="compass{{$key}}">
																	<td>{{$key + 1}}</td>
																	<td><input type="text" class="form-control" readonly value="{{$compass->compass_type}}" /></td>
																	<td><input type="text" class="form-control" readonly value="{{$compass->compass_make_and_model}}" /></td>
																	<td>
																		<input
																			type="number"												
																			class="form-control"
																			readonly
																			value="{{$compass->compass_card_diameter}}"
																		/>
																	</td>
																	<td><input type="date" class="form-control" readonly value="{{$compass->compass_last_adjustment_date}}" /></td>
																	
																</tr>
																@endif @endforeach @else
																<tr id="compass1">
																	<td>1</td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="text" class="form-control" readonly /></td>
																	<td><input type="number" class="form-control" readonly /></td>
																	<td><input type="date" class="form-control" readonly /></td>
																	
																</tr>
																@endif
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<a href="{{route('search')}}" class="btn btn-primary btn-sm">Back</a>
									</div>
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
    .form-row{
        overflow-x: scroll;
    }
</style>
@endsection
