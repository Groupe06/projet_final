var herosName = document.querySelectorAll(".radar div.name p")
var tourHero = document.querySelector("div.radar")
var herosClicked = []

for (var i = 0; i < herosName.length ; i ++){
    herosName[i].onclick = function() {

        
        herosClicked.push(this.id)
        console.log(herosClicked)

        


        var coco = document.querySelector("div.remaining_time")


        if (coco.className.match("coco")) {

            
            if (this.id == herosClicked[herosClicked.length-2]) {
                document.querySelector("div.radar div.remaining_time").classList.toggle("coco")
            }
            else {
                console.log("là")
            }
            
            

        } else {
            document.querySelector("div.radar div.remaining_time").classList.toggle("coco")
        }

        





        //var remaining_time = document.createAttribute("time")
        /* var remaining_time = document.createElement("div")
        remaining_time.className = "remaining_time"
        tourHero.appendChild(remaining_time) */
        
    }
        
}

/* function coucou() { 
    document.querySelector("div.radar div#remaining_time").style.display="none";
 } */