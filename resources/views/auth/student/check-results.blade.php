@extends('layouts.app')

@section('content')
<div class="welcome-box mb-4">
      <h2>Welcome, {{ Auth::user()->name }}!</h2> 
        <p>Check your results and stay updated with your academic progress.</p>
</div>
@endsection()