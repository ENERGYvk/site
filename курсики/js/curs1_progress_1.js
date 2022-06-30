let progressBar=document.querySelector(".progress_bar1");
let valueCont=document.querySelector(".value_cont1");


let progressVal=0;
let progressEndVal=document.querySelector(".value_cont1").textContent;
let speed=15;

if(progressEndVal=="0")
{
    valueCont.textContent="0%";
    progressBar.style.background="#E6E6E6";
}
else
{
    let progress=setInterval(()=>{
        progressVal++;
        valueCont.textContent=`${progressVal}%`;
        progressBar.style.background=`conic-gradient(
    #33CDC7 ${progressVal*3.6}deg,
    #E6E6E6 ${progressVal*3.6}deg
    )`;
        if(progressVal==progressEndVal){
            clearInterval(progress)
        }
    }, speed);
}
