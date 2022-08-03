        @extends('layouts.app')
        @section('content')
        <h1>
            {{$title}}
        </h1>
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, dolorum dicta quibusdam voluptates sunt dolores ipsam praesentium culpa reiciendis pariatur voluptatibus obcaecati quo veniam tempora ducimus laboriosam animi sequi omnis vero. Tempore, ullam quaerat ducimus nulla ad dicta neque culpa, cupiditate eaque ipsam magnam aut ex sunt tenetur, quam mollitia.</p>
        @endsection