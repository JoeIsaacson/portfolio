/*Get history URLS*/
chrome.history.getVisits(object details, function callback);

/*Go Fullscreen*/

var elem = document.getElementById("body");
if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) {
  elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) {
  elem.webkitRequestFullscreen();
}