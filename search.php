<?php

    require_once('inc/config.php'); 

    $pageID = "search";

    $pageTitle = "Boston City Properties - Search Sales";

    $pageDescription = "";

    $pageKeywords = "";

    $hideNav = true;

    $hideFooter = true;

    require_once('inc/header.php');

?>

<p class="whiteBar">Free Access to the Largest Property Database in the Boston Area!</p>

<main class="<?php echo $pageID; ?>">
	<div class="wrapper">
		
<p class="important">Fill in the boxes below and the system will narrow the list to properties that match your search criteria.<br> E-mail us or call 617-247-1933 to view any listings. Listings are updated daily!</p>

<form class="triple">

    <input type="hidden" name="source" value="sales">

    <p class="status"></p>

    <fieldset>

        <legend>Contact</legend>

        <div class="c50 right">
            <label>First Name <span>*</span></label>
            <input type="text" id="firstname" name="firstname" class="req">
        </div>
        <div class="c50 left">
            <label>Last Name <span>*</span></label>
            <input type="text" id="lastname" name="lastname" class="req">
        </div>
        <div class="c50 right">
            <label>E-mail <span>*</span></label>
            <input type="text" id="email" name="email" class="req">
        </div>
        <div class="c50 left">
            <label>Phone <span>*</span></label>
            <input type="text" id="phone" name="phone" class="req">
        </div>
        <div class="c50 right">
            <label>Timeframe</label>
            <select name="timeframe">
                <option value="No Answer" selected="selected">I need to move...</option>
                <option value="ASAP">ASAP</option>
                <option value="Within 30 days">Within 30 days</option>
                <option value="Within 60 days">Within 60 days</option>
                <option value="Within 90 days">Within 90 days</option>
                <option value="Within 1 year">Within 1 year</option>
                <option value="Next year">Next year</option>
                <option value="Just browsing">Just browsing</option>
            </select>
        </div>
        <div class="c50 left">
            <label>Relocating</label>
            <select name="relocating">
                <option value="No Answer" selected="selected">Are you relocating?</option>
                <option value="I live in MA">No, I currently live in MA</option>
                <option value="I'm out of state">Yes, I'm from out of state</option>
                <option value="I'm out of country">Yes, I'm from out of country</option>
            </select>
        </div>
        <label>Message</label>              
        <textarea id="message" name="message"></textarea>

    </fieldset>

    <fieldset>

        <legend>Advanced</legend>

        <div class="c25 right">
            <label>Price Range</label>
            <select name="minprice">
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
            </select>
        </div>
        <div class="c25 left right">
            <label>&nbsp;</label>
            <select name="maxprice">
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
            </select>
        </div>
        <div class="c25 left right">
            <label>Bedrooms</label>
            <select name="beds">
                <option value="0+" selected="selected">0+</option>
                <option value="1">1</option>
                <option value="1+">1+</option>
                <option value="2">2</option>
                <option value="2+">2+</option>
                <option value="3">3</option>
                <option value="3+">3+</option>
                <option value="4">4</option>
                <option value="4+">4+</option>
                <option value="5">5</option>
                <option value="5+">5+</option>
            </select>
        </div>
        <div class="c25 left ">
            <label>Bathrooms</label>
            <select name="baths">
                <option value="1+" selected="selected">1+</option>
                <option value="2+">2+</option>
                <option value="3+">3+</option>
                <option value="4+">4+</option>
                <option value="5+">5+</option>
            </select>
        </div>
        <div class="c50 right">
            <label>Living Area (Sq Ft)</label>
            <select name="livingarea">
                <option value="250" selected="selected">250</option>
                <option value="500">500</option>
                <option value="750">750</option>
                <option value="1,000">1,000</option>
                <option value="1,250">1,250</option>
                <option value="1,500">1,500</option>
                <option value="1,750">1,750</option>
                <option value="2,000">2,000</option>
                <option value="2,250">2,250</option>
                <option value="2,500">2,500</option>
                <option value="2,750">2,750</option>
                <option value="3,000">3,000</option>
                <option value="3,500">3,500</option>
                <option value="4,000">4,000</option>
                <option value="4,500">4,500</option>
                <option value="5,000">5,000</option>
                <option value="5,500">5,500</option>
                <option value="6,000">6,000</option>
                <option value="6,500">6,500</option>
                <option value="7,000">7,000</option>
                <option value="7,500">7,500</option>
                <option value="8,000">8,000</option>
                <option value="8,500">8,500</option>
                <option value="9,000">9,000</option>
                <option value="9,500">9,500</option>
                <option value="10,000+">10,000+</option>
            </select>
        </div>
        <div class="c50 left">
            <label>Property Type</label>
            <select name="property">
                <option value="All" selected="selected">All</option>
                <option value="Condos">Condos</option>
                <option value="Single Families">Single Families</option>
                <option value="Multi Families">Multi Families</option>
                <option value="Rentals">Rentals</option>
            </select>
        </div>

    </fieldset>

    <fieldset>

        <legend>Locations</legend>

        <span id="options">
            <span id="selectall">Select All</span>
            <span id="divide">/</span>
            <span id="deselectall">Deselect All</span>
        </span> 
        <select id="multi" multiple="multiple" name="locations[]">
            <option value="All Cities">All Cities</option>
            <option value="Allston">Allston</option>
            <option value="Arlington">Arlington</option>
            <option value="Back Bay">Back Bay</option>
            <option value="Bay Village">Bay Village</option>
            <option value="Beacon Hill">Beacon Hill</option>
            <option value="Braintree">Braintree</option>
            <option value="Brighton">Brighton</option>
            <option value="Brookline">Brookline</option>
            <option value="Cambridge">Cambridge</option>
            <option value="Charlestown">Charlestown</option>
            <option value="Chelsea">Chelsea</option>
            <option value="Chinatown">Chinatown</option>
            <option value="Dorchester">Dorchester</option>
            <option value="East Boston">East Boston</option>
            <option value="Everett">Everett</option>
            <option value="Fenway">Fenway</option>
            <option value="Financial District">Financial District</option>
            <option value="Hyde Park">Hyde Park</option>
            <option value="Jamaica Plain">Jamaica Plain</option>
            <option value="Leather District">Leather District</option>
            <option value="Lynn">Lynn</option>
            <option value="Longwood Medical">Longwood Medical</option>
            <option value="Malden">Malden</option>
            <option value="Mattapan">Mattapan</option>
            <option value="Medford">Medford</option>
            <option value="Midtown">Midtown</option>
            <option value="Milton">Milton</option>
            <option value="Mission Hill">Mission Hill</option>
            <option value="Newton">Newton</option>
            <option value="North End">North End</option>
            <option value="Quincy">Quincy</option>
            <option value="Revere">Revere</option>
            <option value="Roslindale">Roslindale</option>
            <option value="Roxbury">Roxbury</option>
            <option value="Seaport District">Seaport District</option>
            <option value="Somerville">Somerville</option>
            <option value="South Boston">South Boston</option>
            <option value="South End">South End</option>
            <option value="Theatre District">Theatre District</option>
            <option value="Waltham">Waltham</option>
            <option value="Waterfront">Waterfront</option>
            <option value="Watertown">Watertown</option>
            <option value="Wellesley">Wellesley</option>
            <option value="Weston">Weston</option>
            <option value="West End">West End</option>
            <option value="West Roxbury">West Roxbury</option>
            <option value="Winthrop">Winthrop</option>
        </select>

    </fieldset>

    <button type="button">Click Here to Receive Property List</button>  

</form>




<div class="clear"></div>

	</div>
</main>

<?php require_once('inc/footer.php'); ?>