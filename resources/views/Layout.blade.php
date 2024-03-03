<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Secure Chat')</title>
    @yield('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @yield('scripts')
    <link
        href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/89fc1ae3b3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=B612+Mono:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="{{ asset('images/Logo.png') }}" alt="Logo" class="img-fluid">
                </div>
                @yield('content')
            </div>
        </section>
    </body>
    
    </html>