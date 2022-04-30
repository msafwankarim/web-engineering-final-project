<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>E-Bakers</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link rel="icon" href="/images/logo.png" type="image/png" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->

    <!-- Bootstrap core -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Oxygen:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
    <div class="mian-content">
        <!-- header -->
        <header>
            <?php include 'header.php' ?>
        </header>
        <!-- //header -->

        <!-- banner 2 -->
        <div class="banner2-w3ls">

        </div>
        <!-- //banner 2 -->
    </div>
    <!-- main -->
    <!-- page details -->
    <div class="breadcrumb-agile">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>

    <div class="container card mt-3 px-0">
        <div class="card-header">
            <h1>Cart</h1>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush container">
                <li class="list-group-item">
                    <div class="row px-3 align-items-center">
                        <div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">
                        </div>
                        <div class="col">
                            <h4 class="product-name"><strong>Product name</strong></h4>

                        </div>
                        <div class="col text-right">
                            <h6 style="line-height: 2.5em;"><strong>Rs. 25.00 /- <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control input-sm" placeholder="(1-9)" value="">
                        </div>
                        <div class="col-xs-2">
                            <button type="button" class="btn btn-link btn-xs">
                                <span class="fa fa-trash"> </span>
                            </button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer py-4">
            <div class="row text-center">
                <div class="col">
                    <h4 class="text-right">Total </h4>
                </div>
                <div class="col">
                    <strong>
                        <h4 class="text-right">Rs. 50.00 /-</h4>
                    </strong>
                </div>
                <div class="col-4 ">
                    <button type="button" class="btn btn-success btn-block">
                        Proceed
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- //page details -->
</body>