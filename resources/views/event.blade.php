        @extends('layouts.app')
        @section('content')
 <table id="station_name_table">
            <tr>
                <th><nav>
  <select id="select1" onclick="change_table()"> 
    <option value="event_name" selected="selected">EVENT NAME</option> 
    
    <option value="event_start_date">START DATE</option> 
    <option value="event_end_date">END DATE</option> 
    <option value="event_image">IMAGE</option> 
    <!--<option value="user_telephone">TELEPHONE</option> 
    <option value="user_date_created">DATE CREATED</option>--> 
  </select> 
</nav></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->Event_Name}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_start_date">
            <tr>
                <th><div>START DATE</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->Start_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_end_date">
            <tr>
                <th><div>END DATE</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->End_Date}}</td>
            </tr>
                @endforeach
        </table>
        <table id="event_image">
            <tr>
                <th><div>IMAGE</div></th>
            </tr>
                @foreach($events as $event)
            <tr>
                <td>{{$event->Image}}</td>
            </tr>
                @endforeach
        </table>
        <!--removed a table here-->

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