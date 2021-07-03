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

    public function delete($id)
   {
       $user = UserList::find($id);
       $user->delete();
       return redirect()->route('admin.index');
   }

   public function update($id)
  {
      $user = UserList::find($id);
      $user->nome = Input::get('nome');
      $user->email = Input::get('email');
      $user->bio = Input::get('bio');
      $user->save();
      return redirect()->route('admin.index');
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
