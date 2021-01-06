function anaPanel(eventt, anaPanel){
    var anapanel = document.querySelectorAll('.anapanel'); 
    for(var i = 0; i < anapanel.length; i++){
         anapanel[i].style.display = "none";
     }
     var anaTabs = document.querySelectorAll('.anaTabs');
     for(var i = 0; i < anaTabs.length; i++){
         anaTabs[i].className = anaTabs[i].className.replace(' ana-active', '');
     }
     let anaTabsAdd = document.getElementById(anaPanel);
     anaTabsAdd.style.display = "block";
     eventt.currentTarget.className += " ana-active";
  }
   var anapanel1 = document.getElementsByClassName('anapanel')[0];
   anapanel1.style.display = "block";
  