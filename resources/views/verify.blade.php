<!-- resources/views/verify.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        <p>{{ __('Please click the button below to verify your email address.') }}</p>
                        <form method="POST" action="{{ route('verification.verify') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('Verify Email') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
