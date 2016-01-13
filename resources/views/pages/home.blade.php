@extends('layout')

@section('content')

<header class="herohome"></header>
<div class="row columns headerbox">
<div class="mainheader">
{!! Lang::get('pages.homeheading') !!} 
</div>
</div>

<div class="row" style="margin-top:1rem">
<div class="large-6 columns subtext">   {!! Lang::get('pages.hometext') !!}    </div>
  <div class="large-6 columns"><img src="images/{!! Lang::get('pages.homeimage') !!}" /> </div>
</div>


@stop