@extends('layouts.app');

@section('content')
    <div class="card text-left">
        <div class="card-header">Entity Details</div>
      <div class="card-body">
          <a href="/entity" class="btn btn-success">All Entities</a>
          <a href="/entity/create" class="btn btn-success">Add New Entity</a>
        <h4 class="card-title">{{$entity->entityname}}</h4>
        <p class="card-text">
              <div >Headquaters Address:  <strong>{{$entity->HQaddress}} </strong></div>
              <div >Number of Regional offices:  <strong>{{$entity->regionaloff}}</strong></div>
              <div >Number of District offices:  <strong>{{$entity->districtoff}}</strong></div>
                
        </p>
    <a href="/entity/{{$entity->id}}/edit" class="btn btn-success">Edit Entity</a>
    {{-- <a href="/distroy"  class="btn btn-danger">Delete Entity</a> --}}
      </div>
    </div>
@endsection