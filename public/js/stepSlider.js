var showDiv1 = document.getElementsByClassName('mySlides')[0];
showDiv1.style.display = "block";
var visibleDiv = 0;

function showDiv(){
  var showDiv1 = document.getElementsByClassName('mySlides');
for(var i = 0; i<showDiv1.length; i++){
  showDiv1[i].style.display = "none";
}
  var showDiv = document.getElementsByClassName('mySlides')[visibleDiv];
   showDiv.style.display = "block";
}
function showNext(){
  var showPrev = document.getElementById('minus-prev');
  var showNext = document.getElementById('plus-next');
  showPrev.style.display = "block";
 if(visibleDiv === 2){
   showNext.style.display = "none";
 }else{
 }
 visibleDiv ++;
 showDiv();
}
function showPrev(){
  var showPrev = document.getElementById('minus-prev');
  var showNext = document.getElementById('plus-next');
  showNext.style.display = "block";
  if(visibleDiv === 1){
    showPrev.style.display = "none";
  }else{
  }
  visibleDiv --;
  showDiv();
 }


 function overDefault(event){
  event.preventDefault();
  event.stopPropagation();
 }
var FileLabelText = document.getElementById("fileLabelText");
function addFiles(event){
  droppedFiles = event.target.files || event.dataTransfer.files;
  showFiles(droppedFiles);
}
function showFiles(files){
if(files.length>1){
  fileLabelText.innerText = "Files Selected";
}else{
  fileLabelText.innerText = files[0].name;
}
var input = document.getElementById('fileElem');
var output = document.getElementById('fileList');
var children = "";
for (var i = 0; i < input.files.length; ++i) {
    children += '<li>' + input.files.item(i).name + '<button class="filex" onclick="addListener(this)">'+ 'X' +'</button>'+'</li>';
}
output.innerHTML = '<ul class="list">'+children+'</ul>';
}
function addListener(e){
e.parentNode.parentNode.removeChild(e.parentNode);
}

function hifive(e){
  e.preventDefault();
  showNext();
}