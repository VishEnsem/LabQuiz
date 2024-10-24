<?php
$name = htmlspecialchars($_POST['name']);
$month = htmlspecialchars($_POST['month']);
$sales = floatval($_POST['sales']); 

if ($sales <= 0) {
    echo "Invalid sales amount. Please enter a valid positive number.";
    exit;
}

$commission_percentage = 0;

if ($sales >= 1 && $sales <= 2000) {
    $commission_percentage = 3;
} elseif ($sales >= 2001 && $sales <= 5000) {
    $commission_percentage = 4;
} elseif ($sales >= 5001 && $sales <= 7000) {
    $commission_percentage = 7;
} elseif ($sales > 7000) {
    $commission_percentage = 10;
}

$commission = ($commission_percentage / 100) * $sales;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commission Result</title>
</head>
<body>
    <div class="container">
        <h2><u>Sales Commission</u></h2>
        <div class="result-box">
            <p><strong>Name :</strong> <?php echo $name; ?></p>
            <p><strong>Month :</strong> <?php echo $month; ?></p>
            <p><strong>Sales Amount :</strong> RM <?php echo $sales; ?></p>
            <p><strong>Sales Commission :</strong> RM <?php echo number_format($commission, 2); ?></p>
        </div>
    </div>
</body>
</html>
