var websiteZindex = 11;
var websiteCurrent = 1;
var websiteNext = 0;

var websiteSlideOne = {
    in : function(){
        document.querySelector('.website__slide--1').style.display = "block";
        document.querySelector('.website__slide--1').style.animation = "websiteSlideUp 4s";
        document.querySelector('.website__slide--1').style.zIndex = ++websiteZindex;
        document.querySelector('.website__slide--1__iphone').style.animation = "websiteSlide1iphone 4s";
        document.querySelector('.website__slide--1__ipad').style.animation = "websiteSlide1ipad 4s";
        document.querySelector('.website__slide--1__macbook').style.animation = "websiteSlide1macbook 4s";
        document.querySelector('.website__slide--left--1').style.animation = "websiteParagraphIn 4s";
        document.querySelector('.website__slide--1__iphone--image div').style.animation = "websiteSlide1image 4s";
        document.querySelector('.website__slide--1__ipad--image div').style.animation = "websiteSlide1image 4s";
        document.querySelector('.website__slide--1__macbook--image div').style.animation = "websiteSlide1image 4s";
    },
    out : function(){
        setTimeout(function(){
            document.querySelector('.website__slide--1').style.display = "none";
        },4000);
        websiteInterval = setInterval( function(){
            webisite__container.addEventListener('mousewheel',websiteSlide);
            webisite__container.addEventListener('touchmove',websiteTouch);
        },4000 );
    }
}

var websiteSlideTwo = {
    in : function(){
        document.querySelector('.website__slide--2').style.display = "block";
        document.querySelector('.website__slide--2').style.animation = "websiteSlideDown 4s";
        document.querySelector('.website__slide--2').style.zIndex = ++websiteZindex;
        document.querySelector('.website__slide--left--2').style.animation = "websiteParagraphIn 4s";
        document.querySelector('.website__slide--2__image--1').style.animation = "websiteSlide2image1 4s";
        document.querySelector('.website__slide--2__image--2').style.animation = "websiteSlide2image2 4s";
        document.querySelector('.website__slide--2__image--3').style.animation = "websiteSlide2image3 4s";
    },
    out : function(){
        setTimeout(function(){
            document.querySelector('.website__slide--2').style.display = "none";
        },4000);
        websiteInterval = setInterval( function(){
            webisite__container.addEventListener('mousewheel',websiteSlide);
            webisite__container.addEventListener('touchmove',websiteTouch);
        },4000 );
    }
}

var websiteSlideThree = {
    in : function(){
        document.querySelector('.website__slide--3').style.display = "block";
        document.querySelector('.website__slide--3').style.animation = "websiteSlideDown 4s";
        document.querySelector('.website__slide--3').style.zIndex = ++websiteZindex;
        document.querySelector('.website__slide--left--3').style.animation = "websiteParagraphIn 4s";
        document.querySelector('.website__slide--3__macbook').style.animation = "websiteSlide3macbook 4s";
        document.querySelector('.website__slide--3__macbook--image div').style.animation = "websiteSlide3image 4s";
    },
    out : function(){
        setTimeout(function(){
            document.querySelector('.website__slide--3').style.display = "none";
        },4000);
        websiteInterval = setInterval( function(){
            webisite__container.addEventListener('mousewheel',websiteSlide);
            webisite__container.addEventListener('touchmove',websiteTouch);
        },4000 );
    }
}

var websiteSlideFour = {
    in : function(){
        document.querySelector('.website__slide--4').style.display = "flex";
        document.querySelector('.website__slide--4').style.animation = "websiteSlideDown 4s";
        document.querySelector('.website__slide--4').style.zIndex = ++websiteZindex;
        document.querySelector('.website__slide--center').style.animation = "websiteSlide4center 4s";
    },
    out : function(){
        setTimeout(function(){
            document.querySelector('.website__slide--4').style.display = "none";
        },4000);
        websiteInterval = setInterval( function(){
            webisite__container.addEventListener('mousewheel',websiteSlide);
            webisite__container.addEventListener('touchmove',websiteTouch);
        },4000 );
    }
}

var websiteFromToSlide = function(tempCurrent,tempNext){
    clearInterval(websiteInterval);
    switch(tempCurrent){
        case 1 :
            websiteSlideOne.out();
            break;
        case 2 :
            websiteSlideTwo.out();
            break;
        case 3:
            websiteSlideThree.out();
            break;
        case 4:
            websiteSlideFour.out(); 
            break;
        default:
            alert('Refresh the page');
    }

    switch(tempNext){
        case 1 :
            websiteSlideOne.in();
            break;
        case 2 :
            websiteSlideTwo.in();
            break;
        case 3:
            websiteSlideThree.in();
            break;
        case 4:
            websiteSlideFour.in(); 
            break;
        default:
            alert('Refresh the page');
    }

    websiteCurrent = tempNext;
}

var websiteSlide = function (event) { 
    webisite__container.removeEventListener('mousewheel',websiteSlide);
    console.log(event.deltaY);
    
    if( event.deltaY > 0 ){
        if( websiteCurrent === 4 ){
            websiteFromToSlide(websiteCurrent,1);
        }else{
            websiteFromToSlide(websiteCurrent, websiteCurrent + 1);
        }
    }else if( event.deltaY < 0 ){
        if( websiteCurrent === 1 ){
            websiteFromToSlide(websiteCurrent,4);
        }else{
            websiteFromToSlide(websiteCurrent, websiteCurrent - 1);
        }
    }

}

var websiteCurrentTouch = 0;

var websiteTouch = function(event){
    var difference = 0;
    if( websiteCurrentTouch === 0 ){
        websiteCurrentTouch = event.touches[0].clientY;
    }else{
        difference = websiteCurrentTouch - event.touches[0].clientY;
        websiteCurrentTouch = 0;
        webisite__container.removeEventListener('touchmove',websiteTouch);
        if( difference > 0 ){
            switch(websiteCurrent){
                case 1: 
                    websiteFromToSlide(1,2);
                    break;
                case 2:
                    websiteFromToSlide(2,3);
                    break;
                case 3:
                    websiteFromToSlide(3,4);
                    break;
                case 4:
                    websiteFromToSlide(4,1);
                    break;
                default:
                    alert('Error');
                    break;
            }
        }
        else if( difference < 0 ){
            switch(websiteCurrent){
                case 1: 
                    websiteFromToSlide(1,4);
                    break;
                case 2:
                    websiteFromToSlide(2,1);
                    break;
                case 3:
                    websiteFromToSlide(3,2);
                    break;
                case 4:
                    websiteFromToSlide(4,3);
                    break;
                default:
                    alert('Error' + ' ' + websiteCurrent);
                    break;
            }
        }
    }
}

//Button Listeners

document.querySelector('#website__button--1').addEventListener('click',function(){
    clearInterval(websiteInterval);
    websiteFromToSlide(1,2);
});
document.querySelector('#website__button--2').addEventListener('click',function(){
    clearInterval(websiteInterval);
    websiteFromToSlide(2,3);
});
document.querySelector('#website__button--3').addEventListener('click',function(){
    clearInterval(websiteInterval);
    websiteFromToSlide(3,4);
});

//Mouse Wheel Listener
var webisite__container = document.querySelector('.website__container');
var websiteInterval = setInterval( function(){
    webisite__container.addEventListener('mousewheel',websiteSlide);
    webisite__container.addEventListener('touchmove',websiteTouch);
},4000 );

//Touch Listener

