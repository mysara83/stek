@extends('templat.rangka')

@section('tajuk', 'Tempahan Baru')

@section('isi')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Borang Tempahan Kenderaan</div>
			<div class="panel-body">
				{!! Form::open(['class' => 'form-horizontal']) !!}
					<p class="text-right">Butiran Pemohon</p>
					<div class="form-group">
						{!! Form::label('nama', 'Nama Pemohon', ['class' => 'col-md-2 control-label']) !!}
						<div class="col-md-10">
							{!! Form::text('nama', $pengguna->first_name, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('email', 'Email', ['class' => 'col-md-2 control-label']) !!}
						<div class="col-md-10">
							{!! Form::text('email', $pengguna->email, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								{!! Form::label('bahagian', 'Bahagian', ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-8">
									{!! Form::text('bahagian', $pengguna->first_name, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								{!! Form::label('bahagian', 'No. Telefon', ['class' => 'col-md-4 control-label']) !!}
								<div class="col-md-8">
									{!! Form::text('no_telefon', $pengguna->first_name, ['class' => 'form-control']) !!}
								</div>
							</div>
						</div>
					</div>
					<p class="text-right">Butiran Perjalanan</p>
					<div class="form-group">
						{!! Form::label('destinasi', 'Destinasi', ['class' => 'col-md-2 control-label']) !!}
						<div class="col-md-10">
							{!! Form::text('destinasi', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('tujuan', 'Tujuan', ['class' => 'col-md-2 control-label']) !!}
						<div class="col-md-10">
							{!! Form::text('tujuan', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<p class="text-right">Butiran Penumpang</p>
					 @for ($i=1; $i < 3; $i++)
						<div class="form-group">
							{!! Form::label('penumpang', 'Penumpang '.$i, ['class' => 'col-md-2 control-label']) !!}
							<div class="col-md-6">
								<input type="text" class="form-control" name="penumpang[{{ $i }}]" value="{{ str_random(11) }}">
							</div>
						</div>
					@endfor
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-default btn-xs" style="margin-right: 15px;">
								Add New
							</button>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-2">
							{!! Form::submit('Simpan', array('class' => 'btn')) !!}
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection