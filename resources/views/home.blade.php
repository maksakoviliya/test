@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="list-group">
        <a href="{{ route('home') }}" class="list-group-item list-group-item-action active">
          Профиль
        </a>
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">{{ Auth::user()->name }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <div class="row">
            <div class="col-md-4">
              <div class="avatar">
                <img src="{{ asset('/storage/'.Auth::user()->avatar) }}" class="rounded-circle img-fluid">
              </div>
            </div>
            <div class="col">
              <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. О свою переписывается составитель назад скатился инициал. Строчка заманивший толку пунктуация, свое точках он инициал они рыбного. На берегу, оксмокс, рукопись!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
