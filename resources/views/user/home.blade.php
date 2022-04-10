<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

@include('../inc.navbarPlaceholderSmall')
@include('../inc.navbar')

<div class="mainContainer">
    <div class="mainContainerPost">
        <div class="flagFirstElem">
                <div class="intro">
                   <a href="https://www.google.hr/maps/place/Mostar+88000,+Bosna+i+Hercegovina/@43.3395487,17.7862211,13z/data=!3m1!4b1!4m5!3m4!1s0x134b43a43b6340a9:0x14f32b2d4e37c5a!8m2!3d43.3437748!4d17.8077578?hl=hr" target="_blank"> LOCATION: MOSTAR</a>
                </div>
                <div class="title"> 
                    Stari Most
                </div>
                <div class="paragraph">
                The bridge is considered an exemplary piece of Balkan 
                Islamic architecture and was commissioned by Suleiman 
                the Magnificent in 1557. 
                </div>
                <div class="learnMore" id="showOneBtn">
                    LEARN MORE
                </div>
        </div>
    </div>

    <div class="mainContainerImage">
        <div id="learnMorePopUpOne" class="learnMorePopUp">
            <div class="learnMorePopUpText">
            The bridge spans the Neretva river in the old town of Mostar, the city to which it gave the name. The city is the fifth-largest in the country; it is the center of the Herzegovina-Neretva Canton of the Federation of Bosnia and Herzegovina, and the unofficial capital of Herzegovina. The Stari Most is hump-backed, 4 metres (13 ft 1 in) wide and 30 metres (98 ft 5 in) long, and dominates the river from a height of 24 m (78 ft 9 in). Two fortified towers protect it: the Halebija tower on the northeast and the Tara tower on the southwest, called "the bridge keepers" (natively mostari).[1]
            Instead of foundations, the bridge has abutments of limestone linked to wing walls along the waterside cliffs. Measuring from the summer water level of 40.05 m (131 ft 5 in), abutments are erected to a height of 6.53 metres (21 ft 5 in), from which the arch springs to its high point. The start of the arch is emphasized by a molding 0.32 metres (1 ft 1 in) in height. The rise of the arch is 12.02
            </div>
            <div class="learnMorePopUpImages">
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/stariMostOne.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/stariMostTwo.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/stariMostThree.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <img id="showOneImg" src="{{ asset('images/1.jpg') }}" alt="">
    </div>

    <div class="mainContainerPost">
        <div class="flagFirstElem">
                <div class="intro">
                   <a href="https://www.google.hr/maps/place/%C4%8Cvrsnica/@43.6391658,17.6326341,15z/data=!3m1!4b1!4m5!3m4!1s0x475f6037d59ab1cb:0x2ef649a7fa16d003!8m2!3d43.6391667!4d17.6413889?hl=hr" target="_blank"> LOCATION: ČVRSNICA</a>
                </div>
                <div class="title"> 
                    Hajdučka Vrata
                </div>
                <div class="paragraph">
                    Located in the eastern part of the mountain Čvrsnica. 
                    It is a natural phenomenon of indescribable beauty. 
                </div>
                <div class="learnMore" id="showTwoBtn">
                    LEARN MORE
                </div>
        </div>
    </div>

    <div class="mainContainerImage">
        <div id="learnMorePopUpTwo" class="learnMorePopUp">
            <div class="learnMorePopUpText">
            One of the most beautiful symbols of the Blidinje Nature Park is the Hajduk Gate. Located in the eastern part of the mountain Čvrsnica, they represent a natural phenomenon created for centuries. It is actually a characteristic ring in the rock, and is located on the edge of the Diva Grabovica canyon. Hajdučka vrata is located at 2000 m above sea level and is a destination for many mountaineers and nature lovers, who from here can enjoy a truly beautiful, unique and invaluable view of Diva Grabovica, the rock of Veliki Kuk, Čabulja, Velež, Prenj,… This geomorphological monument of nature is one of the most beautiful lookouts in the Bosnian - Herzegovinian mountains.
            They offer very beautiful views of the rock of Veliki Kuk, Mezića stijena, Pestibrdo, Čabulja, Prenj ... in short, it is a place with one of the most beautiful views.
            </div>
            <div class="learnMorePopUpImages">
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/3.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/hajduckaTwo.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/hajduckaThree.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <img id="showTwoImg" src="{{ asset('images/hajduckaOne.jpg') }}" alt="">
    </div>

    <div class="mainContainerPost">
        <div class="flagFirstElem">
                <div class="intro">
                   <a href="https://www.google.hr/maps/place/Ljubu%C5%A1ki,+Bosna+i+Hercegovina/@43.1900297,17.5404023,14z/data=!3m1!4b1!4m5!3m4!1s0x134b11dd9a5b16ff:0x4ee21583ba79cbb4!8m2!3d43.1989428!4d17.5466671?hl=hr" target="_blank"> LOCATION: LJUBUŠKI</a>
                </div>
                <div class="title"> 
                    Waterfall Kravice
                </div>
                <div class="paragraph">
                Kravica waterfalls, often called Kravice, is a large tufa 
                cascade on the Trebižat River, in the karstic heartland 
                of Herzegovina.
                </div>
                <div class="learnMore" id="showThreeBtn">
                    LEARN MORE
                </div>
        </div>
    </div>

    <div class="mainContainerImage">
        <div id="learnMorePopUpThree" class="learnMorePopUp">
            <div class="learnMorePopUpText">
            Kravica waterfalls, often called Kravice, is a large tufa cascade
             on the Trebižat River, in the karstic heartland of Herzegovina in
              Bosnia and Herzegovina. 
              It is 10 kilometers (6 mi) south of Ljubuski and 40 kilometers 
              (25 mi) south of Mostar. Its height is about 25 meters (80 ft) 
              and the radius of the lake at the base of the waterfall is 120 
              meters (390 ft). Kravica is a popular swimming and picnic area 
              and, during the summer, it is frequently visited by tourists 
              from Mostar, Medjugorje and Dubrovnik.
              The Kravica Falls area also has a little cafe, a rope swing, 
              a picnic area, and a place to camp. The best time of year for visiting 
              is during the springtime when the fall is at its fullest and the 
              arid landscape turns a bright green.
              During the high season, various restaurants in the vicinity of the waterfalls 
              mostly offer grilled dishes and fish specialties.
            </div>
            <div class="learnMorePopUpImages">
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/2.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/kravicaTwo.jpg') }}" alt="">
                </div>
                <div class="learnMorePopUpImage">
                    <img class="image" src="{{ asset('images/kravicaThree.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <img id="showThreeImg" src="{{ asset('images/kravicaOne.jpg') }}" alt="">
    </div>

