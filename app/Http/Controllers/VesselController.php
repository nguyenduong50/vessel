<?php

namespace App\Http\Controllers;

use App\Models\Vessel;
use App\Models\Company;
use App\Models\MainEngine;
use App\Models\Gearbox;
use App\Models\AuxiliaryEngine;
use App\Models\Generator;
use App\Models\Liferafts;
use App\Models\LifeJackets;
use App\Models\LifeBuoys;
use App\Models\FirstAidKit;
use App\Models\Pyrotechnics;
use App\Models\LineThrowing;
use App\Models\Breathing;
use App\Models\FireEquipment;
use App\Models\Radio;
use App\Models\EPIRP;
use App\Models\Compass;
use App\Models\TypePropulsion;
use App\Models\Propulsion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Jobs\SendEmailVessel;

class VesselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = Carbon::now();
        $now = Carbon::now()->toDateString();
        $now_sub_90 = Carbon::parse($date)->subDays(90)->toDateString();

        $vessels = Vessel::orderBy('id', 'ASC')-> get();
        return view('admin.vessel.index', compact(['vessels', 'now', 'now_sub_90']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->roles === 'admin'){
            $companies = Company::where('id', '>', "1")->orderBy('id', 'ASC')->get();
            $typePropulsions = TypePropulsion::orderBy('id', 'ASC')->get();
            
            return view('admin.vessel.create', compact(['companies', 'typePropulsions']));
        }
        else{
            return redirect('vessel')->with('error', "You don't have jurisdiction create");
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate data request
        $dataVessel = $request->validate([
            'name' => 'required',
            'type_propulsion_id' => ['required', Rule::notIn(['0'])],
        ]);

        //Save data Vessel
        $vessel = new Vessel;
        $vessel->fill($request->all());        
        $vessel->save();

        //Get vessel_index
        $vessel_index = $vessel->id; 

        //Save Main Engine
        if($request->main_engine_me_no[0] !== null){
            foreach($request->main_engine_me_no as $key => $main_engine_me_nos){
                $mainEngine['vessel_index'] = $vessel_index;
                $mainEngine['main_engine_me_no'] = $main_engine_me_nos;
                $mainEngine['main_engine_make_and_model'] = $request->main_engine_make_and_model[$key];
                $mainEngine['main_engine_serial_no'] = $request->main_engine_serial_no[$key];
                $mainEngine['main_engine_max_power'] = $request->main_engine_max_power[$key];
                $mainEngine['main_engine_rpm'] = $request->main_engine_rpm[$key];
    
                MainEngine::create($mainEngine);
            }
        }

        //Save Gearbox
        if($request->gearbox_no[0] !== null){
            foreach($request->gearbox_no as $key => $gearbox_nos){
                $gearbox['vessel_index'] = $vessel_index;
                $gearbox['gearbox_no'] = $gearbox_nos;
                $gearbox['gearbox_make_and_model'] = $request->gearbox_make_and_model[$key];
                $gearbox['gearbox_serial_no'] = $request->gearbox_serial_no[$key];
                $gearbox['gearbox_reduction_ratio'] = $request->gearbox_reduction_ratio[$key];
                $gearbox['gearbox_use'] = $request->gearbox_use[$key];
    
                Gearbox::create($gearbox);
            }
        }

        //Save Auxiliary Engine
        if($request->aux_no[0] !== null){
            foreach($request->aux_no as $key => $aux_nos){
                $auxiliaryEngine['vessel_index'] = $vessel_index;
                $auxiliaryEngine['aux_no'] = $aux_nos;
                $auxiliaryEngine['aux_make_and_model'] = $request->aux_make_and_model[$key];
                $auxiliaryEngine['aux_serial_no'] = $request->aux_serial_no[$key];
                $auxiliaryEngine['aux_max_power'] = $request->aux_max_power[$key];
                $auxiliaryEngine['aux_rpm'] = $request->aux_rpm[$key];
                $auxiliaryEngine['aux_location'] = $request->aux_location[$key];
                $auxiliaryEngine['aux_use'] = $request->aux_use[$key];
    
                AuxiliaryEngine::create($auxiliaryEngine);
            }
        }

        //Save Generator
        if($request->generator_no[0] !== null){
            foreach($request->generator_no as $key => $generator_nos){
                $generator['vessel_index'] = $vessel_index;
                $generator['generator_no'] = $generator_nos;
                $generator['generator_make_and_model'] = $request->generator_make_and_model[$key];
                $generator['generator_serial_no'] = $request->generator_serial_no[$key];
                $generator['generator_ac_dc'] = $request->generator_ac_dc[$key];
                $generator['generator_kva'] = $request->generator_kva[$key];
                $generator['generator_volts'] = $request->generator_volts[$key];
                $generator['generator_phase'] = $request->generator_phase[$key];
                $generator['generator_frequency'] = $request->generator_frequency[$key];
                $generator['generator_driven_by'] = $request->generator_driven_by[$key];
    
                Generator::create($generator);
            }
        }

        //Save Propulsion
        $propulsion = new Propulsion;
        $propulsion->vessel_index = $vessel_index;
        $propulsion->type_propulsion_id = $request->type_propulsion_id;
        $propulsion->propulsion_quantity = $request->propulsion_quantity;
        $propulsion->propeller_make_model = $request->propeller_make_model;
        $propulsion->propeller_material = $request->propeller_material;
        $propulsion->propeller_diameter = $request->propeller_diameter;
        $propulsion->shaft_make_model = $request->shaft_make_model;
        $propulsion->shaft_material = $request->shaft_material;
        $propulsion->shaft_diameter = $request->shaft_diameter;
        $propulsion->water_jet_make_model = $request->water_jet_make_model;
        $propulsion->water_jet_serial_no = $request->water_jet_serial_no;
        $propulsion->water_jet_diameter = $request->water_jet_diameter;
        $propulsion->propulsion_description = $request->propulsion_description;
        $propulsion->save();

        //Save Liferafts
        if($request->liferafts_no[0] !== null){
            foreach($request->liferafts_no as $key => $liferafts_nos){
                $liferafts['vessel_index'] = $vessel_index;
                $liferafts['liferafts_no'] = $liferafts_nos;
                $liferafts['liferafts_make_and_model'] = $request->liferafts_make_and_model[$key];
                $liferafts['liferafts_type'] = $request->liferafts_type[$key];
                $liferafts['liferafts_no_of_persons'] = $request->liferafts_no_of_persons[$key];
                $liferafts['liferafts_serial_no'] = $request->liferafts_serial_no[$key];
                $liferafts['liferafts_expiry_date'] = $request->liferafts_expiry_date[$key];
                $liferafts['liferafts_hydrostatic'] = $request->liferafts_hydrostatic[$key];
                $liferafts['liferafts_hydrostatic_serial_no'] = $request->liferafts_hydrostatic_serial_no[$key];
                $liferafts['liferafts_hydrostatic_serial_expiry'] = $request->liferafts_hydrostatic_serial_expiry[$key];
    
                Liferafts::create($liferafts);
            }
        }

        //Save Life Jacket
        if($request->life_jackets_type[0] !== null){
            foreach($request->life_jackets_type as $key => $life_jackets_types){
                $lifeJackets['vessel_index'] = $vessel_index;
                $lifeJackets['life_jackets_type'] = $life_jackets_types;
                $lifeJackets['life_jackets_make_and_model'] = $request->life_jackets_make_and_model[$key];
                $lifeJackets['life_jackets_quantity'] = $request->life_jackets_quantity[$key];
                $lifeJackets['life_jackets_serial_no'] = $request->life_jackets_serial_no[$key];
                $lifeJackets['life_jackets_seft_activating_light'] = $request->life_jackets_seft_activating_light[$key];
                $lifeJackets['life_jackets_seft_activating_light_expiry_date'] = $request->life_jackets_seft_activating_light_expiry_date[$key];
    
                LifeJackets::create($lifeJackets);
            }
        }

        //Save Life Buoys
        if($request->life_buoys_quantity[0] !== null){
            foreach($request->life_buoys_quantity as $key => $life_buoys_quantitys){
                $lifeBuoys['vessel_index'] = $vessel_index;
                $lifeBuoys['life_buoys_quantity'] = $life_buoys_quantitys;
                $lifeBuoys['life_buoys_attachment'] = $request->life_buoys_attachment[$key];
                $lifeBuoys['life_buoys_expiry_date'] = $request->life_buoys_expiry_date[$key];

                LifeBuoys::create($lifeBuoys);
            }
        }

        //Save first_aid_kit  
        if($request->first_aid_kit_type[0] !== null){
            foreach($request->first_aid_kit_type as $key => $first_aid_kit_types){
                $firstAidKit['vessel_index'] = $vessel_index;
                $firstAidKit['first_aid_kit_type'] = $first_aid_kit_types;
                $firstAidKit['first_aid_kit_quantity'] = $request->first_aid_kit_quantity[$key];
                $firstAidKit['first_aid_kit_expiry_date'] = $request->first_aid_kit_expiry_date[$key];

                FirstAidKit::create($firstAidKit);
            }
        }

        //Save Pyrotechnics 
        if($request->pyrotechnics_type[0] !== null){
            foreach($request->pyrotechnics_type as $key => $pyrotechnics_types){
                $pyrotechnics['vessel_index'] = $vessel_index;
                $pyrotechnics['pyrotechnics_type'] = $pyrotechnics_types;
                $pyrotechnics['pyrotechnics_quantity'] = $request->pyrotechnics_quantity[$key];
                $pyrotechnics['pyrotechnics_expiry_date'] = $request->pyrotechnics_expiry_date[$key];

                Pyrotechnics::create($pyrotechnics);
            }
        }

        //Save LineThrowing
        if($request->line_throwing_apparatus_type[0] !== null){
            foreach($request->line_throwing_apparatus_type as $key => $line_throwing_apparatus_types){
                $line_throwing['vessel_index'] = $vessel_index;
                $line_throwing['line_throwing_apparatus_type'] = $line_throwing_apparatus_types;
                $line_throwing['line_throwing_apparatus_quantity'] = $request->line_throwing_apparatus_quantity[$key];
                $line_throwing['line_throwing_apparatus_expiry_date'] = $request->line_throwing_apparatus_expiry_date[$key];

                LineThrowing::create($line_throwing);
            }
        }

        //Save Breathing
        if($request->breathing_apparatus_type[0] !== null){
            foreach($request->breathing_apparatus_type as $key => $breathing_apparatus_types){
                $breathing['vessel_index'] = $vessel_index;
                $breathing['breathing_apparatus_type'] = $breathing_apparatus_types;
                $breathing['breathing_apparatus_quantity'] = $request->breathing_apparatus_quantity[$key];
                $breathing['breathing_apparatus_expiry_date'] = $request->breathing_apparatus_expiry_date[$key];

                Breathing::create($breathing);
            }
        }

        //Save Fire Equipment
        if($request->fire_equipment_type[0] !== null){
            foreach($request->fire_equipment_type as $key => $fire_equipment_types){
                $fireEquipment['vessel_index'] = $vessel_index;
                $fireEquipment['fire_equipment_type'] = $fire_equipment_types;
                $fireEquipment['fire_equipment_make_and_model'] = $request->fire_equipment_make_and_model[$key];
                $fireEquipment['fire_equipment_capacity'] = $request->fire_equipment_capacity[$key];
                $fireEquipment['fire_equipment_quantity'] = $request->fire_equipment_quantity[$key];
                $fireEquipment['fire_equipment_expiry_date'] = $request->fire_equipment_expiry_date[$key];

                FireEquipment::create($fireEquipment);
            }
        }

        //Save Radio
        if($request->radio_type[0] !== null){
            foreach($request->radio_type as $key => $radio_types){
                $radio['vessel_index'] = $vessel_index;
                $radio['radio_type'] = $radio_types;
                $radio['radio_make_and_model'] = $request->radio_make_and_model[$key];
                $radio['radio_quantity'] = $request->radio_quantity[$key];
                $radio['radio_last_check_date'] = $request->radio_last_check_date[$key];

                Radio::create($radio);
            }
        }

        //Save EPIRP
        if($request->epirp_type[0] !== null){
            foreach($request->epirp_type as $key => $epirp_types){
                $epirp['vessel_index'] = $vessel_index;
                $epirp['epirp_type'] = $epirp_types;
                $epirp['epirp_make_and_model'] = $request->epirp_make_and_model[$key];
                $epirp['epirp_serial_no'] = $request->epirp_serial_no[$key];
                $epirp['epirp_battery_expiry_date'] = $request->epirp_battery_expiry_date[$key];
                $epirp['epirp_asma_expiry_date'] = $request->epirp_asma_expiry_date[$key];

                EPIRP::create($epirp);
            }
        }

        //Save Compass
        if($request->compass_type[0] !== null){
            foreach($request->compass_type as $key => $compass_types){
                $compass['vessel_index'] = $vessel_index;
                $compass['compass_type'] = $compass_types;
                $compass['compass_make_and_model'] = $request->compass_make_and_model[$key];
                $compass['compass_card_diameter'] = $request->compass_card_diameter[$key];
                $compass['compass_last_adjustment_date'] = $request->compass_last_adjustment_date[$key];

                Compass::create($compass);
            }
        }

        //Send email 
        SendEmailVessel::dispatch($vessel->id)->delay(now()->addSeconds(5));

        return redirect('vessel/'.$vessel->id.'/edit')->with('status', 'Create new vessel success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vessel = Vessel::find($id);
        return view('admin.vessel.show', compact('vessel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()->roles === 'admin'){
            $vessel = Vessel::find($id);

            $companies = Company::where('id', '>', "1")->orderBy('id', 'ASC')->get();
            $typePropulsions = TypePropulsion::orderBy('id', 'ASC')->get();
            
            //Get data Device where vessel_index($id)
            $vessel_index = $id;

            $propulsion = Propulsion::where('vessel_index', $vessel_index)->first();

            $mainEngines = MainEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $mainEnginesCount = MainEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $auxiliaryEngines = AuxiliaryEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $auxiliaryEnginesCount = AuxiliaryEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $breathings = Breathing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $breathingsCount = Breathing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $compasss = Compass::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $compasssCount = Compass::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $epirps = EPIRP::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $epirpsCount = EPIRP::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $fireEquipments = FireEquipment::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $fireEquipmentsCount = FireEquipment::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $firstAidKits = FirstAidKit::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $firstAidKitsCount = FirstAidKit::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $gearboxs = Gearbox::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $gearboxsCount = Gearbox::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $generators = Generator::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $generatorsCount = Generator::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $lifeBuoyss = LifeBuoys::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $lifeBuoyssCount = LifeBuoys::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $lifeJacketss = LifeJackets::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $lifeJacketssCount = LifeJackets::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $liferaftss = Liferafts::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $liferaftssCount = Liferafts::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $lineThrowings = LineThrowing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $lineThrowingsCount = LineThrowing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $pyrotechnicss = Pyrotechnics::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $pyrotechnicssCount = Pyrotechnics::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $radios = Radio::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
            $radiosCount = Radio::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

            $tab_name = 'general';
            $status = '';

            return view('admin.vessel.edit', compact([
                'vessel',
                'companies', 
                'typePropulsions', 
                'mainEngines',
                'mainEnginesCount',
                'auxiliaryEngines',
                'auxiliaryEnginesCount',
                'breathings',
                'breathingsCount',
                'compasss',
                'compasssCount',
                'epirps',
                'epirpsCount',
                'fireEquipments',
                'fireEquipmentsCount',
                'firstAidKits',
                'firstAidKitsCount',
                'gearboxs',
                'gearboxsCount',
                'generators',
                'generatorsCount',
                'propulsion',
                'lifeBuoyss',
                'lifeBuoyssCount',
                'lifeJacketss',
                'lifeJacketssCount',
                'liferaftss',
                'liferaftssCount',
                'lineThrowings',
                'lineThrowingsCount',
                'pyrotechnicss',
                'pyrotechnicssCount',
                'radios',
                'radiosCount',
                'tab_name',
                'status'
            ]));
        }
        else{
            return redirect()->back()->with('error', "You don't have jurisdiction edit");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Validate data request
        $dataVessel = $request->validate([
            'name' => 'required',
            'type_propulsion_id' => ['required', Rule::notIn(['0'])],
        ]);

        //Save data Vessel
        $vessel = Vessel::find($id);
        $vessel->fill($request->all());
        $vessel->save();

        //Get vessel_index
        $vessel_index = $id;

        //Save Main Engine
        MainEngine::where('vessel_index', $vessel_index)->delete();

        if($request->main_engine_me_no !== null){
            foreach($request->main_engine_me_no as $key => $main_engine_me_nos){
                $mainEngine['vessel_index'] = $vessel_index;
                $mainEngine['main_engine_me_no'] = $main_engine_me_nos;
                $mainEngine['main_engine_make_and_model'] = $request->main_engine_make_and_model[$key];
                $mainEngine['main_engine_serial_no'] = $request->main_engine_serial_no[$key];
                $mainEngine['main_engine_max_power'] = $request->main_engine_max_power[$key];
                $mainEngine['main_engine_rpm'] = $request->main_engine_rpm[$key];
    
                MainEngine::create($mainEngine);
            }
        }

        //Save Gearbox
        Gearbox::where('vessel_index', $vessel_index)->delete();

        if($request->gearbox_no !== null){
            foreach($request->gearbox_no as $key => $gearbox_nos){
                $gearbox['vessel_index'] = $vessel_index;
                $gearbox['gearbox_no'] = $gearbox_nos;
                $gearbox['gearbox_make_and_model'] = $request->gearbox_make_and_model[$key];
                $gearbox['gearbox_serial_no'] = $request->gearbox_serial_no[$key];
                $gearbox['gearbox_reduction_ratio'] = $request->gearbox_reduction_ratio[$key];
                $gearbox['gearbox_use'] = $request->gearbox_use[$key];
    
                Gearbox::create($gearbox);
            }
        }

        //Save Auxiliary Engine note
        AuxiliaryEngine::where('vessel_index', $vessel_index)->delete();

        if($request->aux_no !== null){
            foreach($request->aux_no as $key => $aux_nos){
                $auxiliaryEngine['vessel_index'] = $vessel_index;
                $auxiliaryEngine['aux_no'] = $aux_nos;
                $auxiliaryEngine['aux_make_and_model'] = $request->aux_make_and_model[$key];
                $auxiliaryEngine['aux_serial_no'] = $request->aux_serial_no[$key];
                $auxiliaryEngine['aux_max_power'] = $request->aux_max_power[$key];
                $auxiliaryEngine['aux_rpm'] = $request->aux_rpm[$key];
                $auxiliaryEngine['aux_location'] = $request->aux_location[$key];
                $auxiliaryEngine['aux_use'] = $request->aux_use[$key];
    
                AuxiliaryEngine::create($auxiliaryEngine);
            }
        }

        //Save Generator
        Generator::where('vessel_index', $vessel_index)->delete();

        if($request->generator_no !== null){
            foreach($request->generator_no as $key => $generator_nos){
                $generator['vessel_index'] = $vessel_index;
                $generator['generator_no'] = $generator_nos;
                $generator['generator_make_and_model'] = $request->generator_make_and_model[$key];
                $generator['generator_serial_no'] = $request->generator_serial_no[$key];
                $generator['generator_ac_dc'] = $request->generator_ac_dc[$key];
                $generator['generator_kva'] = $request->generator_kva[$key];
                $generator['generator_volts'] = $request->generator_volts[$key];
                $generator['generator_phase'] = $request->generator_phase[$key];
                $generator['generator_frequency'] = $request->generator_frequency[$key];
                $generator['generator_driven_by'] = $request->generator_driven_by[$key];
    
                Generator::create($generator);
            }
        }

        //Save Propulsion
        Propulsion::where('vessel_index', $vessel_index)->delete();

        $propulsion = new Propulsion;
        $propulsion->vessel_index = $vessel_index;
        $propulsion->type_propulsion_id = $request->type_propulsion_id;
        $propulsion->propulsion_quantity = $request->propulsion_quantity;
        $propulsion->propeller_make_model = $request->propeller_make_model;
        $propulsion->propeller_material = $request->propeller_material;
        $propulsion->propeller_diameter = $request->propeller_diameter;
        $propulsion->shaft_make_model = $request->shaft_make_model;
        $propulsion->shaft_material = $request->shaft_material;
        $propulsion->shaft_diameter = $request->shaft_diameter;
        $propulsion->water_jet_make_model = $request->water_jet_make_model;
        $propulsion->water_jet_serial_no = $request->water_jet_serial_no;
        $propulsion->water_jet_diameter = $request->water_jet_diameter;
        $propulsion->propulsion_description = $request->propulsion_description;
        $propulsion->save();

        //Save Liferafts
        Liferafts::where('vessel_index', $vessel_index)->delete();

        if($request->liferafts_no !== null){
            foreach($request->liferafts_no as $key => $liferafts_nos){
                $liferafts['vessel_index'] = $vessel_index;
                $liferafts['liferafts_no'] = $liferafts_nos;
                $liferafts['liferafts_make_and_model'] = $request->liferafts_make_and_model[$key];
                $liferafts['liferafts_type'] = $request->liferafts_type[$key];
                $liferafts['liferafts_no_of_persons'] = $request->liferafts_no_of_persons[$key];
                $liferafts['liferafts_serial_no'] = $request->liferafts_serial_no[$key];
                $liferafts['liferafts_expiry_date'] = $request->liferafts_expiry_date[$key];
                $liferafts['liferafts_hydrostatic'] = $request->liferafts_hydrostatic[$key];
                $liferafts['liferafts_hydrostatic_serial_no'] = $request->liferafts_hydrostatic_serial_no[$key];
                $liferafts['liferafts_hydrostatic_serial_expiry'] = $request->liferafts_hydrostatic_serial_expiry[$key];
    
                Liferafts::create($liferafts);
            }
        }

        //Save Life Jacket
        LifeJackets::where('vessel_index', $vessel_index)->delete();

        if($request->life_jackets_type !== null){
            foreach($request->life_jackets_type as $key => $life_jackets_types){
                $lifeJackets['vessel_index'] = $vessel_index;
                $lifeJackets['life_jackets_type'] = $life_jackets_types;
                $lifeJackets['life_jackets_make_and_model'] = $request->life_jackets_make_and_model[$key];
                $lifeJackets['life_jackets_quantity'] = $request->life_jackets_quantity[$key];
                $lifeJackets['life_jackets_serial_no'] = $request->life_jackets_serial_no[$key];
                $lifeJackets['life_jackets_seft_activating_light'] = $request->life_jackets_seft_activating_light[$key];
                $lifeJackets['life_jackets_seft_activating_light_expiry_date'] = $request->life_jackets_seft_activating_light_expiry_date[$key];
    
                LifeJackets::create($lifeJackets);
            }
        }

        //Save Life Buoys
        LifeBuoys::where('vessel_index', $vessel_index)->delete();

        if($request->life_buoys_quantity !== null){
            foreach($request->life_buoys_quantity as $key => $life_buoys_quantitys){
                $lifeBuoys['vessel_index'] = $vessel_index;
                $lifeBuoys['life_buoys_quantity'] = $life_buoys_quantitys;
                $lifeBuoys['life_buoys_attachment'] = $request->life_buoys_attachment[$key];
                $lifeBuoys['life_buoys_expiry_date'] = $request->life_buoys_expiry_date[$key];

                LifeBuoys::create($lifeBuoys);
            }
        }

        //Save first_aid_kit  
        FirstAidKit::where('vessel_index', $vessel_index)->delete();

        if($request->first_aid_kit_type !== null){
            foreach($request->first_aid_kit_type as $key => $first_aid_kit_types){
                $firstAidKit['vessel_index'] = $vessel_index;
                $firstAidKit['first_aid_kit_type'] = $first_aid_kit_types;
                $firstAidKit['first_aid_kit_quantity'] = $request->first_aid_kit_quantity[$key];
                $firstAidKit['first_aid_kit_expiry_date'] = $request->first_aid_kit_expiry_date[$key];

                FirstAidKit::create($firstAidKit);
            }
        }

        //Save Pyrotechnics 
        Pyrotechnics::where('vessel_index', $vessel_index)->delete();

        if($request->pyrotechnics_type !== null){
            foreach($request->pyrotechnics_type as $key => $pyrotechnics_types){
                $pyrotechnics['vessel_index'] = $vessel_index;
                $pyrotechnics['pyrotechnics_type'] = $pyrotechnics_types;
                $pyrotechnics['pyrotechnics_quantity'] = $request->pyrotechnics_quantity[$key];
                $pyrotechnics['pyrotechnics_expiry_date'] = $request->pyrotechnics_expiry_date[$key];

                Pyrotechnics::create($pyrotechnics);
            }
        }

        //Save LineThrowing
        LineThrowing::where('vessel_index', $vessel_index)->delete();

        if($request->line_throwing_apparatus_type !== null){
            foreach($request->line_throwing_apparatus_type as $key => $line_throwing_apparatus_types){
                $line_throwing['vessel_index'] = $vessel_index;
                $line_throwing['line_throwing_apparatus_type'] = $line_throwing_apparatus_types;
                $line_throwing['line_throwing_apparatus_quantity'] = $request->line_throwing_apparatus_quantity[$key];
                $line_throwing['line_throwing_apparatus_expiry_date'] = $request->line_throwing_apparatus_expiry_date[$key];

                LineThrowing::create($line_throwing);
            }
        }

        //Save Breathing
        Breathing::where('vessel_index', $vessel_index)->delete();

        if($request->breathing_apparatus_type !== null){
            foreach($request->breathing_apparatus_type as $key => $breathing_apparatus_types){
                $breathing['vessel_index'] = $vessel_index;
                $breathing['breathing_apparatus_type'] = $breathing_apparatus_types;
                $breathing['breathing_apparatus_quantity'] = $request->breathing_apparatus_quantity[$key];
                $breathing['breathing_apparatus_expiry_date'] = $request->breathing_apparatus_expiry_date[$key];

                Breathing::create($breathing);
            }
        }

        //Save Fire Equipment
        FireEquipment::where('vessel_index', $vessel_index)->delete();

        if($request->fire_equipment_type !== null){
            foreach($request->fire_equipment_type as $key => $fire_equipment_types){
                $fireEquipment['vessel_index'] = $vessel_index;
                $fireEquipment['fire_equipment_type'] = $fire_equipment_types;
                $fireEquipment['fire_equipment_make_and_model'] = $request->fire_equipment_make_and_model[$key];
                $fireEquipment['fire_equipment_capacity'] = $request->fire_equipment_capacity[$key];
                $fireEquipment['fire_equipment_quantity'] = $request->fire_equipment_quantity[$key];
                $fireEquipment['fire_equipment_expiry_date'] = $request->fire_equipment_expiry_date[$key];

                FireEquipment::create($fireEquipment);
            }
        }

        //Save Radio
        Radio::where('vessel_index', $vessel_index)->delete();

        if($request->radio_type !== null){
            foreach($request->radio_type as $key => $radio_types){
                $radio['vessel_index'] = $vessel_index;
                $radio['radio_type'] = $radio_types;
                $radio['radio_make_and_model'] = $request->radio_make_and_model[$key];
                $radio['radio_quantity'] = $request->radio_quantity[$key];
                $radio['radio_last_check_date'] = $request->radio_last_check_date[$key];

                Radio::create($radio);
            }
        }

        //Save EPIRP
        EPIRP::where('vessel_index', $vessel_index)->delete();

        if($request->epirp_type !== null){
            foreach($request->epirp_type as $key => $epirp_types){
                $epirp['vessel_index'] = $vessel_index;
                $epirp['epirp_type'] = $epirp_types;
                $epirp['epirp_make_and_model'] = $request->epirp_make_and_model[$key];
                $epirp['epirp_serial_no'] = $request->epirp_serial_no[$key];
                $epirp['epirp_battery_expiry_date'] = $request->epirp_battery_expiry_date[$key];
                $epirp['epirp_asma_expiry_date'] = $request->epirp_asma_expiry_date[$key];

                EPIRP::create($epirp);
            }
        }

        //Save Compass
        Compass::where('vessel_index', $vessel_index)->delete();

        if($request->compass_type !== null){
            foreach($request->compass_type as $key => $compass_types){
                $compass['vessel_index'] = $vessel_index;
                $compass['compass_type'] = $compass_types;
                $compass['compass_make_and_model'] = $request->compass_make_and_model[$key];
                $compass['compass_card_diameter'] = $request->compass_card_diameter[$key];
                $compass['compass_last_adjustment_date'] = $request->compass_last_adjustment_date[$key];

                Compass::create($compass);
            }
        }

        // return redirect('vessel/'.$vessel->id.'/edit')->with('status','Update Vessel success');

        $companies = Company::where('id', '>', "1")->orderBy('id', 'ASC')->get();
        $typePropulsions = TypePropulsion::orderBy('id', 'ASC')->get();

        $propulsion = Propulsion::where('vessel_index', $vessel_index)->first();

        $mainEngines = MainEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $mainEnginesCount = MainEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $auxiliaryEngines = AuxiliaryEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $auxiliaryEnginesCount = AuxiliaryEngine::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $breathings = Breathing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $breathingsCount = Breathing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $compasss = Compass::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $compasssCount = Compass::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $epirps = EPIRP::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $epirpsCount = EPIRP::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $fireEquipments = FireEquipment::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $fireEquipmentsCount = FireEquipment::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $firstAidKits = FirstAidKit::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $firstAidKitsCount = FirstAidKit::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $gearboxs = Gearbox::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $gearboxsCount = Gearbox::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $generators = Generator::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $generatorsCount = Generator::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $lifeBuoyss = LifeBuoys::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $lifeBuoyssCount = LifeBuoys::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $lifeJacketss = LifeJackets::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $lifeJacketssCount = LifeJackets::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $liferaftss = Liferafts::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $liferaftssCount = Liferafts::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $lineThrowings = LineThrowing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $lineThrowingsCount = LineThrowing::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $pyrotechnicss = Pyrotechnics::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $pyrotechnicssCount = Pyrotechnics::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $radios = Radio::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->get();
        $radiosCount = Radio::orderBy('id', 'ASC')->where('vessel_index', $vessel_index)->count();

        $tab_name = $request->tab_name;
        $status = 'Update successfully';

        return view('admin.vessel.edit', compact([
            'vessel',
            'companies', 
            'typePropulsions', 
            'mainEngines',
            'mainEnginesCount',
            'auxiliaryEngines',
            'auxiliaryEnginesCount',
            'breathings',
            'breathingsCount',
            'compasss',
            'compasssCount',
            'epirps',
            'epirpsCount',
            'fireEquipments',
            'fireEquipmentsCount',
            'firstAidKits',
            'firstAidKitsCount',
            'gearboxs',
            'gearboxsCount',
            'generators',
            'generatorsCount',
            'propulsion',
            'lifeBuoyss',
            'lifeBuoyssCount',
            'lifeJacketss',
            'lifeJacketssCount',
            'liferaftss',
            'liferaftssCount',
            'lineThrowings',
            'lineThrowingsCount',
            'pyrotechnicss',
            'pyrotechnicssCount',
            'radios',
            'radiosCount',
            'tab_name',
            'status'
        ]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(auth()->user()->roles === 'admin'){
            $vessel = Vessel::find($id);
            $vessel->delete();

            //Get vessel_index
            $vessel_index = $id;

            //Destroy Main Engine
            MainEngine::where('vessel_index', $vessel_index)->delete();

            //Destroy Gearbox
            Gearbox::where('vessel_index', $vessel_index)->delete();

            //Destroy Auxiliary Engine note
            AuxiliaryEngine::where('vessel_index', $vessel_index)->delete();

            //Destroy Generator
            Generator::where('vessel_index', $vessel_index)->delete();

            //Destroy Propulsion
            Propulsion::where('vessel_index', $vessel_index)->delete();

            //Destroy Liferafts
            Liferafts::where('vessel_index', $vessel_index)->delete();

            //Destroy Life Jacket
            LifeJackets::where('vessel_index', $vessel_index)->delete();

            //Destroy Life Buoys
            LifeBuoys::where('vessel_index', $vessel_index)->delete();

            //Destroy first_aid_kit  
            FirstAidKit::where('vessel_index', $vessel_index)->delete();

            //Destroy Pyrotechnics 
            Pyrotechnics::where('vessel_index', $vessel_index)->delete();

            //Destroy LineThrowing
            LineThrowing::where('vessel_index', $vessel_index)->delete();

            //Destroy Breathing
            Breathing::where('vessel_index', $vessel_index)->delete();

            //Destroy Fire Equipment
            FireEquipment::where('vessel_index', $vessel_index)->delete();

            //Destroy Radio
            Radio::where('vessel_index', $vessel_index)->delete();

            //Destroy EPIRP
            EPIRP::where('vessel_index', $vessel_index)->delete();

            //Destroy Compass
            Compass::where('vessel_index', $vessel_index)->delete();

    
            return redirect()->back()->with('status','Delete Vessel success');
        }
        else{
            return redirect()->back()->with('error', "You don't have jurisdiction delete");
        }
    }
}
