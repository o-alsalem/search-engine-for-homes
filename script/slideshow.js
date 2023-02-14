(function () {
    var curImgId = 0;
    var numberOfImages = 3; // Change this to the number of background images
    window.setInterval(function() {
        $('.content').css('background','url("../img/slideshow/'+ curImgId +'.jpg")');// set the image path here
        curImgId = (curImgId + 1) % numberOfImages;
    }, 3 * 1000);
})();