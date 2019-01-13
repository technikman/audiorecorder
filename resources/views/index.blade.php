@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Audiorecorder Version 0.1-dev
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">Next planned recordings</div>

                    <div class="card-body">
                        <ul>
                            @foreach($timers as $timer)
                                <li>{{$timer->name}} => {{$timer->start}} to {{$timer->end}}</li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
