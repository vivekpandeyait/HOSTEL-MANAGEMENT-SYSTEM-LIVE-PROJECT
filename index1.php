<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=2, initial-scale=1.0">
    <title>Hotelspaze</title>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/favicon1.png" type="image/gif">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <?php include 'header.php'; ?>
    <br><br>
    <div class="tm-section tm-bg-img" id="tm-section-1">
        <div class="tm-bg-white ie-container-width-fix-2">
            <div class="container ie-h-align-center-fix">
                <div class="row">
                    <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                        <form action="#" method="get" class="tm-search-form tm-section-pad-2">
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                    <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-in" type="date" class="form-control" id="inputCheckIn" placeholder="Check In">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                    <input name="check-out" type="date" class="form-control" id="inputCheckOut" placeholder="Check Out">
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                    <select class="form-control tm-select">
                                        <option value="0 ">Select Type</option>
                                        <option value="1 ">Dormitory</option>
                                        <option value="2 ">Hotel</option>
                                        <option value="3 ">Hostel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row tm-search-form-row">
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="adult" class="form-control tm-select" id="adult">
                                        <option value="">Adult</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="children" class="form-control tm-select" id="children">
                                        <option value="">Children</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <select name="room" class="form-control tm-select" id="room">
                                        <option value="">Room</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-2">
                                    <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                                </div>
                            </div>
                            <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                <p class="tm-margin-b-0">Get a Free shopping Coupon on booking with us</p>
                                <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary1">Need Help?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="tm-section-2 ">
        <div class="container ">
            <div class="row ">
                <div class="col text-center ">
                    <h2 class="tm-section-title ">We are here to help you?</h2>
                    <p class="tm-color-white tm-section-subtitle ">Get Connect with Us</p>
                    <a href="# " class="tm-color-white tm-btn-white-bordered ">Get Notification </a>
                </div>
            </div>
        </div>
    </div>




    <div class="tm-section tm-position-relative ">
        <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 100 100 " preserveAspectRatio="none " class="tm-section-down-arrow ">
            <polygon fill="#1b1a25ff; " points="0,0 100,0 50,60 "></polygon>

        </svg>


        <div class="container tm-pt-5 tm-pb-4 ">
            <div class="row text-center ">
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article ">
                    <i class="fa tm-fa-6x fa-question-circle tm-color-primary tm-margin-b-20 "></i>
                    <h3 class="tm-color-primary tm-article-title-1 ">Help</h3>
                    <p>we will get you as soon as possible</p>
                    <a href="# " class="text-uppercase tm-color-primary tm-font-semibold ">Continue reading...</a>
                </article>
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article ">
                    <i class="fa tm-fa-6x fa-plane tm-color-primary tm-margin-b-20 "></i>
                    <h3 class="tm-color-primary tm-article-title-1 ">Plan a Tour</h3>
                    <p>Travel any where we are here to catch you</p>
                    <a href="# " class="text-uppercase tm-color-primary tm-font-semibold ">Continue reading...</a>
                </article>
                <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article ">
                    <i class="fa tm-fa-6x fa-search tm-color-primary tm-margin-b-20 "></i>
                    <h3 class="tm-color-primary tm-article-title-1 ">Near By</h3>
                    <p>Search room near by you</p>
                    <a href="# " class="text-uppercase tm-color-primary tm-font-semibold ">Continue reading...</a>
                </article>
            </div>
        </div>
    </div>


<center>

    <div class="container">
        <div id="main">

            
