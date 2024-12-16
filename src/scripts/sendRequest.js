document.addEventListener("DOMContentLoaded", () => {
  let playergoals = document.querySelectorAll(".playerselect");


  playergoals.forEach((playergoal) => {
    playergoal.addEventListener("change", () => {
      console.log("hello");
    });
  });
});


function updateplayer(j)
{
    console.log(j);
    
}