// Sélecteur d'éléments directement dans le DOM
var herosName = document.querySelectorAll(".radar div.name p")
var tourHero = document.querySelector("div.radar")
// Liste dans laquelle nous regrouperons l'id des héros sur lesquels l'utilisateurs aura cliqué
var herosClicked = []
// Liste de toute les images des héros (flatdesign)
/* var herosPhoto = ["assets/DS.svg","assets/SM.svg"] */
/* V2 avec les images version cartoon */
var herosPhoto = ["assets/blackwidow.png","assets/thor.png","assets/blackpanthere.png","assets/hulk.png","assets/captainmarvel.png",
"assets/antman.png","assets/doctorstrange.png","assets/captainamerica.png","assets/ironman.png","assets/spiderman.png"]

// Boucle parcourant la lkste des images des héros
for (var i = 0; i < herosName.length ; i ++){
    // Activation d'une action au clic
    herosName[i].onclick = function() {

        // Au clic, nous rajoutons l'id du héro cliqué à la liste
        herosClicked.push(this.id)
        console.log(herosClicked)

        // Sélection de la div qui contiendra l'image
        var coco = document.querySelector("div.remaining_time")

        // Si je trouve dans mon DOM un élément avec la classe visible
        if (coco.className.match("visible")) {
            
            // Si le dernier élément de ma liste correspond à celui sur lequel je viens de cliquer, alors l'élément ne s'éfface pas
            if (this.id == herosClicked[herosClicked.length-2]) {
                document.querySelector("div#container > div.remaining_time").classList.toggle("visible")
            }
            else {
                // sinon si je clique sur un nouveau nom de hero
                //J'atttribue au src de l'image vide dans le DOM le src se trouvant dans ma liste à l'indice corespondant à l'id du hero
                document.querySelector("div#container > div.remaining_time img").src = herosPhoto[this.id - 1]
                blink()
            }
            
            
        }
        // Si je n'ai jamais encore cliqué sur le nom d'un héro
        else {
            document.querySelector("div#container > div.remaining_time").classList.toggle("visible")
            document.querySelector("div#container > div.remaining_time img").src = herosPhoto[this.id - 1]
            blink()
    }
        
}

function blink() {
    // J'ajoute un petite effet sur le liens renvoyant aux datas utiliser (blink)
    // Afin qu'il se répète à chaque clique sur un élément et pas 1 seul fois
    document.querySelector("div#container > div.remaining_time p.info").classList.toggle("spoiler")
            setTimeout(function() {
                document.querySelector("div#container >div.remaining_time p.info").classList.remove("spoiler")
            },1500)
        } 
}