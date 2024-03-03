@extends('Layout')
@section('title', 'Sign-Up')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sign-up.css') }}">
@endsection
@section('scripts')
    <script src="{{ asset('js/sign-up.js') }}"></script>
@endsection
@section('content')
    <div class="formBx">
        <form action="" onsubmit="return false;" class="form">
            <h2 class="Aleo">Sign-Up Here</h2>
            <div class="input-container">
                <i class="fa-solid fa-regular fa-user"></i>
                <input type="text" name="Username" placeholder="Username" autocomplete="off" />
            </div>

            <div class="input-container">
                <i class="fa-solid fa-phone-volume"></i>
                <input type="tel" name="Contact_Number" placeholder="Contact Number" autocomplete="off" />
            </div>
            <div class="submit B612">
                <input type="submit" name="sign-up" value="sign-up" id="signupbtn" />
            </div>
        </form>
    </div>
@endsection