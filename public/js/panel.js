$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    $('.home-location').select2({
        minimumResultsForSearch: Infinity
    });
    $('.mock-drop').select2({
        minimumResultsForSearch: Infinity
    });
    $('.mock-drop1').select2({
        minimumResultsForSearch: Infinity
    });
    $('.js-example-basic-single').select2();
});

    function mtPanel(envert, mtpanel){
       var mtPanel = document.querySelectorAll(".mtpanel");
       for(var i = 0; i < mtPanel.length; i++){
           mtPanel[i].style.display = "none";
       }
       let mtTabs = document.querySelectorAll('.mtTabs');
       for(let i=0; i<mtTabs.length; i++){
           mtTabs[i].className = mtTabs[i].className.replace(' mt-active', '');
       }
    
       let mtTabsAdd = document.getElementById(mtpanel);
       mtTabsAdd.style.display = 'block';
       envert.currentTarget.className += " mt-active";
    }
    var mtpanel1 = document.getElementsByClassName("mtpanel")[0];
    mtpanel1.style.display = "block";




















