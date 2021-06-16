// Sélecteur d'éléments directement dans le DOM
var herosName = document.querySelectorAll(".radar div.name p")
var tourHero = document.querySelector("div.radar")
// Liste dans laquelle nous regrouperons l'id des héros sur lesquels l'utilisateurs aura cliqué
var herosClicked = []
// Liste de toute les images des héros
// ALEX___________________ Rajoute les images images dans cette liste
var herosPhoto = ["assets/DS.svg","assets/SM.svg"]

// Boucle parcourant la lkste des images des héros
for (var i = 0; i < herosName.length ; i ++){
    // Activation d'une action au clic
    herosName[i].onclick = function() {

        // Au clic, nous rajoutons l'id du héro cliqué à la liste
        herosClicked.push(this.id)
        console.log(herosClicked)

        // Pour seul but de récupérer le nom du héro sur lequel l'utilisateur à cliqué
        HerofullName =  this.textContent
        lolo(HerofullName)

        // Sélection de la div qui contiendra l'image
        var myHeroRemainingTime = document.querySelector("div.remaining_time")

        // Si je trouve dans mon DOM un élément avec la classe visible
        if (myHeroRemainingTime.className.match("visible")) {
            
            // Si le dernier élément de ma liste correspond à celui sur lequel je viens de cliquer, alors l'élément ne s'éfface pas
            if (this.id == herosClicked[herosClicked.length-2]) {
                // Retour à l'état initial
                document.querySelector("div#container > div.remaining_time").classList.toggle("visible")
                // Retour à la couleur du rect d'origine
                document.getElementById("rect" + herosClicked[herosClicked.length - 1]).style.fill = "#00EBEC";
            }
            else {
                // sinon si je clique sur un nouveau nom de hero

                // Retour à la couleur du précèdant héro séléctionné 
                document.getElementById("rect" + herosClicked[herosClicked.length - 2]).style.fill = "#00EBEC";
                // Coloration du néon en rouge - Différenciation 
                document.getElementById("rect" + herosClicked[herosClicked.length - 1]).style.fill = "#FF0000";
                //J'atttribue au src de l'image vide dans le DOM le src se trouvant dans ma liste à l'indice corespondant à l'id du hero
                document.querySelector("div#container > div.remaining_time img").src = herosPhoto[this.id - 1]
                blink()
            }
            
            // Au clique visualisation de la data
            
        }
        // Si je n'ai jamais encore cliqué sur le nom d'un héro
        else {
            document.querySelector("div#container > div.remaining_time").classList.toggle("visible")
            document.querySelector("div#container > div.remaining_time img").src = herosPhoto[this.id - 1]
            var id_rect = "rect" + this.id
            // Coloration du néon en rouge - Différenciation 
            document.getElementById(id_rect).style.fill = '#FF0000';
            blink()

            

        // ALEX ____________________ Je pense que c'est ici que tu dois enelever la barre de gauche
    }

    return HerofullName
        
}

// Pour seul but de récupérer le nom du héro sur lequel l'utilisateur à cliqué
function lolo(HerofullName) {
    return HerofullName
}

}
function blink() {
    // J'ajoute un petite effet sur le liens renvoyant aux datas utiliser (blink)
    // Afin qu'il se répète à chque clique sur un élément et pas 1 seul fois
    document.querySelector("div#container > div.remaining_time p.info").classList.toggle("spoiler")
            setTimeout(function() {
                document.querySelector("div#container >div.remaining_time p.info").classList.remove("spoiler")
            },1500)
        } 
