

function showMovie(n) {
    var i;
    var x = document.getElementsByClassName("movie");
    if (n > x.length) {movieCount = 1;} 
    if (n < 1) {movieCount = x.length;} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[movieCount-1].style.display = "block"; 
}

function plusmovie(n) {
    showMovie(movieCount += n);
}
var movieCount = 1;
  showMovie(movieCount);
//carousel code adapted from W3School https://www.w3schools.com/w3css/w3css_slideshow.asp

var booking = new Object(); 
var elem = document.forms[0].elements[0];
booking[elem.id] = elem.value;
