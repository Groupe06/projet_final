var herosName = document.querySelectorAll(".radar div.name p")
var tourHero = document.querySelector("div.radar")
var herosClicked = []
var herosPhoto = ["assets/DS.svg","assets/SM.svg"]

for (var i = 0; i < herosName.length ; i ++){
    herosName[i].onclick = function() {

        
        herosClicked.push(this.id)
        console.log(herosClicked)

        


        var coco = document.querySelector("div.remaining_time")


        if (coco.className.match("visible")) {

            
            if (this.id == herosClicked[herosClicked.length-2]) {
                document.querySelector("div.radar div.remaining_time").classList.toggle("visible")
            }
            else {
                
                document.querySelector("div.radar div.remaining_time img").src = herosPhoto[this.id - 1]
                document.querySelector("div.radar div.remaining_time p.info").classList.toggle("spoiler")
                setTimeout(function() {
                    document.querySelector("div.radar div.remaining_time p.info").classList.remove("spoiler")
                },1500)
            }
            
            

        } else {
            document.querySelector("div.radar div.remaining_time").classList.toggle("visible")
            document.querySelector("div.radar div.remaining_time img").src = herosPhoto[this.id - 1]
            document.querySelector("div.radar div.remaining_time p.info").classList.toggle("spoiler")
            setTimeout(function() {
                document.querySelector("div.radar div.remaining_time p.info").classList.remove("spoiler")
            },1500)
        }

        


        
    }
        
}

