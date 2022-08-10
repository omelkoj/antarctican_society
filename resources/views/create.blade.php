@extends('layouts.app')

@section('content')
<h1>CREATE POST</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\CreateController@index', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

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
        <h1>testing loop</h1>
            @foreach($createData as $createInfo)
            <div>
                <!--Might need to change /create/-->
                <h3><a href="/create/{{$createInfo->member_id}}">{{$createInfo->FirstName}}</a></h3>
                <h2>SHOULD BE LAST NAME{{$createInfo->LastName}}</h2>
            </div>
            @endforeach

@endsection
