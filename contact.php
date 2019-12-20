
<?php

    require_once('inc/config.php'); 

    $pageID = "contact";

    $pageTitle = "Boulevard on the Greenway - Contact Us";

    $pageDescription = "";
    $pageKeywords = "";

    $hideNav = true;
    $hideFooter = true;

    require_once('inc/header.php');

?>



<main class="<?php echo $pageID; ?>">
	
    <section class="forms">
		
        <p class="important">Boston City Properties is open 7 days a week between 8am and 11pm.</p>

        <p class="important">Please email us with any questions and we'll usually respond within less than 1 hour!</p>

        <p class="important">Also, call us at (617) 247-1933 with any questions and we look forward to meeting you soon!</p>

        <form>

            <input type="hidden" name="source" value="contact">

            <div class="status"></div>

            <fieldset>

                <legend>Contact</legend>

                <div class="two-columns">

                    <div>

                        <label>First Name</label>
                        <input type="text" name="first-name" class="req">

                    </div>

                    <div>

                        <label>Last Name</label>
                        <input type="text" name="last-name" class="req">

                    </div>

                </div>

                <div class="two-columns">

                    <div>

                        <label>Email</label>
                        <input type="text" name="email" class="req">

                    </div>

                    <div>

                        <label>Phone</label>
                        <input type="text" name="phone" class="req">

                    </div>

                </div>

                <label>Message</label>              
                <textarea name="message"></textarea>

            </fieldset>

            <button type="button">Send Message</button>  

        </form>

        <div class="clear"></div>

	</section>

</main>

<?php require_once('inc/footer.php'); ?>