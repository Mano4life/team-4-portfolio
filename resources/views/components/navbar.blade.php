<style>
  /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
  #header {
    height: 70px;
    transition: all 0.5s;
    transition: all 0.5s;
    padding: 10px 0;
    background: #fff;
    z-index: 997;
  }

  #header.header-scrolled {
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  }

  #header .logo h1 {
    font-size: 28px;
    margin: 0;
    padding: 10px 0;
    line-height: 1;
    font-weight: 400;
    letter-spacing: 3px;
    text-transform: uppercase;
  }

  #header .logo h1 a,
  #header .logo h1 a:hover {
    color: #7c3aed;
    text-decoration: none;
  }

  #header .logo img {
    padding: 0;
    margin: 0;
    max-height: 40px;
  }

  /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
  /* Desktop Navigation */
  .nav-menu,
  .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .nav-menu>ul>li {
    position: relative;
    white-space: nowrap;
    float: left;
  }

  .nav-menu a {
    display: block;
    position: relative;
    color: #5c768d;
    padding: 12px 15px;
    transition: 0.3s;
    font-size: 14px;
    font-family: "Open Sans", sans-serif;
  }

  .nav-menu a:hover,
  .nav-menu .active>a,
  .nav-menu li:hover>a {
    color: #7c3aed;
    text-decoration: none;
  }

  /* Mobile Navigation */
  .mobile-nav {
    position: fixed;
    top: 0;
    bottom: 0;
    z-index: 9999;
    overflow-y: auto;
    left: -260px;
    width: 260px;
    padding-top: 18px;
    background: #221638;
    transition: 0.4s;
  }

  .mobile-nav * {
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .mobile-nav a {
    display: block;
    position: relative;
    color: #e3f0fc;
    padding: 10px 20px;
    font-weight: 500;
  }

  .mobile-nav a:hover,
  .mobile-nav .active>a,
  .mobile-nav li:hover>a {
    color: #7c3aed;
    text-decoration: none;
  }

  .mobile-nav .drop-down>a:after {
    content: "\ea99";
    font-family: IcoFont;
    padding-left: 10px;
    position: absolute;
    right: 15px;
  }

  .mobile-nav .active.drop-down>a:after {
    content: "\eaa0";
  }

  .mobile-nav .drop-down>a {
    padding-right: 35px;
  }

  .mobile-nav .drop-down ul {
    display: none;
    overflow: hidden;
  }

  .mobile-nav .drop-down li {
    padding-left: 20px;
  }

  .mobile-nav-toggle {
    position: fixed;
    right: 15px;
    top: 20px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 24px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 1;
    cursor: pointer;
    text-align: right;
  }

  .mobile-nav-toggle i {
    color: #5c768d;
  }

  .mobile-nav-overly {
    width: 100%;
    height: 100%;
    z-index: 9997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(43, 31, 72, 0.7);
    overflow: hidden;
    display: none;
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav {
    left: 0;
  }

  .mobile-nav-active .mobile-nav-toggle i {
    color: #fff;
  }
</style>
<!-- ======= Header ======= -->
<header id="header">
  <div class="container">

    <div class="logo float-left">
      <h1 class="text-light"><a href="index.html"><span>TEAM</span><span>4</span></a></h1>
    </div>

    <nav class="nav-menu float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="#header">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#team">Team</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->