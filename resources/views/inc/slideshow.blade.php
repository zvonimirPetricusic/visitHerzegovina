@section('slideshow')
<div class="wrap">
    <div id="slider">
        <div class="slide slide1">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide4">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide5">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide6">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
        <div class="slide slide7">
            <div class="slide-content">
                <span></span>
            </div>
        </div>
    </div>
    
</div>
@show

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
        let sliderImages = document.querySelectorAll(".slide"),
current = 0;

      function reset() {
      for (let i = 0; i < sliderImages.length; i++) {
      sliderImages[i].style.display = "none";
      }
    }


      function startSlide() {
      reset();
      sliderImages[0].style.display = "block";
      }

      function slideRight() {
      reset();
      sliderImages[current + 1].style.display = "block";
      current++;
      }

      function myFunction() {
        
      if (current === sliderImages.length - 1) {
      current = -1;
        }
        slideRight();
      }
      startSlide();
      setInterval(myFunction,4000);

      var right=document.getElementById('login2').clientHeight;
  
      document.getElementById('login').style.height=right+'px';
</script>
