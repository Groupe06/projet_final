// Sélecteur d'éléments directement dans le DOM
var herosName = document.querySelectorAll(".radar div.name p")
var tourHero = document.querySelector("div.radar")
// Liste dans laquelle nous regrouperons l'id des héros sur lesquels l'utilisateurs aura cliqué
var herosClicked = []

// Liste de toute les images des héros (flatdesign)
/* var herosPhoto = ["assets/DS.svg","assets/SM.svg"] */
/* V2 avec les images version cartoon */
var herosPhoto = ["assets/hulk.png", "assets/captainamerica.png", "assets/blackwidow.png", "assets/doctorstrange.png", "assets/spiderman.png", "assets/blackpanthere.png", "assets/thor.png","assets/captainmarvel.png",
"assets/antman.png","assets/ironman.png"]

// Boucle parcourant la liste des images des héros
for (var i = 0; i < herosName.length ; i ++){
    // Activation d'une action au clic
    herosName[i].onclick = function() {

        // Au clic, nous rajoutons l'id du héro cliqué à la liste
        herosClicked.push(this.id)
        console.log(herosClicked)

        // Pour seul but de récupérer le nom du héro sur lequel l'utilisateur à cliqué
        HerofullName =  this.textContent
        console.log(HerofullName)
        recuperation_nom(HerofullName)

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
            document.querySelector("div#onboarding").classList.toggle("end")
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
    // Afin qu'il se répète à chaque clique sur un élément et pas 1 seul fois
    document.querySelector("div#container > div.remaining_time p.info").classList.toggle("spoiler")
            setTimeout(function() {
                document.querySelector("div#container >div.remaining_time p.info").classList.remove("spoiler")
            },1500)
        } 



// Fonction permettant de visualiser toutes la data autour d'un hero
    document.querySelector("div#container > div.remaining_time >  div.info_time > p.info").onclick = function dataSpoiler() {
    document.querySelector("div#container > div.remaining_time").classList.remove("visible")
    document.querySelector("body > div#wrapper > div#backgroundData").classList.toggle("visible")
    // 2crit dans la fenêtre le nom du héro sur lequel l'utilisateur à cliqué
    document.querySelector("body > div#wrapper > div#backgroundData > div#data > header > div > p:nth-child(1)").innerHTML = lolo(HerofullName)
    closeData()

}

function closeData() {
document.querySelector("body > div#wrapper > div#backgroundData > div#data > header > img").onclick = function () {
    document.querySelector("body > div#wrapper > div#backgroundData").classList.remove("visible")
    document.querySelector("div#container > div.remaining_time").classList.toggle("visible")
    
}
}