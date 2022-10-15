<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoty;


use Session;
use Auth;

class Admin extends Controller
{
    public function adminlogin()
    {
        return view ('admin.login');
    }

    public function loginAdminForm(Request $req){

        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$req->email,'password'=>$req->password])){
            return redirect('/admin_dashboard');
        }else{
            Session::flash('err_msg','Invalid Email or Password');
            // return ('error');
            return redirect()->back();
        }

    }

    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin_login');
    }

    public function dashboard()
    {
        return view('admin.dashboard.home');
    }
    public function show_users()
    {
        $data=user::all();
        return view('admin.dashboard.users_list',compact('data'));
    }
    public function list_category()
    {
        $data=categoty::all();
        return view('admin.dashboard.category_list',compact('data'));
    }
    public function add_category()
    {
        
        return view('admin.dashboard.add_category');
    }
   
    public function save_category(Request $request)
    {
        $category=new categoty;
        $category->category_name=$request->category_name;
        $category->discription=$request->discription;
        $category->type=$request->type;
        $category->icon=$request->icon;

        $category->save();
        return redirect()->back()->with('msg','Category Added Successfully..');
    }

    public function edit_category($id)
    {
        $data=categoty::find($id);
        return view('admin.dashboard.edit_category',compact('data'));
    }

    public function save_edit_categoty(Request $request,$id)
    {
        $category=categoty::find($id);
        
        $category->category_name=$request->category_name;
        $category->discription=$request->discription;
        $category->type=$request->type;
        $category->icon=$request->icon;

        $category->save();
        return redirect()->back()->with('msg','Category updated Successfully..');
    }

    public function delete_category($id)
    {
        $data=categoty::find($id);
        $data->delete();
        return redirect()->back();
    }




    public function approve_user($id)
    {
        $data=user::find($id);

        $data->approved="Approved";
        $data->save();
        return redirect()->back();
    }
}

