const { join } = require("lodash");

$(document).ready(function () {
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
    $('.home-location').select2({
        placeholder:"location",
        minimumResultsForSearch: Infinity
    });
    $('.search-filter-select2').select2({
        placeholder: {
            id: '-1', // the value of the option
            text: 'Select an option'
          }
    })
});
// $(document).ready(function(){ 
//     $('form').find("input[type=text], .select2-search input[type=search], textarea").each(function(ev)
//     {
//         if(!$(this).val()) { 
//        $(this).attr("placeholder", "Type your answer here");
//     }
//     });
//   });

// $(document).ready(function () {
//     $('.basic-multiple').select2({
//         placeholder: " ",
//     });
//     $('.basic-multiple1').select2({
//         placeholder: " ",
//     });
//     $('.basic-multiple2').select2({
//         placeholder: " ",
//     });
//     $('.basic-multiple3').select2({
//         placeholder: " ",
//     });
//     $('.basic-multiple4').select2({
//         placeholder: " ",
//     });
//     $('.basic-multiple5').select2({
//         placeholder: " ",
//     });
// });

function multipleView() {
    var multiple = document.getElementsByClassName("basic-multiple-wrap")[0];
    if (multiple.style.display === "block") {
        multiple.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[0].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[0].style.display = "none";
    } else {
        multiple.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[0].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[0].style.display = "block";
    }
}
// let faicon2 = document.getElementsByClassName('fa-times-wrap')[0];
// if(faicon2.style.display == "block"){
//     faicon1.style.display == "block";
//     faicon2.style.display = "none";
// }else{
//     faicon1.style.display == "none";
//     faicon2.style.display = "block";
// }
function multipleView1() {
    var multiple1 = document.getElementsByClassName("basic-multiple-wrap1")[0];
    if (multiple1.style.display === "block") {
        multiple1.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[0].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[0].style.display = "none";
    } else {
        multiple1.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[0].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[0].style.display = "block";
    }

}

function multipleView2() {
    var multiple2 = document.getElementsByClassName("basic-multiple-wrap2")[0];
    if (multiple2.style.display === "block") {
        multiple2.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[1].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[1].style.display = "none";
    } else {
        multiple2.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[1].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[1].style.display = "block";
    }
}

function multipleView3() {
    var multiple3 = document.getElementsByClassName("basic-multiple-wrap3")[0];
    if (multiple3.style.display === "block") {
        multiple3.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[2].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[2].style.display = "none";
    } else {
        multiple3.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[2].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[2].style.display = "block";
    }
}

function multipleView4() {
    var multiple4 = document.getElementsByClassName("basic-multiple-wrap4")[0];
    if (multiple4.style.display === "block") {
        multiple4.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[3].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[3].style.display = "none";
    } else {
        multiple4.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[3].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[3].style.display = "block";
    }
}

function multipleView5() {
    var multiple5 = document.getElementsByClassName("basic-multiple-wrap5")[0];
    if (multiple5.style.display === "block") {
        multiple5.style.display = "none";
        document.getElementsByClassName('fcd-wrap')[4].style.display="block";
        document.getElementsByClassName('fa-times-wrap')[4].style.display = "none";
    } else {
        multiple5.style.display = "block";
        document.getElementsByClassName('fcd-wrap')[4].style.display="none";
        document.getElementsByClassName('fa-times-wrap')[4].style.display = "block";
    }
}

function myfunction(eve, panel_detail) {
    var panelc = document.getElementsByClassName("panel");
    for (let i = 0; i < panelc.length; i++) {
        panelc[i].style.display = "none";
    }
    var tablinks = document.getElementsByClassName("tablinks");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(panel_detail).style.display = "block";
    eve.currentTarget.className += " active";
}
var panelc = document.getElementsByClassName("panel")[0];
panelc.style.display = "block";
$(function () {

    $('.tab-panels .tabs li').on('click', function () {

        var $panel = $(this).closest('.tab-panels');

        $panel.find('.tabs li.active').removeClass('active');
        $(this).addClass('active');

        //figure out which panel to show
        var panelToShow = $(this).attr('rel');

        //hide current panel
        $panel.find('.panel.active').slideUp(300, showNextPanel);

        //show next panel
        function showNextPanel() {
            $(this).removeClass('active');

            $('#' + panelToShow).slideDown(300, function () {
                $(this).addClass('active');
            });
        }
    });


});

