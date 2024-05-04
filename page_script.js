document.addEventListener('DOMContentLoaded', function() {
const divA = document.getElementById('wrap-in');
const divB = document.getElementById('wrap-out');

const buttonA = document.getElementById('in');
const buttonB = document.getElementById('out');

buttonA.addEventListener('click', () => {
    divA.style.display = 'block';
    buttonA.classList.add('active');
    divB.style.display = 'none';
    buttonB.classList.remove('active');
});

buttonB.addEventListener('click', () => {
    divA.style.display = 'none';
    buttonB.classList.add('active');
    divB.style.display = 'block';
    buttonA.classList.remove('active');
});

var button_color=document.querySelectorAll('.button-color');
var item_coplor= document.querySelectorAll('.item-color');
document.querySelector('.button-color-1').addEventListener('click', function(event){
    button_color.forEach(function(button_color, index) {
       
          button_color.classList.remove('active');
          item_coplor[index].classList.remove('active');
        
      });
    document.querySelector('.button-color-1').classList.add('active');
    item_coplor[0].classList.add('active');
});
document.querySelector('.button-color-2').addEventListener('click', function(event){
    button_color.forEach(function(button_color, index) {
       
          button_color.classList.remove('active');
          item_coplor[index].classList.remove('active');
        
      });
    document.querySelector('.button-color-2').classList.add('active');
    item_coplor[1].classList.add('active');
});
document.querySelector('.button-color-3').addEventListener('click', function(event){
    button_color.forEach(function(button_color, index) {
       
          button_color.classList.remove('active');
          item_coplor[index].classList.remove('active');
        
      });
    document.querySelector('.button-color-3').classList.add('active');
    item_coplor[2].classList.add('active');
});
document.querySelector('.button-color-4').addEventListener('click', function(event){
    button_color.forEach(function(button_color, index) {
       
          button_color.classList.remove('active');
          item_coplor[index].classList.remove('active');
        
      });
    document.querySelector('.button-color-4').classList.add('active');
    item_coplor[3].classList.add('active');
});
});