var ePanel1 = document.getElementById('ePanel1');
ePanel1.style.display = "block";

function expertFunction(evt,epanele){
var epanelink = document.getElementsByClassName('epanel-link');
var epanel = document.getElementsByClassName('epanel');
for(var i = 0; i < epanel.length; i++){
epanel[i].style.display = "none";
}
for(var i = 0; i < epanelink.length; i++){
    epanelink[i].className = epanelink[i].className.replace('ePanel-hover', '');
}
var epanels = document.getElementById(epanele);
epanels.style.display = "block";
evt.currentTarget.className += " ePanel-hover";
}

document.getElementById('epanel-link-1s').addEventListener("click",function(){
    document.getElementsByClassName('anapanel')[0].style.display = "block";
});
document.getElementById('epanel-link-2s').addEventListener("click",function(){
    document.getElementsByClassName('anapanel')[4].style.display = "block";
});
// var epaneli = document.getElementsByClassName("epanel3")[0];
// epaneli.style.display = "block";

// function expertFunction1(evt,epanele){
//     var epanelii = document.getElementsByClassName('eepanel');
//     var epaneliii = document.getElementsByClassName('epanel-link1');
//     for(var i = 0; i < epanelii.length; i++){
//         epanelii[i].style.display = "none";
//         }
//     for(var i = 0; i < epaneliii.length;i++){
//         epaneliii[i].className = epaneliii[i].className.replace('ePanel-hover', '');
//     }
//     if(document.getElementById(epanele) === 'epanel4'){
//      var expanel = document.getElementsByClassName('epanel4');
//      for(var i = 0; i<expanel.length;i++){
//          expanel[i].style.display = "block";
//      }
//     }
//     evt.currentTarget.className += " ePanel-hover";  
    
// }

