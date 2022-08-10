        @extends('layouts.app')
        @section('content')
 <table id="station_name_table">
            <tr>
                <th><nav>
  <select id="select1" onclick="change_table()"> 
    <option value="user_first_name" selected="selected">FIRST NAME</option> 
    
    <option value="user_last_name">LAST NAME</option> 
    <option value="user_org_name">ORGANIZATION</option> 
    <option value="user_email">EMAIL</option> 
    <option value="user_telephone">TELEPHONE</option> 
    <option value="user_date_created">DATE CREATED</option> 
  </select> 
</nav></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->FirstName}}</td>
            </tr>
                @endforeach
        </table>
        <table id="user_last_name">
            <tr>
                <th><div>LAST NAME</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->LastName}}</td>
            </tr>
                @endforeach
        </table>
        <table id="user_org_name">
            <tr>
                <th><div>ORG</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->Organization}}</td>
            </tr>
                @endforeach
        </table>
        <table>
            <tr>
                <th><div>EMAIL</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->emailaddress}}</td>
            </tr>
                @endforeach
        </table>
        <table>
            <tr>
                <th><div>TELEPHONE</div></th>
            </tr>
                @foreach($users as $user)
            <tr>
                <td>{{$user->Telephone}}</td>
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

    @include('livewire.station')

        <h1>Test Data Form</h1>
        <form action="submit" method="POST">
            @csrf
            <input type="text" name="FirstName" placeholder="Enter FirstName"><br>
            <input type="text" name="LastName" placeholder="Enter LastName"><br>
            <input type="text" name="Organization" placeholder="Organization"><br>
            <input type="number" name="Enewsletter" placeholder="Enewsletter"><br>
            <input type="number" name="ChkAddress" placeholder="ChkAddress"><br>
            <input type="number" name="ChkBio" placeholder="ChkBio"><br>
            <input type="number" name="ChkEmail" placeholder="ChkEmail"><br>
            <input type="number" name="ChkTelephone" placeholder="ChkTelephone"><br>
            <input type="number" name="ChkPhotoID" placeholder="ChkPhotoID"><br>
        <button type="submit">Add Data</button>



        </form>