@extends('app')

@section('content')

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Your Test</div>
  <div class="card-body">
    <a href="{{route('exam.appear')}}">
        <h5 class="card-title">Click to start</h5>
        <p class="card-text">Attend into your quick Test</p>
    </a>
  </div>
</div>

@endsection