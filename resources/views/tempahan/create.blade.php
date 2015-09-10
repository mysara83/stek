@extends('templat.rangka')

@section('tajuk', 'Tempahan Baru')

@section('css')
<style>
	.entry:not(:first-of-type)
{
    margin-top: 10px;
}
</style>
@endsection

@section('isi')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Borang Tempahan Kenderaan</div>
			<div class="panel-body">
			<div class="controls">
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
					<div class="form-group">
						{!! Form::label('penumpang', 'Penumpang', ['class' => 'col-md-2 control-label']) !!}
						<div class="col-md-10">

							 <div class="entry input-group col-md-12">
						              <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
						              <span class="input-group-btn">
						                    <button class="btn btn-success btn-add" type="button">
						                         <span class="glyphicon glyphicon-plus"></span>
						                    </button>
						             </span>
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
	</div>
@endsection

@section('js')
<script>
$(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
    	});
</script>
@endsection