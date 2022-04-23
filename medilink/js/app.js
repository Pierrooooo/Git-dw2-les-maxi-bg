// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ BURGER MENU ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

let burgerMenu = document.querySelector('.burger_menu')
let burger1 = document.querySelector('.burger1')
let burger2 = document.querySelector('.burger2')
let burger3 = document.querySelector('.burger3')
let list = document.querySelector('nav ul')

var count = 0
burgerMenu.addEventListener('click', function () {
    count += 1

    if (count % 2) {
        list.style.transform = 'translateY(50%)'
        burger1.style.transform = 'translate(50%, 300%) rotate(-45deg) scaleX(2.2)'
        burger2.style.transform = 'rotate(45deg)'
        burger3.style.transform = 'scale(0)'
    }
    else {
        list.style.transform = 'translateY(-120%)'
        burger1.style.transform = 'translate(0) rotate(0) scaleX(1)'
        burger2.style.transform = 'rotate(0)'
        burger3.style.transform = 'scale(1)'
    }
    
})

console.log('epiaéoydpçaéh')

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END BURGER MENU ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

