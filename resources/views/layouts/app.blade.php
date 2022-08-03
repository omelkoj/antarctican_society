<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        <script src="https://kit.fontawesome.com/0f559efa9a.js" crossorigin="anonymous"></script>
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        <!--@include('inc.navbar');-->
        <div class="container">
            <div class="header_container">
        <div class="header">           
            <div class="logo">
                <div class="hamburger_menu">
                <i class="fa-solid fa-bars"></i>
                </div>
                <div class="img_container">
                <img src="{{URL::asset('/img/Png_Antarctican_Society copy.png')}}" alt="Antarctican Society Logo">
                </div>
            </div>
            <div class="stations_title_container"><p class="stations_title">STATIONS</p><!--NOT hard coded--></div>
            <div class="user_container">
                <div class="user">
                <span style="color: #FEE76D"><i class="fa-solid fa-circle-user"></i></span>
                <p class="user_title">WELCOME, USER</p>
                </div>
            </div>
        </div>

        <div class="header_two">           
            <div class="logo">
                <div class="hamburger_menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="img_container_two">
            <div class="stations_title_container">
                <img src="{{URL::asset('/img/Png_Antarctican_Society copy.png')}}" alt="Antarctican Society Logo">
                <p class="stations_title">STATIONS</p>
            <!--NOT hard coded--></div>
        </div>

        <div class="user_container">
                <div class="user">
                <span style="color: #FEE76D"><i class="fa-solid fa-circle-user"></i></span>
                <p class="user_title">WELCOME, USER</p>
                </div>
        </div>
</div>
    <div class="main_content">
        <div class="sidebar">
            <a href="#">STATIONS</a>
            <a href="#">USERS</a>
            <a href="#">EVENTS</a>
            <a href="#">PHOTOS</a>
            <a href="#">TIMELINE</a>
            <div class="logout_button_container">
            <a class="logout_button" href="#">LOGOUT</a>
        </div>
    </div>
<div class="main_content_with_buttons">
    <div class="add_edit_buttons">
        <a class="add_station_button" href="#">ADD STATION</a>
        <a class="edit_button" href="#">EDIT</a>
    </div>
    <div class="main_content_tables">

     @yield('content')

</div>
</div>
    
    </div>
</div>
           
        </div>
    </body>
</html>