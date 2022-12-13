//Variables

let openMenu = document.getElementById('open_menu');
let contentMenu = document.getElementById('content_menu');
openMenu.addEventListener('click',function(e) {
    contentMenu.classList.toggle('close-menu');
});