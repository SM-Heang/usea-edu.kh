document.addEventListener('DOMContentLoaded', function() {
let theEnd =0;
const height =500;
    goto = document.getElementById('goto');
    window.addEventListener('scroll', function(){
        var scrollTop = window.pageXOffset || document.documentElement.scrollTop;
        if(scrollTop >= height && scrollTop > theEnd){
            goto.classList.add('goto-active');
        }
        else{
            goto.classList.remove('goto-active');
        }
        theEnd = scrollTop;
    });
});