<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\projecttable1;

class UserController extends Controller
{
    //
    public function index(){
        $data = userModel::get();
        return view('user-list',compact('data'));
    }

    public function addUser(){
        return view('add-new-user');
    }

    public function saveUser(Request $request){
        $request->validate([
            'userName'  => 'required',
            'EmailId'  => 'required'
        ]);

        $name = $request->userName;
        $emailId = $request->EmailId;

        $sym = new userModel();
        $sym->userName = $name;
        $sym->EmailId = $emailId;
        $sym->save(); 
        
        return redirect('/users')->with('success', 'User added successfully');
        // 'email' => [
        //     'required',
        //     'email',
        //     Rule::unique('users')->ignore($id),
        // ],
        // 'username' => [
        //     'required',
        //     'string',
        //     'min:3',
        //     'max:255',
        //     Rule::unique('users')->ignore($id),
        // ],
    }

    public function deleteUser($id){
        userModel::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
    
    public function viewProject($id){
        // $commonData = projecttable1::select("
        //     SELECT title,Description
        //     FROM projecttable1 AS p
        //     JOIN userModel AS u ON u.id = p.user_id
        // ");
        // projecttable1::where('id','=',$id)
        // $commonData = projecttable1::findOrFail($id);
        $commonData = projecttable1::where('user_id','=',$id)->get();
        return view('view-project',compact('commonData'));
        // print_r($commonData);
        // print_r(json_encode($id));
    }

    public function deleteUserProject($id){
        projecttable1::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'project deleted successfully');
    }

    public function editUser($id){
        $data = userModel::where('id','=',$id)->first();
        return view('edit-user',compact('data'));
    }

    public function updateUser(Request $request){

        $name = $request->userName;
        $emailId = $request->EmailId;
        $id = $request->id;
        userModel::where('id','=',$id)->update([
            'userName'=>$name,
            'EmailId'=>$emailId
        ]);
        return redirect('/users')->with('success', 'User updated successfully');
    }

    public function updateUserproject($id){
        $data = projecttable1::where('id','=',$id)->first();
        return view('update-project',compact('data'));
    }

    public function updateprjectdetails(Request $request){
        // $request->validate([
        //     'userName' => 'required',
        //     'Description' => 'required',
        // ]);
        $id = $request->id;
        $title = $request->title;
        $description = $request->Description;
        projecttable1::where('id','=',$id)->update([
            'title' =>$title,
            'Description'=>$description
        ]);
        return redirect()->back()->with('success','project successfully updated');
    }

}
