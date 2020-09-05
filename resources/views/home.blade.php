@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <img src="" width="3" height="4" alt="avatar.jpg">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Nama') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="name">{{ $user->name }}</div>

                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('NIM') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="nim">{{ $user->nim }}</div>
                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Angkatan') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="years">{{ $user->years }}</div>

                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Tanggal Lahir') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="birthdate">{{ $user->birthdate }}</div>
                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Asal') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="city">{{ $user->city }}</div>
                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Prodi') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="department">{{ $degree }}-{{ $department }}</div>
                                <div class="w-100"></div>
                                <div class="col text-md-left col-form-label col-md-4">{{ __('Fakultas') }}</div>
                                <div class="col text-md-left col-form-label col-md-8" id="faculyt">{{ $faculty }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
