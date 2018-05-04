@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-3">{{$title}}</h1>
        <p>This is the Laravel application that is been worked on from here.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a></p>
    </div>
@endsection

