<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
        
    <div class="contact-form">
        <h2>Contact Me</h2>
        <form action="https://formspree.io/f/xqkrwkrw" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message" rows="6" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</div>

<?php get_footer(); ?>
