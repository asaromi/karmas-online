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
                                <div class="col-md-4">
                                    <form method="POST" action=" {{ route('print') }} " enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        @php
                                            if(!$user->avatar){
                                                $user->avatar = 'storage/img/foto.jpg';
                                                $file = "";
                                                echo '<img id="image" class="mx-auto d-block" style="width: 80%;" src="'.$user->avatar.'" alt="avatar.jpg">';
                                                echo '<input class="btn" id="avatar" type="file" class="form-control border-0 @error("avatar") is-invalid @enderror" name="avatar">';
                                            } else {
                                                $file = $user->avatar;
                                                echo '<img id="image" class="mx-auto d-block" style="width: 80%;" src="'.$user->avatar.'" alt="avatar.jpg">';
                                            }
                                        @endphp

                                        @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="col-md-8">
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
                                <input class="btn btn-primary mx-auto d-block" type="submit" value="Print">
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop
