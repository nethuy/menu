var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 10);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
// end loader 

var width = 1296;
var height = 762;
window.moveTo((screen.availWidth/2)-(width/2),(screen.availHeight/2)-(height/2))
window.resizeTo(width,height);
window.onresize = function() {window.resizeTo(width,height); }
// end resize windows /

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
// end tab menu 