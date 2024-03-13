<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Project</title>
     <!-- this a big css file -->
     <link rel="stylesheet" href="css/big.css">
    <!-- this normalize in google to support all css code in my web .... and render all elements normally -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font awesome library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- this about google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700;800&display=swap" 
    rel="stylesheet">
</head>
<body>
    <!-- start header -->
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="img/logo.png" alt="logo">
            </a>
            <nav>
                <i class="fas fa-bars toggle"></i>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#" class="">Services</a></li>
                    <li><a href="#" class="">Portfolio</a></li>
                    <li><a href="#" class="">About</a></li>
                    <li><a href="#" class="">Pricing</a></li>
                    <li><a href="#" class="">Contact</a></li>
                    <li><a href="com/show.php" class="">Show</a></li>
                </ul>
                <div class="form">
                    <i class="fas fa-search"></i>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header -->
    <!-- start landing   -->
    <div class="landing">
        <div class="over"></div>
        <div class="text">
            <div class="content">
                <h2>
                    Hello world <br />
                    We Are Kasper We Make Art.
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi labore quis obcaecati necessitatibus incidunt impedit sequi velit debitis voluptatum accusantium exercitationem neque molestias, sunt nisi error officia nemo, quas expedita!</p>
            </div>
        </div>
        <i class="fas fa-angle-left change-background l"></i>
        <i class="fas fa-angle-right change-background r"></i>
        <ul class="bullets">
            <li></li>
            <li class="active"></li>
            <li></li>
        </ul>
    </div>
    <!-- end landing   -->
    <!-- this section use in all heading in any component -->
    <!-- start Services -->
    <div class="services">
        <div class="container">
            <div class="main-heading">
                <h2>Services</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse voluptate temporibus libero! Deserunt quo non corrupti fuga asperiores qui debitis exercitationem. Cumque nihil consequatur nesciunt tempore repellendus voluptate molestias.</p>
            </div>
            <div class="serv-container">
                <div class="ser-box">
                    <i class="fas fa-desktop fa-2x"></i>
                    <div class="text">
                        <h3>Vorem amet intuitive</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusamus voluptatum nam, veritatis maiores dolore adipisci eum asperiores? Voluptates nulla ducimus quod atque, consequuntur ipsum neque rem et est reiciendis.</p>
                    </div>                    
                </div>
                <div class="ser-box">
                    <i class="fas fa-cog fa-2x"></i>
                    <div class="text">
                        <h3>Vorem amet intuitive</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusamus voluptatum nam, veritatis maiores dolore adipisci eum asperiores? Voluptates nulla ducimus quod atque, consequuntur ipsum neque rem et est reiciendis.</p>
                    </div>                    
                </div>
                <div class="ser-box">
                    <i class="fas fa-pencil fa-2x"></i>
                    <div class="text">
                        <h3>Vorem amet intuitive</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusamus voluptatum nam, veritatis maiores dolore adipisci eum asperiores? Voluptates nulla ducimus quod atque, consequuntur ipsum neque rem et est reiciendis.</p>
                    </div>                    
                </div>
                <div class="ser-box">
                    <i class="fas fa-camera fa-2x"></i>
                    <div class="text">
                        <h3>Vorem amet intuitive</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis accusamus voluptatum nam, veritatis maiores dolore adipisci eum asperiores? Voluptates nulla ducimus quod atque, consequuntur ipsum neque rem et est reiciendis.</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <!-- end Services -->
    <!-- start design -->
    <div class="design">
        <div class="image">
            <img src="img/mobile.png" alt="">
        </div>
        <div class="text">
            <h2>OUR DESIGN COMES WITH ...</h2>
            <ul>
                <li>Responsive Design</li>
                <li>Modern And Clean Design</li>
                <li>Clean Code</li>
                <li>Browser Friendly</li>
            </ul>
        </div>
    </div>
    <!-- end design -->
    <!-- start Portfolio -->
    <div class="portfolio">
        <div class="container">
            <div class="main-heading">
                <h2>Portfolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse voluptate temporibus libero! Deserunt quo non corrupti fuga asperiores qui debitis exercitationem. Cumque nihil consequatur nesciunt tempore repellendus voluptate molestias.</p>
            </div>
            <ul class="shuffle">
                <li class="active">All</li>
                <li>App</li>
                <li>Photo</li>
                <li>Web</li>
                <li>Print</li>
            </ul>
        </div>
        <div class="img-container">
            <div class="box">
                <img src="img/shuffle-01.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-02.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-03.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-04.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-05.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-06.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-07.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
            <div class="box">
                <img src="img/shuffle-08.jpg" alt="">
                <div class="caption">
                    <h4>Awesome Image</h4>
                    <p>Photography</p>
                </div>
            </div>
        </div>
        <a href="#" class="more">More</a>
    </div>
    <!-- end Portfolio -->
    <!-- start vedio -->
    <div class="video">
        <video src="img/awesome-video.mp4" type="video/mp4" autoplay muted loop></video>
        <div class="text">
            <h2>Super Awesome Video Here....</h2>
            <p>Its All You Need</p>
            <button>See More</button>
        </div>
    </div>
    <!-- end vedio -->
    <!-- start about  -->
    <div class="about">
        <div class="container">
            <div class="main-heading">
                <h2>Portfolio</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse voluptate temporibus libero! Deserunt quo non corrupti fuga asperiores qui debitis exercitationem. Cumque nihil consequatur nesciunt tempore repellendus voluptate molestias.</p>
            </div>
            <img src="img/about.png" alt="">
        </div>
    </div>
    <!-- end about  -->
    <!-- start statis -->
    <div class="statis">
        <div class="container">
            <div class="ibox">
                <i class="fas fa-mug-hot"></i>
                <div class="number">15.235</div>
                <p>Coffe Drink</p>
            </div>
            <div class="ibox">
                <i class="fas fa-folder"></i>
                <div class="number">235</div>
                <p>Completed Projects</p>
            </div>
            <div class="ibox">
                <i class="fas fa-envelope"></i>
                <div class="number">1.235</div>
                <p>Mail Sent</p>
            </div>
            <div class="ibox">
                <i class="fas fa-trophy"></i>
                <div class="number">35</div>
                <p>Awards Received</p>
            </div>
        </div>
    </div>
    <!-- end statis -->
    <!-- start skills -->
    <div class="skills">
        <div class="container">
            <div class="testimonials">
                <h3>courses</h3>
                <p>
                    full stack developer in Raya Academy . <br>
                    ICDL from the Ministry of Youth and Sports .<br>
                    Python programming language from the Ministry of Youth and
                    Sports Introduction and Intermediate level .</p>
                <div class="cont">
                    <img src="img/a2.jpg" alt="">
                    <div class="text">
                        In Raya Academy We learning Teamwork , Public Relations , critical and creative thinking , Effective Communication And work under pressure .
                        <p>Ahmed Hamam , Elhamamy</p>
                    </div>
                </div>
                <div class="cont">
                    <img src="img/a1.png" alt="">
                    <div class="text">
                        In Online Course We Learning Microsoft office as word , Excel and powrpoint 
                        <p>Ahmed Hamam , Elhamamy</p>
                    </div>
                </div>
                <ul class="bullets">
                    <li></li>
                    <li class="active"></li>
                    <li></li>
                </ul>
            </div>
            <div class="skill">
                <h3>SKILLS</h3>
                <p>
                    I Can Make Responsive WebSite By Using Html , Css And JavaScript .<br>
                    And Use Angular FrameWork in Frontend , <br>
                    And Use PHP To Make API It Is Connection From Frontend and Backend Without any frame work and use validation php to filltering data before send it to database
                </p>
                <div class="prog">
                    <h2>html</h2>
                    <div class="proges">
                        <span style="width:90%" data-progress="90%"></span>
                    </div>
                </div>
                <div class="prog">
                    <h2> css </h2>
                    <div class="proges">
                        <span style="width:90%" data-progress="90%"></span>
                    </div>
                </div>
                <div class="prog">
                    <h2>javascript</h2>
                    <div class="proges">
                        <span style="width:70%" data-progress="70%"></span>
                    </div>
                </div>
                <div class="prog">
                    <h2>php</h2>
                    <div class="proges">
                        <span style="width:80%" data-progress="80%"></span>
                    </div>
                </div>
                <div class="prog">
                    <h2>mysql</h2>
                    <div class="proges">
                        <span style="width:70%" data-progress="70%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end   skills -->
    <!-- start quote -->
    <div class="quote">
        <div class="container">
            <q>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem asperiores expedita amet, deserunt quaerat recusandae! Quas autem adipisci facere iste, minima tenetur porro id, corrupti, labore optio non ipsam obcaecati.</q>
            <span>Ahmed Hamam , Elhamamy</span>
        </div>
    </div>
    <!-- end quote -->
    <!-- start pricing -->
    <div class="pricing">
        <div class="container">
            <div class="main-heading">
                <h2>Pricing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse voluptate temporibus libero! Deserunt quo non corrupti fuga asperiores qui debitis exercitationem. Cumque nihil consequatur nesciunt tempore repellendus voluptate molestias.</p>
            </div>
            <div class="plans">
                <div class="plan">
                    <div class="head">
                        <h2>BASIC</h2>
                        <span>19.9</span>
                    </div>
                    <ul>
                        <li>Feature N 1</li>
                        <li>Extra Feature</li>
                        <li>Extra Feature N 2</li>
                        <li>Feature </li>
                    </ul>
                    <div class="foot">
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="head">
                        <h2>PREMIUM</h2>
                        <span>29.9</span>
                    </div>
                    <ul>
                        <li>Feature N 1</li>
                        <li>Extra Feature</li>
                        <li>Extra Feature N 2</li>
                        <li>Feature </li>
                    </ul>
                    <div class="foot">
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="head">
                        <h2>PRO</h2>
                        <span>39.9</span>
                    </div>
                    <ul>
                        <li>Feature N 1</li>
                        <li>Extra Feature</li>
                        <li>Extra Feature N 2</li>
                        <li>Feature </li>
                    </ul>
                    <div class="foot">
                        <a href="#">Buy Now</a>
                    </div>
                </div>
                <div class="plan">
                    <div class="head">
                        <h2>PLATINUM</h2>
                        <span>49.9</span>
                    </div>
                    <ul>
                        <li>Feature N 1</li>
                        <li>Extra Feature</li>
                        <li>Extra Feature N 2</li>
                        <li>Feature </li>
                    </ul>
                    <div class="foot">
                        <a href="#">Buy Now</a>
                    </div>
                </div>
            </div>
            <p class="contact-text">Contact Us if you hane special request</p>
            <a href="#" class="contact-link">Contact Us</a>
        </div>
    </div>
    <!-- end pricing -->
    <!-- start subscribe -->
    <div class="subscribe">
        <div class="container">
            <form action="">
                <i class="far fa-envelope"></i>
                <input type="email" name="mail" placeholder="YOUR EMAIL">
                <input type="submit" value="subscribe" name="subscribe">
            </form>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam asperiores porro praesentium vero accusantium quia mollitia eius delectus eos quis? Incidunt vitae voluptates doloribus corporis nulla excepturi optio qui impedit.</p>
        </div>
    </div>
    <!-- end subscribe -->
    <!-- start contact -->
    <div class="contact">
        <div class="container">
            <div class="main-heading">
                <h2>CONTTACT US</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat esse voluptate temporibus libero! Deserunt quo non corrupti fuga asperiores qui debitis exercitationem. Cumque nihil consequatur nesciunt tempore repellendus voluptate molestias.</p>
            </div>
            <div class="content">
                <form action="" method="post">
                    <input type="text" name="name" class="inp" placeholder="YOUR NAME">
                    <input type="email" name="email" class="inp" placeholder="YOUR email">
                    <textarea name="message" id="" placeholder="YOUR message" class="inp"></textarea>
                    <input type="submit" name="send" value="send message" id="">
                </form>
                <div class="info">
                    <h2>GET IN TOUCH</h2>
                    <span class="phone">01012467716</span>
                    <span class="phone">01012467716</span>
                    <h2>Where We Are</h2>
                    <address>Awesome Address 17 <br>Nser City , Cairo <br> 123-456-789 <br> Egypt</address>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!-- start footer -->
    <div class="footer">
        <div class="container">
            <img src="img/logo.png" alt="">
            <p>My Social</p>
            <div class="icon">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <div class="copyright">&copy; 2023 <span> Ksper </span> All Right Reserved </div>
        </div>
    </div>
    <!-- end footer -->
    <?php include 'com/db.php' ?>
</body>
</html>