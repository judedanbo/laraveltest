@extends('layouts.app');
@section('content')
    <div class="card text-white bg-success">
    <div class="card-header"><strong class="h4">Edit Details</strong></div>
      <div class="card-body">
       <form action="entity/update" method="POST" >
        @csrf
        @method('PATCH')
        <div class="form-group">
                <label for="entityname">Entity Name</label>
                <input type="text" name="entityname" id="entityname" class="form-control @error('entityname') is-invalid @enderror" placeholder="Entity Name" aria-describedby="entitynamehelp" 
        value="{{$entity->entityname}}" required autofocus>
            <small id="entitynamehelp" class="text-muted">Enter the name of the Entity</small>
            @error('entityname')
                <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="HQaddress">Address of Headquaters</label>
                <textarea name="HQaddress" id="HQaddress" cols="30" rows="3" class="form-control @error('HQaddress') is-invalid @enderror">{{$entity->HQaddress}}</textarea>
                <small id="hqaddhelp" class="text-muted">Address of the Heasqurters</small>
                @error('HQaddress')
                <span class="invalid-feedback" role="alert">
                <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="regionaloff">No. of Regional Offices</label>
                        <input type="number" name="regionaloff" id="regionaloff" class="form-control @error('regionaloff') is-invalid @enderror" placeholder="No. of Regional Officers"  value="{{$entity->regionaloff}}" aria-describedby="regionaloffhelp">
                        <small id="regionaloffhelp" class="text-muted">Enter the total Number of regional offices</small>
                        @error('regionaloff')
                            <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="districtoff">No. of District Offices</label>
                        <input type="number" name="districtoff" id="districtoff" value="{{$entity->districtoff}}" class="form-control @error('districtoff') is-invalid @enderror" placeholder="Number of district offices" aria-describedby="districtoffhelp">
                        <small id="districtoffhelp"  class="text-muted">Enter the total number of distrcit offices</small>
                        @error('districtoff')
                            <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>       
                </div> 
            </div>
            

            <input class="btn btn-primary" type="submit" value="Update Entity">
        </form>
        </form>
      </div>
    </div>
@endsection