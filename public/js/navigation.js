function myFunction(){
    var udnav = document.getElementsByClassName("ud-nav");
    for (i = 0; i < udnav.length; i++) {
        udnav[i].className = udnav[i].className.replace(" active1", "");
      }
    event.currentTarget.className += " active1";
}
// document.getElementsByClassName('.box')[0].style.display = "block";
// function functionUd(){
//   alert('hero');
//     document.getElementsByClassName('for-ud-notes')[0].style.display = "none";
// }
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
                $('.for-ud-notes').hide();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});

// var reviewBtn = document.getElementById('reviewBtn');
// var reviewBtn1 = document.getElementById('reviewBtn1');
// var reviewBtn2 = document.getElementById('reviewBtn2');

// reviewBtn.addEventListener("click", reviewFunction);
// reviewBtn1.addEventListener("click", reviewFunction1);
// reviewBtn2.addEventListener("click", reviewFunction2);
// function reviewFunction(){
//     var reviewContent = document.getElementsByClassName('review_content')[0];
//     if(reviewContent.style.display === 'block'){
//         reviewContent.style.display = "none";
//     }else{
//         reviewContent.style.display = "block";
//     }
// }
// function reviewFunction1(){
//     var reviewContent1 = document.getElementsByClassName('review_content1')[0];
//     if(reviewContent1.style.display === 'block'){
//         reviewContent1.style.display = "none";
//     }else{
//         reviewContent1.style.display = "block";
//     }
// }
// function reviewFunction2(){
//     var reviewContent2 = document.getElementsByClassName('review_content2')[0];
//     if(reviewContent2.style.display === 'block'){
//         reviewContent2.style.display = "none";
//     }else{
//         reviewContent2.style.display = "block";
//     }
// }
