<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/assets/dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/styles.css">
    <script src="/assets/dist/jquery-3.2.1.slim.min.js"></script>
    <script src="/assets/dist/popper.min.js"></script>
    <script src="/assets/dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/dist/chartjs/Chart.bundle.js"></script>
    <script src="/assets/dist/chartjs/utils.js"></script>
    <script src="/assets/scripts.js"></script>
</head>
<body>

<div class="container">
    <? require "components/navbar.php" ?>
</div>

<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <? require "components/radar.php" ?>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-8"><? require "components/evaluationForm1.php" ?></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6"><? require "components/customerForm.php" ?></div>
        <div class="col-md-6"><? require "components/categoryForm.php" ?></div>
    </div>
    <div class="row mb-2">
        <div class="col-md-6"><? require "components/vendorForm.php" ?></div>
        <div class="col-md-6"><? require "components/userForm.php" ?></div>
    </div>
</div>
</body>
</html>