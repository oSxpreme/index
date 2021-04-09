<!DOCTYPE html>
<title>Peter Benninga</title>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta charset="UTF-8">
            <meta name= "author" content="Peter Benninga">
            <meta name="description" content="Peter's portfolio website">
            <meta name="keywords" content= "HTML, CSS, Peter Benninga, Peter">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <header>
                <a class="phpHome" href="index.php">
                <?php
                // 
                date_default_timezone_set('Europe/Amsterdam');
                $t = date("H");
                if ($t < "12") {
                echo "<h1>Goedemorgen!</h1>";
                }
                elseif ($t < "18") {
                echo "<h1>Goedemiddag!</h1>";
                }
                elseif ($t < "24") {
                echo "<h1>Goedenavond!</h1>";
            }
                ?>
                </a>
            </header>
            <main>
                <a href="persoonlijk" class="a_section">
                    <section class="section_persoonlijk block">
                        <h1>Persoonlijke info</h1>
                        <p>Wie ben ik?</p>
                    </section></a>
                    <a href="cv">
                    <section class="section_cv block">
                        <h1>CV</h1>
                        <p>Wat heb ik in het verleden voor werk gedaan?</p>
                    </section></a>
                    <a href="portfolio">
                    <section class="section_portfolio block">
                        <h1>Portfolio</h1>
                        <p>Welke opdrachten heb ik voor school gemaakt?</p>
                    </section></a>
                    <a href="contact">
                    <section class="section_contact block">
                        <h1>Contact</h1>
                        <p>Hoe kunt u me bereiken?</p>
                    </section></a>
                <a href="revampWebsite/guestBook">
                <section class="section_guestBook block" block">
                  <h1>Gastenboek</h1>
                  <p>Wie hebben mijn website bekeken?</p>
                </section></a>
                <a href="log">
                <section class="section_log block">
                    <h1>Logboek</h1>
                    <p>Wat heb ik wanneer aan deze website gedaan?</p>
                </section></a>
                    <footer>
                        <p class="p_footer">Version: 2.0 </p>
                    </footer>
             </main>
         </body>
    </html>