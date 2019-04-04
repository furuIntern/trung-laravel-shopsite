
@extends('layouts.form')
@section('form')
                    <h2 class="text-center">Register</h2>
                    <hr/>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="usern" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="usern" type="text" class="form-control{{ $errors->has('usern') ? ' is-invalid' : '' }}" name="usern" value="{{ old('usern') }}" autofocus>
                                @if ($errors->has('usern'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('usern') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-cf" class="col-md-4 col-form-label text-md-right">{{ __('Password confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-cf" type="password" class="form-control" name="password_confirmation" >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="addr" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="addr" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" >

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr/>
                        <div class="text-center">
                            <button class="btn btn-success">Login</button>
                            <a href="{{route ('register')}}">Register</a>
                        </div>
                    </form>
@endsection