<style>
  
/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: calc(100vh - 114px);
    padding: 0;
    overflow: hidden;
}

#hero .carousel-item {
    width: 100%;
    height: calc(100vh - 114px);
    background-size: cover;
    background-position: top right;
    background-repeat: no-repeat;
    overflow: hidden;
}

#hero .carousel-item::before {
    content: "";
    background-color: rgba(13, 30, 45, 0.6);
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    overflow: hidden;
}

#hero .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
    overflow: hidden;
}

#hero .carousel-content {
    text-align: left;
}

@media (max-width: 992px) {
    #hero,
    #hero .carousel-item {
        height: calc(100vh - 70px);
    }
    #hero .carousel-content.container {
        padding: 0 50px;
    }
}

#hero h2 {
    color: #fff;
    margin-bottom: 30px;
    font-size: 48px;
    font-weight: 900;
}

#hero p {
    width: 80%;
    -webkit-animation-delay: 0.4s;
    animation-delay: 0.4s;
    color: #fff;
}

#hero .carousel-inner .carousel-item {
    transition-property: opacity;
    background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
    opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-left,
#hero .carousel-inner .carousel-item-prev.carousel-item-right {
    opacity: 1;
    transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
    left: 0;
    transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev,
#hero .carousel-control-next {
    width: 10%;
}

#hero .carousel-control-next-icon,
#hero .carousel-control-prev-icon {
    background: none;
    font-size: 48px;
    line-height: 1;
    width: auto;
    height: auto;
}

#hero .carousel-indicators li {
    cursor: pointer;
}

#hero .btn-get-started {
    font-family: "Raleway", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 12px 32px;
    border-radius: 5px;
    transition: 0.5s;
    line-height: 1;
    margin: 10px;
    color: #fff;
    -webkit-animation-delay: 0.8s;
    animation-delay: 0.8s;
    border: 0;
    background: #428bca;
}

#hero .btn-get-started:hover {
    background: #1c5c93;
}

@media (max-width: 768px) {
    #hero h2 {
        font-size: 28px;
    }
}

@media (min-width: 1024px) {
    #hero p {
        width: 60%;
    }
    #hero .carousel-control-prev,
    #hero .carousel-control-next {
        width: 5%;
    }
}

</style>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Welcome to <span>TEAM 4</span></h2>
                <p class="animated fadeInUp">welcome to our portfolio</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animated fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
