<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Faculty Directory </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'head_components.php'; ?>

        <link rel="stylesheet" href="../css/faculty-dir.css">
    </head>
<body>
    <!-- Sidebar Connection -->
    <?php include 'sidebar.php'; ?>

    <main>
        <?php include 'header.php' ?>
    

        <div class="container">
            <div class="pade-title py-5" style="display: grid;">
                <h3 style="place-self: center; font-weight: bold;">Faculty Directory</h3>
            </div>
            
            <div class="row top-profiles">

                <!-- CICS Dean-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/Picture1.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>    
                                </a>
                            </div>
                        </div>

                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Simeon, Jan Riley L.</h6>
                            <p class="designation">CICS Dean</p>
                        </div>
                    </div>
                </div>

                <!-- CICS Ministrong Tagasubaybay-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/Picture5.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>

                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Tolarba, Karl Patrick C.</h6>
                            <p class="designation">Ministrong Tagasubaybay</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="splitter-1">&nbsp;</div>
            <div class="splitter-2">&nbsp;</div>
            
            <div class="row bottom-profiles">
                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>

                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 1</h6>
                            <p class="designation">Faculty 1</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">
                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 2</h6>
                            <p class="designation">Faculty 2</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 3</h6>
                            <p class="designation">Faculty 3</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">
                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 4</h6>
                            <p class="designation">Faculty 4</p>
                        </div>
                    </div>
                </div>


                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>

                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 5</h6>
                            <p class="designation">Faculty 5</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">
                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 6</h6>
                            <p class="designation">Faculty 6</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">

                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 7</h6>
                            <p class="designation">Faculty 7</p>
                        </div>
                    </div>
                </div>

                <!-- Single Advisor-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <!-- Team Thumb-->
                        <div class="advisor_thumb">
                            <img src="../img/faculty-profile.png" alt="" class="img-fluid">
                            <!-- Social Info-->
                            <div class="social-info">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M12 23.403V23.39 10.389L11.88 10.3h-.01L9.14 8.28C7.47 7.04 5.09 7.1 3.61 8.56 2.62 9.54 2 10.9 2 12.41v3.602L12 23.403zM38 23.39v.013l10-7.391V12.41c0-1.49-.6-2.85-1.58-3.83-1.46-1.457-3.765-1.628-5.424-.403L38.12 10.3 38 10.389V23.39zM14 24.868l10.406 7.692c.353.261.836.261 1.189 0L36 24.868V11.867L25 20l-11-8.133V24.868zM38 25.889V41c0 .552.448 1 1 1h6.5c1.381 0 2.5-1.119 2.5-2.5V18.497L38 25.889zM12 25.889L2 18.497V39.5C2 40.881 3.119 42 4.5 42H11c.552 0 1-.448 1-1V25.889z"></path>
                                    </svg>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 50 60">
                                        <path d="M2 18L2 32 12 32 12 18zM39 9v4.31l-10 9V16H14V6h22C37.66 6 39 7.34 39 9zM29 27.69l10 9V41c0 1.66-1.34 3-3 3H14V34h15V27.69zM12 34v10H5c-1.657 0-3-1.343-3-3v-7H12zM12 6L12 16 2 16zM29 25L39 16 39 34zM49 9.25v31.5c0 .87-1.03 1.33-1.67.75L41 35.8V14.2l6.33-5.7C47.97 7.92 49 8.38 49 9.25z"></path>
                                    </svg>     
                                </a>
                            </div>
                        </div>
                        <!-- Team Details-->
                        <div class="single_advisor_details_info">
                            <h6>Faculty 8</h6>
                            <p class="designation">Faculty 8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer of CICS Website -->
        <?php include 'footer.php' ?>
    </main>

    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
