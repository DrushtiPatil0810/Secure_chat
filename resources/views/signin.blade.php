@extends('Layout')
@section('title', 'Sign-In')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sign-in.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('js/sign-in.js') }}"></script>
@endsection
@section('content')
    <div class="formBx">
        <form action="" onsubmit="return false;" class="form">
            <h2 class="Aleo">Sign-In Here</h2>
            <div class="input-container">
                <i class="fa-solid fa-regular fa-user"></i>
                <input type="text" name="Username" placeholder="Username" autocomplete="off" class="input" required />
            </div>

            <div class="input-container">
                <i class="fa-solid fa-phone-volume"></i>
                <input type="tel" name="Contact_Number" placeholder="Contact Number" autocomplete="off" class="input" required />
            </div>
            <div class="submit B612">
            <input type="submit" name="" value="Login" id="loginButton" />
            </div>
        </form>
    </div>
@endsection