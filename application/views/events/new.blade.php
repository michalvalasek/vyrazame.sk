{{ Anbu::watch('errors', $errors->all()) }}

@if (count($errors->all()))
<div class="alert alert-error">
	<a class="close" data-dismiss="alert" href="#">×</a>
	<h4 class="alert-heading">Nastal problém, ou jé!</h4>
	<ul>
	@foreach ($errors->all() as $err)
		<li>{{ $err }}</li>
	@endforeach
	</ul>
</div>
@endif

{{ Form::open() }}

{{ Form::token() }}

<div class="control-group">
	{{ Form::label('title', 'Kam sa vyráža?') }}
	<div class="controls">
		{{ Form::text('title') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('type', 'O čo ide?') }}
	<div class="controls">
		<label class="radio inline">{{ Form::radio('type', 'sport') }} Šport</label>
		<label class="radio inline">{{ Form::radio('type', 'culture') }} Kultúra</label>
		<label class="radio inline">{{ Form::radio('type', 'drink') }} Drink</label>
	</div>
</div>

<div class="control-group">
	{{ Form::label('date', 'Kedy?') }}
	<div class="controls">
		{{ Form::text('date',null,array('class'=>'datetime')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('place', 'Kde je stretávka?') }}
	<div class="controls">
		{{ Form::text('place') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('description', 'O čo ide?') }}
	<div class="controls">
		{{ Form::textarea('description') }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('author', 'Kto si?') }}
	<div class="controls">
		{{ Form::text('author') }}
	</div>
</div>

<div class="form-actions">
	{{ Form::submit('Hotovo!', array('class'=>'btn btn-primary')) }}
	<a href="/" class="btn">Späť</a>
</div>

</form>