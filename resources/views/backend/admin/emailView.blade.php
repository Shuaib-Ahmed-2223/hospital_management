@extends('backend.master')
@section('content')
<div class="container-fluid page-body-wrapper"> 
<div class='container'  style='padding-top:50px;'>
    <form action="{{ url('/send/email/'.$data->id) }}" method='POST'>
        @csrf
        <div class='form-group'>
            <label>Greeting</label>
            <input type='text' name='greeting' class='form-control' style='color:white;' placeholder='Write the name'/>
        </div>
        <div class='form-group'>
            <label>Body</label>
            <input type='text' name='body' class='form-control' style='color:white;'/>
        </div>
    
        <div class='form-group'>
            <label>Action Text</label>
            <input type='text' name='actiontext' class='form-control' style='color:white;'placeholder='Write the room no.'/>
        </div>

        <div class='form-group'>
            <label>Action Url</label>
            <input type='text' name='actionurl' class='form-control' style='color:white;'placeholder='Write the room no.'/>
        </div>

        <div class='form-group'>
            <label>End Part</label>
            <input type='text' name='endpart' class='form-control' style='color:white;'placeholder='Write the room no.'/>
        </div>
  
        <button type='submit' class='btn btn-block btn-success'>Submit</button>
    </form>
</div>
</div>

@endsection