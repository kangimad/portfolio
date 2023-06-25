<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Kangimad Food</h1>
    </a>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/staff') }}">Staff</a></li>
            <li><a href="{{ url('/produk') }}">Produk</a></li>
            <li><a href="{{ url('/galeri') }}">Galeri</a></li>
            <li><a href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
    </nav><!-- .navbar -->

    <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header>
