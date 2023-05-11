<footer id="myTop">
    <div class="container d-flex justify-content-between h-100">
        <div class="row col-6 h-100">
        </div>
        <div class="row col-6 myImg">
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo">
        </div>
    </div>

</footer>
<footer id="myBottom">
    <div class="container d-flex justify-content-between align-items-center">
        <button>Sign-up now</button>
        <div>
            @foreach($icons as $icon)
                <img src= "{{Vite::asset($icon) }}" alt="social"/>
            @endforeach
        </div>

    </div>
</footer>