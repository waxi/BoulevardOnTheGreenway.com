<?php

    require_once('inc/config.php');

    $pageID = "index";

    $pageTitle = "Boulevard on the Greenway - Boston City Properties Listings";

    $pageDescription = "Located at 110 Broad Street Boston, Boulevard on the Greenway is one of Boston's most sought after addresses.   View current Boston City Properties listings";

    $pageKeywords = "";

    require_once('inc/header.php');

?>

    <main class="<?php echo $pageID; ?>">

         <section id="hero">
            <div>
                <span>Heading goes here!</span>
                <p>First sentence describing what this site is about, what does it offer.<br> Second sentence describing why they should care, what's in it for them.</p>
            </div>
         </section>

         <section id="searches">

            <a href="<?php echo $webPath; ?>search" id="apartments-for-rent">
                <div>
                    <span>Click to Search</span>
                    <span>Apartments <br>For Rent</span>
                </div>
            </a>

            <a href="<?php echo $webPath; ?>apartments" id="condos-for-sale">
                <div>
                    <span>Click to Search</span>
                    <span>Condos <br>For Sale</span>
                </div>
            </a>

        </section>

        <section id="intro">

            <div>

                <h2>Boulevard on the Greenway Offers<br> Luxury Condo Living at its Finest</h2>

                <hr>

                <p>When it comes to luxury condo living on the waterfront in downtown Boston, you’d be hard-pressed to find something more exciting or exclusive than Boulevard on the Greenway. With just a few units left on the market, the building, which began being constructed in June 2016, offers a thoughtful mix of the old and the new. Modern architecture by Finegold Alexander Architects lends it a sophisticated and high-end urban allure while modifications to a more than 200-year-old warehouse on the site help to seamlessly blend aspects of Boston’s history into its design. Boston City Properties currently has listings in the building and we have expert agents that can help you obtain a unit in the development.  We have listed, sold & rented some of the most luxurious units in the building. Contact us for more information on current availability of condos for sale & apartments for rent.</p>

            </div>

            <div>

                <h2>News</h2>

                <hr>

                <ul>
                    <li><a href="">History of the Rose Kennedy Greenway</a></li>
                    <li><a href="">Historic Façade of Bulfinch-Designed Warehouse Preserved in New Luxury Condo Building</a></li>
                    <li><a href="">Boulevard on the Greenway Offers Exquisite Luxury Apartment Homes</a></li>
                    <li><a href="">Boulevard on the Greenway Offering Exquisite Luxury Condos for Sale</a></li>
                    <li><a href="">First Automated Garage Parking System in New England Opens at Boulevard on the Greenway</a></li>
                    <li><a href="">Penthouse at Boulevard on the Greenway Sells for $5.835 Million</a></li>
                    <li><a href="">Boulevard on the Greenway Offers a Prime Location for Discerning Bostonians</a></li>
                </ul>

            </div>

        </section>


        <section id="thumbnails">

            <a href="<?php echo $webPath; ?>massachusetts-condo-developments" id="luxury-condo-developments"><span>About the Development</span></a>

            <a href="<?php echo $webPath; ?>massachusetts-condo-developments" id="luxury-condo-developments"><span>About the Retail Space</span></a>

        </section>

    </main>

<?php require_once('inc/footer.php'); ?>