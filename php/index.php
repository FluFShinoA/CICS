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
                    <a href="#main-content"><span></span>Discover CICS</a>
                </div>
            </div>
        </section>

        <!-- RECENT EVENTS HAPPENED IN CICIS -->
        <section class="blog-slider-wrapper">
            <h1>RECENTS</h1>
            <div class="blog-slider">
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
    
        <!-- Carousel for GALLERY -->
        <section id="gallery">
            <div class="gallery-cover row w-100 p-0 m-0">
                <strong id="gallery-title" class="col-12 text-center">
                    GALLERY
                </strong>
                <div id="gallery-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">

                                <div class="card">
                                    <img src="../img/announcement-1.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="../img/announcement-2.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="../img/announcement-3.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <img src="../img/announcement-2.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="../img/announcement-3.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="../img/announcement-1.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>IMAGE TITLE</p>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex assumenda quae odit odio consequuntur cumque dolorum dolor sunt...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <button class="carousel-control-prev" type="button" data-bs-target="#gallery-carousel" data-bs-slide="prev" id="prev-btn">
                        <span class="carousel-control-prev-icon" aria-hidden="true" id="carousel-prev-2"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#gallery-carousel" data-bs-slide="next" id="next-btn">
                        <span class="carousel-control-next-icon" aria-hidden="true" id="carousel-next-2"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section> 

        <!-- UPCOMING EVENTS IN CICS -->
        <section id="upcoming">
            <div class="upcoming-wrapper">
                <div class="row container-fluid">
                    <div class="col-md-6 col-12 event-cont">
                        <h1 class="upcoming-title">
                            <i class='bx bx-calendar'></i> UPCOMING <br> EVENTS
                        </h1>
                    </div>
                    <div class="col-md-6 col-12 event-list">
                        <div class="event">
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

                        <div class="event">
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

                        <div class="event">
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

                        <div class="event">
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

                        <div class="event">
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

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        var swiper = new Swiper('.blog-slider', {
            spaceBetween: 30,
            effect: 'fade',
            loop: true,
            mousewheel: {
                invert: false,
            },
            // autoHeight: true,
            pagination: {
                el: '.blog-slider__pagination',
                clickable: true,
            }
        });
    </script>
</body>
</html>
