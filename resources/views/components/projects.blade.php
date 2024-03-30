    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">

      <head>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
      </head>

      <style>
        :root {
          --card-height: 300px;
          --card-width: 400px;
        }

        .card {
          width: var(--card-width);
          height: var(--card-height);
          position: relative;
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 0 36px;
          perspective: 2500px;
          margin: 0 50px;
          cursor: pointer;
          text-align: center;
          cursor: default;
          background-color: transparent;
          border: none;
        }

        .cover-img {
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .wrapper {
          transition: all 0.4s;
          inset: 0 0 0 0;
          position: absolute;
          width: 100%;
          z-index: -1;
          border-radius: 10px;
          overflow: hidden;
        }

        .wrapper::before,
        .wrapper::after {
          content: "";
          opacity: 0;
          width: 100%;
          height: 80px;
          transition: all 0.5s;
          position: absolute;
          left: 0;
        }

        .wrapper::before {
          bottom: 0;
          height: 100%;
          background-image: linear-gradient(to bottom,
              transparent 46%,
              rgb(12, 13, 19, 0.5) 68%,
              rgb(12, 13, 19) 97%);
        }

        .wrapper::after {
          top: 0;
          opacity: 0;
          background-image: linear-gradient(to top,
              transparent 46%,
              rgb(12, 13, 19, 0.5) 68%,
              rgb(12, 13, 19) 97%);
        }

        .card .title {
          margin-bottom: 30px;
          transition: transform 0.5s;
          color: white;
          align-items: center;
          position: absolute;
          bottom: 0;
          font-weight: 600;
          font-size: 32px;
        }

        .card .character {
          width: 70%;
          opacity: 0;
          top: 40px;
          position: absolute;
          z-index: -1;
          transition: all 0.4s;
        }

        .card:hover .wrapper {
          transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
          box-shadow: 0 35px 32px -8px rgb(0, 0, 0, 0.75);
        }

        .card:hover .title {
          transform: translate3d(0%, -120%, 100px);
        }

        .card:hover .wrapper::after,
        .wrapper::before {
          opacity: 1;
        }

        .card:hover .wrapper::after {
          height: 120px;
        }

        .card:hover .wrapper::before {
          opacity: 1;
        }

        .card:hover .character {
          opacity: 1;
          transform: translate3d(0%, -50%, -100px);
        }

        .two {
          position: absolute;
          bottom: 150px;
          display: flex;
          justify-content: space-around;
          width: 100%;
        }

        .two a {
          text-decoration: none;
        }

        .two .ri-github-fill:hover,
        .ri-image-fill:hover {
          box-shadow: 0 0px 70px #7c3aed;;
        }

        .two .ri-github-fill {
          font-size: 100px;
          color: white;
          border-radius: 100%;
          transition: 0.4s;
          background-color: #7c3aed82;
        }

        .two .ri-image-fill {
          color: white;
          font-size: 100px;
          border-radius: 20%;
          transition: 0.4s;
          background-color: #7c3aed82;
        }

        .porto{
          display: flex;
          flex-direction: column;
          align-items: center;
          height: fit-content;
        }
        .card-div{
          display: flex;
          gap: 30px ;
        }
      </style>

      <div class="container porto" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="card-div">

          <div class="card">
            <div class="wrapper">
              <img class="cover-img" src="assets/img/portfolio/image.jpg" alt="cover" />
            </div>

            <h1 class="title">Portfolio Project</h1>

            <div class="character two">
              <a href="https://github.com/Mano4life/team-4-portfolio"><i class="ri-github-fill"></i></a>
              <a href=""><i class="ri-image-fill"></i></a>
            </div>
          </div>

          <div class="card">
            <div class="wrapper">
              <img class="cover-img" src="assets/img/portfolio/image.jpg" alt="cover" />
            </div>

            <h1 class="title">Portfolio Project</h1>

            <div class="character two">
              <a href="https://github.com/Mano4life/team-4-portfolio"><i class="ri-github-fill"></i></a>
              <a href=""><i class="ri-image-fill"></i></a>
            </div>
          </div>

          <div class="card">
            <div class="wrapper">
              <img class="cover-img" src="assets/img/portfolio/image.jpg" alt="cover" />
            </div>

            <h1 class="title">Portfolio Project</h1>

            <div class="character two">
              <a href="https://github.com/Mano4life/team-4-portfolio"><i class="ri-github-fill"></i></a>
              <a href=""><i class="ri-image-fill"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Our Portfolio Section -->