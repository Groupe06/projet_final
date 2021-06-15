
    
    // Variable par défaut - S'applique à tout le graph
    Chart.defaults.scale.gridLines.drawOnChartArea = false;
    
    // Récupération du canvas 
    var ctx = document.getElementById("myChart").getContext("2d");
    
    // Valeur des labels 
    var labelValues = ["Iron Man", "Spider-Man : Far From home"]

    // Création du graphique 
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Apparitions autre films", "Films solo"],
            datasets: [{
                barPercentage: 1, // Réglage de la largeur des bars - En % - Basé sur la taille du canva
                categoryPercentage: 0.6, // Réglage de l'espace entre les bars
                label: "Salaire ",
                data: [6, 2], // TODO PHP
                backgroundColor: ["#41BBC1", '#0C585B'], //Couleur des barres
                borderColor: ["#FFFFFF", "#FFFFFF"], 
                borderWidth: 2 // Epaisseur de la bordure 
            }]
        },
        
        // Option du graphique
        options: { 
            legend: {
                display: true,
                position: 'bottom'
            },
            scales: { // Echelle           
                yAxes: [{
                    display: false,
                }],
                xAxes: [{
                    display: false,
                    gridLines: {
                        display: false,
                        drawTicks: false,
                    },
                }]
            }
        },
    });
    
