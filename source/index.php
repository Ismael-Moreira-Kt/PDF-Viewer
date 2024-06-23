<?php 
    $read = './classes/read.php';

    if(isset($_POST['submit'])) {
        header('Location: ' . $read);
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PDF Reader</title>
    
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="A PDF reader application made in PHP.">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="PHP, HTML, CSS, PDF">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/styles/style.css">
        <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container">

            <div class="wrapper">
                <h1 class="hero">Choose one of the PDFs</h1>
            </div>

            <div class="wrapper">
                <img src="./assets/images/java.png" class="image" alt="Styled Image">
            </div>

            <div class="wrapper">
                <form method="POST">
                    <button type="submit" name="submit" value="submit">Read the PDF</button>
                </form>
            </div>

            <div class="wrapper">
                <h3>Made with <span>PHP</span></h3>
            </div>
        </div>
    </body>
</html>