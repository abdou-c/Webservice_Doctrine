    
<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../public/projet.css"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Projet Banque du peuple</title>
    </head>
    <body>
            <div class="textcontain">
                <span class="text1">Abdourahmane Sow</span>
                <span class="text2">Responsable des Comptes</span>
            </div>

        <div class="container">
            <!--Formulaire pour voir l'existance du client-->
            <form action="../controller/controlSubmit.php" method="POST">
                        <div class="gestionClient">
                            <fieldset class="gestClient" >
                                <legend>Gestions des Clients</legend>
                                <label for="newClient">Nouveau Client</label>
                                <input type="radio" name="newClient" id="clientNew" onclick="clients()"><br>
            
                                <label for="existClient">Client Existant(e)</label>
                                <input type="radio" name="newClient" id="ClientExistt" onclick="clients()">
                                <input type="text" name="search" id="search" placeholder="Numéro d'identification">
                            <input type="submit" class="buttonSearch" name="buttonSearch" id="boutton">
                            </fieldset>    
                        </div>
                </form>

                <!--formulaire pour le type de client-->
                <div class="typeClient">
                    <fieldset class="myClient" id="clientGestion" >
                        <legend>Type de Clients</legend>
                        <label for="clientPhysique">Client Physique</label>
                        <input type="radio" name="typeClient" id="physique" onclick="clients()"><br>
    
                        <label for="existClient">Client Entreprise</label>
                        <input type="radio" name="typeClient" id="moral" onclick="clients()">
                    </fieldset>    
                </div> 

                <!--formulaire pour le type de compte-->
                <div class="typeCompte">
                    <fieldset class="gestCompte" id="compteGestion">
                        <legend>Type de Compte</legend>
                        <label for="clientPhysique">Compte Simple ou Xeewel</label>
                        <input type="radio" name="typeCompte" id="simple" onclick="clients()"><br>
    
                        <label for="existClient">Compte Courant</label>
                        <input type="radio" name="typeCompte" id="Courant" onclick="clients()">

                        <label for="existClient">Compte bloque</label>
                        <input type="radio" name="typeCompte" id="bloqueButton" onclick="clients()">
                    </fieldset>    
                </div> 

                <!--formulaires pour les donnees du client(compte simple ou xewel)-->
                <div class="donneesClientSimple">
                    <form action="../controller/controlClientSimple.php" method="POST">
                        <fieldset class="dataClient" id="forCompteSimple" >
                            <legend>Données du Client (Compte Simple)</legend>
                            <label for="name">Nom: </label>
                            <input type="text" name="nom" id="nom" required><br><br>

                            <label for="username">Prénom: </label>
                            <input type="text" name="prenom" id="prenom" required><br><br>

                            <label for="telephone">Numéro de Téléphone: </label>
                            <input type="number" name="telephone" id="telephone" required><br><br>

                            <label for="numCni">Numéro d'identification: </label>
                            <input type="text" name="numCni" id="numCni" required><br><br>

                            <label for="adresse">adresse mail: </label>
                            <input type="mail" name="adresse" id="adresse"><br><br>

                            <label for="dateNaiss">Date de Naissance: </label>
                            <input type="date" name="dateNaiss" id="dateNaiss" required><br><br>

                            <label for="sexe">Choix du Sexe:</label>
                            <select name="sexe" id="sexeId">
                                <option value="Homme">Masculin</option>
                                <option value="Femme">Feminin</option>
                            </select>

                <div class="informaCompte">
                                <legend>Information du compte</legend>
                                <p>Les frais d'ouverture <br> de ce type de compte <br> est de : 10000fcfa <br>
                                La rémuneration <br> se fait annuellement : 30000fcfa</p>
                                
                                <label for="numCompte">Numéro de compte: </label>
                            <input type="number" name="numCompte" id="numCompte" required><br><br> 

                            <label for="solde">solde de compte: </label>
                            <input type="number" name="solde" id="solde" required placeholder="exemple: 100000fcfa"><br><br>

                            <label for="fraisOuv">frais d'ouverture: </label>
                            <input type="number" name="fraisOuv" id="fraisOuv" required><br><br>

                            <label for="rémuneration">Rémuneration: </label>
                            <input type="number" name="remuneration" id="remuneration" required><br><br>

                            <label for="dateouv">date d'ouverture: </label>
                            <input type="date" name="dateOuv" id="dateOuvs" required><br><br>
                                <input class="compteSimple" type="submit" name="submitSimple" id="submit" value="Enregistrer">
                            </div>

                        </fieldset>
                    </form>
                </div>

                    <!--donnees pour le compte courant-->
                    <form action="../controller/controlClientCourant.php" method="POST">
                        <div class="donneesClientCourant">
                            <fieldset class="dataCompteCourant" id="compteCourant" >
                                <div class="donnees">
                                    <legend>Données du client (Compte Courant)</legend>
                                    <label for="nomClient">Nom: </label>
                                    <input type="text" name="nomClient" id="nomClient" required><br><br>
            
                                    <label for="usernameClient">Prénom: </label>
                                    <input type="text" name="prenomClient" id="prenomClient" required><br><br>
            
                                    <label for="telephoneClient">Numéro de Téléphone: </label>
                                    <input type="number" name="callClient" id="callClient" required><br><br>

                                    <label for="adresseClient">adresse mail: </label>
                                    <input type="email" name="adresseClient" id="adresseClient"><br><br>
            
                                    <label for="numCniClient">Numéro d'identification: </label>
                                    <input type="text" name="numCniClient" id="numCniClient" required><br><br>


                                    <label for="dateNaiss">Date de Naissance: </label>
                                    <input type="date" name="dateNaissCourant" id="dateNaiss" required><br><br>

                                    <label for="Salaire">Salaire: </label>
                                    <input type="number" name="Salaire" id="Salaire" required><br><br>

                                    <label for="sexe">Choix du Sexe:</label>
                                    <select name="sexeCourant" id="sexeId">
                                        <option value="Homme">Masculin</option>
                                        <option value="Femme">Feminin</option>
                                    </select>
        
                                    <!--information du client compte courant-->
                                <div class="informationCompte">
                                    <legend>Information Compte</legend>
                                    <label for="numberCompte">Numéro de compte: </label>
                                    <input type="number" name="numberCompte" id="numberCompte" required><br><br>
            
                                    <label for="nomEmployeur">Solde: </label>
                                    <input type="number" name="solde" id="soldeCourant" required><br><br>
            
                                    <label for="agios">Agios: </label>
                                    <input type="number" name="agios" id="agios" required><br><br>
            
                                    <label for="">Date d'ouverture: </label>
                                    <input type="date" name="dateOuv" id="dateOuverture"><br><br>


                                    <input class="compteCourant" type="submit" name="submitCourant" id="submitCourant" value="Enregistrer">
                                </div>
                            </fieldset>
                        </div>
                    </form>
               

                   <!--donnees pour le compte bloque-->
                   <div class="donneesClientbloque">
                       <form action="../controller/controlClientBloque.php" method="POST">
                            <fieldset class="dataComptebloque" id="bloque">
                                <div class="donneesCompeBloque">
                                    <legend>Données du client (Compte bloque)</legend>
                                    <label for="nameClient">Nom: </label>
                                    <input type="text" name="nameClient" id="nameClient" required><br><br>
            
                                    <label for="clientUsername">Prénom: </label>
                                    <input type="text" name="clientUsername" id="clientUsername" required><br><br>
            
                                    <label for="clientCall">Numéro de Téléphone: </label>
                                    <input type="number" name="telephoneClient" id="telephoneClient" required><br><br>
            
                                    <label for="numCniClient">Numéro d'identification: </label>
                                    <input type="text" name="clientId" id="clientId" required><br><br>
            
                                    <label for="clientMail">adresse mail: </label>
                                    <input type="mail" name="clientMail" id="clientMail"><br><br>


                                    <label for="dateNaiss">Date de Naissance: </label>
                                    <input type="date" name="dateNaissBloque" id="dateNaiss" required><br><br>

                                    <label for="sexe">Choix du Sexe:</label>
                                    <select name="sexeBloque" id="sexeId">
                                        <option value="Homme">Masculin</option>
                                        <option value="Femme">Feminin</option>
                                    </select>       
            
                                                
                                </div>
        
                                <div class="infoClient">
                                    <legend>Information du Compte (bloque)</legend>
                                    <label for="dateOuv">Date d'ouverture du compte</label>
                                    <input type="date" name="dateOuvertBloque" id="date"><br>
        
                                    <label for="dateFerme">Date fermeture du compte</label>
                                    <input type="date" name="dateFermetureBloque" id="dateferme"><br><br>

                                    <label for="numberCompte">Numéro de compte: </label>
                                    <input type="number" name="numberCompteBloque" id="numberCompte" required><br><br>
            
                                    <label for="nomEmployeur">Solde: </label>
                                    <input type="number" name="soldeBloque" id="soldeCourant" required><br><br>
            

                                    <label for="fraisOuv">Frais D'ouverture: </label>
                                    <input type="number" name="fraisOuvBloque" id="fraisOuvBloque" required><br><br>

                                    <label for="remunerationBloque">Remuneration: </label>
                                    <input type="number" name="remunerationBloque" id="remunerationBloque" required><br><br>
        
        
                                    <input class="compteBloque" type="submit" name="subBloque" id="subBloque" value="Enregistrer">
                                </div>
                       </form>
         </div>
            </form>
        </div>
        <script src="projet.js"></script>
    </body>
</html>