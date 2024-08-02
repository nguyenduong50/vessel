<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::where('id', '>' ,'1')->orderBy('id', 'ASC')->get();
        return view('admin.company.index', compact(['companies']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->roles === 'admin'){
            return view('admin.company.create');
        }
        else{
            return redirect('company')->with('error', "You don't have jurisdiction create");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->fill($request->all());
        $company->save();

        return redirect('company')->with('status','Create new company success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()->roles === 'admin'){
            $company = Company::find($id);
            return view('admin.company.edit', compact(['company']));
        }
        else{
            return redirect('company')->with('error', "You don't have jurisdiction edit");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->fill($request->all());
        $company->save();

        return redirect('company')->with('status','Update company success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(auth()->user()->roles === 'admin'){
            $company = Company::find($id);
            $company->delete();
    
            return redirect()->back()->with('status','Delete company success');
        }
        else{
            return redirect()->back()->with('error', "You don't have jurisdiction delete");
        }
    }
}
