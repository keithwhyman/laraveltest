@extends('layout')

@section('content')

<div class="row hamburgbanner single-item" style="">
  <div class="collection"><img src="/images/panorama_hamburg_01.jpg"/></div>
  <div class="collection"><img src="/images/panorama_hamburg_02.jpg"/></div>
  <div class="collection"><img src="/images/panorama_hamburg_03.jpg"/></div>
  <div class="collection"><img src="/images/panorama_hamburg_04.jpg"/></div>
  <div class="collection"><img src="/images/panorama_hamburg_05.jpg"/></div>
  <div class="collection"><img src="/images/panorama_hamburg_06.jpg"/></div>
</div>

<div class="row" style="margin-top:1rem">
<div class="large-12 columns subtext"><img src="/images/{!! Lang::get('pages.hamburgimage') !!} "/>  </div>
<div class="large-12 columns subhead"> <h4>  {!! Lang::get('pages.hamburgsubheading') !!} </h4>  </div>
</div>

<style> 
.line {
	color: #444444;
    background-image: url(/images/rob_linie.jpg);
    background-repeat: repeat-x;
    background-position: left center;
    line-height: 10px;
    width: 460px;
    height: 10px;
	border:0px;

}
.large-6, h6 {
	font-size:12px;
	line-height: 16px;
	color: #444444;
}
.subhead h4 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    line-height: 22px;
    color: #5d88a3;
}
h4 {
	font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    line-height: 14px;
    color: #555555;
    text-transform: uppercase;
	}
</style>
<div class="row" data-equalizer data-equalize-by-row="true">
  <div class="large-6 columns" style="outline:1 px solid red">
		<div class="callout clearfix">
			  <div data-equalizer-watch>
						 <img src="/images/{!! Lang::get('pages.hamburgpic1') !!} "/>
						<br><h6>{!! Lang::get('pages.hamburgpic1text') !!} </h6>
			
	  			<img src="/images/{!! Lang::get('pages.hamburgpic2') !!} "/>
					<br><h6>{!! Lang::get('pages.hamburgpic2text') !!} </h6>
		  </div>
   	  </div>	
   </div>
	  <div class="large-6 columns">
			   <div class="callout clearfix">
					 <div data-equalizer-watch>
					 		<h4>{!! Lang::get('pages.hamburghead1') !!} </h4>
							<p>
								{!! Lang::get('pages.hamburgtext') !!}
							</p>
							<hr class="line">
								<h4>{!! Lang::get('pages.hamburghead2') !!} </h4>
							<p>
								{!! Lang::get('pages.hamburgtext2') !!}
							</p>
							<hr class="line">
							<h4>{!! Lang::get('pages.hamburghead3') !!} </h4>
							<p>
								{!! Lang::get('pages.hamburgtext3') !!}
							</p>
							<hr class="line">
							<h4>{!! Lang::get('pages.hamburghead4') !!} </h4>
							<p>
								{!! Lang::get('pages.hamburgtext4') !!}
							</p>
					  </div>
			  </div>
		</div>
</div>

<!--
<div class="large-6 columns subtext">   {!! Lang::get('pages.hometext') !!}    </div>
<div class="large-6 columns"><img src="images/{!! Lang::get('pages.homeimage') !!}" /> </div>
-->





@stop