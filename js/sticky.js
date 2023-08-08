let theEnd = 0;
let height = 600; // Set an appropriate height value in pixels
const goto = document.getElementById('goto');

window.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop >= height && scrollTop > theEnd) {
        goto.style.visibility = "visible";
        goto.style.opacity = "1";
    }else {
        goto.style.visibility = "hidden";
        goto.style.opacity = "0";
    }

    theEnd = scrollTop;
});