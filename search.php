
<?php

    require_once('inc/config.php'); 

    $pageID = "search";

    $pageTitle = "Boulevard on the Greenway - Search Sales";

    $pageDescription = "";

    $pageKeywords = "";

    $hideNav = true;

    $hideFooter = true;

    if (isset($_GET['t'])){
        $formType = $_GET['t'];
        if ($formType !== '' && $formType === 'sales' || $formType === 'rentals' ) {
            $price = $formType;
        } else {
            $price = 'sales';
        };
    } else {
        $price = 'sales';
    };

    require_once('inc/header.php');

?>



<main class="<?php echo $pageID; ?>">
	
    <section class="forms">
		
        <p class="important">Fill in the boxes below and the system will narrow the list to properties that match your search criteria.<br> E-mail us or call 617-247-1933 to view any listings. Listings are updated daily!</p>

        <form>

            <input type="hidden" name="source" value="<?php echo $price; ?>">

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

                <div class="two-columns">

                    <div>

                        <label>Price Range</label>
                        <select name="min-price">

                            <option value="No minimum" selected="selected">No min</option>

                            <option value="$1,000">$1,000</option> 
                            <option value="$1,250">$1,250</option> 
                            <option value="$1,500">$1,500</option> 
                            <option value="$1,750">$1,750</option> 
                            <option value="$2,000">$2,000</option> 
                            <option value="$2,250">$2,250</option> 
                            <option value="$2,500">$2,500</option> 
                            <option value="$2,750">$2,750</option> 
                            <option value="$3,000">$3,000</option> 
                            <option value="$3,250">$3,250</option> 
                            <option value="$3,500">$3,500</option> 
                            <option value="$3,750">$3,750</option> 
                            <option value="$4,000">$4,000</option> 
                            <option value="$4,250">$4,250</option> 
                            <option value="$4,500">$4,500</option> 
                            <option value="$4,750">$4,750</option> 
                            <option value="$5,000">$5,000</option> 
                            <option value="$5,250">$5,250</option> 
                            <option value="$5,500">$5,500</option> 
                            <option value="$5,750">$5,750</option> 
                            <option value="$6,000">$6,000</option> 
                            <option value="$6,250">$6,250</option> 
                            <option value="$6,500">$6,500</option> 
                            <option value="$6,750">$6,750</option> 
                            <option value="$7,000">$7,000</option> 
                            <option value="$7,250">$7,250</option> 
                            <option value="$7,500">$7,500</option> 
                            <option value="$7,750">$7,750</option> 
                            <option value="$8,000">$8,000</option> 
                            <option value="$8,250">$8,250</option> 
                            <option value="$8,500">$8,500</option> 
                            <option value="$8,750">$8,750</option> 
                            <option value="$9,000">$9,000</option> 
                            <option value="$9,250">$9,250</option> 
                            <option value="$9,500">$9,500</option> 
                            <option value="$9,750">$9,750</option> 
                            <option value="$10,000">$10,000</option>                             

                            <?php if ($price === 'sales') : ?>

                            <option value="$25,000">$25,000</option>
                            <option value="$50,000">$50,000</option>
                            <option value="$75,000">$75,000</option>
                            <option value="$100,000">$100,000</option>
                            <option value="$125,000">$125,000</option>
                            <option value="$150,000">$150,000</option>
                            <option value="$175,000">$175,000</option>
                            <option value="$200,000">$200,000</option>
                            <option value="$225,000">$225,000</option>
                            <option value="$250,000">$250,000</option>
                            <option value="$275,000">$275,000</option>
                            <option value="$300,000">$300,000</option>
                            <option value="$350,000">$350,000</option>
                            <option value="$400,000">$400,000</option>
                            <option value="$450,000">$450,000</option>
                            <option value="$500,000">$500,000</option>
                            <option value="$550,000">$550,000</option>
                            <option value="$600,000">$600,000</option>
                            <option value="$650,000">$650,000</option>
                            <option value="$700,000">$700,000</option>
                            <option value="$750,000">$750,000</option>
                            <option value="$800,000">$800,000</option>
                            <option value="$900,000">$900,000</option>
                            <option value="$1,000,000">$1,000,000</option>
                            <option value="$1,500,000">$1,500,000</option> 
                            <option value="$2,000,000">$2,000,000</option>
                            <option value="$2,500,000">$2,500,000</option> 
                            <option value="$3,000,000">$3,000,000</option>
                            <option value="$3,500,000">$3,500,000</option> 
                            <option value="$4,000,000">$4,000,000</option> 
                            <option value="$4,500,000">$4,500,000</option> 
                            <option value="$5,000,000">$5,000,000</option> 
                            <option value="$6,000,000">$6,000,000</option> 
                            <option value="$7,000,000">$7,000,000</option> 
                            <option value="$8,000,000">$8,000,000</option> 
                            <option value="$9,000,000">$9,000,000</option> 
                            <option value="$10,000,000+">$10,000,000+</option> 

                            <?php endif; ?>

                        </select>

                    </div>

                    <div>

                        <label class="hidden">&nbsp;</label>
                        <select name="max-price">

                            <option value="No maximum" selected="selected">No max</option>

                            <option value="$1,000">$1,000</option> 
                            <option value="$1,250">$1,250</option> 
                            <option value="$1,500">$1,500</option> 
                            <option value="$1,750">$1,750</option> 
                            <option value="$2,000">$2,000</option> 
                            <option value="$2,250">$2,250</option> 
                            <option value="$2,500">$2,500</option> 
                            <option value="$2,750">$2,750</option> 
                            <option value="$3,000">$3,000</option> 
                            <option value="$3,250">$3,250</option> 
                            <option value="$3,500">$3,500</option> 
                            <option value="$3,750">$3,750</option> 
                            <option value="$4,000">$4,000</option> 
                            <option value="$4,250">$4,250</option> 
                            <option value="$4,500">$4,500</option> 
                            <option value="$4,750">$4,750</option> 
                            <option value="$5,000">$5,000</option> 
                            <option value="$5,250">$5,250</option> 
                            <option value="$5,500">$5,500</option> 
                            <option value="$5,750">$5,750</option> 
                            <option value="$6,000">$6,000</option> 
                            <option value="$6,250">$6,250</option> 
                            <option value="$6,500">$6,500</option> 
                            <option value="$6,750">$6,750</option> 
                            <option value="$7,000">$7,000</option> 
                            <option value="$7,250">$7,250</option> 
                            <option value="$7,500">$7,500</option> 
                            <option value="$7,750">$7,750</option> 
                            <option value="$8,000">$8,000</option> 
                            <option value="$8,250">$8,250</option> 
                            <option value="$8,500">$8,500</option> 
                            <option value="$8,750">$8,750</option> 
                            <option value="$9,000">$9,000</option> 
                            <option value="$9,250">$9,250</option> 
                            <option value="$9,500">$9,500</option> 
                            <option value="$9,750">$9,750</option> 
                            <option value="$10,000">$10,000</option>                             

                            <?php if ($price === 'sales') : ?>

                            <option value="$25,000">$25,000</option>
                            <option value="$50,000">$50,000</option>
                            <option value="$75,000">$75,000</option>
                            <option value="$100,000">$100,000</option>
                            <option value="$125,000">$125,000</option>
                            <option value="$150,000">$150,000</option>
                            <option value="$175,000">$175,000</option>
                            <option value="$200,000">$200,000</option>
                            <option value="$225,000">$225,000</option>
                            <option value="$250,000">$250,000</option>
                            <option value="$275,000">$275,000</option>
                            <option value="$300,000">$300,000</option>
                            <option value="$350,000">$350,000</option>
                            <option value="$400,000">$400,000</option>
                            <option value="$450,000">$450,000</option>
                            <option value="$500,000">$500,000</option>
                            <option value="$550,000">$550,000</option>
                            <option value="$600,000">$600,000</option>
                            <option value="$650,000">$650,000</option>
                            <option value="$700,000">$700,000</option>
                            <option value="$750,000">$750,000</option>
                            <option value="$800,000">$800,000</option>
                            <option value="$900,000">$900,000</option>
                            <option value="$1,000,000">$1,000,000</option>
                            <option value="$1,500,000">$1,500,000</option> 
                            <option value="$2,000,000">$2,000,000</option>
                            <option value="$2,500,000">$2,500,000</option> 
                            <option value="$3,000,000">$3,000,000</option>
                            <option value="$3,500,000">$3,500,000</option> 
                            <option value="$4,000,000">$4,000,000</option> 
                            <option value="$4,500,000">$4,500,000</option> 
                            <option value="$5,000,000">$5,000,000</option> 
                            <option value="$6,000,000">$6,000,000</option> 
                            <option value="$7,000,000">$7,000,000</option> 
                            <option value="$8,000,000">$8,000,000</option> 
                            <option value="$9,000,000">$9,000,000</option> 
                            <option value="$10,000,000+">$10,000,000+</option> 

                            <?php endif; ?>

                        </select>

                    </div>

                </div>

                <button type="button">Send Today's Property List</button>  

            </fieldset>

        </form>

	</section>

</main>

<?php require_once('inc/footer.php'); ?>