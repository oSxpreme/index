<html lang="nl">
<head>
    <title>Peter Benninga</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name= "author" content="Peter Benninga">
    <meta name="description" content="Peter's portfolio website">
    <meta name="keywords" content= "HTML, CSS, Peter Benninga, Peter">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <a href="index">
        <section>
            <img src="https://www.seekpng.com/png/full/375-3752606_homepage-icon-house-logo-png-white.png" class="homeButton">
        </section></a>
</header>
<body>
<section>
    <h1 class="h1_guestBook">Gastenboek</h1>
</section>
<form class="form_guestBook" action="#" method="post">
    <input class="input_guestBook" type="text" name="name" placeholder="Vul hier je naam in" required><br>
    <input class="submit_guestBook" type="submit" value="Lever in!">
</form>

<p class="p_guestBook">Ik wil u vragen uw naam in te vullen in het gastenboek hierboven als u deze website bekeken hebt.</p>
<p class="p_guestBook">Deze mensen waren u voor.....</p>
    <?php
        if(isset($_POST['name'])) {

    $myfile = fopen("comments.html", "a") or die ("there is an error");
    $writeInFile = "<ul class='ul_guestBook'>" . "<li>" . $_POST['name'] . "</li>" .  "</ul>" ." \n";
    fwrite($myfile,  $writeInFile);
    fclose($myfile);

    include ("comments.html");
    }
        else{
            include("comments.html");
        }
    ?>
<footer id="footer_guestBook">
    <p class="p_footer">Version: 2.0 </p>
</footer>
</body>
</html>