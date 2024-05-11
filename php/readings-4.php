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
                <h2>AR Revolution in Health: Apple Vision Pro Opens Doors</h2>
                <small>
                    <i class='bx bx-calendar'></i> 11 March, 2024
                </small>
            </div>
            <div class="img-container">
                <img src="../img/read4.jpg" alt="Android 15" srcset="">
            </div>
            <div class="read-content">
                Apple Vision Pro, a powerful framework introduced in late 2023, has opened a new era for health app developers. This technology leverages the advanced capabilities of Apple devices to analyze images and videos with exceptional precision. This unlocks a plethora of possibilities for improving healthcare delivery and patient well-being. <br><br>

                Imagine apps that assist doctors in early disease detection by analyzing medical scans or enabling remote patient monitoring through real-time image analysis of skin conditions or wounds. Apple Vision Pro empowers developers to create such tools, allowing for faster diagnosis, intervention, and ultimately, better patient outcomes. Additionally, the technology offers significant benefits for individuals with visual impairments. Apps using image recognition and other computer vision techniques can provide real-time assistance, like reading medication labels or identifying medical equipment, fostering greater independence and navigation within the healthcare system. Apple Vision Pro's impact is far-reaching, transforming areas like clinical education, surgical planning, and behavioral health by creating immersive and interactive experiences that were previously unimaginable.
            </div>

            <hr>
            <div class="nav-buttons row">
                <div class="col-1">
                    <a href="readings-3.php">
                        <input class="btn btn-primary" type="button" value="Previous">
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="readings-5.php">
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
