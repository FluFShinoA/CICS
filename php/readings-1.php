<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Recommend Read </title>
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
                <h2>GPU Killer? Ryzen 8000G Aims for Gamers & Creators</h2>
                <small>
                    <i class='bx bx-calendar'></i> 14 March, 2024
                </small>
            </div>
            <div class="img-container">
                <img src="../img/amd.png" alt="Ryzen 8000G Series" srcset="">
            </div>
            <div class="read-content">
                Launched in January 2024, the AMD Ryzen 8000G series processors offer a compelling solution for PC builders seeking a powerful all-in-one chip. Built on the Zen 4 architecture, these processors boast up to 8 cores and 16 threads, tackling demanding tasks like gaming and content creation with ease. <br><br>

                The key advantage of the 8000G series lies in its integrated graphics. Powered by the AMD Radeon 700M Series with RDNA 3 architecture, these processors deliver smooth 1080p gaming performance, eliminating the need for a separate graphics card. Additionally, the world's first dedicated NPU on a desktop CPU accelerates AI workloads, enhancing features like noise cancellation and application performance. With support for efficient DDR5 memory and one-click overclocking through Precision Boost Overdrive, the Ryzen 8000G series caters to a wide range of users seeking a powerful and versatile desktop experience.
            </div>

            <hr>
            <div class="nav-buttons row">
                <div class="col-1">
                    <a href="#">
                        <input class="btn btn-primary" type="button" value="Previous" disabled>
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="readings-2.php">
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
