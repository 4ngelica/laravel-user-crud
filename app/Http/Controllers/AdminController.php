<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserList;
use Session;


class AdminController extends Controller
{
    public function index(){
      $users = UserList::all();
      return view('index', ['user_list'=>$users]);
    }

    public function save(Request $request){

      if(UserList::all()->count() == 5){
        Session::flash("flash","Número máximo de registros atingido. Exclua um registro para inserir um novo.");
        return redirect()->back();
      }

      $request->validate([
        'nome' => 'required',
        'email' => 'required',
        'bio' => 'required'
      ]);
      UserList::create($request->all());
      Session::flash("flash","Usuário registrado com sucesso!");
      return redirect()->route('admin.index');
    }

    public function update(Request $request, $id)
   {
       $user = UserList::where('id', $id);
       $user->update($request->except("_token", "method"));
       return redirect()->route('admin.index');
   }

    public function delete($id)
   {
      $user = UserList::where('id', $id);
      $user->delete();
      return redirect()->route('admin.index');
   }


}
