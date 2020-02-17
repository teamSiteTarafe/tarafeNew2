<link rel="stylesheet" href="{{ asset('style/css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/bootstrap.css') }}">

<!-----------           contact         ------>
<div class="barre1 row">
    <p class="contact col-auto mr-auto">Tarafeci@gmail.com</p>
    <p class="compte col-auto"><a href="dashboard.php">dashboard</a><a href="compte.php" class="btn"><img class="logo_compte" src="{{ asset('img/compte.png') }}" alt=""> compte</a></p>
</div>


<!-----------           logo + search input + panier              ------>
<div class="barre2 row">
    <div class="div_logo col-auto mr-auto">
        <a href="index.php" class="btn nbt"><img class="logo_img" src="{{ asset('img/tarafé1.png') }}" alt=""></a>
    </div>
    <div class="div_input col-auto mr-auto">
        <form class="form_search" action="#">
            <input class="search" type="search" placeholder="Rechercher">
            <button class="submit00" ><img class="submit01" src="{{ asset('img/search.png') }}" alt=""></button>
        </form>
    </div>
    <div class="div_panier col-auto">
        <div class="row div_panier2">
            <a href="#" class="btn votre_panier">Votre Panier<img class="panier_logo" src="{{ asset('img/panier.jpg') }}" alt=""></a>
        </div>
    </div>
</div>


<!-----------           nav button              ------>
<div class="barre3 row">
    <div class="barre_bouton">
        <ul class="ul_bouton row">
            <li class="li_bouton"><a href="produits.php" class="btn nbt">Produits</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="nos_boutiques.php" class="btn nbt">Boutiques</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="service.php" class="btn nbt">Services</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="#" class="btn nbt">Galerie</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="#" class="btn nbt">Le Blog</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton"><a href="#" class="btn nbt">A propos</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton d_h"><a href="{{ route('page.connexion') }}" class="btn nbt">Connexion</a></li>
            <span class="0separator00"></span>
            <li class="li_bouton d_h"><a href="{{ route('page.inscription') }}" class="btn nbt">Inscription</a></li>
        </ul>
    </div>
    <div class="trois_traits">
        <div class="trait"></div>
        <div class="trait"></div>
        <div class="trait"></div>
    </div>
    <!---------- barre de recherche pour smartphone ------>
    <div class="div_input2">
        <form class="form_search" action="#">
            <input class="search1" type="search" placeholder="Rechercher">
            <button class="submit00" ><img class="submit01" src="{{ asset('img/search.png') }}" alt=""></button>
        </form>
    </div>
    <div class="div_connexion">
        <div class="div_connexion2">
            <a href="{{ route('page.connexion') }}" class="btn nbt">Connexion</a>
            <span class="0separator00"></span>
            <a href="{{ route('page.inscription') }}" class="btn nbt">Inscription</a>
        </div>
    </div>
</div>

<script src="{{ asset('js/menu.js') }}"></script>