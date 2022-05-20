var firstSlide = {
    in : function(){

        document.querySelector('.parallax').style.backgroundColor = "#2F6192";

        document.querySelector('.parallax__container--1__pencil').style.animation = "pencilIn 2.5s";
        document.querySelector('.parallax__container--1__eraser').style.animation = "eraserIn 2.5s";
        document.querySelector('.parallax__container--1__cup').style.animation = "cupIn 2.5s";
        document.querySelector('.parallax__iphone--screen--1').style.animation = "parallaxPhoneScreenIn 2.5s";
        document.querySelector('.parallax__dot--1').style.backgroundColor = "#fff";
        document.querySelector('.parallax__container__paragraph--1').style.animation = "parallaxParagraphIn 2.5s";
        document.querySelector('.parallax__container__backparagraph--1').style.animation = "backparagraphIn 2.5s";

        document.querySelector('.parallax__container--1__pencil').style.visibility = "visible";
        document.querySelector('.parallax__container--1__eraser').style.visibility = "visible";
        document.querySelector('.parallax__container--1__cup').style.visibility = "visible";
        document.querySelector('.parallax__container__paragraph--1').style.visibility = "visible";
        document.querySelector('.parallax__iphone--screen--1').style.display = "block";
        document.querySelector('.parallax__container__backparagraph--1').style.visibility = "visible";

        setTimeout(function(){
            document.querySelector('.parallax__iphone--screen--1').style.top = 0;
        },2450)

    }
    ,
    out: function(){

        document.querySelector('.parallax__container--1__pencil').style.animation = "pencilOut 2.5s";
        document.querySelector('.parallax__container--1__eraser').style.animation = "eraserOut 2.5s";
        document.querySelector('.parallax__container--1__cup').style.animation = "cupOut 2.5s";
        document.querySelector('.parallax__iphone--screen--1').style.animation = "parallaxPhoneScreenOut 2.5s";
        document.querySelector('.parallax__container__paragraph--1').style.animation = "parallaxParagraphOut 2.5s";
        document.querySelector('.parallax__dot--1').style.backgroundColor = "transparent";
        document.querySelector('.parallax__container__backparagraph--1').style.animation = "backparagraphOut 2.5s";

        setTimeout( function(){
            document.querySelector('.parallax__container--1__pencil').style.visibility = "hidden";
            document.querySelector('.parallax__container--1__eraser').style.visibility = "hidden";
            document.querySelector('.parallax__container--1__cup').style.visibility = "hidden";
            document.querySelector('.parallax__container__paragraph--1').style.visibility = "hidden";
            document.querySelector('.parallax__iphone--screen--1').style.display = "none";
            document.querySelector('.parallax__container__backparagraph--1').style.visibility = "hidden";
        },1750 )

    }
};

var secondSlide = {
    in: function(){

        document.querySelector('.parallax').style.backgroundColor = "#192A56";

        document.querySelector('.parallax__container--2__pot').style.animation = 'potIn 2.5s';
        document.querySelector('.parallax__container--2__lamp').style.animation = 'lampIn 2.5s';
        document.querySelector('.parallax__container--2__paper').style.animation = 'paperIn 2.5s';
        document.querySelector('.parallax__container--2__glasses').style.animation = 'glassesIn 2.5s';
        document.querySelector('.parallax__iphone--screen--2').style.animation = "parallaxPhoneScreenIn 2.5s";
        document.querySelector('.parallax__dot--2').style.backgroundColor = "#fff";
        document.querySelector('.parallax__container__paragraph--2').style.animation = "parallaxParagraphIn 2.5s";
        document.querySelector('.parallax__container__backparagraph--2').style.animation = "backparagraphIn 2.5s";

        document.querySelector('.parallax__container--2__pot').style.visibility = 'visible';
        document.querySelector('.parallax__container--2__lamp').style.visibility = 'visible';
        document.querySelector('.parallax__container--2__paper').style.visibility = 'visible';
        document.querySelector('.parallax__container--2__glasses').style.visibility = 'visible';
        document.querySelector('.parallax__container__paragraph--2').style.visibility = "visible";
        document.querySelector('.parallax__container__backparagraph--2').style.visibility = "visible";
        document.querySelector('.parallax__iphone--screen--2').style.display = "block";

        setTimeout(function(){
            document.querySelector('.parallax__iphone--screen--2').style.top = 0;
        },2450)

    },
    out: function(){

        document.querySelector('.parallax__container--2__pot').style.animation = 'potOut 2.5s';
        document.querySelector('.parallax__container--2__lamp').style.animation = 'lampOut 2.5s';
        document.querySelector('.parallax__container--2__paper').style.animation = 'paperOut 2.5s';
        document.querySelector('.parallax__container--2__glasses').style.animation = 'glassesOut 2.5s';
        document.querySelector('.parallax__iphone--screen--2').style.animation = "parallaxPhoneScreenOut 2.5s";
        document.querySelector('.parallax__dot--2').style.backgroundColor = "transparent";
        document.querySelector('.parallax__container__paragraph--2').style.animation = "parallaxParagraphOut 2.5s";
        document.querySelector('.parallax__container__backparagraph--2').style.animation = "backparagraphOut 2.5s";

        setTimeout(function(){
            document.querySelector('.parallax__container--2__pot').style.visibility = 'hidden';
            document.querySelector('.parallax__container--2__lamp').style.visibility = 'hidden';
            document.querySelector('.parallax__container--2__paper').style.visibility = 'hidden';
            document.querySelector('.parallax__container--2__glasses').style.visibility = 'hidden';
            document.querySelector('.parallax__iphone--screen--2').style.display = "none";
            document.querySelector('.parallax__container__paragraph--2').style.visibility = "hidden";
            document.querySelector('.parallax__container__backparagraph--2').style.visibility = "hidden";
        },1750);

    }
};

