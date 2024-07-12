<!DOCTYPE html>
<html>
<head>
    <title>My PHP App</title>
</head>
<body>
    <h1>Welcome to my PHP App!</h1>
    <p>This is a simple PHP application hosted on AWS Elastic Beanstalk using Docker.</p>
    <?php
        echo "<p>Today's date is " . date("Y-m-d H:i:s") . "</p>";
    ?>
</body>
</html>
