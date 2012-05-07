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

<div class="control-group">
	{{ Form::label('name', 'Kto si?') }}
	<div class="controls">
		{{ Form::text('name') }}
	</div>
</div>

<div class="form-actions">
	{{ Form::submit('Vyrážam!', array('class'=>'btn btn-primary')) }}
	<a href="/" class="btn">Späť</a>
</div>

</form>