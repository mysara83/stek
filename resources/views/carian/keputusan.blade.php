@extends('templat.rangka')

@section('tajuk', 'Carian')

@section('isi')
	<h3>Carian untuk "{{ Request::input('query') }}"</h3>
	@if(!$pengguna->count())
		<p>Maaf, tiada keputusan untuk carian</p>
	@else
		<div class="row">
			<div class="col-md-12">
				@foreach($pengguna as $penggunas)
					@include('sentinel.users.partial.penggunaBlok')
				@endforeach
			</div>
		</div>
	@endif
@endsection