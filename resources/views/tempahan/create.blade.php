@extends('templat.rangka')

@section('tajuk', 'Tempahan Baru')

@section('css')
<style type="text/css">
		.row{margin:10px -15px;}
	</style>
@endsection

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
							{{ ($errors->has('nama') ? $errors->first('nama') : '') }}
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
					<div class="form-group">
						{!! Form::label('penumpang', 'Penumpang', ['class' => 'col-md-2 control-label', 'style' => 'margin-top:10px;']) !!}
						<div class="col-md-10">
							<div id="example-2" class="content">
								<div class="row">
									<div class="col-md-6">
										{!! Form::label('tujuan', 'Nama Woi', ['class' => 'control-label']) !!}
									</div>
									<div class="col-md-5">
										{!! Form::label('tujuan', 'No. Telefon', ['class' => 'control-label']) !!}
									</div>
									<div class="col-md-1">
										<button type="button" id="btnAdd-2" class="btn btn-primary btn-sm pull-right">+</button>
									</div>
								</div>
								<div class="row group">
									<div class="col-md-6">
										<input type="text" name="nama_penumpang[]" class="form-control">
										{{ ($errors->has('nama_penumpang') ? $errors->first('nama_penumpang') : '') }}
									</div>
									<div class="col-md-5">
										<input type="text" name="no_telefon_penumpang[]" class="form-control">
										{{ ($errors->has('no_telefon_penumpang') ? $errors->first('no_telefon_penumpang') : '') }}
									</div>
									<div class="col-md-1">
										<button type="button" class="btn btn-danger btnRemove btn-sm pull-right">-</button>
									</div>
								</div>
							</div>
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

@section('js')
<script src="{{ asset('js/jquery.multifield.min.js') }}"></script>
<script>
$('#example-2').multifield({
	section: '.group',
	btnAdd:'#btnAdd-2',
	btnRemove:'.btnRemove'
});
</script>
@endsection