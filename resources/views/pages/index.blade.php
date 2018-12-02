@extends('layouts.app')

@section('content')      
            <br><br>
        <div class="jumbotron text-center">
            <h1>{{$title}} </h1>
            <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
            <p>
                        <a class="btn btn-primary btn-lg" 
                        href="/login" 
                        role="button">Login</a>

                        <a class="btn btn-success btn-lg"
                        href="/register"
                        role="button">Register</a>
            </p>
      </div>
  @endsection

      