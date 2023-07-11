<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Add_doctors;
use App\Models\Admin;
use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Notification;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('backend.admin.auth.login');
    }

    public function adminLoginForm (Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();
        if(!$admin){
            
            return redirect()->back()->with('error', 'Email or Password not match.');
         }
         else{
            return redirect('/admin/dashboard');
         }
    }

    public function adminDashboard ()
    {
        return view ('backend.admin.home.index');
    }

    public function addDoctorsView ()
    {
        return view ('backend.admin.home.index');
    }
    public function showappointment()
    {   
        $data=appointment::all();
        return view ('backend.admin.showappointment', compact('data'));
    }

    public function approve_appoint($id)
    {
        $data= appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
    public function delete_appoint($id)
    {
       $data= appointment::find($id);
       $data->status = 'canceled';
       $data->save();
       return redirect()->back();
    }

    public function showdoctor()
    {   
        $data = add_doctors::all();
        return view('backend.admin.showdoctor', compact('data'));
    }
    public function deleteDoctor($id)
    {
        $data = add_doctors::find($id);
        $data -> delete();
       return redirect()->back();
    }
    public function updateDoctor($id)
    {   
        $data = add_doctors::find($id);
        return view('backend.admin.updateDoctor', compact('data'));
    }
    public function editDoctor(Request $request, $id)
    {
        $doctor = Add_doctors::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        if(isset($request->image)){
            if($doctor->image && file_exists('doctor/'.$doctor->image)){
            unlink('doctor/'.$doctor->image);
                    }
            $updateImage = time(). '.' .$request->image->extension();
            $request->image->move(public_path('/doctor/'), $updateImage); 
                    $doctor->image = $updateImage;
                }
            $doctor->save();
            return redirect()->back()->with('success', 'Doctor details updated successfully');

    } 
    public function emailView($id)
    {
        $data=appointment::find($id);
        return view('backend.admin.emailView', compact('data'));
    }
    public function sendEmail(Request $request, $id)
    {
        $data=appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart

        ];
        Notification::send($data,new SendEmailNotification($details));
        return redirect()->back()->with('success', 'Email send is successful');
    }
}

