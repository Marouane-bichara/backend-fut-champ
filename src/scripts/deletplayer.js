document.addEventListener("DOMContentLoaded",()=>{
    let playerDelted = document.querySelectorAll(".playerDelted")

    playerDelted.forEach(playerdelted=>{
        playerdelted.addEventListener("change",()=>{
            let playerid = playerdelted.getAttribute("id");
            let deleted = playerdelted.value;
     


            // if(deleted == "deleted")
            // {
            //     deleted = Date()
            // }
            console.log(playerid);
            console.log(deleted);
            let deletep =
            {
                id : playerid
            }
            fetch("../src/serverPhp/deletePlayer.php",
               {
                method : "POST",
                headers : {
                    "Content-Type": "application/json; charset=utf-8"
                },
                body : JSON.stringify(deletep)
               }
            )
        });
    })
})