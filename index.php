
<?php include 'include/header.php'; ?>



<!-- <img src="data:image/jpeg;base64,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" alt=""> -->






    <div class="home-page">
    <section class="banner">
        <div class="container">
        <h2>vegans don't miss</h2>
        <h1>OUT AT BYRON!</h1>

        <div class="banner-burgers">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/images/banner-burger-1.png" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/banner-burger-2.png" alt=""></div>
            <div class="swiper-slide"><img src="./assets/images/banner-burger-3.png" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
        </div> 
    </section>


    <section class="quality">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container">
                    <div class="quality-inner">
                        <h2>GO MEATLESS <br> ON EVERY <br> BYRON BURGER!</h2>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4"><div class="image"><img src="./assets/images/byron-art.svg" alt=""></div></div>
                <div class="col-lg-5"></div>
                <div class="col-lg-7"><div class="container"><h3>byron's vision is to be the most characterful burger brand in town using tastefully expressive storytelling both visually and verbally.</h3></div></div>
            </div>
    </section>



    <section class="my-carousels">
        <h2>all-in-one <a href="##">tasty burgers</a></h2>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./assets/images/group-656.png" alt=""><div class="img-detail"><h3>chesse burger</h3></div></div>
            <div class="swiper-slide"><img src="./assets/images/group-653.png" alt=""><div class="img-detail"><h3>classic chicken</h3></div></div>
            <div class="swiper-slide"><img src="./assets/images/group-654.png" alt=""><div class="img-detail"><h3>double baccon chesse burger</h3></div></div>
            </div>
            <div class="swiper-button-next"><img src="./assets/images/arrow-right.svg" alt=""></div>
            <div class="swiper-button-prev"><img src="./assets/images/arrow-left.svg" alt=""></div>
        </div>

        <div class="b-rax">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 chrctr"><div class="image"><img src="./assets/images/character.svg" alt=""></div></div>
                    <div class="col-md-4"><div class="b-rax-inner">
                        <h3>B-RAX</h3>
                        <p>
                            Dainty won't do?<br> Add a topping(or two). <br> Don't be shy, <br>stack your burger high.
                        </p>
                    </div></div>
                </div>
            </div>
        </div>
    </section>



    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-inner">
                        <h3>at byron</h3>
                        <p>We don't follow trends. We create them. For the last 15 years, other brands have tried to emulate our style and replicate our magic.</p>
                    </div>
                </div>
                <div class="col-lg-6 about-img">
                    <div class="image"><img src="./assets/images/at-byron-chrac.svg" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    </div>











<?php include 'include/footer.php'; ?>