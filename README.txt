Administration rentree Version 1.0 31/12/2016

---------------------------------------------

Cette application permet d'administrer l'application de rentrée de l'ISEN en ajoutant, modifiant ou supprimant des
promos et des documents.

---------------------------------------------

INSTALLATION
---------------

NOTA BENE : Cette application doit être installée APRES avoir installé l'application de rentrée de l'ISEN.

1) Déployez l'application sur votre serveur, de préférence dans le même dossier que l'application de rentrée de l'ISEN.
2) Utilisez le fichier "doc_rentree.sql" afin de créer une base de données permettant d'utiliser l'application.
3) Renseignez les informations de connexion à la base de donnée et le chemin jusqu'au dossier contenant les documents de
l'application de rentrée de l'ISEN dans le fichier "config.php".
4) Après avoir modifier le fichier "rentree--config.php" selon les modalités d'installation de l'application de rentrée
de l'ISEN, supprimez le fichier "config.php" de l'application de rentrée de l'ISEN, déplacez le fichier
"rentree--config.php" jusqu'à la racine de l'application de rentrée de l'ISEN puis renommez le "config.php".
5) Configurez votre serveur afin de permettre à cette application de modifier les fichiers présent dans le dossier
contenant les documents de l'application de rentrée de l'ISEN.
6) Accédez à l'application en utilisant le paramétrage de votre serveur.



---------------------------------------------
UTILISATION
---------------

Les promos :
    Sélectionnez le bouton "Promos" en haut à droite ou le bouton "MODIFIER LES PROMOS" dans l'accueil.
    - Ajouter une promo :
        Cliquez sur le bouton "AJOUTER PROMO", renseignez les champs puis cliquez sur le bouton "AJOUTER".
    - Modifier une promo :
        Cliquez sur le bouton modifier en forme de crayon de la promo que vous souhaitez modifier puis modifiez les
        champs et cliquez sur le bouton "MODIFIER".
    - Supprimer une promo :
        Cliquez sur le bouton supprimer en forme de poubelle de la promo que vous souhaitez supprimer puis cliquez
        sur le bouton "SUPPRIMER".

Les fichiers :
    Sélectionnez le bouton "Fichiers" en haut à droite ou le bouton "MODIFIER LES FICHIERS" dans l'accueil.
    - Ajouter un fichier :
        Cliquez sur le bouton "AJOUTER FICHIER", renseignez les champs puis cliquez sur le bouton "AJOUTER".
    - Modifier un fichier :
        Cliquez sur le bouton modifier en forme de crayon du fichier que vous souhaitez modifier puis modifiez les
        champs et cliquez sur le bouton "MODIFIER".
    - Supprimer un fichier :
        Cliquez sur le bouton supprimer en forme de poubelle du fichier que vous souhaitez supprimer puis cliquez
        sur le bouton "SUPPRIMER". Le fichier sera réellement supprimé lorsqu'il ne sera plus relié à aucune promos.

Note d'utilisation des tableaux :
    - Le champ de recherche en haut à droite des tableaux permet de rechercher dans toutes les colonnes excepté
    les colonnes "id","Modifier" et "Supprimer".
    - Il est possible de trier selon une colonne en cliquant sur le nom de la colonne (cliquez une autre fois afin
    d'inverser le sens du tri).
    - Il est possible de trier selon plusieurs colonnes en cliquant sur le nom d'une deuxième colonne tout en maintenant
    la touche SHIFT.

---------------------------------------------
ARCHITECTURE DE L'APPLICATION
---------------

./          #Accueil de l'application
./promo     #Tableau des promos, ajout/modification/suppression des promos
./fichier   #Tableau des fichiers, ajout/modification/suppression des fichiers