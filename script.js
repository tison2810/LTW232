document.addEventListener('DOMContentLoaded', function() {
    // ********** menu-content **************
    var menuContent = document.querySelector('.menu-content');
    var menuIcon = document.getElementById('menu');
    // Thêm sự kiện click vào toàn bộ trang để ẩn menu-content khi click bên ngoài menu-content
    document.addEventListener('click', function(event) {
        // Nếu click là menu-icon hoặc menu-content thì hiện menu-content
        if (menuContent.contains(event.target) || menuIcon.contains(event.target)) {
            menuContent.classList.add('active');
        }
        // Nếu click không phải là menu-icon hoặc menu-content thì ẩn menu-content
        else{
            menuContent.classList.remove('active');
        }
    });
    // **************************************
    var bodycontent = document.querySelectorAll('.body-content');
    document.querySelector('.gioithieu').addEventListener('click', function(event) {
        // Ngăn chặn hành vi mặc định của thẻ liên kết
        event.preventDefault();
        var gioithieu = document.querySelector('.body-gioi-thieu');
        // Thay đổi nội dung của phần tử
        bodycontent.forEach(function(element) {
            if (element !== gioithieu) {
                element.classList.remove('actives');
            }
        });
        gioithieu.classList.add('actives');
    });
    document.querySelector('.dichvu').addEventListener('click', function(event) {
        // Ngăn chặn hành vi mặc định của thẻ liên kết
        event.preventDefault();
        var dichvu = document.querySelector('.body-dich-vu');
        // Thay đổi nội dung của phần tử
        bodycontent.forEach(function(element) {
            if (element !== dichvu) {
                element.classList.remove('actives');
            }
        });
        dichvu.classList.add('actives');
    });

var slideIndex = 0;
var slides = document.querySelectorAll('.mySlides');
var buttonImg = document.querySelectorAll('.button-img');
showSlides(slideIndex);
document.querySelector('.next').addEventListener('click', function(event){
    slideIndex+=1;
    if(slideIndex==slides.length)
    {
        slideIndex=0;
        removeSlides(slideIndex + slides.length - 1);
        showSlides(slideIndex);
    }
    else
    {
        removeSlides(slideIndex - 1);
        showSlides(slideIndex);
    }
  
});
document.querySelector('.prev').addEventListener('click', function(event){
    slideIndex-=1;
    if(slideIndex<0)
    {
        slideIndex=slides.length-1;
        showSlides(slideIndex);
        removeSlides(slideIndex - slides.length + 1);
    }
    else
    {
        showSlides(slideIndex);
        removeSlides(slideIndex +1);
    }
  
});
function removeSlides(n) {
    var i;
    for (i = 0; i < slides.length; i++) {
      if(i==n)
      {
        buttonImg[i].classList.remove('active');
          slides[i].classList.remove('active');
          break;
      }
    }
    console.log(slideIndex);
  }
function showSlides(n) {
  var i;
  for (i = 0; i < slides.length; i++) {
    if(i==n)
    {
        buttonImg[i].classList.add('active');
        slides[i].classList.add('active');
        break;
    }
  }
}
document.querySelector('.button-1').addEventListener('click', function(event){
    var slideIndex_pre = slideIndex;
    slideIndex=0;

        removeSlides(slideIndex_pre);
        showSlides(slideIndex);
   
});
document.querySelector('.button-2').addEventListener('click', function(event){
    var slideIndex_pre = slideIndex;
    slideIndex=1;

        removeSlides(slideIndex_pre);
        showSlides(slideIndex);
   
});



var carIndex = 0;
var car = document.querySelectorAll('.img-car');
var buttonCar = document.querySelectorAll('.list-button-show-car');
var infoCar = document.querySelectorAll('.V-info-car');
showcar(carIndex);
    // Lấy tất cả các phần tử path trong SVG
    // Duyệt qua từng phần tử path và thêm sự kiện click
    buttonCar.forEach(function(button_show_car,index) {
        button_show_car.addEventListener("click", function() {
            // Nếu đã có chữ được chọn trước đó, đổi màu trở lại màu ban đầu
            var carIndex_pre = carIndex;
            carIndex=index;

        removecar(carIndex_pre);
        showcar(carIndex);
        });
    });




document.querySelector('.show-car .next').addEventListener('click', function(event){
    carIndex+=1;
    if(carIndex==car.length)
    {
        carIndex=0;
        removecar(carIndex + car.length - 1);
        showcar(carIndex);
    }
    else
    {
        removecar(carIndex - 1);
        showcar(carIndex);
    }
  
});
document.querySelector('.show-car .prev').addEventListener('click', function(event){
    carIndex-=1;
    if(carIndex<0)
    {
        carIndex=car.length-1;
        showcar(carIndex);
        removecar(carIndex - car.length + 1);
    }
    else
    {
        showcar(carIndex);
        removecar(carIndex +1);
    }
  
});
function removecar(n) {
    var i;
    for (i = 0; i < car.length; i++) {
      if(i==n)
      {
        var path = buttonCar[i].querySelectorAll("path");
        path.forEach(function(path) {
            path.setAttribute("fill", "#3C3C3C"); // Màu xanh
        });
          car[i].classList.remove('active');
          infoCar[i].classList.remove('active');
          break;
      }
    }
    console.log(carIndex);
  }
function showcar(n) {
  var i;
  for (i = 0; i < car.length; i++) {
    if(i==n)
    {
        var windowWidth = window.innerWidth;
        var x = document.getElementsByClassName('button-show-car')[0];
        if(windowWidth<992)
        {
            x.style.justifyContent="";
            x.style.justifyContent="center";
        }
        buttonCar[i].style.display="flex";
        var path = buttonCar[i].querySelectorAll("path");
        path.forEach(function(path) {
            path.setAttribute("fill", "#1464f4"); // Màu xanh
        });
        car[i].classList.add('active');
        infoCar[i].classList.add('active');
        break;
    }
  }
}



var motorbikeIndex = 0;
var motorbike = document.querySelectorAll('.img-motorbike');
var buttonmotorbike = document.querySelectorAll('.list-button-show-motorbike');
var infomotorbike = document.querySelectorAll('.V-info-motorbike');
showmotorbike(motorbikeIndex);
    // Lấy tất cả các phần tử path trong SVG
    // Duyệt qua từng phần tử path và thêm sự kiện click
    buttonmotorbike.forEach(function(button_show_motorbike,index) {
        button_show_motorbike.addEventListener("click", function() {
            // Nếu đã có chữ được chọn trước đó, đổi màu trở lại màu ban đầu
            var motorbikeIndex_pre = motorbikeIndex;
            motorbikeIndex=index;

        removemotorbike(motorbikeIndex_pre);
        showmotorbike(motorbikeIndex);
        });
    });




document.querySelector('.show-motorbike .next').addEventListener('click', function(event){
    motorbikeIndex+=1;
    if(motorbikeIndex==motorbike.length)
    {
        motorbikeIndex=0;
        removemotorbike(motorbikeIndex + motorbike.length - 1);
        showmotorbike(motorbikeIndex);
    }
    else
    {
        removemotorbike(motorbikeIndex - 1);
        showmotorbike(motorbikeIndex);
    }
  
});
document.querySelector('.show-motorbike .prev').addEventListener('click', function(event){
    motorbikeIndex-=1;
    if(motorbikeIndex<0)
    {
        motorbikeIndex=motorbike.length-1;
        showmotorbike(motorbikeIndex);
        removemotorbike(motorbikeIndex - motorbike.length + 1);
    }
    else
    {
        showmotorbike(motorbikeIndex);
        removemotorbike(motorbikeIndex +1);
    }
  
});
function removemotorbike(n) {
    var i;
    for (i = 0; i < motorbike.length; i++) {
      if(i==n)
      {
        buttonmotorbike[i].style.display="";
        var path = buttonmotorbike[i].querySelectorAll("path");
        path.forEach(function(path) {
            path.setAttribute("fill", "#3C3C3C"); // Màu xanh
        });
          motorbike[i].classList.remove('active');
          infomotorbike[i].classList.remove('active');
          break;
      }
    }
    console.log(motorbikeIndex);
  }
function showmotorbike(n) {
  var i;
  for (i = 0; i < motorbike.length; i++) {
    if(i==n)
    {
        var windowWidth = window.innerWidth;
        var x = document.getElementsByClassName('button-show-motorbike')[0];
        if(windowWidth<992)
        {
            x.style.justifyContent="";
            x.style.justifyContent="center";
        }
        buttonmotorbike[i].style.display="flex";
        var path = buttonmotorbike[i].querySelectorAll("path");
        path.forEach(function(path) {
            path.setAttribute("fill", "#1464f4"); // Màu xanh
        });
        motorbike[i].classList.add('active');
        infomotorbike[i].classList.add('active');
        break;
    }
  }
}
window.addEventListener("resize", function() {
    // Cập nhật lại chiều rộng và chiều cao của khu vực hiển thị trình duyệt sau mỗi lần thay đổi kích thước
    var windowWidth = window.innerWidth;
    var x = document.getElementsByClassName('button-show-motorbike')[0];
    var y = document.getElementsByClassName('button-show-car')[0];
    if(windowWidth<992)
    {
        x.style.justifyContent="";
        x.style.justifyContent="center";
        y.style.justifyContent="";
        y.style.justifyContent="center";
    }
    if(windowWidth>992)
    {
        x.style.justifyContent="";
        x.style.justifyContent="space-between";
        y.style.justifyContent="";
        y.style.justifyContent="space-between";
    }
});
});