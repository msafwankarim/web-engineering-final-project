<?php session_start(); ?>
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
    <?php require 'Connection.php';
    require 'Product.php';

    $conn = new Connection();
    $conn = $conn->get_connection();
    // print_r($_SESSION);
    if (isset($_POST["product"]) && isset($_POST["quantity"])) {
        $q = filter_var($_POST["product"], FILTER_VALIDATE_INT);
        $quantity = filter_var($_POST["quantity"], FILTER_VALIDATE_INT);
    } else if (isset($_SESSION["prod_id"], $_SESSION["quantity"])) {
        $q = $_SESSION["prod_id"];
        $quantity = $_SESSION["quantity"];
    } else {
        echo "<center>Cart is Empty</center>";
        die();
    }


    $sql = "SELECT * FROM products WHERE id = '{$q}'";
    $rs = mysqli_query($conn, $sql);
    if (mysqli_num_rows($rs) > 0) {
        while ($row = mysqli_fetch_assoc($rs)) {
            $product = Product::makeProductFromRow($row);
        }
    }
    $_SESSION["prod_id"] =  $product->id;
    $_SESSION["quantity"] = $quantity;

    ?>
    <div class="modal  fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content alert-success">
                <div class="modal-header">
                    <h5 class="modal-title">Order Placed</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <p class="modal-body">Order has been placed</p>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container card mt-3 px-0">
        <div class="card-header">
            <h1>Your Order</h1>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush container">
                <li class="list-group-item">
                    <div class="row px-3 align-items-center" data-item-id="<?php echo $product->id ?>">
                        <div class="col-xs-2"><img width="100px" class="img-responsive" src="<?php echo $product->img_url ?>">
                        </div>
                        <div class="col">
                            <h4 class="product-name"><strong><?php echo $product->name ?></strong></h4>
                        </div>
                        <div class="col text-right">
                            <h6 style="line-height: 2.5em;"><strong>Rs. <?php echo $product->price ?> /- <span class="text-muted">x</span></strong></h6>
                        </div>
                        <div class="col">
                            <input type="number" id="quantity" class="form-control input-sm" readonly min="1" max="9" placeholder="(1-9)" value="<?php echo $quantity ?>">
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
                        <h4 class="text-center">Rs. <?php echo $product->price * $quantity ?> /-</h4>
                    </strong>
                </div>

            </div>
        </div>
    </div>
    <div class="card container px-0 mt-4">
        <div class="card-header">Your Personal Information</div>
        <div class=" card-body">
            <form action="/order.php" id="cartForm" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name*" name="name" required>
					<div id="nameErr"><small style="color:red;"></small></div>
                </div>
                <div class="row">
                    <div class="form-group col-2 ">
                        <select class="form-control" name="" id="">
                            <option>+92</option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <input type="number" class="form-control" min="1" placeholder="Mobile Number*" name="phnum" required>
                        <div id="phoneError"><small style="color: red;"></small></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" name="address" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Message (optional)" name="msg" class="form-control"></textarea>
                </div>
                <!-- <div id="g-recaptcha" class="g-recaptcha" data-sitekey="6LeB-hoeAAAAABbSExG2D4qLDZTtCj9Nyk7RkKYs"></div>
                <div id="g-recaptcha-error"></div>
                <small class="form-text text-muted">
                    * This is required.
                </small> -->
                <div class="form-submit col-5 m-auto">
                    <button type="submit" id="" class="btn btn-success btn-block">
                        <div class="spinner-border d-none" role="status">
                            <span class="sr-only">Loading...</span>
                        </div> Order Now
                    </button>
                    <!-- <input type="submit" value="SEND"> -->
                </div>
            </form>
        </div>

    </div>

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        let $cartForm = $("#cartForm"),
            $modal = $(".modal");
        let $phoneField = $cartForm.find('input[name="phnum"]'),
            $ph_errField = $("#phoneError>small");
        let $nameField = $("input[name='name']");


        const showError = text => {
            $modal.find(".modal-title").text("Oops!");
            $modal.find(".modal-body").text(text);
            $modal.modal("show");
        }

        const isCaptchaValid = () => {
            if (!$("#g-recaptcha-response").val()) {
                $("#g-recaptcha-error")
                    .html("<small>* Verify the captcha to continue</small>")
                    .css("color", "red")
                    .show();
                return false;
            } else {
                $("#g-recaptcha-error").hide();
            }
            return true;
        }
        
        const validateName = () => {
			let isValid = /^[A-Za-z]+$/.test($nameField.val());
            if(isValid) {
                $("#nameErr > small").hide();
            }else {
                $("#nameErr > small").text("Name can't contain number or symbols").show();
            }
            return isValid;
		};

        const isPhoneNumValid = () => {
            let phoneVal = $phoneField.val();
            if (!/\d{10}/.test(phoneVal)) {
                $ph_errField.text("Phone number length should be 10. Do not include 0 or +92");
                return false;
            }
            let simCode = parseInt(phoneVal.substring(0, 3));
            if (simCode >= 300 && simCode <= 355) {
                $ph_errField.hide();
                return true;
            } else {
                $ph_errField.text("Invalid simcode. Simcode Range is 300 - 355");
            }
        }

        $cartForm.submit(e => {
            e.preventDefault();

            if (isCaptchaValid() && isPhoneNumValid() && validateName()) {
                
                $cartForm.find("div[role=status]").removeClass("d-none");
                $.ajax({
                    type: "POST",
                    url: $cartForm.attr("action"),
                    data: $cartForm.serialize(),
                    success: data => {
                        $modal.find(".modal-title").text("Success");
                        $modal.find(".modal-body").text(`Your order has been placed. Order tracking id is ${data}!`);
                        $cartForm[0].reset();
                        $modal.modal("show");
                        $modal.find("button.close").click(() => window.location.pathname = "/")
                    },
                    error: data => {
                        showError(`Failed to place order.\nError: ${data.responseText}`);
                    }
                }).always(xhr => {
                    $cartForm.find("div[role=status]").addClass("d-none");
                });
            }
        });
    </script>
    <!-- //page details -->
</body>