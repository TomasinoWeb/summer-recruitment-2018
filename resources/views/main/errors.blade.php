@if(count($errors))
	<div class="form-group">
		<div class="text-white">
			<ul>
				@foreach ($errors->all() as $error) 
					<li><small>{{ $error }}</small></li>
				@endforeach
			</ul>
		</div>
	</div>	
@endif