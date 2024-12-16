document.addEventListener("DOMContentLoaded", () => {
  let playergoals = document.querySelectorAll(".playerselect");


  playergoals.forEach((playergoal) => {
    playergoal.addEventListener("change", () => {
      let playerid = playergoal.getAttribute("id")
      console.log(playerid);
      console.log(playergoal.value);
      
    });
  });
});


function updateplayer(j)
{
    console.log(j);
    
}