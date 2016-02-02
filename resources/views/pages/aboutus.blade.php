@extends('layout')

@section('content')

<div class="main">
	<div class="row">
	  <div class="large-12 columns"><h1> {!! Lang::get('pages.abouthead') !!} </h1></div>
	</div>		
			  
	<div class="row padbelow10">
		  <div class="row">
			  <div class="large-12 columns spansubheaing">{!! Lang::get('pages.about1') !!}</div>
		  </div>
		  <div class="row">
			  <div class="large-12 columns spansubheaing">{!! Lang::get('pages.about2') !!}</div>
		  </div>
		  <div class="row">
			  <div class="large-12 columns spansubheaing">{!! Lang::get('pages.about3') !!}</div>
		  </div>		  
				{{ dd($aboutus->name_de) }}		  
			@foreach ($aboutus as $item)
				if


					  <div class="row">
						  <div class="large-4 columns">{{ ($item->name) }}</div>
						  <div class="large-8 columns">{!! Lang::get('pages.name') !!}</div>
					  </div>
			@endforeach
	</div>
</div>

@stop