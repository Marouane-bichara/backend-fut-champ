async function getData() {
  let arrayOfPlayers = [];
  try {
    const response = await fetch("../src/serverPhp/getData.php");
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const data = await response.json(); 
    console.log(data[0]);  
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


