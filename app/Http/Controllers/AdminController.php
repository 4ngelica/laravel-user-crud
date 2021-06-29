<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserList;


class AdminController extends Controller
{
    public function index(){
      $users = UserList::all();
      return view('index', ['user_list'=>$users]);
    }

    public function save(Request $request){
      $request->validate([
        'nome' => 'required',
        'email' => 'required',
        'bio' => 'required'
      ]);
      UserList::create($request->all());
      dd(UserList::all());
      return redirect()->route('admin.index');
    }
}
