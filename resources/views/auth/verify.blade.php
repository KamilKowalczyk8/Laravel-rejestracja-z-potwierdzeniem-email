@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zweryfikuj adres email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Na Twój adres e-mail został wysłany nowy link weryfikacyjny.') }}
                        </div>
                    @endif

                    {{ __('Zanim przejdziesz dalej, sprawdź pocztę e-mail pod kątem linku weryfikacyjnego.') }}
                    {{ __('Jesli nie otrzymales maila') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknij by wyslac ponownie') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
