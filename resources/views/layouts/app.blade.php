<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Comics @yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">

        @include('partials.header')

    </div>

    <div class="myJumbo">
    </div>
    
    <main>
        <div class="container">

            @yield('content')

        </div>
    </main>
    

        @include('partials.footer')
        
    
    

</body>
</html>