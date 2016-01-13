@extends('layout')

@section('content')




<div class="hamburgbanner single-item" style="">
  <div><img src="/images/panorama_hamburg_01.jpg"/></div>
  <div><img src="/images/panorama_hamburg_02.jpg"/></div>
    <div><img src="/images/panorama_hamburg_03.jpg"/></div>
  <div><img src="/images/panorama_hamburg_04.jpg"/></div>
  <div><img src="/images/panorama_hamburg_05.jpg"/></div>
    <div><img src="/images/panorama_hamburg_06.jpg"/></div>
</div>



<div class="row" style="margin-top:1rem">
<div class="large-6 columns subtext">   {!! Lang::get('pages.hometext') !!}    </div>
  <div class="large-6 columns"><img src="images/{!! Lang::get('pages.homeimage') !!}" /> </div>
</div>


@stop