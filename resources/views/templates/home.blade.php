<!DOCTYPE html>
<html lang="fr">

@include('components.head')

<body id="home">
    <header>
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit">Se déconnecter</button>
        </form>
        <form action="{{route('search')}}" method="post">
                        @csrf
                        <label for="search">search bar</label>
                        <input type="text" id="search" name="search" placeholder="rechercher par numéro de ticket">
                        <button type="submit">rechercher</button>
                    </form>
        <nav>
            <ul id="user">
                <li>
                    <h1>AMIO</h1>
                </li>
                <!-- main item of dropdown menu  -->
                <li class="dropdown">
                    <a href="{{ route('all_tickets') }}">mes tickets</a>
                    <ul class="dropdown-menu">
                        <!-- dropdown list-items  -->
                        <li><a href="{{ route('all_tickets') }}">Tous les tickets</a></li>
                        <li><a href="{{ route('waiting') }}">tickets en attentes</a></li>
                        <li><a href="{{ route('close') }}">tickets fermés</a></li>
                        <li><a href="{{ route('new_ticket') }}">nouveau ticket</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li>

                </li>
                <li><a href="#">À propos</a></li>
                <li><a href="#"><img src="../images/profile.jpeg" alt="photo de profil"></a>
                    <p>{{ auth()->user()->name }}</p>
                    <button><a href="">gérer mon profil</a></button>
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
