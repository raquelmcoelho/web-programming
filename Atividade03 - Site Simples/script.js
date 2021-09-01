function playMyTale(taleName) {
    var audio = document.getElementById(taleName)
    console.log(taleName)
    audio.play()
}
// // JavaScript demonstration
// function doDemo (taleName) {
//     var square = document.getElementById("square");
//     // square.style.backgroundColor = "#fa4";
//     // button.setAttribute("disabled", "true");
    
//     square.play()
//     //setTimeout(clearDemo, 1500, button);
// }

// function clearDemo (taleName) {
//     var square = document.getElementById("square");
//     // square.style.backgroundColor = "transparent";
//     // button.removeAttribute("disabled");
//     square.pause()
// }

// var audio = document.getElementById("square");
// $("#square").mouseenter(function() { audio.play();});