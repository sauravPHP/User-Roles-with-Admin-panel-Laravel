<?php
namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
    	$users = User::paginate(6);
        return view('admin.users.index', compact('users'));
    }
    public function create()
    {
    	$roles = Role::orderBy('id', 'desc')->get();
        return view('admin.users.create', compact('roles'));
    }
    public function store(Request $request)
    {
        $userData = $request->all();
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);
        User::create([
		    'name' => $request['name'],
		    'email' => $request['email'],
		    'role' => $request['role'],
		    'password' => bcrypt($request['password'])
		  ]);
        return redirect('admin/users')->with('message', ' User Created');
    }
    public function edit(Request $request, $id)
    {
    	$user = User::find($id);
    	//dd($user);
    	$roles = Role::orderBy('id', 'desc')->get();
        return view('admin.users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, $id)
    {
    	$validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);
        $user = User::find($id);
		$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->role = $request->input('role');
    	$user->save();
    	return redirect()->back()->with('message', ' User Updated');
    }
    public function delete(Request $request, $id)
    {
		$user = User::find($id);
		$user->delete();
    	return redirect()->back()->with('message', ' User Deleted');
    }
}