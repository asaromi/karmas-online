@extends('layouts.app')

@section('content')
@if (session('failed'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session('failed') }}</strong>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Name') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('NIM') }}</label>

                            <div class="col-md-7">
                                <input id="nim" type="text" class="form-control @error('email') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim">

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('PIN') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-7">
                                <input id="birthdate" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" required autocomplete="birthdate">

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="faculty" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Fakultas') }}</label>

                            <div class="col-md-7">
                                <select name="faculty" id="faculty" class="form-control @error('faculty') is-invalid @enderror" required autocomplete="faculty">
                                    <option value="">-- Pilih Fakultas --</option>
                                    @foreach ($faculties as $f)
                                    <option value="{{ $f->id }}">{{ $f->code }} - {{ $f->name }}</option>
                                    @endforeach
                                </select>

                                @error('faculty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Program Studi') }}</label>

                            <div class="col-md-7">
                                <select name="department" id="department" class="form-control @error('department') is-invalid @enderror" required autocomplete="department">
                                    <option value="">-- Pilih Program Studi --</option>
                                </select>

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="years" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Angkatan') }}</label>

                            <div class="col-md-7">
                                <input id="years" value="2020" type="number" class="form-control @error('years') is-invalid @enderror" name="years" required autocomplete="years">

                                @error('years')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="offset-md-1 col-md-3 col-form-label text-md-left">{{ __('Kota Asal') }}</label>

                            <div class="col-md-7">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="city">

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
