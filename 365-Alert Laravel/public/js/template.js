// variable to select the navigation menu
const navigation = document.querySelector('#navigation');

// variable to select the navigation button (hamburguer)
const button = document.querySelector('#action')

// function to toggle the class of opened on the menu to move hide/show it
function open() {
    navigation.classList.toggle('opened');
}
button.addEventListener('click', open);


// // simple template page
// // variable to select the navigation menu
// const navTwo = document.querySelector('#nav-two');

// // variable to select the navigation button (hamburguer)
// const button = document.querySelector('#action')

// // function to toggle the class of opened on the menu to move hide/show it
// function open() {
//     navTwo.classList.toggle('opened');
// }
// button.addEventListener('click', open);