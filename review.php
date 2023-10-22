<?php
$servername = "localhost"; // MySQL server hostname
$username = "root"; // MySQL username (default: root)
$database = "reviews"; // Database name

// Create a connection
$conn = new mysqli($servername, $username, "", $database); // No password is provided

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reviews from the database
$sql = "SELECT * FROM review";
$result = $conn->query($sql);

?>



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="offcanvas.css" rel="stylesheet">
        <link href="styles.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="Wine List">
        <meta name="description" content="">
        <title>Drinks</title>
          <style>
        body {
            font-family: Arial, sans-serif;
        }

        .review-container {
            width: 80%;
            margin: 0 auto;
        }

        .review {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .review .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .review .user-info img {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .review .user-info .star-rating input[type="radio"] {
            display: none;
        }

        .review .user-info .star-rating input[type="radio"] + i {
            font-style: normal;
            font-size: 24px;
            color: #f8d32b;
            cursor: pointer;
        }

        .review .user-info .star-rating input[type="radio"]:checked + i {
            color: #ffd700;
        }

        .reply {
            margin-left: 30px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .review {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 15px;
}

.user-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.avatar {
    width: 50px;
    height: 50px;
    margin-right: 15px;
}

.info-text {
    display: flex;
    flex-direction: column;
}

.user-name {
    font-weight: bold;
    margin: 0;
    font-size: 1.2rem;
}

.star-rating {
    margin-bottom: 10px;
}

.review-text {
    margin-bottom: 10px;
}

.reply {
    background-color: #f9f9f9;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
}

    </style>
        <link rel="stylesheet" href="nicepage.css" media="screen">
        <link rel="stylesheet" href="Drinks.css" media="screen">
        <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
        <meta name="generator" content="Nicepage 5.16.3, nicepage.com">
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
        <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/unnamed.jpg"
}</script>
        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="Drinks">
        <meta property="og:type" content="website">
        <meta data-intl-tel-input-cdn-path="intlTelInput/">
    </head>
    <body class="u-body u-xl-mode" data-lang="en">
        <header class="u-clearfix u-header u-header" id="sec-9fe0">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="#" class="u-image u-logo u-image-1" data-image-width="900" data-image-height="900"> <img src="images/unnamed.jpg" class="u-logo-image u-logo-image-1"> </a>
                <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#"> <svg class="u-svg-link" viewbox="0 0 24 24">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                            </svg> <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewbox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </g>
                            </svg> </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Menu.html" style="padding: 10px 20px;">Menu</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Order</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">About</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Reservation</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Gallery</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" style="padding: 10px 20px;">Review</a>
                            </li>
                        </ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="Home.html">Home</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="Menu.html">Menu</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">Order</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">About</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">Reservation</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">Gallery</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">Review</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="u-align-center u-clearfix u-section-2" src="" id="sec-95e8">
            <div class="u-clearfix u-image u-shading u-sheet u-valign-middle u-image-1" data-image-width="4608" data-image-height="3072">
                <h1 class="u-text u-text-default u-title u-text-1">Reviews</h1>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-section-3" id="sec-b18b">
            <div class="container my-5 py-5">

                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div id="cm-cr-dp-review-sort-type" data-reftag="cm_cr_dp_d_fltrs_srt" class="a-section a-spacing-small">
                        <span class="a-declarative" data-action="reviews:filter-action:change" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-reviews:filter-action:change" data-reviews:filter-action:change="{&quot;filterType&quot;:&quot;sortOrder&quot;}" data-csa-c-id="uiqka3-kw958f-senm2n-yckuhf">  <label for="cm-cr-sort-dropdown" class="aok-hidden">
                                Sort reviews by
</label> <span class="a-dropdown-container"><select name="" autocomplete="off" id="cm-cr-sort-dropdown" tabindex="0" data-action="a-dropdown-select" class="a-native-dropdown a-declarative" aria-pressed="false">
                                    <option value="helpful" data-a-css-class="cm-cr-sort-order-option" selected="">
                                        Top reviews
</option>
                                    <option value="recent" data-a-css-class="cm-cr-sort-order-option">
                                        Most recent
</option>
                                </select><span tabindex="-1" data-a-class="cm-cr-dp-filter-dropdown" class="a-button a-button-dropdown a-button-small cm-cr-dp-filter-dropdown" aria-hidden="true" id="a-autoid-10" style="min-width: 0%;"><span class="a-button-inner"><span class="a-button-text a-declarative" data-csa-c-func-deps="aui-da-a-dropdown-button" data-csa-c-type="widget" data-csa-interaction-events="click" data-action="a-dropdown-button" aria-hidden="true" id="a-autoid-10-announce" data-csa-c-id="vzbgf3-6d6tks-bgr8fa-7bay4t"></span><i class="a-icon a-icon-dropdown"></i></span></span></span> </span>
                    </div>
                    <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                        <div>
                            <div>
                               <a href="give-review.php" class="btn btn-primary">Write your customer review</a>
                            </div>
                        </div>
                    </div>
                </div>

          <div class="review-container">
    <?php
    $servername = "localhost";
    $username = "root";
    $database = "reviews";

    // Create a connection
    $conn = new mysqli($servername, $username, "", $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch reviews from the database
    $sql = "SELECT * FROM review";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="review">
                <div style="margin-left:1.5rem;" class="user-info">
                    <div class="info-text">
                    <img class="avatar" style="margin-top: 1.5rem; padding:0.3rem;" src="images/avatar.png" alt="avatar">
                    <h4 style="margin-top: 1rem;" class="user-name"><?= $row["name"] ?></h4>

                    </div>

                    <div style="margin-right:2rem;" class="info-text">
                        <p class="small"><?= $row["date"] ?> <?= $row["time"] ?></p>
                    </div>
                </div>

                <div style="margin-left:1rem;" class="star-rating">
                    <?php
                    for ($i = 1; $i <= $row["stars"]; $i++) {
                        echo "<i style='color: gold; font-size: 1.8rem;'>★</i>";
                    }
                    ?>
                </div>

                <br>
                <br>


                <div style="margin-left:1.5rem;" class="info-text">
                
                <p><?= $row["review"] ?></p>

                </div>
                

               <?php
// Fetch and display replies for this review
$reviewId = $row["review_id"];
$replySql = "SELECT * FROM review WHERE review_id = $reviewId";
$replyResult = $conn->query($replySql);

if ($replyResult->num_rows > 0) {
    while ($replyRow = $replyResult->fetch_assoc()) {
?>
<div class="reply<?= !empty($replyRow["reply"]) ? ' admin' : '' ?>">
    <?php if (!empty($replyRow["reply"])): ?>
    <p><strong>Admin:</strong> <?= $replyRow["reply"] ?></p>
    <?php endif; ?>
</div>
<?php
    }
}
?>

            </div>
            <?php
        }
    } else {
        ?>
        <div class="reply">
            <p><strong>No reviews found.</strong></p>
        </div>
        <?php
    }

    // Close the connection
    $conn->close();
    ?>
</div>


            </div>
        </section>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-27c6">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">Copyright. 2023-2024 Cape Peninsula University of Cape Town&nbsp;</p>
            </div>
        </footer>
    </body>
</html>