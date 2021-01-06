$('#autoresizing').on('input', function () { 
    this.style.height = 'auto'; 
      
    this.style.height =  
            (this.scrollHeight) + 'px'; 
}); 

function dropdownFunction(){
    var tcDropDown = document.getElementById('tc-dropcontent-home');
    if(tcDropDown.style.display == "block"){
        tcDropDown.style.display = "none";
    }else{
        tcDropDown.style.display = "block";
    }
}
function dropdownFunction1(){
    var tcDropDown = document.getElementById('tc-dropcontent-home1');
    if(tcDropDown.style.display == "block"){
        tcDropDown.style.display = "none";
    }else{
        tcDropDown.style.display = "block";
    }
}
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $(document).ready(function(){
    $("#navbarsExampleDefault ul li a").on("click", function(){
        $("#navbarsExampleDefault ul li a").removeClass("top-navbar-active");
          $(this).addClass("top-navbar-active");
        });
  });

  $(document).ready(function(){
    $(".tablinks").on("click", function(){
        console.log('you clicked me');
        $(this).addClass("provinces-hover");
        });
  });