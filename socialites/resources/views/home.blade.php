@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <div class="table-responsive">


                        <h4> Hello {{Auth::user()->name}}.</h4>
                        <p1> your email is "{{Auth::user()->email}}".</p1>
                        <p2> your id is "{{Auth::user()->socialite_id}}".</p2>

                        <div>
                            <a href="{{Auth::user()->avatar}}">
                            <img src ="{{Auth::user()->avatar}}" height = "200" width = "200"/></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
