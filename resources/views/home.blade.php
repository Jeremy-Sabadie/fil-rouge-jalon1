<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>     cceuil</title>
    @vite(['resources/css/app.css'])
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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
    <aside>
        <h2>Mes tickets</h2>
        <ul>
            <li>Ticket n° 1 :<img src="../images/alerte.png" alt="point vert"><a href=""><button>voir le ticket</button></a>
            </li>

            <li>Ticket n° 2 :<img src="../images/warning.png" alt="point rouge"><a href="#"><button>voir le ticket</button></a>
            </li>

            <li>Ticket n° 3 :<img src="../images/fait.png" alt="orange logo"><a href=""><button>voir le ticket</button></a>
            </li>

        </ul>
    </aside>
    <main>
        <h4>Bienvenu sur votre profil: user #0000</h4>
        <img src="../images/logo_amio.png" alt="logo">
        <u>
        </u>

    </main>
    <footer>
        <ul>
            <h4>contact</h4>
            <li><a href="#">adresse mail</a></li>
            <li><a href="#">adresse postale</a></li>
            <li><a href="#">telephonne</a></li>
            <li><a href="#">Item 4</a></li>
            <li><a href="#">Item 5</a></li>
        </ul>
        <ul>
            <h4>titre ul_2</h4>
            <li><a href="#">Item 1.2</a></li>
            <li><a href="#">Item 2.2</a></li>
            <li><a href="#">Item 3.2</a></li>
            <li><a href="#">Item 4.2</a></li>
            <li><a href="#">Item 5.2</a></li>
        </ul>
        <ul>
            <h4>titre ul_3</h4>
            <li><a href="#">Item 1.3</a></li>
            <li><a href="#">Item 2.3</a></li>
            <li><a href="#">Item 3.3</a></li>
            <li><a href="#">Item 4.3</a></li>
            <li><a href="#">Item 5.3</a></li>
        </ul>
    </footer>
</body>

</html>
