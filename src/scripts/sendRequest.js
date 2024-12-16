document.addEventListener("DOMContentLoaded", () => {
  let playergoals = document.querySelectorAll(".playerselect");


  playergoals.forEach((playergoal) => {
    playergoal.addEventListener("change", () => {
      let playerid = playergoal.getAttribute("id")
      let playerStatu;
      console.log(playerid);
      console.log(playergoal.value);
      
      if(playergoal.value == "Field")
      {
        playerStatu = "field";
      }
      if(playergoal.value == "Reserve")
      {
        playerStatu = "reserve"
      }
      
      const dataplayer = {
        id : playerid,
        status : playerStatu
      }
      // ../serverPhp/updateplayerstatus.php
      fetch("../src/serverPhp/updateplayerstatus.php", 
        {
          "method" : "Post",
          "headers" : {
            "Content-Type" : "application/json; charset=utf-8"
          },
          "body": JSON.stringify(dataplayer)
        }
      )
    });
  });
});


