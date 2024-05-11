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
                <h2>Coding Comrade: Meet Devin, the World's First AI Developer</h2>
                <small>
                    <i class='bx bx-calendar'></i> 12 March, 2024
                </small>
            </div>
            <div class="img-container">
                <img src="../img/read5.jpg" alt="Android 15" srcset="">
            </div>
            <div class="read-content">
                Devin, created by Cognition, isn't your typical AI. Unveiled in 2024, it holds the distinction of being the world's first AI software engineer. This groundbreaking achievement signifies a significant leap forward in human-computer collaboration. <br><br>

                Devin's capabilities are truly impressive. It can write, debug, and even deploy code to build functional websites and videos based on user prompts.  Imagine a tool that translates your ideas into working software, streamlining the development process and freeing up human programmers for more complex tasks. Devin's potential extends beyond basic coding. It can analyze existing code, suggest improvements, and even identify potential bugs, acting as a valuable partner throughout the development lifecycle. <br><br>

                While still under development, Devin represents a glimpse into the future of software development. As AI capabilities continue to evolve, tools like Devin hold the potential to democratize coding, making it accessible to a wider range of users, and revolutionize the way we create software.
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
                        <input class="btn btn-primary" type="button" value="Next" disabled>
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
