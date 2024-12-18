let nome = document.getElementById("name");
let btn = document.getElementById("btn");
let selectposition = document.getElementById("selectposition");
let pace = document.querySelector(".pace");
let shooting = document.querySelector(".shooting");
let passing = document.querySelector(".passing");
let dribbling = document.querySelector(".dribbling");
let defending = document.querySelector(".defending");
let physical = document.querySelector(".physical");
let urlphoto = document.querySelector(".urlphoto");
let nationaliteInput = document.querySelector(".nationaliteInput");
let urldrapeau = document.querySelector(".urldrapeau")
let clubname = document.querySelector(".clubname")
let urllogoclub = document.querySelector(".urllogoclub")
let overallrating = document.querySelector(".overallrating")
let paceinput = document.querySelector(".paceinput")
let shootinginput = document.querySelector(".shootinginput")
let errorH2 = document.querySelector(".errorH2");


selectposition.addEventListener("change",()=>{
    if(selectposition.value == "GK")
        {
            pace.innerHTML = "Diving"
            shooting.innerHTML = "Handling"
            passing.innerHTML = "Kicking"
            dribbling.innerHTML = "Reflexes"
            defending.innerHTML = "Speed"
            physical.innerHTML = "Positioning"
        }else if(selectposition.value != "GK")
        {
            pace.innerHTML = "Pace"
            shooting.innerHTML = "Shooting"
            passing.innerHTML = "Passing"
            dribbling.innerHTML = "Dribbling"
            defending.innerHTML = "Defending"
            physical.innerHTML = "Physical"
        }
})

btn.addEventListener("click" , (e)=>{
    e.preventDefault();
    errorH2.innerHTML = ''
    if(nome.value.length > 25 || nome.value == "" || nome.value >= 0 || nome.value <= 0)
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]")
            errorH2.innerHTML= "Name Not valid";
            return;
        }
        if(!((urlphoto.value.startsWith("http://") || urlphoto.value.startsWith("https://")))|| urlphoto.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Input URL de la Photo not valid";
            return;
        }if(nationaliteInput.value == "" || nationaliteInput.value.length > 25)
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Input nationalite not valid";
            return;
        }
        if(!((urldrapeau.value.startsWith("http://") || urldrapeau.value.startsWith("https://")))|| urldrapeau.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Input URL drapeau not valid";
            return;
        }if(clubname.value == "" || clubname.value.length > 25)
            {
                errorH2.innerHTML = ''
                errorH2.classList.add("text-[red]");
                errorH2.textContent = "Input Name Club not valid";
                return;
            }        if(!((urllogoclub.value.startsWith("http://") || urllogoclub.value.startsWith("https://")))|| urllogoclub.value == "")
                {
                    errorH2.innerHTML = ''
                    errorH2.classList.add("text-[red]");
                    errorH2.textContent = "Input URL Logo club not valid";
                    return;
                }
        if(selectposition.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "You must pick position";
            return;
        }
        if(overallrating.value > 99 || overallrating.value < 10  || overallrating.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Overall rating not valid";
            return;  
        }
        if(paceinput.value > 99 || paceinput.value < 0 || paceinput.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Overall Pace not valid";
            return;  
        }
        if(shootinginput.value > 99 || shootinginput.value < 0 || shootinginput.value == "")
        {
            errorH2.innerHTML = ''
            errorH2.classList.add("text-[red]");
            errorH2.textContent = "Overall Shooting not valid";
            return;  
        }
        

});

