@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <categories></categories>
      </div>
    </div>
    <div class="col-md-9">
      <router-view></router-view>
    </div>
  </div>
</div>
@endsection
