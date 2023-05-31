<header>
        <nav>
            <ul>
                <li>
                    <h1>AMIO</h1>
                </li>
                <!-- main item of dropdown menu  -->
                <li class="dropdown">
                    <a href="">mes tickets</a>
                    <ul class="dropdown-menu">
                        <!-- dropdown list-items  -->
                        <li><a href="#">Tous les tickets</a></li>
                        <li><a href="#">tickets en attentes</a></li>
                        <li><a href="#">tickets fermés</a></li>
                    </ul>
                </li>
                <li><a href="#">Accueil</a></li>
                <li>
                    <form action="{{route('search')}}" method="post">
                        <label for="search">recherche</label>
                        <input type="text" id="search" name="search" placeholder="search">
                    </form>
                </li>
                <li><a href="#">À propos</a></li>
                <li><a href="#"><img src="../images/profile.jpeg" alt="photo de profil"></a>
                    <p>user @yield('user_id')</p>

                </li>
            </ul>
        </nav>
    </header>
