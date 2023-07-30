<?php
    require "ticket.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh Tam Transport</title>
    <script src="https://www.freestyleacademy.rocks/jquery/minified.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="./assets/img/slide/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="./assets/img/slide/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="./assets/img/slide/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row">
            <div>
                <nav class="navbar navbar-expand-lg bg-success  text-bg-light">
                    <div class="container-fluid">
                        <button class="aka navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon text-light"></span>
                        </button>
                        <a class="navbar-brand  text-light" href="#">MINH TAM</a>

                        <div class="ake collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item d-flex  align-items-baseline flex-wrap pe-3">
                                    <!-- <i class="bi bi-phone text-light fs-5"></i> -->
                                    <a class="nav-link text-light table-hover" href="index.php?product=phone" value="12"> Home</a>
                                </li>
                                <li class="nav-item d-flex  align-items-baseline flex-wrap pe-3">
                                    <!-- <i class="bi bi-laptop text-light fs-5"></i> -->
                                    <a class="nav-link text-light table-hover" href="index.php?product=laptop"> About</a>
                                </li>


                                <li class="nav-item d-flex align-items-baseline flex-wrap">
                                    <i class="bi bi-box-arrow-in-right text-light fs-5"></i>
                                    <a class="nav-link text-light table-hover" href="login.php"> Login</a>
                                </li>
                            </ul>
                            <form class="d-flex pb-1" role="search" method="get" action="index.php">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_product">
                                <button class="btn btn-warning" type="submit" name="btn_search" value="submit">Search</button>
                            </form>
                        </div>
                        <a href="" class="navbar-brand m-lg-1"><i class="bi bi-cart4 text-bg-danger p-2  rounded "></i></a>

                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <?php
                $t = new ticket;
                if (isset($_POST['save'])) {
                    $t->customer_name    = $_POST['customer_name'];
                    $t->customer_phone = $_POST['customer_phone'];
                    $t->number_of_ticket = $_POST['number_of_ticket'];
                    $t->branch_id = 1;
                    $t->task_list_id = $_POST['router'];
                    $t->employee_id = 1;
                    $t->status = 1;
                    $t->flag = '0';
                    // $t->create_at = "NOW()";
                    // $t->update_at = "";
                    $t->code = $_POST['customer_phone'];

                    print_r($t);

                    $t->add_ticket();
                    echo "write data done";
                }

                echo '<h3 class="text-center">Order Ticket</h3>
                <form action="" method="POST">
                    <div class="form-group mb-3 mt-6">
                        <label for="customer_name">Customer name</label>
                        <input type="text" class="form-control" id="customer_name" name="customer_name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="customer_phone">
                    </div>
                    <div class="form-group mb-3">
                        <label for="dob" class="text-black-50">Select router</label>
                        <select class="form-select form-select-md bg-light text-black" name="router">';
                            $t->showCode();
                echo '</select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ticket">Select number ticket</label>
                        <input type="number" class="form-control" id="ticket" name="number_of_ticket">
                    </div>

                    <button type="submit" class="btn btn-primary mb-2" name="save" value="save">Order</button>
                    <button class="btn btn-primary mb-2"> <a class="text-light" href="manage.php?select=brand">Cancel</a></button>
                </form>'

            ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>