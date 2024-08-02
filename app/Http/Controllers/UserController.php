<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;
use App\Jobs\SendEmailCreateUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->get()->except('password');
        
        return view('admin.account.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->roles === 'admin'){
            $companies = Company::where('id', '>', '1')->orderBy('id', 'ASC')->get();
            return view('admin.account.create', compact(['companies']));
        }
        else{
            return redirect('user')->with('error', "You don't have jurisdiction create");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Get request data
        $dataUser = $request->all();

        $user = new User;
        $user->fill($dataUser);

        //Validate data
        $dataUser = $request->validate(
            [
                'name' => 'required|max:100',
                'email' => 'required|unique:users',
                'password' => 'required|min:8|confirmed',
            ]
        );

        //Add new Image avatar to folder
        $get_image = $request->avatar;
        if($get_image)
        {
            $path = 'frontend/images/users/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $user->avatar = $new_image;
        }

        $user->save();

        //Send email
        SendEmailCreateUser::dispatch($user->id)->delay(now()->addSeconds(2));

        return redirect('user')->with('status','Create new User success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        $companies = Company::orderBy('id', 'ASC')->get();
        return view('admin.account.show', compact(['user', 'companies']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(auth()->user()->roles === "admin"){
            $user = User::find($id);
            $companies = Company::where('id', '>', '1')->orderBy('id', 'ASC')->get();
            return view('admin.account.edit', compact(['user', 'companies']));
        }        
        else{
            return redirect('user')->with('error', "You don't have jurisdiction edit");
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());

        //Validate data
        $dataUser = $request->validate(
            [
                'password' => 'required|min:8|confirmed',
            ]
        );

        //Them hinh anh vao folder
        $get_image = $request->avatar;

        if($get_image)
        {
            //Delete old image avatar
            $path_unlink = 'frontend/images/users/'.$user->avatar;
            if(file_exists($path_unlink) && $path_unlink != 'frontend/images/users/')
            {
                unlink($path_unlink);
            }
        
            //Add new Avatar
            $path = 'frontend/images/users/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,9999).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $user->avatar = $new_image;
        }

        $user->save();

        return redirect('user')->with('status','Update User success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if(auth()->user()->roles === 'admin'){
            $user = User::find($id);

            //Xoá ảnh cũ
            $path_unlink = 'frontend/images/users/'.$user->avatar;
            if(file_exists($path_unlink) && $path_unlink != 'frontend/images/users/')
            {
                unlink($path_unlink);
            }

            $user->delete();
    
            return redirect()->back()->with('status','Delete user success');
        }
        else{
            return redirect()->back()->with('error', "You don't have jurisdiction delete");
        }
    }
}
