<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <title>dashboard</title>
</head>
<body>
<!----------    div_nouveaute       ----------->
<div class="div_nouveaute bkg">
    <p class="p1" >DASHBOARD</p>
</div>

<!--------------        tableau                 --------->
<div class="cont00">
    <div class="cont01">
    <!---------- bouton de navigation ---------->
        <div class="cont010">
            <div class="com00 color">Commandes</div>
            <div class="list00 no-color">Liste des produits</div>
            <div class="ajout00 no-color">Ajouter un produit</div>
            <div class="no-color deco00">Se deconnecter</div>
        </div>
    </div>
    <div class="cont02">
        <!--------      COMMANDES ------->
        <div class="cont021 nhde">
            <div class="div_nouveaute">
                <p class="p1" >COMMANDES</p>
            </div>
            <div class="tab_commandes">
                <table>
                    <thead class="ted">
                        <tr>
                            <td colspan="2">produits</td>
                            <td rowspan="2">Date de commande</td>
                            <td colspan="3">Client</td>
                            <td rowspan="2">Statut</td>
                            <td rowspan="2">Service de livraison interne</td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td>Quantité</td>
                            <td>Nom Prénom</td>
                            <td>Lieu de livraison</td>
                            <td>Contact</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="trd">
                            <td>vetement</td>
                            <td>12</td>
                            <td>12/03/2020</td>
                            <td>riche client</td>
                            <td>marcory</td>
                            <td>07777777</td>
                            <td>en cour de traitement</td>
                            <td>non</td>
                        </tr>
                        <tr>
                            <td>vetement</td>
                            <td>24</td>
                            <td>12/03/2020</td>
                            <td>riche client2</td>
                            <td>angré</td>
                            <td>77777707</td>
                            <td>commande reçu</td>
                            <td>oui</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <!-------------     PRODUITS ------------>
        <div class="cont0211 hde">
            <div class="div_nouveaute">
                <p class="p1" >PRODUITS</p>
            </div>
            <div class="tab_commandes">
                <table>
                    <thead>
                        <tr>
                            <td colspan="8">Détail produit</td>
                            <td colspan="4">Action</td>
                        </tr>
                        <tr>
                            <td>Photo</td>
                            <td>Reference</td>
                            <td>Nom</td>
                            <td>Couleurs</td>
                            <td>Taille</td>
                            <td>Quantités</td>
                            <td>Catégories</td>
                            <td>Prix</td>
                            <td>Publier</td>
                            <td>Détails</td>
                            <td>Modifier</td>
                            <td>Supprimer</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>none</td>
                            <td>M.E.</td>
                            <td>Collier</td>
                            <td>Bleue</td>
                            <td>XS</td>
                            <td>18</td>
                            <td>Accessoires</td>
                            <td>12000 fcfa</td>
                            <td colspan="4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-------------  Ajouter un produit --------->
        <div class="cont0212 hde">
            <div class="div_nouveaute">
                <p class="p1" >AJOUTER UN PRODUIT</p>
            </div>
            <div class="Ajout">
                <form action="#" method="post">
                    <div class="form1">
                        <input type="text" class="inpu" placeholder="Nom" >
                        <input type="text" class="inpu" placeholder="Description" >
                        <input type="text" class="inpu" placeholder="Prix" >
                        <input type="text" class="inpu" placeholder="Livraison" >
                        <input type="text" class="inpu" placeholder="Quantité" >
                        <input type="text" class="inpu" placeholder="Catégorie" >
                    </div>
                    <textarea name="" placeholder="Détail" id="" cols="30" rows="10"></textarea>
                    <table>
                        <thead>
                            <tr>
                                <td>taille</td>
                                <td>Quantité</td>
                                <td>Couleurs</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td>
                                    <label for="check1">
                                        <input type="checkbox"  class="check" id="check1" >
                                        <span class="round rnd1"></span>
                                    </label>
                                    <label for="check2">
                                        <input type="checkbox"  class="check" id="check2" >
                                        <span class="round rnd2"></span>
                                    </label>
                                    <label for="check3">
                                        <input type="checkbox"  class="check" id="check3" >
                                        <span class="round rnd3"></span>
                                    </label>
                                    <label for="check4">
                                        <input type="checkbox"  class="check" id="check4" >
                                        <span class="round rnd4"></span>
                                    </label>
                                    <label for="check5">
                                        <input type="checkbox"  class="check" id="check5" >
                                        <span class="round rnd5"></span>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" class="submit" value="Ajouter le produit">
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/dash.js"></script>
    
</body>
</html>