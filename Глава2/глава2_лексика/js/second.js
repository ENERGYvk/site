const zone1=document.querySelector("#zone_1");
const zone2=document.querySelector("#zone_2");
const zone3=document.querySelector("#zone_3");
const zone4=document.querySelector("#zone_4");
const zone5=document.querySelector("#zone_5");
const zone6=document.querySelector("#zone_6");
const zone7=document.querySelector("#zone_7");

const block_1=document.querySelector("#block_1");
const block_2=document.querySelector("#block_2");
const block_3=document.querySelector("#block_3");
const block_4=document.querySelector("#block_4");
const block_5=document.querySelector("#block_5");
const block_6=document.querySelector("#block_6");
const block_7=document.querySelector("#block_7");

zone1.ondragover=allowdrop;
zone2.ondragover=allowdrop;
zone3.ondragover=allowdrop;
zone4.ondragover=allowdrop;
zone5.ondragover=allowdrop;
zone6.ondragover=allowdrop;
zone7.ondragover=allowdrop;

function allowdrop(event){
    event.preventDefault();
}

block_1.ondragstart=drag;
block_2.ondragstart=drag;
block_3.ondragstart=drag;
block_4.ondragstart=drag;
block_5.ondragstart=drag;
block_6.ondragstart=drag;
block_7.ondragstart=drag;

function drag(event){
    event.dataTransfer.setData('id',event.target.id);
    zone1.style.borderColor='#FF7200';
    zone2.style.borderColor='#FF7200';
    zone3.style.borderColor='#FF7200';
    zone4.style.borderColor='#FF7200';
    zone5.style.borderColor='#FF7200';
    zone6.style.borderColor='#FF7200';
    zone7.style.borderColor='#FF7200';
}


block_1.ondragend=end;
block_2.ondragend=end;
block_3.ondragend=end;
block_4.ondragend=end;
block_5.ondragend=end;
block_6.ondragend=end;
block_7.ondragend=end;

function end(event){

    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';

}

zone1.ondrop=drop;
zone2.ondrop=drop2;
zone3.ondrop=drop3;
zone4.ondrop=drop4;
zone5.ondrop=drop5;
zone6.ondrop=drop6;
zone7.ondrop=drop7;

function drop(event){
    let itemId=event.dataTransfer.getData('id');
    zone1.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}

function drop2(event){
    let itemId=event.dataTransfer.getData('id');
    zone2.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}

function drop3(event){
    let itemId=event.dataTransfer.getData('id');
    zone3.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}

function drop4(event){
    let itemId=event.dataTransfer.getData('id');
    zone4.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}

function drop5(event){
    let itemId=event.dataTransfer.getData('id');
    zone5.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}

function drop6(event){
    let itemId=event.dataTransfer.getData('id');
    zone6.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}


function drop7(event){
    let itemId=event.dataTransfer.getData('id');
    zone7.textContent=document.getElementById(itemId).textContent;
    zone1.style.borderColor='black';
    zone2.style.borderColor='black';
    zone3.style.borderColor='black';
    zone4.style.borderColor='black';
    zone5.style.borderColor='black';
    zone6.style.borderColor='black';
    zone7.style.borderColor='black';
}














