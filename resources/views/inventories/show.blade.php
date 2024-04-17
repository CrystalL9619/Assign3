@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Inventory
            </h1>
        </div>
        </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $inventory->inventoryName }} </h5>
                   @foreach($employees as $employee)
                       <p>{{ $employee->fname }} {{ $employee->lname }}</p>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection