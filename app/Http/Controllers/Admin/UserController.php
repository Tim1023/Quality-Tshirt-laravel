<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SaveUserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->paginate(6);
        //dd($users);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(SaveUserRequest $request)
    {

        $data = [
            'name' 			=> $request->get('name'),
            'last_name'     => $request->get('last_name'),
            'email'     	=> $request->get('email'),
            'user' 		    => $request->get('user'),
            'password' 		=> $request->get('password'),
            'state'         => $request->get('state'),
            'city'          => $request->get('city'),
            'cp'            => $request->get('cp'),
            'type'  		=> $request->get('type'),
            'active' 		=> $request->has('active') ? 1 : 0,
            'address'   	=> $request->get('address'),
            'mobilephone'   => $request->get('mobilephone'),
            'homephone'   	=> $request->get('homephone'),
            'workphone'   	=> $request->get('workphone')

        ];

        $user = User::create($data);

        $message = $user ? 'User successfully added !' : 'Add user failed';

        return redirect()->route('admin.user.index')->with('message', $message);

    }

    public function show(User $user)
    {
        return $user;
    }


    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|max:100',
            'last_name' => 'required|max:600',
            'email' => 'required|email',
            'user' => 'required|min:4|max:20',
            'password' => ($request->get('password') != "") ? 'required|confirmed' : "",
            'state'  => 'required|max:50',
            'city' =>   'required|max:60',
            'cp'  =>     'required|max:600',
            'type' =>   'required|in:user,admin',
            'address' => 'required',
            'homephone' => 'numeric',
            'mobilephone' => 'required|numeric',
            'workphone' => 'numeric'
        ]);

        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->user = $request->get('user');
        $user->type = $request->get('type');
        $user->address = $request->get('address');
        $user->homephone = $request->get('homephone');
        $user->workphone = $request->get('workphone');
        $user->mobilephone = $request->get('mobilephone');
        $user->active = $request->has('active') ? 1 : 0;
        if($request->get('password') != "") $user->password = $request->get('password');

        $updated = $user->save();

        $message = $updated ? 'User updated successfully !' : 'User could not be updated !';

        return redirect()->route('admin.user.index')->with('message', $message);
    }


    public function destroy(User $user)
    {
        $deleted = $user->delete();
        $message = $deleted ? "User successfully deleted" : "Failed to delete user";
        return redirect()->route('admin.user.index')->with('message', $message);
    }
}
