@extends('irunerrands.layout')

@section('title', 'Home')

@section('javascript')
@parent
<script src="/js/vendor/jquery.cycle2.min.js"></script>
@endsection

@section('content')
<h2 class='IRE-underline'>Call today to free up your time!</h2>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 IRE-slide-BG">
    <div id="slideshow" class="cycle-slideshow" data-cycle-speed="200"  data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true">
        <img src="/img/home/home1.png" alt=""/>
        <img src="/img/home/home2.png" alt=""/>
        <img src="/img/home/home3.png" alt=""/>
    </div>
    <br/>
    <br/>
</div>                
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style='text-align:center;'>
    <a href="/services" class='IRE-font-hand h1'>I Run Errands - You will have a better quality of life.</a>
</div>

@endsection
