    
    var nom = "Iron-Man";
    var id = 0;

    //fetch("test.json")
    fetch("personnages.json")
        .then(function(resultat) {
        if (resultat.ok) {
            return resultat.json();
        }
        })
        .then(function(value) {
        console.log(value)
        //alert(value.comments[0].message);

        //Déclaration des variables nécessaires
        const augmentation = value[id][nom].augmentation_salaire_film;
        const  debutMcu = value[id][nom].annee_creation;
        const mort = value[id][nom].mort;
        const premierSalaire = value[id][nom].salaire_premier_film;
        const dernierSalaire = value[id][nom].salaire_dernier_film;
        const filmSolo = value[id][nom].nombre_films_solo;
        const filmMcu = value[id][nom].nombre_films_totaux - filmSolo;
        const envieContinuer = value[id][nom].envie_continuer;
        var currentYear = new Date().getFullYear();

        // Augmentation de salaire
        document.getElementById("augmentationSalaire").textContent = augmentation + "$";


        // Calcul du nombre d'année
        if (mort === null) {
            var Nb_annee = currentYear - debutMcu
            document.getElementById("Nb_annee").textContent = Nb_annee
        }
        else {
            var Nb_annee =  mort - debutMcu
            document.getElementById("Nb_annee").textContent = Nb_annee
        }


        // Envie de continuer de l'acteur 
        let divEnvie = document.getElementById("envieActeur");
        if (envieContinuer === 'Y') {
            divEnvie.textContent = 'Oui';
        }
        else if (envieContinuer === 'N') {
            divEnvie.textContent = 'Oui';
        }
        else {
            divEnvie.textContent = 'N/A';
        }

        // Création du graphique en Bar
        let dataBar = [premierSalaire, dernierSalaire];
        Graphique_Bar(dataBar);


        //Création du graphique 
        let dataDoughnut = [filmSolo, filmMcu];
        Graphique_Doughnut(dataDoughnut);
        
        })
        .catch(function(err) {
        // Une erreur est survenue
        });