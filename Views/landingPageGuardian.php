<?php

namespace Views;

include("navGuardian.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Guardian Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH . "landingPage.css" ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- Carrusel -->
    <div class=" carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo FRONT_ROOT . IMG_PATH . "bannerImage1.jpg" ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo FRONT_ROOT . IMG_PATH . "bannerImage2.jpg" ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo FRONT_ROOT . IMG_PATH . "bannerImage3.jpg" ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <!-- Cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="https://gumlet.assettype.com/mimorelia%2F2022-07%2Fe2b6c575-cb38-4633-8282-b98f4dcbd734%2Fperrito_gordito_unam.jpg?auto=format%2Ccompress&fit=max&w=1200"
                        class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 align='center'><b>Find pets to care for</b></h5>
                        <h6 align='center'>If you enjoy <b>spending time with other people's pets</b>, you're in the
                            right
                            place
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://entrenatuperro.online/wp-content/uploads/2021/05/socializar-a-mi-cachorro.jpg"
                        class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 align='center'><b>Give love and receive it back</b></h5>
                        <h6 align='center'>Not only will you be able to take care of pets, but you will also <b>get
                                points</b> for doing so!
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://unamglobal.unam.mx/wp-content/uploads/2020/11/perros-sonr%C3%ADen-1024x576.jpg"
                        class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 align='center'><b>One Rule: make them happy</b></h5>
                        <h6 align='center'>Pet Hero has many other guardians like you who want to make sure <b>pets
                                don't feel alone</b>
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    </div>
</body>


</html>