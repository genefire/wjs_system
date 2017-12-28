@extends('layouts.default')



@section('body')
<div class="container">
    <div class="row text-center" style="margin-top: 30%">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">OASIS</h3>
            </div>
            <div class="panel-body">
               WEBSITE UNDER CONSTRUCTION
               <div>
                  <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                  <a href="{{ route('signup') }}" class="btn btn-primary">Register</a>
               </div>
            </div>
            <div class="panel-footer">Copyright 2017</div>
        </div>

    </div>
</div>
@endsection