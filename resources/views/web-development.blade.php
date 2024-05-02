@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
<h1>Web Development</h1>
<div class="gap-md-3 gap-3 d-flex">
     <button data-bs-toggle="modal" data-bs-target="#watchdemo" >Schedule a meeting</button>
     <button><a href="#">Case Study</a></button>
</div>
</section>
<section>
    <div class="container-fluid">


    </div>
</section>
@include('frontlayout.contactform')
<x-watchdemo/>
@endsection