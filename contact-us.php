
    <?php include('partials/header.php'); ?>
    <main>
        <section class="contact-us">
            <form action="#" class="contact-us__form">
                <label for="name" class="contact-us__form-label">Name:</label>
                <input type="text" name="name" class="contact-us__form-input" required placeholder="Enter your name . . .">

                <label for="email" class="contact-us__form-label">Email:</label>
                <input type="email" class="contact-us__form-input" required placeholder="Enter your email . . .">

                <label for="message" class="contact-us__form-label">Message:</label>
                <textarea name="message" id="message" rows="10" class="contact-us__form-textarea" required placeholder="Enter message . . ."></textarea>

                <label for="newsletter" class="contact-us__form-label">Get Newsletter?</label>
                <input type="checkbox" name="newsletter" class="contact-us__form-checkbox">

                <input type="submit" class="contact-us__form-submit" value="SUBMIT">
            </form>
        </section>
    </main>
    <?php include('partials/footer.php'); ?>