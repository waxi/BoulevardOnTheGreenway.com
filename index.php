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
                <span>Exclusive Listings for Boulevard on the<br> Greenway - 110 Broad Street Boston</span>
                <p>Here you will find information on listings for condos for sale,<br> apartments for rent, and one of the premier retail space listings in the city.</p>
            </div>
         </section>

         <section id="searches">

            <a href="<?php echo $webPath; ?>search" id="apartments-for-rent">
                <div>
                    <span>Click to Search</span>
                    <span>Apartments For Rent</span>
                </div>
            </a>

            <a href="<?php echo $webPath; ?>apartments" id="condos-for-sale">
                <div>
                    <span>Click to Search</span>
                    <span>Condos For Sale</span>
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

                <h2>Boulevard on the Greenway News</h2>

                <hr>

                <ul>
                    <li><a href="blog/history-of-the-rose-kennedy-greenway">History of the Rose Kennedy Greenway</a></li>
                    <li><a href="blog/historic-facade-of-bulfinch-designed-warehouse-preserved-in-new-luxury-condo-building">Historic Façade of Bulfinch-Designed Warehouse Preserved in New Luxury Condo Building</a></li>
                    <li><a href="blog/boulevard-on-the-greenway-offers-exquisite-luxury-apartment-homes">Boulevard on the Greenway Offers Exquisite Luxury Apartment Homes</a></li>
                    <li><a href="blog/boulevard-on-the-greenway-offering-exquisite-luxury-condos-for-sale">Boulevard on the Greenway Offering Exquisite Luxury Condos for Sale</a></li>
                    <li><a href="blog/first-automated-garage-parking-system-in-new-england-opens-at-boulevard-on-the-greenway">First Automated Garage Parking System in New England Opens at Boulevard on the Greenway</a></li>
                    <li><a href="blog/penthouse-at-boulevard-on-the-greenway-sells-for-5-million">Penthouse at Boulevard on the Greenway Sells for $5.835 Million</a></li>
                    <li><a href="blog/boulevard-on-the-greenway-offers-a-prime-location-for-discerning-bostonians">Boulevard on the Greenway Offers a Prime Location for Discerning Bostonians</a></li>
                </ul>

            </div>

        </section>


        <section id="thumbnails">

            <a href="<?php echo $webPath; ?>about-the-development" id="about-development"><span>About the Development</span></a>

            <a href="<?php echo $webPath; ?>about-the-retail-space" id="retail-space"><span>About the Retail Space</span></a>

        </section>

    </main>

<?php require_once('inc/footer.php'); ?>