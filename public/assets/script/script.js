var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    autoplay:true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });


  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    autoplay:true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
    },
  });


  var swiper3 = new Swiper(".mySwiper3", {
    loop:true,
    crossFade:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });





let counters = [
    { element: document.getElementById('counter1'), isCounting: false, count: 0, target: 10 },   
    { element: document.getElementById('counter2'), isCounting: false, count: 0, target: 256 },   
    { element: document.getElementById('counter3'), isCounting: false, count: 0, target: 112 }  
];

function startCounting(counter) {
    counter.count = 0;
    counter.element.textContent = counter.count;
    counter.isCounting = true;

    let interval = setInterval(function () {
        if (counter.count < counter.target) {
            counter.count++;
            counter.element.textContent = counter.count;
        } else {
            clearInterval(interval);
            counter.isCounting = false; 
        }
    }, 25); 
}

window.addEventListener('scroll', function () {
    counters.forEach(function(counter) {
        let counterPosition = counter.element.getBoundingClientRect().top;
        let screenPosition = window.innerHeight;

        if (counterPosition < screenPosition && !counter.isCounting) {
            startCounting(counter);
        }
    });
});
$(document).ready(function () {
    let currentIndex = 0; 
    const items = $('.carousel-item'); 
    const itemCount = items.length; 
    const controls = $('.control-btn'); 
    const intervalTime = 6000; 
    let slideInterval; 

    function showImage(index) {
        $('.carousel-inner').css('transform', 'translateX(' + (-currentIndex * 100) + '%)');
        controls.removeClass('active-btn'); 
        controls.eq(index).addClass('active-btn'); 
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % itemCount; 
        showImage(currentIndex);
    }

  
    function resetTimer() {
        clearInterval(slideInterval); 
        slideInterval = setInterval(nextSlide, intervalTime); 
    }

    
    $('#nextBtn').click(function () {
        nextSlide(); 
        resetTimer();
    });

   
    $('#prevBtn').click(function () {
        currentIndex = (currentIndex - 1 + itemCount) % itemCount; 
        showImage(currentIndex); 
        resetTimer(); 
    });

    
    controls.click(function () {
        currentIndex = $(this).data('index');
        showImage(currentIndex); 
        resetTimer(); 
    });

    
    showImage(currentIndex);

    
    slideInterval = setInterval(nextSlide, intervalTime); 
});

document.addEventListener("DOMContentLoaded", function() {
    var btn = document.getElementById("back-to-top");
  
    window.addEventListener("scroll", function() {
        if (window.pageYOffset > 100) { 
            btn.style.display = "block";
        } else {
            btn.style.display = "none";
        }
    });
  
    btn.addEventListener("click", function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
  });
  
  
