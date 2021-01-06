let logsinl = document.querySelector('.logsin-form-l');
let logsinr = document.querySelector('.logsin-form-r');
let logsinl1 = document.querySelector('.logsin-form-l1');
let logsinr1 = document.querySelector('.logsin-form-r1');


function signupSaral(){
    logsinl.style.display = "none";
    logsinr.style.display = "none";
    logsinl1.style.display = "block";
    logsinr1.style.display = "block";
}   
function signupSaral1(){
    logsinl.style.display = "block";
    logsinr.style.display = "block";
    logsinl1.style.display = "none";
    logsinr1.style.display = "none";
}
document.mainForm.onclick = function(){
    var result = document.getElementById("top-option");
    let university = document.querySelector('input[name = University]:checked').value;
    result.innerHTML = university;
}
document.mainForm2.onclick = function(){
    var result = document.getElementById("top-option1");
    let Slevel = document.querySelector('input[name = level]:checked').value;
    result.innerHTML = Slevel;
}
document.mainForm3.onclick = function(){
    var result = document.getElementById("top-option2");
    let Slevel = document.querySelector('input[name = stream]:checked').value;
    result.innerHTML = Slevel;
}
document.mainForm4.onclick = function(){
    var result = document.getElementById("top-option3");
    let Slevel = document.querySelector('input[name = course]:checked').value;
    result.innerHTML = Slevel;
}
document.mainForm5.onclick = function(){
    var result = document.getElementById("top-option4");
    let Slevel = document.querySelector('input[name = semester]:checked').value;
    result.innerHTML = Slevel;
}
 
function circleFunction(){
    var fcircle = document.getElementsByClassName("dropdown-content")[0];
    console.log(fcircle);
    if(fcircle.style.display == "block"){
        fcircle.style.display = "none";
    }else{
        fcircle.style.display = "block";
    }
}

function circleFunction1(){
    var fcircle = document.getElementsByClassName("dropdown-content")[1];
    console.log(fcircle);
    if(fcircle.style.display == "block"){
        fcircle.style.display = "none";
    }else{
        fcircle.style.display = "block";
    }
}