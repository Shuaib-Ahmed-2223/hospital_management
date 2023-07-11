@extends('backend.master')
@section('content')
<div class='container-fluid' style='padding-top:100px; margin-left:-130px;' >
<div class='col-md-12' >
<table >
    <tr style='background-color:black;'>
        <th style='padding:5px;' >Customer name</th>
        <th style='padding:5px;'> Email </th>
        <th style='padding:5px;'> Phone </th>
        <th> Doctor Name</th>
        <th> Date </th>
        <th> Message </th>
        <th> Status </th>
        <th> Approve </th>
        <th style='padding:5px;'> Cancel </th>
        <th style='padding:5px;'> Send Mail </th>
    </tr>

    @foreach($data as $appoint)
    <tr  style='background-color:skyblue;'>
        <td style='padding:5px'> {{ ($appoint->name) }}</td>
        <td style='padding:5px'> {{ ($appoint->email) }}</td>
        <td style='padding:5px'> {{ ($appoint->phone)}} </td>
        <td style='padding:5px'> {{ ($appoint->doctor) }} </td>
        <td style='padding:5px'> {{ ($appoint->date) }}</td>
        <td style='padding:5px'> {{ ($appoint->message)}} </td>
        <td style='padding:5px'> {{ ($appoint->status) }}</td>
        <td> 
            <a class='btn btn-success' href="{{ url('/appoint/approve/'.$appoint->id)}}">Approved</a>
        </td>
        <td> 
            <a class='btn btn-danger' href="{{ url('/appoint/delete/'.$appoint->id)}}">Canceled</a>
        </td>
        <td> 
            <a class='btn btn-primary' href="{{ url('/email/view/'.$appoint->id) }}">Send Mail</a>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection