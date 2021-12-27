@extends('layouts.app')

@section('content')
<div class="container-sm">
    
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/homeicon.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/img1.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/img1.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/img1.jpg" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection
