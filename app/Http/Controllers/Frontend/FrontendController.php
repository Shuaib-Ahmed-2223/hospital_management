<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Add_doctors;
use App\Models\Appointment;
use App\Models\User;

class FrontendController extends Controller
{   
    public function redirect ()
    {   
        if(Auth::id())
        
        {    
            if(Auth::User()->usertype=='0')
            {   
                $doctor = Add_doctors::all();
                return view('frontend.home.index', compact('doctor'));
            }
            else{
                return view('backend.admin.home.index');
            }

        }
        else {
            return redirect()->back();
        }
    }
    public function index()
   { if(Auth::id())
         {
            return redirect('home');
         }
      else
    {   $doctor = Add_doctors::all();
        $data = Appointment::all();
        return view('frontend.home.index', compact('doctor', 'data'));
    }
}

    public function appointment(Request $request)
    {   $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In Progress';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
}
        $data->save();
        return redirect()->back()->with('message', 'Appiontment request successful, we will contact with you soon.'); 
    }
    public function myappointment()
    {   if(Auth::id())
        {   
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('frontend.home.user.my_appointment', compact('appoint'));
        }
        else{
            return redirect()->back();
        }
        
    }
    public function cancel_appoint($id)
    {
       $data= appointment::find($id);
       $data->delete();
       return redirect()->back();
    }
  
}
