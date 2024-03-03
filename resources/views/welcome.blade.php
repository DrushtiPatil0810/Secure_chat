@extends('Layout')
@section('title', 'Welcome')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection
@section('content')
    <div class="formBx">
        <form action="" onsubmit="return false;" class="form">
            <h2 class="Aleo">Welcome</h2>
            <div class="input-container">
                <button onclick="window.location.href = '{{ route('signin') }}';" class="btn">I have an account</button>
            </div>
            <div class="input-container">
                <button onclick="window.location.href = '{{ route('signup') }}';" class="btn">I have an don't account</button>
            </div>
            <div class="submit B612">
                <a href="#" class="help">Need Help? </a>
            </div>
        </form>
    </div>
@endsection