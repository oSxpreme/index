<html>
<head>
    <title>Peter Benninga</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name= "author" content="Peter Benninga">
    <meta name="description" content="Peter's portfolio website">
    <meta name="keywords" content= "HTML, CSS, Peter Benninga, Peter">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <a href="index">
        <section>
            <img src="https://www.seekpng.com/png/full/375-3752606_homepage-icon-house-logo-png-white.png" class="homeButton">
        </section></a>
</header>
<section>
    <h1 class="h1_contact">Contact formulier</h1>
</section>
    <section class="contact-form">
        <form id="contact-form" method="post" action="contactForm.php">
        <section>
            <input name="name" type="text" class="form-control" placeholder="Naam" required>
        <br>
        </section>
            <section>
            <input name="email" type="email" class="form-control" placeholder="Email" required>
            </section>
            <section>
            <textarea name="message" class="form-control" placeholder="Bericht" required></textarea><br>
            <input type="submit" class="form-control submit" value="VERSTUUR">
            </section>
        </form>
    </section>
    <section class="contact-text">
        <p class="p_contact">Hierboven ziet u een contact formulier waarmee u mij kunt bereiken.</p>
        <p class="p_contact">Vul uw naam en uw email in en laat een bericht achter en krijgt zo snel mogelijk een reactie.</p>
        <p class="p_contact">U kunt me ook op via de mail bereiken:</p>
        <a href="mailto:p.benninga@student.alfa-college.nl" target="_blank">
            <img class="mailIcon" src="mail.png"
                 alt="Mail Icon" style="height: 60px; width: 75px;">
        </a>
    </section>
<footer>
    <p class="p_footer">Version: 2.0 </p>
</footer>
</body>
</html>