@extends('templat.rangka')

{{-- Web site Title --}}
@section('tajuk', 'Pemandu')

{{-- Content --}}
@section('isi')
<div class="row">
            <div class="col-md-12">
                @foreach($pengguna as $penggunas)
                    @include('sentinel.users.partial.penggunaBlok')
                @endforeach
            </div>
        </div>
@endsection