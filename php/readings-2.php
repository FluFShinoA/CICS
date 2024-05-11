<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Homepage </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include 'head_components.php'; ?>
        <link rel="stylesheet" href="../css/recommend-reads.css">
        <link rel="stylesheet" href="../css/homepage.css">
        
    </head>
<body>
    <!-- Sidebar Connection -->
    <?php include 'sidebar.php'; ?>

    <main>
        <?php include 'header.php' ?>

        <div class="container-fluid p-0 m-auto blog-wrapper">
            <div class="back-button">
                <a href="index.php#reads" class="label">back</a>
            </div>
            <div class="blog-title">
                <h2>Get Ready to Level Up: Android 15 Preview Arrives</h2>
                <small>
                    <i class='bx bx-calendar'></i> 16 Feb, 2024
                </small>
            </div>
            <div class="img-container">
                <img src="../img/read6.png" alt="Android 15" srcset="">
            </div>
            <div class="read-content">
                Android 15, Google's upcoming major release for its mobile operating system, is expected to arrive sometime in Q3 of 2024. Currently in beta testing, Android 15 focuses on user productivity and enhanced capabilities. <br><br>

                One of the exciting additions is improved camera control. Developers will have access to new extensions for granular control over camera hardware. This translates to features like low-light enhancements and precise flash adjustments, potentially leading to significant improvements in mobile photography. Additionally, Android 15 prioritizes security with a new "Cellular Network Security" option. This allows users to require encryption before connecting to a cellular network and receive notifications about insecure connections. <br><br>

                With a focus on both user experience and security, Android 15 is shaping up to be a significant update for the world's most popular mobile OS.
            </div>

            <hr>
            <div class="nav-buttons row">
                <div class="col-1">
                    <a href="readings-1.php">
                        <input class="btn btn-primary" type="button" value="Previous">
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="readings-3.php">
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
