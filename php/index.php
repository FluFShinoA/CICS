<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Homepage </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'head_components.php'; ?>

        <link rel="stylesheet" href="../css/homepage.css">
        <link rel="stylesheet" href="../css/swiper-bundle.min.css">
        
    </head>
<body>
    <!-- Sidebar Connection -->
    <?php include 'sidebar.php'; ?>

    <main>
        <?php include 'header.php' ?>
        <!-- Front Content of CICS Website -->
        <section class="col-12 container-fluid cics-front-content" id="front-section">
            <div class="row">
                <div class="NEU-campus col-md-7">
                    <img src="../img/pin.png" alt="New Era Campus">
                </div>
                <div class="col-md-5 quote text-center">
                    <p>Embrace the future of <br><span> TECHNOLOGY</span>,<br> Embrace <span> CICS</span></p>
                    <div class="buttons">
                        <a href="programs.php"><button class="redirect-btn">FIND A PROGRAM</button></a>
                        <a href="admission.php"><button class="redirect-btn">APPLY</button></a>
                    </div>
                </div>
                <div class="scroll-container col-12 d-flex justify-content-center">
                    <a href="#blog-slider-wrapper"><span></span>Discover CICS</a>
                </div>
            </div>
        </section>

        <!-- RECENT EVENTS HAPPENED IN CICIS -->
        <section class="blog-slider-wrapper" id="blog-slider-wrapper">
            <h1 data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-once="true">RECENTS</h1>
            <div class="blog-slider" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-once="true">
                <div class="blog-slider__wrp swiper-wrapper">
                    
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="../img/announcement-3.jpg" alt="">
                        </div>
    
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">18 November 2023</span>
    
                            <div class="blog-slider__title">UNITGG CLINCHES uCTF CHAMPIONSHIP</div>
    
                            <div class="blog-slider__text">
                                New Era University's Unit GG secured the championship in the recently concluded TREND University Capture the Flag 2023 (uCTF), a competition designed for...
                            </div>
                            
                            <a href="https://www.facebook.com/NEU.hudyat.online/posts/pfbid02tYU6XAk4nMHCpUw2mNA4jTz294aw4ipZ2hhaDhBGmXTHNQQE5ddvZBbh1tkiQf7Al" target="_blank" class="blog-slider__button">READ MORE</a>
                        </div>
                    </div>
    
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="../img/announcement-2.jpg" alt="">
                        </div>
    
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">21 October 2023</span>
    
                            <div class="blog-slider__title">NEU Team wins DICT Cyber Challenge 2023</div>
    
                            <div class="blog-slider__text">
                                NEU College of Informatics and Computing Studies (CICS) was declared NCR Champion in the recently conducted HackForGov...
                            </div>
    
                            <a href="https://neu.edu.ph/main/index.php/news/2023/04/2023_Technocrats" target="_blank" class="blog-slider__button">READ MORE</a>
                        </div>
                    </div>
    
                    <div class="blog-slider__item swiper-slide">
    
                        <div class="blog-slider__img">
                            <img src="../img/announcement-1.jpg" alt="">
                        </div>
    
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">07 September 2023</span>
    
                            <div class="blog-slider__title">NEU CDROM Website Launch!</div>
    
                            <div class="blog-slider__text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? 
                            </div>
    
                            <a href="https://www.cdrom.neu.edu.ph/" target="_blank" class="blog-slider__button">READ MORE</a>
                        </div>
                    </div>
                    
                </div>
                <div class="blog-slider__pagination"></div>
            </div>
        </section>
    
        <!-- Carousel for RECOMMEND READS -->
        <section id="reads">
            <div class="reads-cover row w-100 p-0 m-0">
                <strong id="reads-title" class="col-12 text-center" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="50" data-aos-once="true">
                    RECOMMEND READS
                </strong>
                <div class="recommend-read" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-once="true">
                    <div class="article-info">
                        <div class="article-date">
                            01 Jan, 2024
                        </div>
                        <div class="article-title">
                            GPU Killer? Ryzen 8000G Aims for Gamers & Creators
                        </div>
                        <div class="article-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique atque quis necessitatibus, voluptate adipisci voluptas distinctio quo odit maiores, velit alias dolore, temporibus perferendis perspiciatis voluptatum consectetur excepturi ullam minima impedit accusantium at id sequi numquam officia? Deleniti temporibus fugiat fuga debitis.
                        </div>
                        <a href="">
                            <button>
                                Read More
                            </button>
                        </a>
                    </div>
                    <div class="article-img">
                        <img src="../img/read2.jpg" alt="Article 1 Image Cover">
                    </div>
                </div>
                
                <div class="other-reads row p-0" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-once="true">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-image card-1"></div>
                            <div class="title">
                                <a href="">
                                    <h6 class="title-name">Get Ready to Level Up: Android 15 Preview Arrives</h6>
                                </a>
                                <div class="card-date">
                                    <p><i class="fa-duotone fa-calendar"></i> 01 Jan, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-image card-2"></div>
                            <div class="title">
                                <a href="">
                                    <h6 class="title-name">Grok Gets Brainy: Coding & Math Skills Power Up</h6>
                                </a>
                                <div class="card-date">
                                    <p><i class="fa-duotone fa-calendar"></i> 01 Jan, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-image card-3"></div>
                            <div class="title">
                                <a href="">
                                    <h6 class="title-name">AR Revolution in Health: Apple Vision Pro Opens Doors</h6>
                                </a>
                                <div class="card-date">
                                    <p><i class="fa-duotone fa-calendar"></i> 01 Jan, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-image card-4"></div>
                            <div class="title">
                                <a href="">
                                    <h6 class="title-name">Coding Comrade: Meet Devin, the World's First AI Developer</h6>
                                </a>
                                <div class="card-date">
                                    <p><i class="fa-duotone fa-calendar"></i> 01 Jan, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- UPCOMING EVENTS IN CICS -->
        <section id="upcoming">
            <div class="upcoming-wrapper">
                <div class="row container-fluid">
                    <div class="col-md-6 col-12 event-cont">
                        <h1 class="upcoming-title" data-aos="fade-right" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-once="true">
                            <i class='bx bx-calendar'></i> UPCOMING <br> EVENTS
                        </h1>
                    </div>
                    <div class="col-md-6 col-12 event-list" >
                        <div class="event" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="100" data-aos-once="true">
                            <div class="date">
                                <span class="month">JAN</span> 
                                <span class="day">15</span>
                            </div>
                            
                            <div class="event-description">
                                <a href="#" class="event-title">Get ready for another semester of exciting learning and exploration</a>

                                <span class="event-location">
                                    <i>Location: NEU Hall</i>
                                </span>
                            </div>
                        </div>

                        <div class="event"data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="150" data-aos-once="true">
                            <div class="date">
                                <span class="month">FEB</span> 
                                <span class="day">14</span>
                            </div>

                            <div class="event-description">
                                <a href="#"  class="event-title">Data Science Workshop: From Beginner to Expert</a>

                                <span class="event-location">
                                    <i>Location: NEU Hall</i>
                                </span>
                            </div>
                            
                        </div>

                        <div class="event" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="200" data-aos-once="true">
                            <div class="date">
                                <span class="month">MAR</span> 
                                <span class="day">23</span>
                            </div>

                            <div class="event-description">
                                <a href="#"  class="event-title">Industry Talk: The Future of Artificial Intelligence</a>

                                <span class="event-location">
                                    <i>Location: PSB Multipurpose Hall</i>
                                </span>
                            </div>
                        </div>

                        <div class="event" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="250" data-aos-once="true">
                            <div class="date">
                                <span class="month">APR</span> 
                                <span class="day">14</span>
                            </div>

                            <div class="event-description">
                                <a href="#"  class="event-title">Game Development Jam: Create Your Dream Game</a>

                                <span class="event-location">
                                    <i>Location: NEU Hall</i>
                                </span>
                            </div>
                        </div>

                        <div class="event" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="300" data-aos-once="true">
                            <div class="date">
                                <span class="month">MAY</span> 
                                <span class="day">1-15</span>
                            </div>

                            <div class="event-description">
                                <a href="#"  class="event-title">Final Examinations</a>

                                <span class="event-location">
                                    <i>Location: SOM Multipurpose Hall</i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer of CICS Website -->
        <?php include 'footer.php' ?>
    </main>
    
    <script src="../js/script.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
