@extends("layouts.master", ["title" => 'home'])


@section("links")
    <link rel="stylesheet" href="style/css/index.css">
@stop

@section("content")
   
    <!------            baniere tarafe      ------>
    <div class="div_grande_image">
        <img class="baniere_tarafe" src="img/baniere tarafe 1.jpg" alt="">
    </div>

    <!----------    div_nouveaute       ----------->
    <div class="div_nouveaute">
        <p class="p1" >Nouveautés</p>
        <div class="underline"></div>
    </div>

    <!----------    Produits nouveaute       ----------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="div_nouveaute">
        <p class="p1">Nos Produits</p>
        <div class="underline"></div>
    </div>


    <!----------        1ere ligne nos produits     --------------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!----------        2eme ligne nos produits     --------------->
    <div class="brd">
        <div class="div_nouveaute_produit">
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
            <div class="nouveaute01 hide">
                <a class="class_link btn" href="#">
                    <div class="div_img_nouveaaute">
                        <img class="img_nouveaute" src="img/toge.jpg" alt="">
                    </div>
                    <div class="info_prod">
                        <p class="nom_prod">Toge UVCI</p>
                        <p class="marque_prod">Soutra Fanny</p>
                        <p class="prix_prod"><span class="prix_prod">5500</span>&nbspfcfa</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-------------     le blog--------------->
    <div class="div_blog">
        <div class="capture">
            <img class="capture" src="img/Capture.JPG" alt="">
        </div>
        <div class="le_blog2">
            <p class="le_blog">Le blog</p>
            <p class="textile">Découvrez la richesse des texties Africains</p>
            <div class="link_blog">
                <a class="btn" href="#">Par ici</a>
            </div>
        </div>
    </div>

    <!-------------     Nos boutiques   --------------->
    <div class="div_nouveaute">
        <p class="p1">Nos Boutiques</p>
        <div class="underline"></div>
    </div>
    <div class="div_boutiques">
        <div class="row div_boutique01">
            <div class="col-sm-4 justify-center div_boutique02">
                <img class="boutique_logo" src="img/tarafé1.png" alt="">
            </div>
            <div class="div_boutique03 col-sm-8">
                <p class="nom_boutique">La maison de l'elegance</p>
                <p class="description_boutique">
                    Ensemble de couturiers spécialisés dans la confection de 
                    tous types  de vêtements pour particuliers et entreprises . 
                </p>
                <div class="link_boutique">
                    <a href="#" class="btn">voir</a>
                </div>
            </div>
        </div>
    </div>

    @stop