<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($links as $link)
                        <li class="nav-item">
                        <a class="nav-link"  href="#">{{$link}}</a>
                        </li>
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </nav>


</header>