@extends('layout')

@section('content')

<div class="main">
	<div class="row">
	  <div class="large-12 columns"><h1> {!! Lang::get('pages.abouthead') !!} </h1></div>
	</div>		
			  
	<div class="row padbelow10">
		  <form>
			  <div class="row">
				<div class="medium-6 columns">
				  <label>Input Label
					<input type="text" placeholder=".medium-6.columns">
				  </label>
				</div>
				<div class="medium-6 columns">
				  <label>Input Label
					<input type="text" placeholder=".medium-6.columns">
				  </label>
				</div>
			  </div>
			</form>


 {!! Form::open(array ('url' => 'contact')) !!}

 <meta name="csrf_token" content="{ csrf_token() }" />

        {!! Form::label('First name') !!}
        {!! Form::text('firstname', 'Enter your first name') !!}
        <br />
        {!! Form::label('Last name') !!}
        {!! Form::text('lastname', 'Enter your last name') !!}
        <br />
        {!! Form::submit() !!}
        {!! Form::close() !!}









	</div>
</div>

@stop