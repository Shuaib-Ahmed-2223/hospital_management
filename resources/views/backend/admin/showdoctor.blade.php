@extends('backend.master')
@section('content')
<div class='container-fluid' style='padding-top:100px; margin-left:-130px;' >
<div class='col-md-12' >
<table >
    <tr style='background-color:black;'>
        <th style='padding:5px;' >Doctor name</th>
        <th style='padding:5px;'> Phone </th>
        <th style='padding:5px;'> Speciality </th>
        <th style='padding:5px;'> Room No</th>
        <th style='padding:5px;'> Image </th>
        <th style='padding:5px;'> Delete </th>
        <th style='padding:5px;'> Update </th>
    </tr>
    @foreach($data as $doctor)
    <tr style='background-color:skyblue;'>
        <td style='padding:5px;' > {{$doctor->name}} </td>
        <td style='padding:5px;'> {{$doctor->phone}}</td>
        <td style='padding:5px;'>  {{$doctor->speciality}} </td>
        <td style='padding:5px;'>  {{$doctor->room}}</td>
        <td style='padding:5px;'> <img src="{{ asset('/doctor/'.$doctor->image) }}" height='100' width='100'> </td>
        <td style='padding:5px;'><a onclick="return confirm('are you sure to delete this')" class='btn btn-danger' href="{{ url('/deletedoctor/'.$doctor->id) }}">Delete</td>
        <td style='padding:5px;'><a class='btn btn-primary' href="{{ url('/updatedoctor/'.$doctor->id) }}">Update</td>
    </tr>

@endforeach
@endsection