//получаем идентификатор элемента
let tag_1 = document.getElementById('tag_1');
let info_tag_1= document.querySelector(".info_tag_1");
let info_tag_2= document.querySelector(".info_tag_2");
let count1=0;

//вешаем на него событие
tag_1.onclick = function() {
    count1++;
    if(count1%2!=0){
        info_tag_1.style.overflow="none";
        info_tag_1.style.maxHeight="100px";
        info_tag_2.style.overflow="none";
        info_tag_2.style.maxHeight="100px";
    }
    else{
        info_tag_1.style.overflow="hidden";
        info_tag_1.style.maxHeight="0px";
        info_tag_2.style.overflow="none";
        info_tag_2.style.maxHeight="0px";

    }


}