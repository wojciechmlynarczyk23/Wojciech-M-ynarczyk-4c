<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Kontakt</h1>
    <form id="contact-form" action="#" method="post">
        <label for="name">Imię i nazwisko:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Adres e-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Wiadomość:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Wyślij :> </button>
    </form>

    <script>
        document.getElementById("contact-form").addEventListener("submit", function (event) {
            event.preventDefault();
            alert("Nie można wysłać formularza, masz pecha");
        });
    </script>

    <?php include('footer.php'); ?>
</body>
</html>
