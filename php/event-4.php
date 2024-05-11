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
                <h2>Seminar: Microsoft Power Platform</h2>
                <small>
                    <i class='bx bx-calendar'></i>20 April, 2024
                </small>
            </div>

            <div class="row" id="event-description">
                <div class="col-lg-9 col-12" id="event-content">
                    Calling all future business innovators! Unleash the power of technology to streamline processes, automate tasks, and build impactful applications! Attend our seminar on the Microsoft Power Platform and discover a world of possibilities. This platform equips you with the tools to analyze data, create custom apps, automate workflows, and even build chatbots – all with minimal coding required!  If you're passionate about improving efficiency and driving business growth, this seminar is your chance to learn from the experts and unlock the potential of the Microsoft Power Platform!
                </div>
                <div class="col-lg-3 col-12">
                    <div class="row text-center">
                        <div class="col-12" id="image">
                            <img src="../img/male-silhouette.png" alt="">
                        </div>
                        <div class="col-12 mt-5" id="name">
                            <b>Speaker</b><br>
                            <p>Mr. Rejan Amit</p>
                        </div>
                        <div class="col-12" id="date">
                            <b>Event Date</b><br>
                            <p>May 02, 2024</p>
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
                    <a href="event-3.php">
                        <input class="btn btn-primary" type="button" value="Previous">
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="event-5.php">
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
