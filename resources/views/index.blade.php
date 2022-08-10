@extends('layouts.app')
@section('content')

<table id="station_name_table">
            <tr>
                <th><nav>
  <select id="select1" onclick="change_table()"> 
    <option value="stations_name_table" selected="selected">STATION NAME</option> 
    <option value="stations_start_date">START DATE</option> 
    <option value="stations_end_date">END DATE</option> 
    <option value="stations_images">IMAGE</option> 
    <option value="stations_country">COUNTRY</option> 
    <!--<option value="stations_name">STATION NAME</option>--> 
  </select> 
</nav></th>
            </tr>
                @foreach($stations as $station)
            <tr>
                <td>{{$station->Station_Name}}</td>
            </tr>
                @endforeach
        </table>
        <table id="station_start_date">
            <tr>
                <th><div>START DATE</div></th>
            </tr>
                @foreach($stations as $station)
            <tr>
                <td>{{$station->Start_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table id="station_end_date">
            <tr>
                <th><div>END DATE</div></th>
            </tr>
                @foreach($stations as $station)
            <tr>
                <td>{{$station->End_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table>
            <tr>
                <th><div>IMAGE</div></th>
            </tr>
                @foreach($stations as $station)
            <tr>
                <td>{{$station->Image}}</td>
            </tr>
                @endforeach
        </table>
        <table>
            <tr>
                <th><div>COUNTRY</div></th>
            </tr>
                @foreach($stations as $station)
            <tr>
                <td>{{$station->Country}}</td>
            </tr>
                @endforeach
        </table>

@endsection