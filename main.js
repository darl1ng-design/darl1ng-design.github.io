
/*const counters = document.getElementsByClassName(".countedData");

counters.forEach(countedData =>
    
    {
        countedData.innerText = "0";

const updateCounter = () => {

    const text = countedData.innerText;

    const increment = text;

    if(text < target) 
    {
        countedData.innerText = `${Math.ceil(text + increment)}`;
       setTimeout (updateCounter, 1);
    }
    else {
        countedData.innerText=target; 
    }

}

updateCounter();
    });
*/




let messageArray = [" START WRITING WEBSITES WITH US "];
let textPosition = 0;
let speedMessage = 100;


typewriter = () => {
     document.querySelector(".main-div-one").
     innerHTML = messageArray[0].substring(0, textPosition) + "<span> | </span>";

     if (textPosition++ != messageArray[0].length)
     setTimeout(typewriter, speedMessage);


     else 
     document.querySelector(".main-div-one").
     innerHTML = messageArray[0];
}   
window.addEventListener("load", typewriter);





 



