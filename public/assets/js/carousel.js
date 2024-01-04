//JavaScript Code for Carousell to Play,Pause and slide across videos

let allVids = $("#intro-carousel").find(".carousel-item");

allVids.each(function(index, el) {
    if (index !== 0) {
        $(this).find("video")[0].pause();
    }
});

$("#intro-carousel").on("slide.bs.carousel", function(ev) {
    let slides = $(this).find(".carousel-item");
    let pvid = slides[ev.from].querySelectorAll("video")[0];
    let vid = slides[ev.to].querySelectorAll("video")[0];
    let isPlaying = vid.currentTime > 0 && vid.readyState > 2;

    vid.play();

    if (isPlaying) {
        pvid.pause();
    }
});