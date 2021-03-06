<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Second Street Cottages - Ashland, OR</title>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" href="stylesheets/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700' rel='stylesheet' type='text/css'>
    <script src="bower_components/modernizr/modernizr.js"></script>

    <script type="text/javascript">
    // Read a page's GET URL variables and return them as an associative array.
    function getUrlVars() {
        var vars = [],
            hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    $(document).ready(function() {
        if (getUrlVars() == "m") {
            $('.success').css('display', 'block').html('Thank you for contacting Second Street Cottages. We will respond to your message as soon as possible.');
        }
	if (getUrlVars() == "e") {
            $('.success').css('display', 'block').css('background', 'red').html('Please enter the proper Captcha response.');
	}
        var offset = 220;
        var duration = 500;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn(duration);
            } else {
                jQuery('.back-to-top').fadeOut(duration);
            }
        });

        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            jQuery('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        })

    });
    </script>
</head>

<body>
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h3 class="show-for-small"><a href="#">Second Street Cottages</a>
                </h3>
                <h1 class="hide-for-small"><a href="#">Welcome to Second Street Cottages</h1><p class="show-for-large-up">144 North Second Street 
Ashland, OR 97520<br/>1-541-488-0888 or 1-877-541-4880 (toll-free)</p></a>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="has-dropdown">
                    <a href="#">Our Suites</a>
                    <ul class="dropdown">
                        <li><a href="#heritage-suite">Heritage Suite</a>
                        </li>
                        <li><a href="#garden-suite">Garden Suite</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#calendars">Calendars</a>
                </li>
                <li><a href="#policies">Rental Policies</a>
                </li>
                <li><a href="#contact">Contact Us</a>
                </li>
            </ul>
        </section>
    </nav>



    <div class="row">
        <div class="large-12 columns">
            <br/>
            <img src="images/header_banner.gif" />

        </div>
    </div>


    <div class="row">
        <div class="large-12 columns">
            <div class="panel">
                <img src="http://imagesus.homeaway.com/mda01/4807012f-2f5e-41a1-b52e-5e11cf3f9501.1.10" />
                <p>Second Street Cottages, Act 2 is an historic home with two private Suites: Heritage Suite and Garden Suite. It is located just two blocks from the center of Ashland, including the Shakespeare Festival Theaters, unique shops, and restaurants. Both suites feature a living room, dining area, fully-equipped kitchen, multiple bedrooms and bathrooms, decks and patio areas.</p>
                <p>The
                    <strong>Heritage Suite</strong>&nbsp;can accommodate up to eight (8) guests, and contains four bedrooms and three full bathrooms.</p>
                <p>The
                    <strong>Garden Suite</strong>&nbsp;can accommodate up to five (5) guests, and contains two bedrooms and two full bathrooms.</p>
                <P>Although the Heritage and Garden suites are separate, they can be booked concurrently (depending on availability) for guests who prefer or need more space.</p>
                <p>
                    <strong>To begin planning your trip, please click the buttons below for details about accommodations, amenities, and rates:</strong>
                </p>
                <div class="row">
                    <div class="small-12 medium-4 columns">
                        <a href="#heritage-suite" class="button large expand">Heritage Suite</a>
                    </div>
                    <div class="small-12 medium-4 columns"><a href="#garden-suite" class="button large expand">Garden Suite</a>
                    </div>
                    <div class="small-12 medium-4 columns"><a href="#contact" class="button large expand">Contact Us</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <a id="heritage-suite"></a>
            <h2>Heritage Suite</h2>

        </div>
    </div>

    <div class="row suite" id="heritage-suite">
        <div class="small-12 large-6 columns">
            <ul class="example-orbit" data-orbit>

                <li>
                    <img src="http://imagesus.homeaway.com/mda01/41796968-84ed-476c-ac57-52133adc650f.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Front view: landscaped front yard with oversized porch.
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/97ad35fb-7396-4505-9192-a6ffd66ea3f3.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Front porch has casual seating and dining table/chairs
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/63e1692b-367e-42a8-ba36-bcc104bc7441.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Front porch dining area
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/d3942f62-d607-4fe2-8c60-35b26e28daeb.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Street view: quiet, residential area
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/5092af35-1ae5-40d6-b893-fc16cb1c413f.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Front sitting room: bright and comfortable
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/f8c04932-e5b6-491d-9513-e8edba566b1d.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        TV sitting area
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/08966321-276a-42a9-82d5-52f5895c814b.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        TV/DVD players in living room and free Wi-Fi
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/27128876-46e8-4d02-a5fe-969c9c4b37e8.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Full kitchen: includes dishwasher, coffee maker and microwave
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/bbc78fa7-7b5b-4921-8f92-ac1bb8207648.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Cooking area with ample counter space
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/441c033b-6583-4c37-bd33-d2ee07e0d86d.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Inviting dining area, great for meals with friends
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/fe33a35b-941c-4e1b-9cdf-ee0b64372c55.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Queen bed, fine linens and vintage bow window
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/f07bc405-5759-42e6-af0f-318648b6c3ed.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Bedroom with matching twin beds
                    </div>
                </li>
                <li>
                    <img src="images/d6c07d71-40e9-4107-86df-bf0b1b2f484a.1.10.jpg" alt="slide 2" />
                    <div class="orbit-caption">
                        Full bathroom: granite vanity countertop; tub/shower
                    </div>
                </li>
                <li>
                    <img src="images/173bb9d9-5d08-41b8-a5fc-5cd5578c3e2a.1.10.jpg" alt="slide 2" />
                    <div class="orbit-caption">
                        Second full bathroom
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/cf96d60f-b879-46d9-93f8-0cf653de9658.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Patio areas for relaxing or reading
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/4807012f-2f5e-41a1-b52e-5e11cf3f9501.1.10" alt="slide 2" />
                    <div class="orbit-caption">
                        Landscaped front yard
                    </div>
                </li>
            </ul>
            <h3>Seasonal Rates
                <small>May 1 through October 31</small>
            </h3>
            <strong>$420/night for up to four guests
                <ul>
                    <li>Each additional guest, $30/night per person</li>
                    <li>Minimum two-night stay</li>
                </ul>
            </strong>
            <a href="http://www.vrbo.com/402580" target="_blank" class="button large expand">Reserve now on VRBO</a>
        </div>
        <div class="small-12 large-6 columns">
            <p>The Heritage Suite is at the front of the original Second Street Cottage house built in the early 1900's. It has been updated and completely renovated with top quality furnishings, clean space, and a fresh living environment. It features four bedrooms, three full bathrooms and accommodates up to eight guests. Three bedrooms have twin beds, and one contains a queen bed.</p>

            <p>The main floor has a spacious living room, dining room, and a fully-equipped kitchen. Likewise the Suite features a TV (with DVD player), a private washer/dryer, central air, off-street parking, and outdoor decks.</p>

            <p>Our Heritage Suite is listed on VRBO (vrbo.com); property/listing #402580.</p>
            <p>Click on our VRBO <a target="_blank" href="http://www.vrbo.com/402580">Heritage Suite listing</a> which contains everything you need to make your reservation: check availability, see photos, review amenities, book reservations and make online payments.</p>


        </div>
    </div>


    <div class="row">
        <div class="large-12 columns">
            <a id="garden-suite"></a>
            <h2>Garden Suite</h2>

        </div>
    </div>

    <div class="row suite" id="garden-suite">

        <div class="small-12 large-6 large-push-6 columns">
            <ul class="example-orbit" data-orbit>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/7fe745cd-6ceb-467a-acb1-e60f4d994db6.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Second Street Cottages
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/14087aac-e6ad-49fa-b28c-77aebd826815.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Garden Suite, private entry
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/57dd1d16-2cf3-4bfe-8352-859571360a3a.1.10" alt="slide 3" />
                    <div class="orbit-caption">
                        Living room, great for quiet reading
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/6be94615-7571-485b-8f12-fa7006ef66fa.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Living room, great for gathering or TV
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/50d0c604-c096-42db-94b9-c0f204ceb892.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Living room, plenty of light
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/2ff244e4-36b4-4c2c-a36f-3daf09c123d6.1.10" alt="slide 3" />
                    <div class="orbit-caption">
                        Hallway and dining area
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/e2e9abd7-ac71-4dc3-96d7-f2422d088902.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        First bedroom with queen sized bed
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/9def0fc5-b738-46db-905c-035f0b138d02.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Second bedroom with queen sized bed
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/c6673460-cd87-40e2-b3e0-1a1f6cbe3a37.1.10" alt="slide 3" />
                    <div class="orbit-caption">
                        Second bedroom includes an additional twin bed
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/c28cf3c4-6b62-4236-b1ad-78aa412e7a50.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Kitchen, sunny and fully equipped
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/ea776931-f61e-4430-9066-175cf3328af3.1.10" alt="slide 1" />
                    <div class="orbit-caption">
                        Kitchen and dining area
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/1f395cd5-fc85-47f4-ac1e-1682c35a9532.1.10" alt="slide 3" />
                    <div class="orbit-caption">
                        First full bathroom
                    </div>
                </li>
                <li>
                    <img src="http://imagesus.homeaway.com/mda01/c9496938-48a9-40cf-b18d-bc0ffe18e723.1.10" alt="slide 3" />
                    <div class="orbit-caption">
                        Outside view of private patio
                    </div>
                </li>
            </ul>
            <h3>Seasonal Rates
                <small>May 1 through October 31</small>
            </h3>
            <strong>$290/night for up to four guests
                <ul>
                    <li>Each additional guest, $30/night per person</li>
                    <li>Minimum two-night stay</li>
                </ul>
            </strong>
            <a href="http://www.vrbo.com/610049" target="_blank" class="button large expand">Reserve now on VRBO</a>
        </div>
        <div class="small-12 large-6 large-pull-6 columns ">
            <p>The Garden Suite is located in the back portion of the original Second Street Cottage house built in the early 1900's. It has been updated and completely renovated with top quality furnishings, clean space, and a fresh living environment. The Garden Suite offers a quiet experience, stylish appointments, and living comfort. It has two bedrooms, each with it's own full bathroom, and accomodates up to five guests.
            </p>
            <p>In addition, the Garden Suite has a living room, a fully equipped kitchen, TV (with DVD player), a private washer/dryer, central air, off-street parking, and an outdoor patio.</p>

            <p>Our Garden Suite is listed on VRBO (vrbo.com); property/listing #610049.</p>
            <p>Click on our VRBO <a href="http://www.vrbo.com/610049" target="_blank">Garden Suite listing</a> which contains everything you need to make your reservation: check availability, see photos, review amenities, book reservations and make online payments.</p>
        </div>
    </div>


    <div class="row">
        <div class="large-12 columns">
            <a id="calendars"></a>
            <h2>Calendars</h2>
            <p>A full calendar for Heritage Suite and Garden Suite is available on their respective VRBO listings. For the VRBO listing, including all available dates, please click the “View all dates” link at the bottom of the calendars.</p>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-12 large-12 columns">

            <div class="row">
                <div class="small-12 medium-6 columns">
                    <panel>
                        <h3 class="calendar-header">Heritage Suite</h3>
                        <div id="_vrbo_cal_widget_402580" class="calendar">
                            <div id="_vrbo_cal_link_402580">
                                <a href="http://www.vrbo.com/402580" target="_blank" rel="nofollow">View all dates</a>
                            </div>
                            <script type="text/javascript">
                            var _vrbo_widget = "true";
                            var _vrbo_base_url = "http://www.vrbo.com";
                            var _vrbo_listing_id = 402580;
                            var _vrbo_months = 3;
                            var _vrbo_orientation = "horizontal";
                            var _vrbo_bg_color = "#E5DAAD";
                            </script>
                            <script type="text/javascript" src="http://www.vrbo.com/resources/current/scripts/calendarwidget.js"></script>
                        </div>
                    </panel>
                </div>
                <div class="small-12 medium-6 columns">
                    <h3 class="calendar-header">Garden Suite</h3>

                    <div id="_vrbo_cal_widget_610049" class="calendar">
                        <div id="_vrbo_cal_link_610049">
                            <a href="http://www.vrbo.com/610049" target="_blank" rel="nofollow">View all dates</a>
                        </div>
                        <script type="text/javascript">
                        var _vrbo_widget = "true";
                        var _vrbo_base_url = "http://www.vrbo.com";
                        var _vrbo_listing_id = 610049;
                        var _vrbo_months = 3;
                        var _vrbo_orientation = "horizontal";
                        var _vrbo_bg_color = "#E5DAAD";
                        </script>
                        <script type="text/javascript" src="http://www.vrbo.com/resources/current/scripts/calendarwidget.js"></script>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <a id="policies"></a>
            <h2>Rental Policies</h2>

        </div>
    </div>

    <div class="row">
        <div class="small-12 medium-12 large-12 columns">
            <img src="images/img_garden.jpg" class="right policies" />

            <p>The following policies apply equally to both of our suites:</p>
            <ul>
                <li>A minimum stay at Second Street Cottages is 2 nights</li>
                <li>Deposits and Payments:
                    <ul>
                        <li>One night's deposit is required to hold a reservation, payable within 7 days of booking. Confirmation will be sent by email upon receipt of deposit.</li>
                        <li>The final balance (less the deposit) is due 30 days prior to arrival. Confirmation will be sent by email upon receipt of the final balance.</li>
                    </ul>
                </li>
                <li>Check-In: Guests may check-in at 3:00 pm or later. Please contact us if you require an earlier check-in due a theater performance. Usually times can be arranged in advance.

                </li>
                <li>Check-Out: We require guests to check-out by 11:00 am.

                </li>
                <li>Cancellations:
                    <ul>
                        <li>A full refund, less a $50 cancellation fee, will be provided for guests who cancel 45 calendar days prior to arrival.</li>
                        <li>If canceling less than 21 calendar days prior to arrival, all payments will be forfeited, unless the entire reservation can be re-rented for the same duration of time.</li>
                    </ul>
                </li>
                <li>Our quoted rates do not include an Oregon Occupany Tax of 10%.</li>
                <li>We do not allow pets in order to respect the comfort of our guests with allergies.</li>
                <li>All our suites are non-smoking.</li>
            </ul>


        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <a id="contact"></a>
            <h2>Contact Us</h2>

        </div>
    </div>
    <div class="row">
        <div class="small-12 large-6 columns">
            <div class="alert-box success"></div>
            <form action="forms/contact_prs.php" method="post" accept-charset="utf-8" data-abide>
 <?php
     require_once('forms/recaptchalib.php');
     $publickey = "6LdQZ_4SAAAAAJWeej8rSWPlFcTtuYQpO43sCh6I"; // you got this from the signup page
     echo recaptcha_get_html($publickey);
   ?>            
    <div>
                    <label>Name
                        <input type="text" name="contact-name" required value="">
                    </label>
                    <small class="error">Please enter your name.</small>
                </div>
                <div>
                    <label>Email
                        <input type="email" required name="email" value="">
                    </label>
                    <small class="error">Please enter a proper email address.</small>
                </div>
                <div>
                    <label>Phone
                        <input type="text" required name="phone" value="">
                    </label>
                    <small class="error">Please enter your phone number.</small>
                </div>
                Comments/Questions
                <br/>
                <textarea name="comments" rows="5"></textarea>
                <label>
                    <input class="button large expand" type="submit" name="" value="Submit">
                </label>
            </form>

        </div>
        <div class="small-12 large-6 columns">
            <center>
                <h3>Thank you for your visit to our site!</h3>
                <p>Please let us know if you have any questions or concerns. We look forward to hosting your next vacation in Ashland!</p>
            </center>
        </div>
    </div>
    <a href="#" class="back-to-top">Back to Top</a>

    <div class="row full-width footer">
        <a id="footer"></a>
        <div class="row">
            <div class="small-12 medium-6 columns">2nd Street Cottages, Act 2
                <br/>144 North Second Street</br>Ashland, OR 97520
                <br/>541-488-0888 or 877-541-4880 (toll-free)
            </div>
            <div class="small-12 medium-6 columns right-half">
                <a href="mailto:2ndstreetcottages@gmail.com">2ndstreetcottages@gmail.com</a>
                <br/><a href="http://www.vrbo.com/402580" target="_blank">Heritage Suite on VRBO</a>
                <br/><a href="http://www.vrbo.com/610049" target="_blank">Garden Suite on VRBO</a>
                <br/><a href="http://www.secondstreetcottages.com">Secondstreetcottages.com</a> 
            </div>
        </div>
    </div>

    </div>



    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