var thirdSlide = {
    in: function(){

        document.querySelector('.parallax').style.backgroundColor = "#DAE0E2";

        document.querySelector('.parallax__container--3__ball').style.animation = 'ballIn 2.5s';
        document.querySelector('.parallax__container--3__usb').style.animation = 'usbIn 2.5s';
        document.querySelector('.parallax__container--3__rfid').style.animation = 'rfidIn 2.5s';
        document.querySelector('.parallax__iphone--screen--3').style.animation = "parallaxPhoneScreenIn 2.5s";
        document.querySelector('.parallax__dot--3').style.backgroundColor = "#fff";
        document.querySelector('.parallax__container__paragraph--3').style.animation = "parallaxParagraphIn 2.5s";
        document.querySelector('.parallax__container__backparagraph--3').style.animation = "backparagraphIn 2.5s";

        document.querySelector('.parallax__container--3__ball').style.visibility = 'visible';
        document.querySelector('.parallax__container--3__usb').style.visibility = 'visible';
        document.querySelector('.parallax__container--3__rfid').style.visibility = 'visible';
        document.querySelector('.parallax__iphone--screen--3').style.display = "block";
        document.querySelector('.parallax__container__paragraph--3').style.visibility = "visible";
        document.querySelector('.parallax__container__backparagraph--3').style.visibility = "visible";

        setTimeout(function(){
            document.querySelector('.parallax__iphone--screen--3').style.top = 0;
        },2450)

    },
    out: function(){
        document.querySelector('.parallax__container--3__ball').style.animation = 'ballOut 2.5s';
        document.querySelector('.parallax__container--3__usb').style.animation = 'usbOut 2.5s';
        document.querySelector('.parallax__container--3__rfid').style.animation = 'rfidOut 2.5s';
        document.querySelector('.parallax__iphone--screen--3').style.animation = "parallaxPhoneScreenOut 2.5s";
        document.querySelector('.parallax__dot--3').style.backgroundColor = "transparent";
        document.querySelector('.parallax__container__paragraph--3').style.animation = "parallaxParagraphOut 2.5s";
        document.querySelector('.parallax__container__backparagraph--3').style.animation = "backparagraphOut 2.5s";

        setTimeout( function(){
            document.querySelector('.parallax__container--3__ball').style.visibility = 'hidden';
            document.querySelector('.parallax__container--3__usb').style.visibility = 'hidden';
            document.querySelector('.parallax__container--3__rfid').style.visibility = 'hidden';
            document.querySelector('.parallax__iphone--screen--3').style.display = "none";
            document.querySelector('.parallax__container__paragraph--3').style.visibility = "hidden";
            document.querySelector('.parallax__container__backparagraph--3').style.visibility = "hidden";
            
        },1750 );

    }
};

var from = 1;
var to = 0;

var fromToSlides = function( tempfrom , tempto ){

    switch(tempfrom) {

        case 1 : 
            this.firstSlide.out();
            break;

        case 2 :
            this.secondSlide.out();
            break;
        case 3 : 
            this.thirdSlide.out();
            break;
        default:
            alert('Something went wrong');
            break;

    }

    switch(tempto) {

        case 1:
            this.firstSlide.in();
            break;
        
        case 2:
            this.secondSlide.in();
            break;
        
        case 3:
            this.thirdSlide.in();
            break;
        
        default:
            alert('Something Went wrong');
            break;
    }

    from = tempto;
    to = 0;
}

