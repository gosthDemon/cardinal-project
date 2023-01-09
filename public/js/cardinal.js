//Vars
let buttonOpenMenu = document.querySelectorAll('.list__img');
let openMenuButtons = document.querySelectorAll('.open_menu_close');
let menuWeb = document.getElementById('menu_lateral');
let menuMobile = document.getElementById('menu_mobile');
let body = document.getElementById('container_body');
let iconos = document.querySelectorAll('.list__img');
let arrows = document.querySelectorAll('.list__arrow');
let logoBig = document.getElementById('img_logo');
let logoSmall = document.getElementById('img_logo_small');
let newUserButton = document.getElementById('new_user_button');

let containListSecondary = document.querySelectorAll('.contain-list-secondary');

buttonOpenMenu.forEach(button => {
    button.addEventListener('click', ()=>{
        let menu = document.getElementById('menu_lateral');
        if(menu.classList.contains('ocultar-menu')){
            open_menu();
        }
    })
});

openMenuButtons.forEach(openMenuButton => {
    openMenuButton.addEventListener('click',()=>{
        // alert('sdfsd');
        if(window.innerWidth < 768 || window.screen.width < 768){
            menuMobile.classList.toggle('open-menu-mobile');
        }else{
            menuWeb.classList.toggle('ocultar-menu');
            body.classList.toggle('agrandar-body');
            logoBig.classList.toggle('ocultar-logo');
            logoSmall.classList.toggle('aparecer-logo-small');

            iconos.forEach(icon => {
                icon.classList.toggle('static-icon');
            });
            arrows.forEach(arrow => {
                arrow.classList.toggle('delete_arrow');
            });
        }
    });
})

containListSecondary.forEach(openSecondaryList => {
    openSecondaryList.addEventListener('click',()=>{
        $(openSecondaryList).next('.content-secondary-item').toggleClass('open-secondary-list');
    })
});

//Pulso para iconos
window.onload = function(){
    let icons = document.querySelectorAll(".icon-next");

    icons.forEach(icon => {
        var iconClass = icon.classList;
        var padre = icon.parentNode;
        switch( true ){
            case iconClass.contains('bg-red'):
                padre.style.setProperty('--icon-pulse', '#ffabab')
                break;
            case iconClass.contains('bg-blue'):
                padre.style.setProperty('--icon-pulse', '#ACE7FF')
                break;
            case iconClass.contains('bg-green'):
                padre.style.setProperty('--icon-pulse', '#AFF8DB')
                break;
            case iconClass.contains('bg-yellow'):
                padre.style.setProperty('--icon-pulse', '#FFF5BA')
                break;
            case iconClass.contains('bg-lilac'):
                padre.style.setProperty('--icon-pulse', '#F6A6FF')
                break;
            case iconClass.contains('bg-violet'):
                padre.style.setProperty('--icon-pulse', '#B28DFF')
                break;
        }
    })

    //Create Button

}

window.onload = cardinalAnimateForms();

//Animations for Inputs with materlize styles
function cardinalAnimateForms(){
    // alert('hola');
    const inputs = document.querySelectorAll(".cardinal-input");
    const numberInputs = document.querySelectorAll('input[type="number"]');
    const selects = document.querySelectorAll('select');

    inputs.forEach((input) => {
        //when have focus
        input.onfocus = () => {
            $(input).next("label").addClass("focus-input");
        };
        //when it loses focus
        input.addEventListener("blur", () => {
            if (input.value == "" || input.value == null) {
                $(input).next("label").removeClass("focus-input");
                $(input).removeClass("line-focus-input");
            } else {
                if(input.validity.valid){
                        $(input).addClass("line-focus-input");
                        if($(input).hasClass('line-focus-input-invalid')){
                            $(input).removeClass("line-focus-input-invalid");
                        }
                }else{
                    $(input).addClass("line-focus-input-invalid");
                    if($(input).hasClass('line-focus-input')){
                        $(input).removeClass("line-focus-input");
                    }
                }
            }
        });
        //When the input contain something but is disabled.
        if (input.value != "") {
            if (input.disabled) {
                $(input).next("label").addClass("focus-input-disabled");
            } else {
                $(input).addClass("line-focus-input");
                $(input).next("label").addClass("focus-input");
            }
        }

        if(input.type == "date" || input.type =="datetime"){
            $(input).next("label").addClass("focus-input-disabled");
        }
    });
    selects.forEach(select => {
        select.onfocus = () => {
            $(select).next("label").addClass("focus-input");
        };
        select.addEventListener("blur", () => {
            if (select.value == "" || select.value == null) {
                $(select).next("label").removeClass("focus-input");
                $(select).removeClass("line-focus-input");
            } else {
                $(select).next("label").addClass("focus-input");
                $(select).addClass("line-focus-input");
            }
        });
    });
    //Prevent insert "e" in number inputs
    numberInputs.forEach((input) => {
        input.addEventListener("keydown", function (event) {
            if (event.key === "e") {
                event.preventDefault();
            }
        });
    });
}

window.addEventListener('getAlert', event => {
    if(event.detail.type == "error"){
        Toastify({
            text: event.detail.message,
            duration: 5000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
        }).showToast();
    }else if(event.detail.type == 'success'){
        Toastify({
            text: event.detail.message,
            duration: 5000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
        }).showToast();
    }
});


