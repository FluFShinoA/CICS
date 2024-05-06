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

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 pills-container">
                    <ul class="nav nav-pills text-center">
                        <li class="nav-item">
                            <a class="nav-link active" id="Vision-tab" data-bs-toggle="pill" href="#Vision" role="tab" aria-controls="Vision" aria-selected="true">
                                <i class="fa-light fa-lightbulb-on"></i> <span>Vision</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Mission-tab" data-bs-toggle="pill" href="#Mission" role="tab" aria-controls="Mission" aria-selected="false">
                                <i class="fa-regular fa-rocket-launch"></i> <span>Mission</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Goals-tab" data-bs-toggle="pill" href="#Goals" role="tab" aria-controls="Goals" aria-selected="false">
                                <i class="fa-regular fa-bullseye-arrow"></i> <span>Goals</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="Vision" role="tabpanel" aria-labelledby="Vision-tab">
                            An avenue of the University in honing 
                            prime movers of advancement in the 
                            information and communication era.
                        </div>
                        <div class="tab-pane fade text-center" id="Mission" role="tabpanel" aria-labelledby="Mission-tab">
                            Produce graduates responsive to
                            the converging needs of a highly
                            progressive information and
                            communications society.
                        </div>
                        <div class="tab-pane fade text-center" id="Goals" role="tabpanel" aria-labelledby="Goals-tab">
                            The College of Informatics and Computing Studies is committed to pursue excellence in the field of Information and Communications Technology (ICT) through the following thrusts: <br><br>
                            <ol>
                                <li>
                                    Support the University’s vision and mission statements through the
                                    utilization of information and communications technology;
                                </li>
                                <li>
                                    Offer curricula that impart and inculcate concepts, theories, and
                                    algorithmic foundations, which implement effective information
                                    and computing solutions;
                                </li>
                                <li>
                                    Enhance the students’ skills and knowledge of the theoretical and
                                    practical aspects of information and communications technology;
                                </li>
                                <li>
                                    Train students as ICT professionals and researchers proficient in
                                    design, development, and application of computing solutions;
                                </li>
                                <li>
                                    Inculcate ethical and moral values keen on the conservation of the
                                    country’s natural resources;
                                </li>
                                <li>
                                    Deliver community services that facilitate the sustainable
                                    development of the community;
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
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