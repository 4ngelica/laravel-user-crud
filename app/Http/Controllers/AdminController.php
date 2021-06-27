<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserList;


class AdminController extends Controller
{
    public function index(){
      return view('index');
    }

    public function save(Request $request){
      $request->validate([
        'nome' => 'required',
        'email' => 'required',
        'bio' => 'required'
      ]);
      UserList::create($request->all());
      return redirect()->route('admin.index');
    }
}
