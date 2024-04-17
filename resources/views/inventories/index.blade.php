@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Inventories
            </h1>
        </div>
    </div>
    <div class="row">
      @foreach($inventories as $inventory)
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $inventory->inventoryName }} </h5>
                    <p>{{$inventory->inventoryID}}</p>
                    
                </div>
            </div>
        </div>
      @endforeach
    </div>
@endsection