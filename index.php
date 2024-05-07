<?php include "./components/header.php";?>
<?php include "./components/footer.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./styles/style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <title>Accueil</title>
</head>

<body>
    <?php HeaderPage("./images/header.jpeg", "Alpha Street");?>
    <main>
        <section class="wrapper">
            <div class="products">
                <h2 class="heading">Nouveautés</h2>
                <div class="gallery">
                    <?php
$conn = new PDO("mysql:host=localhost;dbname=alpha-street", "root", "");

$statement = $conn->prepare('select * from produit');

$resultat = $statement->execute();
$produits = $statement->fetchAll();
foreach ($produits as $produit) {

    echo "
    <div class=\"item\" data-aos=\"fade-up-right\">
    <div class=\"item-box-img\">
        <img src=\"./images/{$produit['image_produit']}\" class=\"item-img\" />
    </div>
    <h3>{$produit['nom_produit']}</h3>
    <p class=\"item-description\">{$produit['description_produit']}</p>
    <p>{$produit['prix_produit']} <span class=\"item-devise\">€</span></p>
 </div>
    "
    ;
}
?>



                </div>
            </div>
        </section>
        <section class="wrapper contact-section" data-aos="fade-up">
            <h2 class="heading">Contactez-Nous</h2>
            <div class="contact">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.582485421003!2d2.3659980115579398!3d48.789860605407796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673d0937ba945%3A0x63829c5f9fb306a!2sEfrei%20Paris%20Panth%C3%A9on-Assas%20Universit%C3%A9%20-%20Campus%20Gorki!5e0!3m2!1sfr!2sfr!4v1714467761047!5m2!1sfr!2sfr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form action="mail.php" method="post" >
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="10" required></textarea>

                    <input type="submit" value="Envoyer">
                </form>
            </div>

        </section>
    </main>

    <?php FooterPage();?>

    <script>
    AOS.init({
        duration: 3000
    });
    </script>

</body>

</html>