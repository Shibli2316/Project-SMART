<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reveal Website Elements On Scroll - HTML, CSS & Javascript</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/scrollreveal"></script>
  </head>
  <body>

    <section class="sec-01">
      <div class="containers">
        <h2 class="main-title">Hamari Kahani Hamari Zubani</h2>
        <div class="content">
          <div class="image">
            <img src="../images/1669268364664.jpg" alt="">
          </div>
          <div class="text-box">
            <h3>About us</h3>
            <p>Persuing our bachlors from <strong><i>Aligarh Muslim University</i></strong>, we like to <i>build</i> and <i>break</i> stuff. Shibli (left) and hamza (right) are passionate about computers and mendlw with wires and codes. This project is completed primarily to solve the problems that arise during the students life time.We have also developed various other modules to encompass other people of the institue that is described below</p>
          </div>
        </div>
        <div class="media-icons">
          <a href="index.php" class="icon"><i class="fas fa-home"></i></a>
          <a href="about.php" class="icon"><i class="fas fa-child"></i></a>
          <a href="noticegenral.php" class="icon"><i class="fas fa-newspaper"></i></a>
          <a href="join.php" class="icon"><i class="fas fa-key"></i></a>
        </div>
      </div>
    </section>
    <section class="sec-02">
      <div class="containers">
        <h3 class="section-title">Description of the Product</h3>
        <div class="content">
          <div class="image">
            <img src="../images/Snapchat-22034180.jpg" alt="">
          </div>
          <div class="info">
            <h4 class="info-title">SMART</h4>
            <p>We have developed a module that handles all the various modules of a institue ranging from students to alumni. It has all the functonalities needed to handle the students and teachers like view the time table and course related material alng with the attendance. The time table is dynamic and allows everyone to know when a change occur. There is a seperate module for alumnoi from where they can access the gallery and also a admin part that can access everything. The notice module has been kept free and seperate. The rest can be explored by you. Good luck</p>
          </div>
        </div>
      </div>
    </section>
    <section class="sec-03">
      <div class="containers">
        <h3 class="section-title">Get in touch</h3>
        <div class="content">
          <div class="media-info">
            <li><a href="https://instagram.com/iamshibli23?igshid=YmMyMTA2M2Y="><i class="fab fa-linkedin"></i>Ahmad Raza Shibli</a></li>
            <li><a href="https://www.linkedin.com/in/ahmed-raza-shibli-b038051ab"><i class="fab fa-instagram"></i>iamshibli23</a></li>
            <li><a href="#"><i class="fab fa-patreon"></i> Buy us a coffee</a></li>
            <li><a href="https://www.instagram.com/invites/contact/?i=1o9w7ut4wj4v2&utm_content=pu35tp3"><i class="fab fa-instagram"></i>ihamza135</a></li>
            <li><a href="https://www.linkedin.com/in/syed-mohammad-hamza-husain-6bb646207"><i class="fab fa-linkedin"></i>Syed Mohammad Hamza Husain</a></li>
          </div>
          <div class="image">
            <img src="../images/gate-6.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <script>
      //common reveal options to create reveal animations
      ScrollReveal({
        //reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
      });

      //target elements, and specify options to create reveal animations
      ScrollReveal().reveal('.main-title, .section-title', { delay: 500, origin: 'left' });
      ScrollReveal().reveal('.sec-01 .image, .info', { delay: 600, origin: 'bottom' });
      ScrollReveal().reveal('.text-box', { delay: 700, origin: 'right' });
      ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'bottom', interval: 200 });
      ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', { delay: 500, origin: 'top' });
      ScrollReveal().reveal('.media-info li', { delay: 500, origin: 'left', interval: 200 });
    </script>

  </body>
</html