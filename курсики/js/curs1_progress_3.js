let progressBar3=document.querySelector(".progress_bar3");
let valueCont3=document.querySelector(".value_cont3");

let progressVal3=0;
let progressEndVal3=document.querySelector(".value_cont3").textContent;;
let lastProgress2=document.querySelector(".value_cont2").textContent;
let speed3=15;





    if(progressEndVal3=="0")
    {
        valueCont3.textContent="0%";
        progressBar3.style.background="#E6E6E6";
    }
    else {
        let progress3=setInterval(()=>{
        progressVal3++;
        valueCont3.textContent=`${progressVal3}%`;
        progressBar3.style.background=`conic-gradient(
    #33CDC7 ${progressVal3*3.6}deg,
    #E6E6E6 ${progressVal3*3.6}deg
    )`;
        if(progressVal3==progressEndVal3){
            clearInterval(progress3)
        }
    }, speed3);

    }


