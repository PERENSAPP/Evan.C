<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts | Evan Cheung</title>
    <link rel="stylesheet" href="main.css">
    <link rel="icon" type="image/x-icon" href="/img/pixelPeer.png">
</head>

<body>

    <?php require "mainNav.php" ?>

    <main>
        <div class="hidden">
            <section class="contactsSection">
                <div class="contact-box">
                    <form class="form-box">
                        <h1>Contact me<span class="textColorChange">.</span></h1>
                        <input type="text" class="input-field" placeholder="First name" autofocus>
                        <input type="email" class="input-field" placeholder="Your Email" required>
                        <input type="text" class="input-field" placeholder="Subject">
                        <textarea type="text" class="input-field text-area" placeholder="Your message"
                            required></textarea>
                        <input type="submit" class="send-message-button" value="Send message">
                    </form>
                </div>
            </section>
        </div>
    </main>
    <script src="main.js"></script>
</body>

</html>