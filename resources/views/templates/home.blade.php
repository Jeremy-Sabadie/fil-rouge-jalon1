<!DOCTYPE html>
<html lang="fr">

@include('components.head')

<body id="home">
    <header>
        <nav>
            <ul>
                <li>
                    <h1>AMIO</h1>
                </li>
                <!-- main item of dropdown menu  -->
                <li class="dropdown">
                    <a href="{{ route('all') }}">mes tickets</a>
                    <ul class="dropdown-menu">
                        <!-- dropdown list-items  -->
                        <li><a href="{{ route('all') }}">Tous les tickets</a></li>
                        <li><a href="{{ route('waiting') }}">tickets en attentes</a></li>
                        <li><a href="{{ route('close') }}">tickets fermés</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>
                    <form action="" method="post">
                        <label for="search">search bar</label>
                        <input type="text" id="search" name="search" placeholder="search">
                    </form>
                </li>
                <li><a href="#">À propos</a></li>
                <li><a href="#"><img src="../images/profile.jpeg" alt="photo de profil"></a>
                    <p>user #0000</p>
                </li>
            </ul>
        </nav>
    </header>
    @include('components.aside')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
</body>

</html>
