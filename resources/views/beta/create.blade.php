@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">
                            Tambah data baru
                        </h3>
                        <form method="POST" action="{{ route('beta.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="merek" class="col-md-3 col-form-label">{{ __('Merek') }}</label>

                                <div class="col-md-8">
                                    <input id="merek" type="text"
                                           class="form-control{{ $errors->has('merek') ? ' is-invalid' : '' }}"
                                           name="merek" value="{{ old('merek') }}" required autofocus>

                                    @if ($errors->has('merek'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('merek') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pembuat" class="col-md-3 col-form-label">{{ __('Pembuat') }}</label>

                                <div class="col-md-8">
                                    <input id="pembuat" type="text"
                                           class="form-control{{ $errors->has('pembuat') ? ' is-invalid' : '' }}"
                                           name="pembuat" value="{{ old('pembuat') }}" required>

                                    @if ($errors->has('pembuat'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pembuat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="harga" class="col-md-3 col-form-label">{{ __('Harga') }}</label>

                                <div class="col-md-8">
                                    <input id="harga" type="number"
                                           class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}"
                                           name="harga" required>

                                    @if ($errors->has('harga'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="stok" class="col-md-3 col-form-label">{{ __('Stok') }}</label>

                                <div class="col-md-8">
                                    <input id="stok" type="number"
                                           class="form-control{{ $errors->has('stok') ? ' is-invalid' : '' }}"
                                           name="stok" required>

                                    @if ($errors->has('stok'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('stok') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-3 pt-0">Tipe</legend>
                                    <div class="col-sm-8">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                   id="laptop"
                                                   value="laptop" checked>
                                            <label class="form-check-label" for="laptop">
                                                Laptop
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipe"
                                                   id="komputer"
                                                   value="komputer">
                                            <label class="form-check-label" for="komputer">
                                                Komputer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection