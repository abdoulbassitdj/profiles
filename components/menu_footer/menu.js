menu=document.querySelectorAll('.subm');
sm=document.querySelectorAll('.sous_menu_box');

btn=document.querySelector('.btn_top');
users=document.querySelector('.btn_list');

btn.addEventListener('click', () =>  {

    if(users.classList.contains('active')){
        users.classList.remove('active');
    } else {
        users.classList.add('active');
    }
    
})

for (let i = 0; i <= menu.length; i++) {
    
    menu[i].addEventListener('mouseover', showMenu);
    menu[i].addEventListener('mouseout', hideMenu);

    sm[i].addEventListener('mouseover', showMenu);
    sm[i].addEventListener('mouseout', hideMenu);

    function showMenu() {
        sm[i].classList.add('menu_visible');
    }

    function hideMenu() {
        sm[i].classList.remove('menu_visible');
    }

}