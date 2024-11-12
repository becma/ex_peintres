<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De merveilleux peintres</title>
</head>
<body>
    <header>
        <h1>De merveilleux peintres</h1>
    </header>
    <main>
        <?php
            include "db_conn.php";
            $conn = ouvreConnexion();

            $query = "SELECT * FROM `informations`;"; // définit la requête SQL que nous désirons effectuer
            $result = $conn->query($query); // effectue la requête sql à la db définie sous "$conn"

            if ($result->num_rows > 0) {
                // echo "Il y a plus qu'une row!";
                while ($row = $result->fetch_assoc()) {
                    echo
                    "<section>
                        <header>
                            <div class=\"nom-artiste\">
                                <h2>" . $row["prenom"] . "</h2>
                                <h3>" . $row["nom"] . "</h3>
                            </div>
                            <div class=\"donnees-naissance\">
                                <p>" . $row["annee_naissance"] . "</p>
                                <p>" . $row["ville_naissance"] . "</p>
                            </div>
                        </header>
                        <figure>
                            <img src=\"" . $row["oeuvre_image_url"] . "\" alt=\"" . $row["prenom"] . " " . $row["nom"] . " - " . $row["oeuvre_celebre"] . "\"/>
                            <figcaption>" . $row["oeuvre_celebre"] . "</figcaption>
                        </figure>
                    </section>";
                }
            }
        ?>
    </main>
    <footer>
        <p>ProgMom</p>
        <p>PMI</p>
        <p>2024</p>
    </footer>
</body>
</html>