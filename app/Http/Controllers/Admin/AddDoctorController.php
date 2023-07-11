<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Add_doctors;

class AddDoctorController extends Controller
{
    public function addDoctorsView()
    {
        return view('backend.admin.addDoctor.adddoctors');
    }

    public function addDoctors(Request $request)
    {
    if($request->file('image')){
        $name = time().'.'.$request->image->extension();
        $request->image->move(public_path('/doctor/'), $name);
    }
    {
     $doctor = new add_doctors();
     $doctor->name = $request->name;
     $doctor->phone = $request->number;
     $doctor->room = $request->room;
     $doctor->speciality =  $request->speciality;
     $doctor->image = $name;
     $doctor->save();
     return redirect()->back()->with('success', 'Doctor has been added');
    }
}
}
