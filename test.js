// donuts
    // nb films solo
    // nb films autres (total - solo)

//barre
    // premier salaire
    //dernier salaire
    var nom = "Iron Man";

    //fetch("test.json")
    fetch("personnages.json")
        .then(function(resultat) {
        if (resultat.ok) {
            return resultat.json();
        }
        })
        .then(function(value) {
        //alert(value.comments[0].message);
        alert(value[0][nom].salaire_dernier_film);
        console.log(value)
        })
        .catch(function(err) {
        // Une erreur est survenue
        });