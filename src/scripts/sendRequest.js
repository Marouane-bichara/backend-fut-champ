let ithasinfield = false;
async function getData() {
  let arrayOfPlayers = [];
  try {
    const response = await fetch("../src/serverPhp/getData.php");
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const data = await response.json(); 
  } catch (error) {
    console.error('There was a problem with the fetch operation:', error);
  }
}
getData()




document.addEventListener("DOMContentLoaded", () => {
  
  let playergoals = document.querySelectorAll(".playerselect");


  playergoals.forEach((playergoal) => {
    playergoal.addEventListener("change", () => {
      let playerid = playergoal.getAttribute("id")
      let playerStatu = playergoal.value;
      console.log(playerid);
      console.log(playergoal.value);
      let dataplayerstocheck;
      async function getdataplayers() {
        let arrayOfPlayers = [];
        try {
          const response = await fetch("../src/serverPhp/getData.php");
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
        dataplayerstocheck = await response.json(); 

        
        } catch (error) {
          console.error('There was a problem with the fetch operation:', error);
        }


        console.log(dataplayerstocheck);

               let indextheplayer = 0
      for (let i = 0; i < dataplayerstocheck.length; i++) {
        if(dataplayerstocheck[i].id == playerid)
        {
             indextheplayer = i;

             break;
        }
      }
      console.log(dataplayerstocheck[indextheplayer].position);

      for (let i = 0; i < dataplayerstocheck.length; i++) {
         if(dataplayerstocheck[indextheplayer].status == dataplayerstocheck[i].status)
         {
          ithasinfield = true
          break
         }
      }

      }
      getdataplayers();
      // console.log(dataplayerstocheck);



          if(ithasinfield == true)
          {
                return;
          }


      
      
      const dataplayer = {
        id : playerid,
        status : playerStatu
      }
      fetch("../src/serverPhp/updateplayerstatus.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json; charset=utf-8",
        },
        body: JSON.stringify(dataplayer),
      })
    });
  });
});


