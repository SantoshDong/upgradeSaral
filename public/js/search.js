let filterSearch = document.getElementById("filterSearchy");
filterSearch.addEventListener('keyup',filterSearch1);
function filterSearch1(){
var filterValue = document.getElementById("filterSearchy").value.toUpperCase();
var bm = document.getElementById("basic-multiple-radio");
var bm1 = bm.getElementsByTagName('a');
for(let i = 0; i < bm1.length; i++){
 let label = bm1[i].getElementsByTagName('label')[0];
 if(label){
     var textvalue = label.textContent || TextDecoder.innerHTML;
     if(textvalue.toUpperCase().indexOf(filterValue)>-1){
      bm1[i].style.display = "";   
     }else{
         bm1[i].style.display = "none";
     }
    }
}
}


let filterSearchy2 = document.getElementById("filterSearchy2");
filterSearchy2.addEventListener('keyup',ffilterSearchy2);
function ffilterSearchy2(){
let filterValue = document.getElementById("filterSearchy2").value.toUpperCase();
let bm = document.getElementById("basic-multiple-radio2");
let bm1 = bm.getElementsByTagName('a');
for(let i = 0; i < bm1.length; i++){
 let label = bm1[i].getElementsByTagName('label')[0];
 if(label){
     let textvalue = label.textContent || TextDecoder.innerHTML;
     if(textvalue.toUpperCase().indexOf(filterValue)>-1){
      bm1[i].style.display = "";  
     }else{
         bm1[i].style.display = "none";
     }
    }
}
}


let filterSearchy3 = document.getElementById("filterSearchy3");
filterSearchy3.addEventListener('keyup',ffilterSearchy3);
function ffilterSearchy3(){
let filterValue = document.getElementById("filterSearchy3").value.toUpperCase();
let bm = document.getElementById("basic-multiple-radio3");
let bm1 = bm.getElementsByTagName('a');
for(let i = 0; i < bm1.length; i++){
 let label = bm1[i].getElementsByTagName('label')[0];
 if(label){
     let textvalue = label.textContent || TextDecoder.innerHTML;
     if(textvalue.toUpperCase().indexOf(filterValue)>-1){
      bm1[i].style.display = "";  
     }else{
         bm1[i].style.display = "none";
     }
    }
}
}





let filterSearchy4 = document.getElementById("filterSearchy4");
filterSearchy4.addEventListener('keyup',ffilterSearchy4);
function ffilterSearchy4(){
let filterValue = document.getElementById("filterSearchy4").value.toUpperCase();
let bm = document.getElementById("basic-multiple-radio4");
let bm1 = bm.getElementsByTagName('a');
for(let i = 0; i < bm1.length; i++){
 let label = bm1[i].getElementsByTagName('label')[0];
 if(label){
     let textvalue = label.textContent || TextDecoder.innerHTML;
     if(textvalue.toUpperCase().indexOf(filterValue)>-1){
      bm1[i].style.display = "";  
     }else{
         bm1[i].style.display = "none";
     }
    }
}
}


let filterSearchy5 = document.getElementById("filterSearchy5");
filterSearchy5.addEventListener('keyup',ffilterSearchy5);
function ffilterSearchy5(){
let filterValue = document.getElementById("filterSearchy5").value.toUpperCase();
let bm = document.getElementById("basic-multiple-radio5");
let bm1 = bm.getElementsByTagName('a');
for(let i = 0; i < bm1.length; i++){
 let label = bm1[i].getElementsByTagName('label')[0];
 if(label){
     let textvalue = label.textContent || TextDecoder.innerHTML;
     if(textvalue.toUpperCase().indexOf(filterValue)>-1){
      bm1[i].style.display = "";  
     }else{
         bm1[i].style.display = "none";
     }
    }
}
}