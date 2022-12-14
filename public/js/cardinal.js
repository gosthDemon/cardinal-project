//Variables
let openMenu = document.getElementById('open_menu');
let contentMenu = document.getElementById('content_menu');

let messageIcon = document.getElementById('message_icon');
let notificationIcon = document.getElementById('notification_icon');
let configIcon = document.getElementById('config_icon');
//Functions
openMenu.addEventListener('click',function(e) {
    contentMenu.classList.toggle('close-menu');
});
window.addEventListener("resize", function(){
    if( window.innerWidth <= 1000){
        if(messageIcon.classList.contains('fad')){
            messageIcon.classList.remove('fad');
            messageIcon.classList.add('fas');
        }
        if(notificationIcon.classList.contains('fad')){
            notificationIcon.classList.remove('fad');
            notificationIcon.classList.add('fas');
        }
        if(configIcon.classList.contains('fad')){
            configIcon.classList.remove('fad');
            configIcon.classList.add('fas');
        }
    }else{
        if(messageIcon.classList.contains('fas')){
            messageIcon.classList.remove('fas');
            messageIcon.classList.add('fad');
        }
        if(notificationIcon.classList.contains('fas')){
            notificationIcon.classList.remove('fas');
            notificationIcon.classList.add('fad');
        }
        if(configIcon.classList.contains('fas')){
            configIcon.classList.remove('fas');
            configIcon.classList.add('fad');
        }
    }
    
});