@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ auth()->user()->name }}, welcome back!

                    <br>

                    @if(auth()->user()->role_id === 1)
                        <a href="{{ route('client.index') }}" class="btn btn-primary mt-4">Check out your panel!</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
