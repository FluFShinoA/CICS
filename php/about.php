<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php include 'head_components.php'; ?>

    <link rel="stylesheet" href="../css/about.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <main>
        <?php include 'header.php'; ?>
        <div class="banner">
            <img src="../img/banner.jpg" alt="">
        </div>
        <div class="container-fluid vmgo">
            <h2>
                <div class="title">Vision</div>
            </h2>
            <div class="desc">
                An avenue of the University in honing prime movers of advancement in the information aand communications technology era.
            </div>
            <h2>
                <div class="title">Mission</div>
            </h2>
            <div class="desc">
                Produce graduates responsive to the converging needs of a highly progressive information and communications society. 
            </div>
            <h2>
                <div class="title">Goals and Objectives</div>
            </h2>
            <div class="desc">
                <ol>
                    <li>
                        Support the University's vision and mission statements through the utilization of information and communications technology;
                    </li>
                    <li>
                        Offer curricula that impact and inculcate concepts, theories, and algorithmic foundations which implement effective information and computing solutions;
                    </li>
                    <li>
                        Enhance the student's skills and knowledge of the theoretical and practical aspects of information and communications technology;
                    </li>
                    <li>
                        Train students as ICT professionals and researchers proficient in design, development, and application of computing solutions;
                    </li>
                    <li>
                        Inculcate ethical and moral values keen on the conservation of the country's resources. 
                    </li>
                </ol>
            </div>
        </div>


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
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-GLhlTQ8iK1u5LzZSKGrQrBpDr6H/EpIMAH4ZlR8O6SHpps/9XClQO8InlJ5f9d" crossorigin="anonymous"></script>
</body>
</html>