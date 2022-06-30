let progressBar=document.querySelector(".progress_bar1");
let valueCont=document.querySelector(".value_cont");

let progressVal=0;
let progressEndVal=document.querySelector(".value_cont").textContent;
let speed=15;

if(progressEndVal=="0")
{
    valueCont.style.fontSize="25px";
    valueCont.style.margin="40px";
    valueCont.textContent="0%";
}
else {
    let progress=setInterval(()=>{
        progressVal++;
        valueCont.textContent=`${progressVal}% `;
        progressBar.style.background=`conic-gradient(
        #33CDC7 ${progressVal*3.6}deg,
        #E6E6E6 ${progressVal*3.6}deg
        )`;
        if(progressVal==progressEndVal){
            clearInterval(progress)
        }
    }, speed);
}



let progressBar2=document.querySelector(".progress_bar2");
let valueCont2=document.querySelector(".value_cont2");

let progressVal2=0;
let progressEndVal2=document.querySelector(".value_cont2").textContent;
let speed2=15;


if(progressEndVal!=100){
    valueCont2.style.fontSize="25px";
    valueCont2.style.margin="40px";
    valueCont2.textContent="Замочек";
}
else if(progressEndVal2==0)
{
    valueCont2.style.fontSize="25px";
    valueCont2.style.margin="40px";
    valueCont2.textContent="0%";
}
else {
    let progress2=setInterval(()=>{
        progressVal2++;
        valueCont2.textContent=`${progressVal2}% `;
        progressBar2.style.background=`conic-gradient(
     #33CDC7 ${progressVal2*3.6}deg,
     #E6E6E6 ${progressVal2*3.6}deg
    )`;
        if(progressVal2==progressEndVal2){
            clearInterval(progress2)
        }
    }, speed2);
}

