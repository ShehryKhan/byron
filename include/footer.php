






<footer>
    <div class="footer-head">
      <h1>Sign up to the Byron club for</h1>
      <h2>Exclusive Offers And Discounts</h2>
      <a class="theme-btn" href="./signUp.php">sign me up<img src="./assets/images/icon-feather-black.svg" alt=""></a>


    </div>
    <div class="footer-inner">
    <div class="footer-character">
        <img src="./assets/images/footer-character.svg" alt="">
    </div>
    <div class="container">
        <ul class="footer-tabs">
            <li><a href="#">allergen safety</a></li>
            <li><a href="./careers.php">careers</a></li>
            <li><a href="./contact.php">contact</a></li>
            <li><a href="./privacy.php">privacy</a></li>
            <li><a href="#">gift cards</a></li>
            <li><a href="terms-conditions.php">t&cs</a></li>
        </ul>
        <h2>social</h2>
        <div class="social-images">
          <a href=""><i class="icon-twitter"></i></a>
          <a href=""><i class="icon-facebook"></i></a>
          <a href=""><i class="icon-instagram"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <h3>© Famously Proper Ltd. 2022</h3>
    </div>
    </div>   


    <div class="footer-mobile">
    
      <div class="mobile-footer-nav">
      <ul>
        <li><a href="##">ALLERGEN SAFETY</a></li>
        <li><a href="./contact.php">CONTACT</a></li>
        <li><a href="##">GIFT CARDS</a></li>
      </ul>
      
      <ul>
        <li><a href="./careers.php">CARRERS</a></li>
        <li><a href="./privacy.php">PRIVACY</a></li>
        <li><a href="terms-conditions.php">T&CS</a></li>
      </ul>
      </div><hr>
      <h2>social</h2>
        <div class="social-images">
          <a href=""><i class="icon-twitter"></i></a>
          <a href=""><i class="icon-facebook"></i></a>
          <a href=""><i class="icon-instagram"></i></a>
        </div>
        <div class="footer-bottom">
        <h3>© Famously Proper Ltd. 2022</h3>
    </div>
    </div>

</footer>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./assets/theme.js"></script>
    

    <script>
      function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
    </script>

    <script>

var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 300,
        },
      },
    });




    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>
</body>
</html>