//получаем идентификатор элемента
let tag_3 = document.getElementById('tag_3');
let info_tag_9=document.getElementById('9');
let info_tag_10=document.getElementById('10');
let info_tag_11=document.getElementById('11');
let info_tag_12=document.getElementById('12');
let info_tag_13=document.getElementById('13');
let info_tag_14=document.getElementById('14');
let info_tag_15=document.getElementById('15');
let info_tag_16=document.getElementById('16');

let count3=0;

//вешаем на него событие
tag_3.onclick = function() {
    count3++;
    if(count3%2!=0){
        info_tag_9.style.overflow="none";
        info_tag_9.style.maxHeight="100px";
        info_tag_10.style.overflow="none";
        info_tag_10.style.maxHeight="100px";
        info_tag_11.style.overflow="none";
        info_tag_11.style.maxHeight="100px";
        info_tag_12.style.overflow="none";
        info_tag_12.style.maxHeight="100px";
        info_tag_13.style.overflow="none";
        info_tag_13.style.maxHeight="100px";
        info_tag_14.style.overflow="none";
        info_tag_14.style.maxHeight="100px";
        info_tag_15.style.overflow="none";
        info_tag_15.style.maxHeight="100px";
        info_tag_16.style.overflow="none";
        info_tag_16.style.maxHeight="100px";
    }
    else{
        info_tag_9.style.overflow="hidden";
        info_tag_9.style.maxHeight="0px";
        info_tag_10.style.overflow="none";
        info_tag_10.style.maxHeight="0px";
        info_tag_11.style.overflow="none";
        info_tag_11.style.maxHeight="0px";
        info_tag_12.style.overflow="none";
        info_tag_12.style.maxHeight="0px";
        info_tag_13.style.overflow="none";
        info_tag_13.style.maxHeight="0px";
        info_tag_14.style.overflow="none";
        info_tag_14.style.maxHeight="0px";
        info_tag_15.style.overflow="none";
        info_tag_15.style.maxHeight="0px";
        info_tag_16.style.overflow="none";
        info_tag_16.style.maxHeight="0px";
    }


}