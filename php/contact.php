<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $subject = $_POST["onderwerp"];
    $emailFrom = $_POST["email"];
    $message = $_POST["message"];
    
    $mailTo = "533187@student.glu.nl";
    $headers = "From: ".$emailFrom;
    $txt = "You have recieved an Email from ".$name.".\n\n".$message;

    mail($mailTo, $subject. $txt, $headers);

    header("Location: contact.php?mailsend");
}
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/stylsheet.css">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <script src="js/contact.js"></script>

</head>

<body>
    <main>
        <header>
            <nav>
                <div class="dropdown">
                    <button class="dropbtn"></button>
                    <div class="dropdown-content">
                        <a href="index.html">Home</a>
                        <a href="about.html">About</a>
                        <a href="work.html">Work</a>
                        <a href="contact.html">Contact</a>
                    </div>
                </div>
                <a class="portfolio">Gavin Tjin</a>
                <ul>
                    <li class="home-bg"><a class="home" href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="work.html">Work</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="contact-title">
                <h2>Contact me</h2>
                <h5>for questions</h5>
            </div>
            <div class="contact">
                <form id="contact-form" method="POST" action="contact.php">
                    <input    name="name"  type="text" class="form-control" placeholder="Your Name" required>
                    <br>
                    <input    name="email" type="text" class="form-control" placeholder="Your E-mail" required>
                    <br>
                    <input    name="onderwerp" type="text" class="form-control" placeholder="Onderwerp" required>
                    <br>
                    <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                    <br>
                    <button name="submit" type="submit" class="form-control submit" value="SEND MESSAGE">SEND MESSAGE</button>
                </form>
            </div>
        </header>
        <figure class="bol-1">
        </figure>
        <figure class="bol-2">
        </figure>
    </main>
</body>

</html>