</center>
<div class="container"><p class="styleme" style="margin-top:15%;">Bookings</p></div>
    <div id="main">
        <div class="inner ">
            <div class="thumbnails ">

                <div class="box ">
                    <a href="# " class="image fit "><img src="img/bed2.jpg " alt=" " /></a>
                    <div class="inner ">
                        <h3>Austria</h3>
                        <p> </p>
                        <a href="# " class="button fit "></a>
                    </div>
                </div>

                <div class="box ">
                    <a href="# " class="image fit "><img src="img/bg-img-prev.jpg " alt=" " /></a>
                    <div class="inner ">
                        <h3>Scotland</h3>
                        <p> </p>
                        <a href="# " class="button style2 fit "></a>
                    </div>
                </div>

                <div class="box ">
                    <a href="# " class="image fit "><img src="img/hotel.jpg " alt=" " /></a>
                    <div class="inner ">
                        <h3>Malaysia</h3>
                        <p> </p>
                        <a href="# " class="button style3 fit "></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <div class="outicone ">


        <p class="styleme">We Serve</p>
        <p class="para">Doorstep laundry, transport and other essential services are just a tap away.</p>
        <div class="iconecontainer">
            <div class="icone">
                <img src="img/meals.png" class="icone-image">
                <span class="icone-label">Healthy</span>
                <span class="icone-label">Food</span>
            </div>
            <div class="icone">
                <img src="img/wifi.png" class="icone-image">
                <span class="icone-label">Free</span>
                <span class="icone-label">WiFi</span>
            </div>
            <div class="icone">
                <img src="img/secure.png" class="icone-image">
                <span class="icone-label">24X7</span>
                <span class="icone-label">Security</span>
            </div>
            <div class="icone">
                <img src="img/bus.png" class="icone-image">
                <span class="icone-label">Transport</span>
                <span class="icone-label">Service</span>
            </div>
            <div class="icone">
                <img src="img/washing.png" class="icone-image">
                <span class="icone-label">laundry</span>
                <span class="icone-label">Service</span>
            </div>
            <div class="icone">
                <img src="img/electric.png" class="icone-image">
                <span class="icone-label">24X7</span>
                <span class="icone-label">Electricity</span>
            </div>
        </div>
    </div>



    <div class="outicone ">
        <p class="styleme">We Care For You</p>
        <p class="para">In one particular case, we have a strict no-entry policy. And it's for the coronavirus. Ever since the news broke, we have implemented our best in class ‘COVID-19 Combat-ready Framework’ to protect our residents.</p>
        <div class="iconecontainer">
            <div class="icone">
                <img src="img/sanitizer.png" class="icone-image">
                <span class="icone-label">Resident</span>
                <span class="icone-label">Sanitisation</span>
            </div>
            <div class="icone">
                <img src="img/scann.png" class="icone-image">
                <span class="icone-label">Thermal</span>
                <span class="icone-label">Monitoring</span>
            </div>
            <div class="icone">
                <img src="img/travel.png" class="icone-image">
                <span class="icone-label">Medical</span>
                <span class="icone-label">&Travel</span>
            </div>
            <div class="icone">
                <img src="img/roomfeature.png" class="icone-image">
                <span class="icone-label">24X7</span>
                <span class="icone-label">Service</span>
            </div>
            <div class="icone">
                <img src="img/dis-infect.png" class="icone-image">
                <span class="icone-label">Dis-infecting</span>
                <span class="icone-label">HighTouch Areas</span>
            </div>
            <div class="icone">
                <img src="img/dispenser.png" class="icone-image">
                <span class="icone-label">sanitizer Placed</span>
                <span class="icone-label">At Multiple Areas</span>
            </div>
            <div class="icone">
                <img src="img/contactless-food.png" class="icone-image">
                <span class="icone-label">No Touch</span>
                <span class="icone-label">Dining Facility</span>
            </div>
            <div class="icone">
                <img src="img/who.png" class="icone-image">
                <span class="icone-label">Trained as Prescribed</span>
                <span class="icone-label">By WHO</span>
            </div>
            <div class="icone">
                <img src="img/masjk.png" class="icone-image">
                <span class="icone-label">PPE</span>
                <span class="icone-label">for staf</span>
            </div>
        </div>
    </div>




    <div class="tm-section tm-section-pad tm-bg-img tm-position-relative" id="tm-section-6">
        <div class="container ie-h-align-center-fix">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                    <div id="google-map"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 mt-3 mt-md-0">
                    <div class="tm-bg-white tm-p-4">
                        <form action="index.html" method="post" class="contact-form">
                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required />
                            </div>
                            <div class="form-group">
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject" required />
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary tm-btn-primary">Send Message Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------footer here-->
    <?php include 'footer.php'; ?>


    </div>
</body>

</html>