if( document.querySelector('.parallax__dot--1') ){
    document.querySelector('.parallax__dot--1').addEventListener('click',function(event){
        to = 1;
    
        if( from === to ){
            
        }else{
            fromToSlides(from, to);
        }
    });
    document.querySelector('.parallax__dot--2').addEventListener('click',function(event){
        to = 2;
        
        if( from === to ){
            
        }else{
            fromToSlides(from, to);
        }
    });
    
    document.querySelector('.parallax__dot--3').addEventListener('click',function(event){
        to = 3;
        
        if( from === to ){
            
        }else{
            fromToSlides(from, to);
        }
    });
    
}



//                                      navigation click event


var navigateClick = 0;

document.querySelector('.navigation').addEventListener('click',function(event){
    if( navigateClick === 0 ){
        document.querySelector('.navigation--line--1').style.transform = "translate(-50%, -50%) rotate(37.5deg)";
        document.querySelector('.navigation--line--3').style.transform = "translate(-50%, -50%) rotate(-37.5deg)";
        document.querySelector('.navigation').style.transform = "translate(-50%, -16.5%) rotate(90deg)";
        document.querySelector('.navigation--line--2').style.backgroundColor = "transparent";
        document.querySelector('.navigation--list').style.visibility = "visible";
        document.querySelector('.navigation--list--item--1').style.animation = "navigationListIn .5s";
        document.querySelector('.navigation--list--item--2').style.animation = "navigationListIn .5s";
        document.querySelector('.navigation--list--item--3').style.animation = "navigationListIn .5s";
        document.querySelector('.navigation--list--item--4').style.animation = "navigationListIn .5s";
        document.querySelector('.navigation--list--item--5').style.animation = "navigationListIn .5s";
        document.querySelector('.navigation--list--item--6').style.animation = "navigationListIn .5s";
        navigateClick = 1;
        setTimeout(function(){
            document.querySelector('.navigation--list').style.overflow = "visible";
        },400);
    }else{
        document.querySelector('.navigation--list').style.overflow = "hidden";
        document.querySelector('.navigation--list--item--1').style.animation = "navigationListOut .5s";
        document.querySelector('.navigation--list--item--2').style.animation = "navigationListOut .5s";
        document.querySelector('.navigation--list--item--3').style.animation = "navigationListOut .5s";
        document.querySelector('.navigation--list--item--4').style.animation = "navigationListOut .5s";
        document.querySelector('.navigation--list--item--5').style.animation = "navigationListOut .5s";
        document.querySelector('.navigation--list--item--6').style.animation = "navigationListOut .5s";
        setTimeout(function(){
            document.querySelector('.navigation--list').style.visibility = "hidden";
        },400);
        document.querySelector('.navigation--line--1').style.transform = "translate(-50%, -50%)";
        document.querySelector('.navigation--line--3').style.transform = "translate(-50%, -50%)";
        document.querySelector('.navigation').style.transform = "translate(-50%, -16.5%)";
        document.querySelector('.navigation--line--2').style.backgroundColor = "#fff";
        navigateClick = 0;
    }
});

var wheel = function(event){
    document.querySelector('.parallax').removeEventListener('mousewheel',wheel);
    if( event.deltaY > 0  ){
        if( from === 1 ){
            to = 2;
            fromToSlides(from, to);
        }else if( from === 2 ){
            to = 3;
            fromToSlides(from, to);
        }else{
            to = 1;
            fromToSlides(from, to);
        }
    }else if( event.deltaY < 0 ){
        if( from === 3 ){
            to = 2;
            fromToSlides(from, to);
        }else if( from === 2 ){
            to = 1;
            fromToSlides(from,to);
        }else{
            to = 3;
            fromToSlides(from,to);
        }
    }
}

var parallaxTouchStart = 0;

var parallaxTouch = function(event){
    var difference = 0;
    if( parallaxTouchStart === 0 ){
        parallaxTouchStart = event.touches[0].clientY;
    }else{
        difference = parallaxTouchStart - event.touches[0].clientY;
        parallaxTouchStart = 0;
        document.querySelector('.parallax').removeEventListener('touchmove',parallaxTouch);

        if( difference > 0 ){
            switch(from){
                case 1:
                    fromToSlides(1,2);
                    break;
                case 2:
                    fromToSlides(2,3);
                    break;
                case 3:
                    fromToSlides(3,1);
                    break;
                default:
                    alert('Ho Gya'+difference+" " + from);
            }
        }
        else if( difference < 0 ){
            switch(from){
                case 1:
                    fromToSlides(1,3);
                    break;
                case 2:
                    fromToSlides(2,1);
                    break;
                case 3:
                    fromToSlides(3,2);
                    break;
                default:
                    alert('Ho Gya');
            }
        }

    }
    
}


if( document.querySelector('.parallax') ){
    setInterval(function(){

        document.querySelector('.parallax').addEventListener('mousewheel',wheel);
        document.querySelector('.parallax').addEventListener('touchmove',parallaxTouch);
    
    },3000);
}