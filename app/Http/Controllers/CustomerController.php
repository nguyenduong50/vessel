<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Carbon\Carbon;
use App\Exports\ExportFile;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function search(){
        if(auth()->user()->roles === 'userGuest'){
            $dateNow = Carbon::now('Asia/Ho_Chi_Minh');
            $now = now('Asia/Ho_Chi_Minh');

            $vessels = Vessel::orderBy('cos_expiry_date', 'ASC')->get();
            return view('pages.search', compact(['vessels', 'now']));
        }
        else{
            return redirect('home');
        }
    }

    public function searchResult(){
        if(auth()->user()->roles === 'userGuest'){
            if(isset($_GET['searchName']) || isset($_GET['searchAMSAUVI'])){
                $searchName = $_GET['searchName'];
                $searchAMSAUVI = $_GET['searchAMSAUVI'];

                $dateNow = Carbon::now('Asia/Ho_Chi_Minh');
                $now = now('Asia/Ho_Chi_Minh');
        
                $vessels = Vessel::where('name', 'LIKE', '%'.$searchName.'%')
                ->where('amsa_uvi', 'LIKE', '%'.$searchAMSAUVI.'%')
                ->orderBy('cos_expiry_date', 'ASC')
                ->get();
                return view('pages.searchResult', compact(['vessels', 'now']));
            }
        }        
        else{
            return redirect('home');
        }

    }

    public function show($id){
        if(auth()->user()->roles === 'userGuest'){
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

            return view('pages.details', compact([
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
            ]));
        }
        else{
            return redirect('home');
        }
    }

    public function export_csv(){

        return Excel::download(new ExportFile, 'vessel.xlsx');
    }
}
