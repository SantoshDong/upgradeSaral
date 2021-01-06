
var tfNext = document.getElementById('tf-next');
var tfPrev = document.getElementById('tf-prev');
tfPrev.style.display = "none";
var Count = 0;
var tuFormTabs = document.getElementsByClassName('tutionFormTabs');
console.log(tuFormTabs);
for(var i = 0; i<tuFormTabs.length; i++){
    tuFormTabs[i].style.display = "none";
}
document.getElementsByClassName('tutionFormTabs')[0].style.display = "block";
function nextFunction(){
// console.log('you');
for(var i = 0; i<tuFormTabs.length; i++){
    tuFormTabs[i].style.display = "none";
}
Count ++;
tfPrev.style.display = "block";
document.getElementsByClassName('tutionFormTabs')[Count].style.display = "block";
if(Count==2){
    tfNext.style.display = "none";
}else{
}
}
function prevFunction(){
    for(var i = 0; i<tuFormTabs.length; i++){
        tuFormTabs[i].style.display = "none";
    }
    Count --;
    tfNext.style.display = "block";
    if(Count < 1){
        tfPrev.style.display = "none";
    }else{
    }
    document.getElementsByClassName('tutionFormTabs')[Count].style.display = "block";
}
