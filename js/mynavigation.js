/*document.getElementById('navigation__dot--in').addEventListener('click',function(){
    document.querySelector('.dropleft').style.transform = "translateX(0)";
    document.querySelector('.dropleft').style.animation = "dropleft .5s ease-in-out";
});
document.getElementById('navigation__dot--out').addEventListener('click',function(){
    document.querySelector('.dropleft').style.transform = "translateX(100vw)";
    document.querySelector('.dropleft').style.animation = "dropright .5s ease-in-out";
});
*/

/***************Accordian**********/
const accordion = document.getElementsByClassName('container');
for (i=0; i<accordion.length; i++) {
  accordion[i].addEventListener('click', function () {
	  //alert(accordion);
    this.classList.toggle('active')
  });
}



window.addEventListener('load', (event) => {
	let preload = document.querySelector('body');
	//alert (preload);
	preload.className += "absActivePage";
});

$(document).ready(function(){
	
	/***********Popups*********/
	//open popup
	$('.cd-popup-trigger').on('click', function(event){
		event.preventDefault();
		$('.cd-popup').addClass('is-visible');
	});
	
	//close popup
	$('.cd-popup').on('click', function(event){
		if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
			event.preventDefault();
			$(this).removeClass('is-visible');
		}
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function(event){
		if(event.which=='27'){
			$('.cd-popup').removeClass('is-visible');
		}
	});
	
	//End open popup
	
	/***************Login form*********/
	$('.toggle').on('click', function() {
	  $('.container').stop().addClass('active');
	});

	$('.close').on('click', function() {
	  $('.container').stop().removeClass('active');
	});
	
	
	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$(".c-header").addClass('header-active');
			$("body").removeClass('absActivePage');
			
		}
		else {
			$(".c-header").removeClass('header-active');
			$("body").addClass('absActivePage');
		}
	});
	

	
	var absSection = $(".about-app");
	
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        // Here You can add your conditions according to your requirments
		//alert(scroll);
        if (scroll == absSection.offset().top ) {
           absSection.addClass('YourClass');
			//alert(scroll);
        } 
    });
	
	
	
	/*
	$(window).scroll(function() {
	   var hT = $('#box1,#box2,#box3,#box4,#box5').offset().top,
		   hH = $('#box1,#box2,#box3,#box4,#box5').outerHeight(),
		   wH = $(window).height(),
		   wS = $(this).scrollTop();
	   if (wS > (hT+hH-wH)){
		  // alert('H1 on the view!');
		  $('#box1').addClass('box1');
		  $('#box2').addClass('box2');
		  $('#box3').addClass('box3');
		  $('#box4').addClass('box4');
		  $('#box5').addClass('box5');
	   }else{
		   $('#box1').removeClass('box1');
	   }
	});
	*/
	
	
	
	/********Video popup*********/
	$(".vpop").on('click', function(e) {
		e.preventDefault();
		$("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();

		var srchref='',autoplay='',id=$(this).data('id');
		if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
		else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";

		if($(this).data('autoplay') == true) autoplay = '?autoplay=1';

		$("#video-popup-iframe").attr('src', srchref+id+autoplay);

		$("#video-popup-iframe").on('load', function() {
			$("#video-popup-container").show();
		});
	});

	$("#video-popup-close, #video-popup-overlay").on('click', function(e) {
		$("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
		$("#video-popup-iframe").attr('src', '');
	});
});

/***************Counter************/
var a = 0;
$(window).scroll(function() {
  var oTop = $('#counter').offset().top - window.innerHeight;
  // Md.Asaduzzaman Muhid
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter').each(function() {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
    });
    a = 1;// Md.Asaduzzaman Muhid
  }
});


/****************Mouse movement*************/

(function() {
	// Init
	var container = document.getElementById("hero-text-wrap"),
	  inner = document.getElementById("hero-text");

	// Mouse
	var mouse = {
		_x: 0,
		_y: 0,
		x: 0,
		y: 0,
		updatePosition: function(event) {
			var e = event || window.event;
			this.x = e.clientX - this._x;
			this.y = (e.clientY - this._y) * -1;
		},
		setOrigin: function(e) {
			this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
			this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
		},
		show: function() {
			return "(" + this.x + ", " + this.y + ")";
		}
	};

	// Track the mouse position relative to the center of the container.
	mouse.setOrigin(container);

	//----------------------------------------------------

	var counter = 0;
	var refreshRate = 10;
	var isTimeToUpdate = function() {
	return counter++ % refreshRate === 0;
	};

	//----------------------------------------------------

	var onMouseEnterHandler = function(event) {
		update(event);
	};

	var onMouseLeaveHandler = function() {
		inner.style = "";
	};

	var onMouseMoveHandler = function(event) {
		if (isTimeToUpdate()) {
			update(event);
		}
	};

	//----------------------------------------------------

	var update = function(event) {
		mouse.updatePosition(event);
		updateTransformStyle(
			(mouse.y / inner.offsetHeight / 2).toFixed(2),
			(mouse.x / inner.offsetWidth / 2).toFixed(2)
		);
	};

	var updateTransformStyle = function(x, y) {
	var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
		inner.style.transform = style;
		inner.style.webkitTransform = style;
		inner.style.mozTranform = style;
		inner.style.msTransform = style;
		inner.style.oTransform = style;
	};

	//--------------------------------------------------------

	container.onmousemove = onMouseMoveHandler;
	container.onmouseleave = onMouseLeaveHandler;
	container.onmouseenter = onMouseEnterHandler;
})();


