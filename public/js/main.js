let bar_nav = document.getElementById('bar_nav');
window.addEventListener('scroll', function(){
    if(window.scrollY > 0){
        bar_nav.classList.add('show-nav-bar');
    }
    if(window.scrollY == 0){
        bar_nav.classList.remove('show-nav-bar');
    }
});