
@extends('layouts.app')

@section('content')
    <a href="/entity/create" class="btn btn-success mb-3">Add new Entity</a>
    <div class="card border-info">
        <div class="card-header">List of All entitties</div>
    
    <div class="card-body">
        @if ($entity->count())
            @php
                $x = 1;
            @endphp
            <ul class="list-group list-group-flush">
                @foreach ($entity as $ent)
            <li class="list-group-item"><a href="/entity/{{$ent->id}}">{{$x++ .' | '.$ent->entityname}}</a></li>
                @endforeach
            </ul>
            {{$entity->links()}}
            @else
            <div class="h5">No Entity Listed</div>
        @endif
    </div>
</div>
@endsection