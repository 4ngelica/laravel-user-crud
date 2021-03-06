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
        Session::flash("flash","Maximum number of records reached. Delete a record to insert a new one.");
        return redirect()->back();
      }

      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'bio' => 'required'
      ]);
      UserList::create($request->all());
      Session::flash("flash","User created successfully.");
      return redirect()->route('admin.index');
    }

    public function update(Request $request, $id)
   {
       $user = UserList::where('id', $id);
       $user->update($request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'bio' => 'required'
       ])->except("_token", "method"));
       Session::flash("flash","User updated successfully.");
       return redirect()->route('admin.index');
   }

    public function delete($id)
   {
      $user = UserList::where('id', $id);
      $user->delete();
      Session::flash("flash","User deleted successfully.");
      return redirect()->route('admin.index');
   }


}
