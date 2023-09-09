document.addEventListener('DOMContentLoaded', function() {
let theEnd =0;
const height =500;
    goto = document.getElementById('goto');
    window.addEventListener('scroll', function(){
        var scrollTop = window.scrollY || document.documentElement.scrollTop;
         max = window.innerHeight + window.scrollY;
         body = document.body.scrollHeight;
        if((scrollTop >= height && scrollTop > theEnd) || max >= body){
            goto.classList.add('goto-active');
        }
        else{
            goto.classList.remove('goto-active');
        }
        theEnd = scrollTop;
    });
});