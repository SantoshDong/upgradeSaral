let count = 0;

let bmockPrev = document.getElementById("bmockPrev");
bmockPrev.style.display = "none";

function mockNext(mbutton) {
    count = count + (mbutton);
    console.log(count);
    let mtpanel = document.querySelectorAll('.mtpanel');
    let mtTabss = document.getElementsByClassName('mtTabs');
    // mtTabss[0].classList.remove("mt-active");
    console.log(mtTabss.length);
    for (let i = 0; i < mtTabss.length; i++) {
        console.log(mtTabss[i]);
        mtTabss[i].classList.remove("mt-active");
        mtTabss[count].classList.add("mt-active")
        // tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    for (let i = 0; i < mtpanel.length; i++) {
        mtpanel[i].style.display = "none";
    }
    console.log(mtpanel.length);
    mtpanel[count].style.display = "block";
    if (count === mtpanel.length - 1) {
        let bmockNext = document.getElementById("bmockNext");
        bmockNext.style.display = "none";
    } else {
        bmockNext.style.display = "block";
    }
    if (count < 1) {
        let bmockPrev = document.getElementById("bmockPrev");
        bmockPrev.style.display = "none";
    } else {
        bmockPrev.style.display = "block";
    }

}

// function myFunction45(a) {
//     // var hh = document.getElementsByClassName('dropdown-content45')[0];
//     a.parentNode.getElementsByClassName('dropdown-content45')[0].classList.toggle("showmk");
//   }