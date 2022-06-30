let progressBar2=document.querySelector(".progress_bar2");
let valueCont2=document.querySelector(".value_cont2");

let progressVal2=0;
let progressEndVal2=document.querySelector(".value_cont2").textContent;;
let lastProgress=document.querySelector(".value_cont1").textContent;
let speed2=15;





    if(progressEndVal2=="0")
    {
        valueCont2.textContent="0%";
        progressBar2.style.background="#E6E6E6";
    }
    else{
        let progress2=setInterval(()=>{
            progressVal2++;
            valueCont2.textContent=`${progressVal2}%`;
            progressBar2.style.background=`conic-gradient(
    #33CDC7 ${progressVal2*3.6}deg,
    #E6E6E6 ${progressVal2*3.6}deg
    )`;
            if(progressVal2==progressEndVal2){
                clearInterval(progress2)
            }
        }, speed2);
    }


