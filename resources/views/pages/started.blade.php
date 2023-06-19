@extends('index')

@section('content')
<div id="intro" class="bg-dark bg-gradient vh-100 shadow-1-strong">
      <div class="container d-flex align-items-center justify-content-center text-center h-100">
        <div class="text-white">
          <h1 class="mb-3">We can get started !</h1>
          <h5 class="mb-4 text-white">You are?</h5>
          <a class="btn btn-outline-light btn-lg m-2" href="{{ route('sign', 'visitor')}}" role="button" rel="nofollow" target="_blank" >Visitor</a>
          <a class="btn btn-outline-light btn-lg m-2" href="{{ route('sign', 'exhibitors')}}" target="_blank" role="button">Exhibitors</a>
        </div>
      </div>
    </div>
  </div>
@endsection