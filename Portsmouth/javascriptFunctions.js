function scrollFunction(){
    
    var backgroundImage = document.getElementById("backgroundImage");
    backgroundImage.body = backgroundImage.body + document.body.scrollTop;
}