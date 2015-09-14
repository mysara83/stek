@extends('templat.rangka')

@section('tajuk', 'Selamat Datang ke Sistem Tempahan Kenderaan')

@section('isi')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Pergerakkan Terkini Kenderaan Jabatan</h2>
        <hr>
            @foreach($tempahan as $tempahans)
            <div class="well">
                  {{$tempahans->tujuan}}
            </div>
            @endforeach
        </div>
    </div>
@endsection