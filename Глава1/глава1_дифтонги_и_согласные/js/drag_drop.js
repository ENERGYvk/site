const zone7=document.querySelector("#zone_7");
const zone8=document.querySelector("#zone_8");
const zone9=document.querySelector("#zone_9");
const zone10=document.querySelector("#zone_10");
const zone11=document.querySelector("#zone_11");
const zone12=document.querySelector("#zone_12");

const block_7=document.querySelector("#block_7");
const block_8=document.querySelector("#block_8");
const block_9=document.querySelector("#block_9");
const block_10=document.querySelector("#block_10");
const block_11=document.querySelector("#block_11");
const block_12=document.querySelector("#block_12");

zone7.ondragover=allowdrop;
zone8.ondragover=allowdrop;
zone9.ondragover=allowdrop;
zone10.ondragover=allowdrop;
zone11.ondragover=allowdrop;
zone12.ondragover=allowdrop;


let otv19=document.getElementById('19');
let otv20=document.getElementById('20');
let otv21=document.getElementById('21');
let otv22=document.getElementById('22');
let otv23=document.getElementById('23');
let otv24=document.getElementById('24');

function allowdrop(event){
    event.preventDefault();
}

block_7.ondragstart=drag;
block_8.ondragstart=drag;
block_9.ondragstart=drag;
block_10.ondragstart=drag;
block_11.ondragstart=drag;
block_12.ondragstart=drag;


function drag(event){
    event.dataTransfer.setData('id',event.target.id);
    zone7.style.borderColor='#FF7200';
    zone8.style.borderColor='#FF7200';
    zone9.style.borderColor='#FF7200';
    zone10.style.borderColor='#FF7200';
    zone11.style.borderColor='#FF7200';
    zone12.style.borderColor='#FF7200';
}


block_7.ondragend=end;
block_8.ondragend=end;
block_9.ondragend=end;
block_10.ondragend=end;
block_11.ondragend=end;
block_12.ondragend=end;

function end(event){

    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

zone7.ondrop=drop7;
zone8.ondrop=drop8;
zone9.ondrop=drop9;
zone10.ondrop=drop10;
zone11.ondrop=drop11;
zone12.ondrop=drop12;

function drop7(event){
    let itemId=event.dataTransfer.getData('id');
    zone7.textContent=document.getElementById(itemId).textContent;
    otv19.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

function drop8(event){
    let itemId=event.dataTransfer.getData('id');
    zone8.textContent=document.getElementById(itemId).textContent;
    otv20.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

function drop9(event){
    let itemId=event.dataTransfer.getData('id');
    zone9.textContent=document.getElementById(itemId).textContent;
    otv21.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

function drop10(event){
    let itemId=event.dataTransfer.getData('id');
    zone10.textContent=document.getElementById(itemId).textContent;
    otv22.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

function drop11(event){
    let itemId=event.dataTransfer.getData('id');
    zone11.textContent=document.getElementById(itemId).textContent;
    otv23.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}

function drop12(event){
    let itemId=event.dataTransfer.getData('id');
    zone12.textContent=document.getElementById(itemId).textContent;
    otv24.value=document.getElementById(itemId).textContent;
    zone7.style.borderColor='black';
    zone8.style.borderColor='black';
    zone9.style.borderColor='black';
    zone10.style.borderColor='black';
    zone11.style.borderColor='black';
    zone12.style.borderColor='black';
}
















