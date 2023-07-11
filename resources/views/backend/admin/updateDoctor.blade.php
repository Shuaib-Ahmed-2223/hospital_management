@extends('backend.master')
<style type='text/css'>
label{
    display: inline-block;
    width: 200px;
}
</style>
@section('content')
<div class='container-fluid' style='padding-top:100px; margin-left:-130px;' >
<div class='col-md-12' >
<form action="{{url('/editdoctor/'.$data->id)}}" method='POST' enctype="multipart/form-data">
    @csrf
    <div style='padding-top:15px;'>
        <label>Doctor Name</label>
        <input type='text' name='name' value='{{$data->name}}'>
    </div>
    <div style='padding-top:15px;'>
        <label>Phone</label>
        <input type='number' name='phone' value='{{$data->phone}}'>
    </div>
    <div style='padding-top:15px;'>
        <label>Speciality</label>
        <input type='text' name='speciality' value='{{$data->speciality}}'>
    </div>
    <div style='padding-top:15px;'>
        <label>Room</label>
        <input type='text' name='room' value='{{$data->room}}'>
    </div>
    <div style='padding-top:15px;'>
        <label>Old Image</label>
        <img src="{{ asset('/doctor/'.$data->image) }}" height='100' width='100'>
    </div>
    <div style='padding-top:15px;'>
        <label>Change Image</label>
        <input type='file' name='image'>
    </div>
    <div style='padding-top:15px;'>
        <input type='submit' class='btn btn-primary'/>
    </div>
</form>
@endsection