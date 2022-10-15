<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\qualification;
use App\Models\categoty;

class HomeController extends Controller
{
    // User auth division
    
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->role=='1')
            {
                if(Auth::id())
                {
                    $user=Auth::user()->id;
                    $user_info=user::where('id',$user)->get();
                    // return ($user_info);
                    return $this->user_id($user);
            
                }
                else
                {
                    return redirect()->back();
                }
        
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect()->back();
        }
    }



    // homepage
    public function index()
    {
        // $data= categoty::all();
        $data= categoty::where('type','Monthly')->get();
        return view('users.home',compact('data'));
        // return view('users.home');
    }



    // manage - info about user
    public function about_user()
    {
        
        if(Auth::id())
        {
            $user=Auth::user()->id;
            $user_info=user::where('id',$user)->get();
            // return ($user_info);
            return view('users.user_info',compact('user_info'));
            
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function edit_user($id)
    {
        $data=user::find($id);
        
        return view('users.edit_about',compact('data'));
    }

    public function save_user_info(Request $req, $id)
    {
        $user=user::find($id);

        $user->name=$req->name;
        $user->phone=$req->phone;
        $user->email=$req->email;
        $user->gender=$req->gender;
        $user->present_address=$req->present_address;
        $user->permanent_address=$req->permanent_address;
        $user->birthday=$req->birthday;
        $user->marital_status=$req->marital_status;

        $user->save();
        return redirect('/about-user')->with('msg','Updated Successfully!');
    }

    public function user_id($user)
    {
        $data=qualification::where('user_id',$user)->get();
        foreach($data as $info){
        if($info==null)
        {
            
            // $user=Auth::user()->id;
            
            $qualifications=new qualification;
            $qualifications->user_id=$user;
            $qualifications->save();
            return $this->quality_about();

            
        }
        else
        {
            return $this->quality_about();
        }
    }

    }
    public function quality_about()
    {
        
        if(Auth::id())
        {
            
            $user=Auth::user()->id;
            
            

            // return $user;
            $user_info=user::where('id',$user)->get();
            $user_quality=qualification::where('user_id',$user)->get();
            // return ($user_info);
            return view('users.qualification',compact('user_info','user_quality'));
            
        }
        else
        {
            return redirect()->back();
        }
         
        
    }

    

    public function edit_user_quality($id)
    {
        $data=qualification::find($id);
        
        return view('users.quality_form',compact('data'));
    }

    public function user_quality_update(Request $req ,$id)
    {
        $data=qualification::find($id);

        $data->category=$req->category;
        $data->work_details=$req->work_details;
        $data->pricing=$req->pricing;
        $data->location_to_work=$req->location_to_work;
        $data->save();
        return redirect('/qualifications')->with('msg','Saved Successfully!');
        
    }



    // category wise user show
    public function showCategory($id)
    {

        // Join
        // $data=categoty::join('qualifications','qualifications.category','=','categoties.category_name')
        //                     ->join('users','users.id','=','qualifications.user_id')
        //                     ->get(['users.name','users.image']);
        //                     return view('users.category',compact('data'));

       $data= categoty::find($id);
       $dt=$data->category_name;
       

       

       $cat=qualification::where('category',$dt)->get();
        

        // foreach($cat as $info){
            
        //     $cat=$info->user_id;
        // $user=user::find($cat);
        // return $user;
        // }
        
        $data=user::join('qualifications','qualifications.user_id','=','users.id')
                        ->get(['users.name','users.image','qualifications.work_details','qualifications.pricing','qualifications.location_to_work']);
                        // return $data;
            return view('users.category',compact('cat','dt','data'));
        // return $user;
    }


    public function about_provider($id)
    {
        
        if(Auth::id())
        {
            $user=Auth::user()->id;
            $user_info=user::find($id);
            // return ($user_info);
            return view('users.provider_info',compact('user','user_info'));
            
        }
        else
        {
            return redirect()->back();
        }
        
    }

    public function qualifications($id)
    {
        
        
        if(Auth::id())
        {
            
        $user_info=user::find($id);
        // return $user_info;
        $user_quality=qualification::where('user_id',$id)->get();
        return view('users.provider_qualification',compact('user_info','user_quality'));

        }
        else
        {
            return redirect(Route('login'));
        }

    }


    public function upload_img(Request $req,$id)
    {
        $user=user::find($id);
        $img=$req->img;
        $imgname=time().'.'.$img->getClientOriginalExtension();

        $req->img->move('imagefile',$imgname);

        $user->image=$imgname;
        $user->save();
        return redirect()->back()->with('msg',' Upload Successfully');
    }


    public function services()
    {
        $data= categoty::where('type','Monthly')->get();
        return view('users.services',compact('data'));
        // return view('users.services');
    }

    public function about()
    {
        return view('users.about');
    }
}
