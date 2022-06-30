//получаем идентификатор элемента
let tag_1 = document.getElementById('tag_1');
let info_tag_1=document.getElementById('1');
let info_tag_2=document.getElementById('2');
let info_tag_3=document.getElementById('3');
let info_tag_4=document.getElementById('4');
let info_tag_5=document.getElementById('5');
let info_tag_6=document.getElementById('6');

let count1=0;

//вешаем на него событие
tag_1.onclick = function() {
    count1++;
    if(count1%2!=0){
        info_tag_1.style.overflow="none";
        info_tag_1.style.maxHeight="100px";
        info_tag_2.style.overflow="none";
        info_tag_2.style.maxHeight="100px";
        info_tag_3.style.overflow="none";
        info_tag_3.style.maxHeight="100px";
        info_tag_4.style.overflow="none";
        info_tag_4.style.maxHeight="100px";
        info_tag_5.style.overflow="none";
        info_tag_5.style.maxHeight="100px";
        info_tag_6.style.overflow="none";
        info_tag_6.style.maxHeight="100px";
    }
    else{
        info_tag_1.style.overflow="hidden";
        info_tag_1.style.maxHeight="0px";
        info_tag_2.style.overflow="none";
        info_tag_2.style.maxHeight="0px";
        info_tag_3.style.overflow="none";
        info_tag_3.style.maxHeight="0px";
        info_tag_4.style.overflow="none";
        info_tag_4.style.maxHeight="0px";
        info_tag_5.style.overflow="none";
        info_tag_5.style.maxHeight="0px";
        info_tag_6.style.overflow="none";
        info_tag_6.style.maxHeight="0px";
    }


}