<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fun website of the Wild Code School">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript, Wild Code School">
    <meta name="authors" content="Nicolas Duhamel, Emilie Boeglen, Julie Dulmas, Steven Antal, Arlensiú Celis">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>WCS - The Joys of the Wild</title>
</head>

<body>
<?php require('header.php'); ?>

<section id="joysCarousel" class="my-3">
    <div class="container-fluid">
        <!-- carousel images -->
        <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="1000" data-wrap="true">
            <!-- The slideshow -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x100" alt="first slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x100" alt="second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid img-responsive" src="https://via.placeholder.com/350x100" alt="third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#joysCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#joysCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section id="joys-text" class="my-3">
    <div class="container-fluid d-flex justify-content-around">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/10DjIRoAfylalG/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When a wilder succeeds a quest.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/9kKlRx7qpUGze/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">When I delete a line of code that I thought was useless and that everything crashes.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.giphy.com/media/HZpCCbcWc0a3u/giphy.gif" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">PHP VERSUS JavaScript.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container-fluid d-flex justify-content-around">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/orNv7BpL7Y2iI/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">When a wilder team attacks a project.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/h41bl4ZNk276w/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">When you have to finish your quests in time (and half of it remains of course).</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="https://media.giphy.com/media/1Xn0wUBoeOtRC/giphy.gif" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Tuesday's dojo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('footer.php'); ?>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!--Old script (popper) that did not appear in the new documentation that I just put here between-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>