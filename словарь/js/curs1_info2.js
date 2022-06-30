//получаем идентификатор элемента
let tag_2 = document.getElementById('tag_2');
let info_tag_3= document.querySelector(".info_tag_3");
let info_tag_4= document.querySelector(".info_tag_4");
let count2=0;

//вешаем на него событие
tag_2.onclick = function() {
    count2++;
    if(count2%2!=0){
        info_tag_3.style.overflow="none";
        info_tag_3.style.maxHeight="100px";
        info_tag_4.style.overflow="none";
        info_tag_4.style.maxHeight="100px";
    }
    else{
        info_tag_3.style.overflow="hidden";
        info_tag_3.style.maxHeight="0px";
        info_tag_4.style.overflow="none";
        info_tag_4.style.maxHeight="0px";

    }


}