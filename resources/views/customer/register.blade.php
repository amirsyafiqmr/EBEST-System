@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ __('Customer Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="#">
                           @csrf

                                        <div class="form-group row">
                                            <label for="custId" class="col-md-4 col-form-label text-md-right">{{ __('Customer IC') }}</label>

                                            <div class="col-md-6">
                                                <input id="custId" type="text" class="form-control @error('custId') is-invalid @enderror" name="custId" value="{{ old('custId') }}" required autocomplete="custId" autofocus>

                                                @error('custId')
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phoneNo" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                            <div class="col-md-6">
                                                <input id="phoneNo" type="text" class="form-control @error('phoneNo') is-invalid @enderror" name="phoneNo" value="{{ old('phoneNo') }}" required autocomplete="phoneNo" autofocus>

                                                @error('phoneNo')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                            <div class="col-md-6">
                                                    <label class="form-check-inline"><input type="radio" name="gender" value="male" checked>Male</label>
                                                    <label class="form-check-inline"><input type="radio" name="gender" value="female" >Female</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="companyName" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="companyName" type="text" class="form-control @error('companyName') is-invalid @enderror" name="companyName" value="{{ old('companyName') }}" required autocomplete="companyName" autofocus>

                                                @error('companyName')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="companyAddress" class="col-md-4 col-form-label text-md-right">{{ __('Company Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="companyAddress" type="text" class="form-control @error('companyAddress') is-invalid @enderror" name="companyAddress" value="{{ old('companyAddress') }}" required autocomplete="companyName" autofocus>

                                                @error('companyAddress')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="companyPhoneNo" class="col-md-4 col-form-label text-md-right">{{ __('Company Phone Number') }}</label>

                                            <div class="col-md-6">
                                                <input id="companyPhoneNo" type="text" class="form-control @error('companyPhoneNo') is-invalid @enderror" name="companyPhoneNo" value="{{ old('companyPhoneNo') }}" required autocomplete="companyPhoneNo" autofocus>

                                                @error('companyPhoneNo')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="companyEmail" class="col-md-4 col-form-label text-md-right">{{ __('Company Email') }}</label>

                                            <div class="col-md-6">
                                                <input id="companyEmail" type="companyEmail" class="form-control @error('companyEmail') is-invalid @enderror" name="companyEmail" value="{{ old('companyEmail') }}" required autocomplete="companyEmail">

                                                @error('companyEmail')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
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
