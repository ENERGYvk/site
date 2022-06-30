const zone1=document.querySelector("#zone_1");
const zone2=document.querySelector("#zone_2");
const zone3=document.querySelector("#zone_3");
const zone4=document.querySelector("#zone_4");

const block_1=document.querySelector("#block_1");
const block_2=document.querySelector("#block_2");
const block_3=document.querySelector("#block_3");
const block_4=document.querySelector("#block_4");


zone1.ondragover=allowdrop;
zone2.ondragover=allowdrop;
zone3.ondragover=allowdrop;
zone4.ondragover=allowdrop;


function allowdrop(event){
    event.preventDefault();
}

block_1.ondragstart=drag;
block_2.ondragstart=drag;
block_3.ondragstart=drag;
block_4.ondragstart=drag;

function drag(event){
    event.dataTransfer.setData('id',event.target.id);
    zone1.style.borderColor='#FF7200';
    zone2.style.borderColor='#FF7200';
    zone3.style.borderColor='#FF7200';
    zone4.style.borderColor='#FF7200';
}


block_1.ondragend=end;
block_2.ondragend=end;
block_3.ondragend=end;
block_4.ondragend=end;

function end(event){

    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
}

zone1.ondrop=drop;
zone2.ondrop=drop2;
zone3.ondrop=drop3;
zone4.ondrop=drop4;

function drop(event){
    let itemId=event.dataTransfer.getData('id');
    zone1.textContent=document.getElementById(itemId).textContent;
    let otv6=document.getElementById('otv_6');
    otv6.value=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
}

function drop2(event){
    let itemId=event.dataTransfer.getData('id');
    zone2.textContent=document.getElementById(itemId).textContent;
    let otv7=document.getElementById('otv_7');
    otv7.value=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
}

function drop3(event){
    let itemId=event.dataTransfer.getData('id');
    zone3.textContent=document.getElementById(itemId).textContent;
    let otv8=document.getElementById('otv_8');
    otv8.value=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
}

function drop4(event){
    let itemId=event.dataTransfer.getData('id');
    zone4.textContent=document.getElementById(itemId).textContent;
    let otv9=document.getElementById('otv_9');
    otv9.value=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
}


