</div>






<div class="mainContainer">

    <!-- <div class="carousel-container">
        <i id="prev" class="fas fa-arrow-left"></i>
        <i id="next" class="fas fa-arrow-right"></i>
                
        <div class="carousel-slide">
           <img id="lastClone" src="{{ asset('images/52.jpg') }} alt="">
            <img src="{{ asset('images/22.jpg') }}" alt="">
            <img src="{{ asset('images/32.jpg') }}" alt="">
            <img src="{{ asset('images/42.jpg') }}" alt="">
            <img src="{{ asset('images/52.jpg') }}" alt="">
            <img id="firstClone" src="{{ asset('images/22.jpg') }}" alt="">
        </div>
    </div> -->



</div>






</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

$(document).ready(function(){
       
       $(document.getElementById("learnMorePopUpOne")).hide();
       $("#hide").click(function(){
         $(document.getElementById("learnMorePopUpOne")).hide();
       });
       var elem="#learnMorePopUpOne";
       $( document ).on( 'keydown', function ( e ) {
           if ( e.keyCode === 27 ) { // ESC
               $( elem ).fadeOut();
           }
       });
       $("#showOneBtn").click(function(){
         $(document.getElementById("learnMorePopUpOne")).fadeIn();
       });
       $("#showOneImg").click(function(){
        $(document.getElementById("learnMorePopUpOne")).fadeIn();
       });
     });
    $(document).ready(function(){
       
       $(document.getElementById("learnMorePopUpTwo")).hide();
       $("#hide").click(function(){
         $(document.getElementById("learnMorePopUpTwo")).hide();
       });
       var elem="#learnMorePopUpTwo";
       $( document ).on( 'keydown', function ( e ) {
           if ( e.keyCode === 27 ) { // ESC
               $( elem ).fadeOut();
           }
       });
       $("#showTwoBtn").click(function(){
         $(document.getElementById("learnMorePopUpTwo")).fadeIn();
       });
       $("#showTwoImg").click(function(){
        $(document.getElementById("learnMorePopUpTwo")).fadeIn();
        
         
       });
     });



     $(document).ready(function(){
       
       $(document.getElementById("learnMorePopUpThree")).hide();
       $("#hide").click(function(){
         $(document.getElementById("learnMorePopUpThree")).hide();
       });
       var elem="#learnMorePopUpThree";
       $( document ).on( 'keydown', function ( e ) {
           if ( e.keyCode === 27 ) { // ESC
               $( elem ).fadeOut();
           }
       });
       $("#showThreeBtn").click(function(){
         $(document.getElementById("learnMorePopUpThree")).fadeIn();
       });
       $("#showThreeImg").click(function(){
        $(document.getElementById("learnMorePopUpThree")).fadeIn();
        
         
       });
     });
</script>
<!-- <script>

'click',()=>{
    if(counter>=carouselImages.length -1)  return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click',()=>{
    if(counter<=0) return;
    carouselSlide.style.transition = "transform 0.4s ease-in-out";
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

carouselSlide.addEventListener('transitionend', ()=>{
    if(carouselImages[counter].id === 'lastClone'){
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -2; 
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(carouselImages[counter].id === 'firstClone'){
        carouselSlide.style.transition = "none";
        counter = carouselImages.length -counter; 
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }window.onload = function(){
const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide img');

const prevBtn = document.querySelector('#prev');
const nextBtn = document.querySelector('#next');
console.log(prevBtn);

let counter = 1;
const size = '940';

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

nextBtn.addEventListener(
});



    

};


    

</script> -->
</html>

