<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Homepage </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/homepage.css">
        
        <?php include 'head_components.php'; ?>
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
                        <button class="redirect-btn">APPLY</button>
                    </div>
                </div>
                <div class="scroll-container col-12 d-flex justify-content-center">
                    <a href="#main-content"><span></span>Discover CICS</a>
                </div>
            </div>
        </section>

        <!-- Main Carousel for CICS -->
        <section id="main-content" class="w-100">
            <h3>GALLERY</h3>

            <div id="carouselExample" class="carousel slide main-carousel-inside" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3"></button>
                </div>

                <div class="carousel-inner main-carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/announcement-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/announcement-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/announcement-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/announcement-4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    
        <!-- Carousel for News and Events -->
        <section id="announcements">
            <div class="announcements-cover row w-100 p-0 m-0">
                <strong id="announcement-title" class="col-12 text-center">
                    LATEST
                </strong>
                <div id="announcements-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">

                                <div class="card">
                                    <img src="../img/announcement-1.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="../img/announcement-2.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>

                                <div class="card">
                                    <img src="../img/announcement-3.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <img src="../img/announcement-2.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="../img/announcement-3.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img src="../img/announcement-1.jpg" alt="image" />

                                    <div class="card-content">
                                        <p>Blue Sky</p>
                                        <p>When we use the term ‘blue sky’ to describe higher thinking, we are relating it to this endless color above us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <button class="carousel-control-prev" type="button" data-bs-target="#announcements-carousel" data-bs-slide="prev" id="prev-btn">
                        <span class="carousel-control-prev-icon" aria-hidden="true" id="carousel-prev-2"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#announcements-carousel" data-bs-slide="next" id="next-btn">
                        <span class="carousel-control-next-icon" aria-hidden="true" id="carousel-next-2"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section> 

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
    <script src="../js/script.js"></script>
</body>
</html>
