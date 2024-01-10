
`<!DOCTYPE html>`
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Enigma Inc. Employee Management</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        
.location-info {
    margin-top: 20px;
}

.icon {
    width: 20px; /* Adjust the width of the icons */
    height: auto;
    margin-right: 10px; /* Adjust the space between the icon and text */
}

.contact-support-box {
    display: flex;
    flex-wrap: wrap; /* Allow flex items to wrap to the next line */
    justify-content: space-between; /* Distribute items evenly */
}

.contact-form-container,
.map-container {
    width: 48%; /* Adjust the width of the containers */
    box-sizing: border-box; /* Include padding and border in the width calculation */
    margin-bottom: 20px;
}

.contact-form-container h3,
.map-container h2 {
    color: #333;
}

.contact-form-container p,
.map-container .location-info p {
    color: #555;
}

.contact-form-container label {
    display: block;
    margin: 10px 0 5px;
    color: #333;
}

.contact-form-container input,
.contact-form-container textarea {
    width: calc(100% - 20px); /* Make the contact form container 100% width with padding adjustment */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.contact-form-container button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form-container button:hover {
    background-color: #555;
}

.thank-you-message {
    color: #333;
    font-size: 18px;
    margin-top: 20px;
}

    </style>
</head>
<body>
    <header class="dark-header">
        <div class="container">
            <img src="images/black_logo.png" alt="Enigma Inc. Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="#">About</a></li>
                    <li><a class="login-link" href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content container">
        <section class="contact-info">
            <h2>Reach out to the team. We are always here to help during business hours.</h2>
            
            <div class="contact-support-box">
                <section class="contact-form-container">
                    <h3>Do you have any issues regarding Enigma Inc Services or do you need some help?</h3>
                    <p>Complete the form below, and a member of the team will get back to you.</p>

                    <!-- Contact Form -->
                    <form action="process_contact_form.php" method="post">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required>

                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button type="submit">Send</button>
                    </form>
                </section>

                <section class="map-container">
                    <h2>Our Location</h2>
                    <?php
                    $address = urlencode("Thames Valley Park, Reading, RG6 1AD, UK");
                    $size = "600,300";
                    $staticMapURL = "https://www.mapquestapi.com/staticmap/v5/map?key=sp8czN1KDcd5xR368MLC6VMN926lfUbs&center=$address&size=$size";
                    ?>
                    <img src="<?php echo $staticMapURL; ?>" alt="Map of Our Location">

                    <!-- Address and icons -->
                    <div class="location-info">
                        <p><img src="images/pin.png" alt="Blip Icon" class="icon"> Our Headquarters: Enigma Inc, Thames Valley Park, Reading, RG6 1AD, UK</p>
                        <p><img src="images/email2.png" alt="Email Icon" class="icon"> Email: enigmainc@europe.com</p>
                    </div>
                </section>
            </div>
        </section>
    </div>
</body>
</html>
