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
                <h2>Grok Gets Brainy: Coding & Math Skills Power Up</h2>
                <small>
                    <i class='bx bx-calendar'></i> 28 March, 2024
                </small>
            </div>
            <div class="img-container">
                <img src="../img/read3.jpg" alt="Android 15" srcset="">
            </div>
            <div class="read-content">
                Elon Musk's AI company, X.ai, unveiled Grok 1.5 in early 2024. This large language model (LLM) boasts significant improvements over its predecessor, particularly in reasoning and problem-solving. It excels at tasks involving code and math, achieving impressive results on various benchmarks. Grok 1.5 can also hold coherent conversations over extended periods, making it a valuable tool for tasks requiring deep understanding of complex topics. <br><br>

                However, Grok 1.5 doesn't stop there. The recent Grok 1.5 Vision (Grok-1.5V) expands its capabilities further. This multimodal model incorporates visual understanding alongside its text-based strengths. Grok-1.5V can analyze documents, diagrams, and images, showcasing breakthroughs in complex reasoning tasks that involve visual information. This paves the way for AI systems that interact with the world in a way that mimics human perception, combining language processing with visual understanding. <br><br>

                Grok 1.5 and its evolution into Grok 1.5V represent significant strides in LLM development. These advancements hold promise for various applications, from revolutionizing scientific research to simplifying our daily interactions with technology. 
            </div>

            <hr>
            <div class="nav-buttons row">
                <div class="col-1">
                    <a href="readings-2.php">
                        <input class="btn btn-primary" type="button" value="Previous">
                    </a>
                </div>
                <div class="col-10"></div>
                <div class="col-1">
                    <a href="readings-4.php">
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
