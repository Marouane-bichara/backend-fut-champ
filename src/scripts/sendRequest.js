let dataplayerstocheck = []; 

async function getData() {
  try {
    const response = await fetch("../src/serverPhp/getData.php");
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    dataplayerstocheck = await response.json(); 
  } catch (error) {
    console.error('There was a problem with the fetch operation:', error);
  }
}

document.addEventListener("DOMContentLoaded", async () => {
  await getData();
  changestatusplayer(); 
});

function changestatusplayer() {
  document.querySelectorAll(".playerselect").forEach((playergoal) => {
    playergoal.addEventListener("change", () => {
      const playerid = playergoal.getAttribute("id");
      const playerStatu = playergoal.value;

      if (playerStatu !== "Field") {
        updatePlayerStatus(playerid, playerStatu);
        return;
      }

      let ithasinfield = false;
      const player = dataplayerstocheck.find(player => player.id === playerid);

      if (player) {
        for (let i = 0; i < dataplayerstocheck.length; i++) {
          if (
            dataplayerstocheck[i].status === "Field" &&
            dataplayerstocheck[i].position === player.position &&
            dataplayerstocheck[i].id !== player.id
          ) {
            ithasinfield = true;
            break; 
          }
        }
      }

      if (ithasinfield) {
        console.log("This position is already occupied by another player on the field.");
        return;
      }

      updatePlayerStatus(playerid, playerStatu);
    });
  });
}

async function updatePlayerStatus(playerid, playerStatu) {
  const dataplayer = {
    id: playerid,
    status: playerStatu
  };

  try {
    await fetch("../src/serverPhp/updateplayerstatus.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json; charset=utf-8",
      },
      body: JSON.stringify(dataplayer),
    });
    console.log(`Player ${playerid} status updated to ${playerStatu}`);
  } catch (error) {
    console.error('There was a problem with the update operation:', error);
  }
}
