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
    <option value="stations_name">STATION NAME</option> 
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

<script>
    function change_table() {
  var x = document.getElementById("station_start_date");
  selectElement = document.querySelector('#select1');
  if (selectElement.value === "stations_start_date") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function change_table() {
selectElement = document.querySelector('#select1');
  t1 = document.getElementById("station_name_table");
  t2 = document.getElementById("station_end_date");
  t2String = t2.toString();
  t2StringB = t2String.outerHTML;
  console.log(t2String);
console.log(t2StringB);
console.log(t2String.innerHTML);
console.log(t2String.outerHTML);
  if(selectElement.value === "stations_end_date") {
    t1.innerHTML = t2String.innerHTML;
  } else {
    t1.style.display = 'block';
    t2.style.display = 'none';
  }
}


function changeTable(str)
{
    str = document
   document.getElementById("container").innerHTML = str;
}

</script>

        @endsection