var filterValue1 = 0;
var currentIndex = 0;

var spaginPrev = document.getElementById('spagin-prev');
var spaginNext = document.getElementById('spagin-next');
var filterValue = document.getElementById("nani");
var sSyllableShow = document.getElementsByClassName("whole-syllable");
var showTotal = document.getElementsByClassName("showTotal")[0];
showTotal.innerHTML = "/" + sSyllableShow.length;
console.log("showtotal"+showTotal);
// for(var i = 1; i< sSyllableShow.length; i++){
//     document.getElementsByClassName('whole-syllable')[i].style.display = "none";
// }
isFist();
function addSyllbleList() {
    var cbsItems5 = document.getElementsByClassName("csb-items");
    for (i = 0; i < cbsItems5.length; i++) {
        console.log(cbsItems5[i]);
        cbsItems5[i].className = cbsItems5[i].className.replace(" csbAdd", "");
    }
    var cbsItems6 = document.getElementsByClassName("csb-items")[filterValue1 - 1];
    cbsItems6.className += " csbAdd";
}

function hideSyllable() {
    for (var i = 0; i < sSyllableShow.length; i++) {
        document.getElementsByClassName('whole-syllable')[i].style.display = "none";
    }
}
filterValue.addEventListener('click', sfilter);

function sfilter() {
    filterValue1 = document.getElementById('sfilter').value;
    console.log("top" + filterValue1);
    hideSyllable();
     if (filterValue1 <= sSyllableShow.length && filterValue1 >= 1) {
        document.getElementsByClassName('whole-syllable')[filterValue1 - 1].style.display = "block";
    }else{
        alert("please Enter number between 1 to" + sSyllableShow.length);
        document.getElementsByClassName("whole-syllable")[0].style.display = "block";
        document.getElementById('sfilter').value = 1;
        // if(document.getElementById('sfilter').value == 1){
        //     spaginPrev.style.display = "none";
        // }
    }
    currentIndex = filterValue1;
    addSyllbleList();
 
    // else if(currentIndex === filterValue.length){
    // //     spaginNext.style.display = "none";
    // // }
}
// function checkCurrentIndex(){
//     var sSyllableShow = document.getElementsByClassName("whole-syllable");
//     if (currentIndex  >= sSyllableShow.length && currentIndex < 0) {
//         currentIndex = 1;
//         filterValue = 1;
//     }
// }
filterValue1 = document.getElementById('sfilter').value;
var currentIndex = filterValue1;
// console.log('check' + filterValue1); 
// next and prev styllable working
function gotoPrevss() {
    // currentIndex = filterValue1;
    hideSyllable();
    filterValue1--;
    document.getElementById('sfilter').value = filterValue1;
    currentIndex--;
    document.getElementsByClassName('whole-syllable')[currentIndex - 1].style.display = "block";
    addSyllbleList();
    isFist();
    isLast();
}

function gotoNextss() {
    hideSyllable();
    filterValue1++;
    document.getElementById('sfilter').value = filterValue1;
    document.getElementsByClassName('whole-syllable')[currentIndex].style.display = "block";
    currentIndex++;
    addSyllbleList();
    isFist();
    isLast();
}

function isFist() {
    if (currentIndex === 1 || filterValue1 < 1) {
        spaginPrev.style.display = "none";
    } else {
        spaginPrev.style.display = "block";
    }
}

function isLast() {
    var sSyllableShow = document.getElementsByClassName("whole-syllable");
    if (currentIndex >= sSyllableShow.length || filterValue1 >= sSyllableShow.length) {
        spaginNext.style.display = "none";
    } else {
        spaginNext.style.display = "block";
    }
}
function spaginGo(){
    var sSyllableShow = document.getElementsByClassName("whole-syllable");
    filterValue10 = document.getElementById('sfilter').value;
    console.log("run" + filterValue10);
    if(filterValue10 > sSyllableShow.length || filterValue10 <= 0){
        spaginPrev.style.display = "none";
        spaginNext.style.display = "none";
    }else{
        spaginPrev.style.display = "block";
        spaginNext.style.display = "block";
    }
    if(filterValue10 == 1){
        spaginPrev.style.display = "none";
    }
    }