/* ========== SLIDER  ==========*/

// SELECTORS
const container = document.querySelector('.slider');
const slider = document.querySelector('.slider__slides');
const slides = document.querySelectorAll('.slider__slide');
const prevBtn = document.querySelector('.slider__button--prev');
const nextBtn = document.querySelector('.slider__button--next');
const numSlides = slides.length;

// DETERMINE THE LENGTH REQUIRED TO MOVE HORIZONTALLY TO THE NEXT SLIDE
let slideWidth = slides[0].offsetWidth;
let slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight);
let moveX = slideWidth + slideMarginRight;

// CLONE FIRST AND LAST SLIDES AND ADD TO SLIDER
const firstClone = slides[0].cloneNode(true);
const lastClone = slides[numSlides - 1].cloneNode(true);

firstClone.setAttribute('id', 'first-clone');
lastClone.setAttribute('id', 'last-clone');

slider.appendChild(firstClone);
slider.prepend(lastClone);

const allSlides = document.querySelectorAll('.slider__slide'); //allSlides includes the clones

// SHOW THE FIRST SLIDE
slider.style.transform = `translateX(${-moveX}px)`;

// SET COUNTER AND ADD EVENT LISTENERS TO BUTTON;
// EACH BUTTON CLICK SHOULD MOVE ALL SLIDES HORIZONTALLY BY MOVEX AMOUNT COUNTER TIMES
let counter = 1;

nextBtn.addEventListener('click', () => {
    counter++;
    slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    if (counter >= allSlides.length) counter = numSlides;
    console.log(counter);
});

prevBtn.addEventListener('click', () => {
    counter--;
    slider.style.transition = 'transform 0.5s ease-in-out, opacity 0.2s';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    if (counter < 0) counter = 0
});

// CHECK FOR FIRSTCLONE AND LASTCLONE AND RESET THE SLIDES ACCORDINGLY
slider.addEventListener('transitionend', () => {
    if (allSlides[counter].id === 'first-clone') {
        slider.style.transition = 'none';
        counter = 1;
        slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    }

    if (allSlides[counter].id === 'last-clone') {
        slider.style.transition = 'none';
        counter = numSlides;
        slider.style.transform = `translateX(${-(moveX * counter)}px)`;
    }
});

// ADJUST THE SLIDER POSITION WHEN THE SLIDER/VIEWPORT IS RESIZED
window.addEventListener('resize', () => {
    slideWidth = slides[0].offsetWidth;
    slideMarginRight = parseInt(getComputedStyle(slides[0]).marginRight);
    moveX = slideWidth + slideMarginRight;
    slider.style.transition = 'none';
    slider.style.transform = `translateX(${-(moveX * counter)}px)`;
});

/*********************
Tabs
********************/
// tabs

var tabLinks = document.querySelectorAll(".tablinks");
var tabContent = document.querySelectorAll(".tabcontent");


tabLinks.forEach(function(el) {
   el.addEventListener("click", openTabs);
});


function openTabs(el) {
   var btnTarget = el.currentTarget;
   var country = btnTarget.dataset.tab;

   tabContent.forEach(function(el) {
      el.classList.remove("active");
   });

   tabLinks.forEach(function(el) {
      el.classList.remove("active");
   });

   document.querySelector("#" + country).classList.add("active");
   
   btnTarget.classList.add("active");
}


/*************Sliding toggle button***********/
var toggle = document.getElementById('container');
var toggleContainer = document.getElementById('toggle-container');
var toggleNumber;

toggle.addEventListener('click', function() {
	toggleNumber = !toggleNumber;
	if (toggleNumber) {
		toggleContainer.style.clipPath = 'inset(0 0 0 50%)';
		toggleContainer.style.backgroundColor = '#D74046';
	} else {
		toggleContainer.style.clipPath = 'inset(0 50% 0 0)';
		toggleContainer.style.backgroundColor = 'dodgerblue';
	}
	console.log(toggleNumber)
});