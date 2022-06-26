<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>iDiscuss - Coding Forum</title>
</head>

<body>
    <?php
        require('partial/_header.php');
    ?>


        <!-- carousol slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://source.unsplash.com/2400x900/?microsoft,css" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/2400x900/?javascript,php" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://source.unsplash.com/2400x900/?apple,coding" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
        <div class="container my-4">
            <h2 class="display-5 text-center mt-3 mb-5">iDiscuss - Browse Categories</h2>

            <div class="row">

                <!-- using a for loop to iterate through categories -->

                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://source.unsplash.com/500x400/?coding,python" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <?php
        require('partial/_footer.php');
    ?>


            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>