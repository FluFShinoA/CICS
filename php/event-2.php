<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Event </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'head_components.php'; ?>
        <link rel="stylesheet" href="../css/events.css">
        <link rel="stylesheet" href="../css/homepage.css">
        
    </head>
<body>
    <!-- Sidebar Connection -->
    <?php include 'sidebar.php'; ?>

    <main>
        <?php include 'header.php' ?>

        <div class="container-fluid p-0 m-auto event-wrapper">
            <div class="back-button">
                <a href="index.php#upcoming" class="label">back</a>
            </div>
            <div class="event-title">
                <h2>Seminar: Security Operations Center</h2>
                <small>
                    <i class='bx bx-calendar'></i> 20 April, 2024
                </small>
            </div>

            <div class="row" id="event-description">
                <div class="col-lg-9 col-12" id="event-content">
                    Calling all cybersecurity enthusiasts! Do you have a passion for technology and want to learn how to defend the digital world? Then a seminar on Security Operations Centers (SOCs) is the perfect opportunity for you!  This seminar will delve into the exciting world of SOCs, the real-life command centers that fight cyber threats around the clock.  Explore how SOC professionals use cutting-edge technology to detect, analyze, and respond to cyberattacks.  If you're interested in a career in cybersecurity, this seminar is a can't-miss chance to learn from the experts and get a glimpse into this in-demand field!
                </div>
                <div class="col-lg-3 col-12">
                    <div class="row text-center">
                        <div class="col-12" id="image">
                            <img src="../img/male-silhouette.png" alt="">
                        </div>
                        <div class="col-12 mt-5" id="name">
                            <b>Speaker</b><br>
                            <p>Mr. Arvy A. Aquino</p>
                        </div>
                        <div class="col-12" id="date">
                            <b>Event Date</b><br>
                            <p>April 30, 2024</p>
                        </div>
                        <div class="col-12" id="venue">
                            <b>Event Venue</b><br>
                            <p>PSB Room 201</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="nav-buttons row">
                <div class="col-1">
                    <a href="event-1.php">
                        <input class="btn btn-primary" type="button" value="Previous">
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="event-3.php">
                        <input class="btn btn-primary" type="button" value="Next">
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer of CICS Website -->
        <?php include 'footer.php' ?>
    </main>
    <script>
        !(function () {
            let e = document.createElement("script"),
            t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
            "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
            // Replace 1.x.x with the version that you want
            (e.async = !0),
            (e.onload = () => {
                window.WebChat.default(
                {
                    title: 'CICSpert',
                    initPayload: '/greet',
                    customData: { language: "en" },
                    socketUrl: "http://localhost:5005",
                    // add other props here
                },
                null
                );
            }),
            t.insertBefore(e, t.firstChild);
        })();
    </script>
    <script src="../js/script.js"></script>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
