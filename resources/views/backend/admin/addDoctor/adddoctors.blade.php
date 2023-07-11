@extends('backend.master')
@section('content')
<div class="container-fluid page-body-wrapper"> 
<div class='container'  style='padding-top:50px;'>
    <form action="{{url('/add/doctors') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <div class='form-group'>
            <label>Doctor Name</label>
            <input type='text' name='name' class='form-control' style='color:white;' placeholder='Write the name'/>
        </div>
        <div class='form-group'>
            <label>Phone</label>
            <input type='number' name='number' class='form-control' style='color:white;' placeholder='Write the number'/>
        </div>
        <div class='form-group'>
            <label>Speciality</label>
          <select  name='speciality' class="form-control" style='color:white;'>
          <option>--Select--</option>
            <option value='skin'>Skin</option>
            <option value='heart'>Heart</option>
            <option value='eye'>Eye</option>
            <option value='Neuro'>Neuro</option>
          </select>
        </div>
        <div class='form-group'>
            <label>Room no.</label>
            <input type='text' name='room' class='form-control' style='color:white;'placeholder='Write the room no.'/>
        </div>
    <div class='form-group'>
            <label>Doctor Image</label>
            <input type='file' name='image' class='form-control'/>
        </div>
        <button type='submit' class='btn btn-block btn-success'>Submit</button>
    </form>
</div>
</div>
@endsection