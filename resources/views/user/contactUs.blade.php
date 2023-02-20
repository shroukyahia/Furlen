<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUs</title>
    <link rel="stylesheet" href="{{asset('Frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
@include('user.header')

    <section class="newCollection">
        <div>
            <div class="information">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        INFORMATION
                    </a>
                    <a href="#" class="list-group-item list-group-item-action info__link">About Us</a>
                    <a href="#" class="list-group-item list-group-item-action info__link">Delivery Information</a>
                    <a href="#" class="list-group-item list-group-item-action info__link">Privacy Policy</a>
                    <a href="#" class="list-group-item list-group-item-action info__link">Term & Conditions</a>
                    <a href="#" class="list-group-item list-group-item-action info__link">Contact Us</a>
                    <a href="#" class="list-group-item list-group-item-action info__link">Site Map</a>
                </div>
            </div>
        </div>
        <div>
            <div class="contactUs__body">
                <h3>INFORMATION</h3>
                <div class="contactUs__links">
                    <a href="index.html" class="contactUs__link"><i class="fa-sharp fa-solid fa-house"></i> </a>
                    <a href="" class="contactUs__link"><i class="fa-sharp fa-solid fa-angles-right"></i> Contact
                        Us</a>
                </div>
            </div>
            <div class="location">
                <div class="location__body">
                    <h4 class="location__title">Our Location</h4>
                    <div class="yourStore">
                        <h5 class="yourStore__title"><i class="fa-sharp fa-solid fa-house"></i> Your Store</h5>
                        <p class="yourStore__para">Address 1</p>
                        <a href="" class="yourStore__link"><i class="fa-sharp fa-solid fa-location-dot"></i> VIEW GOOGLE
                            MAP</a>
                    </div>
                    <div class="telephone">
                        <h5 class="telephone__title"><i class="fa-sharp fa-solid fa-mobile-screen"></i> Telephone</h5>
                        <p class="telephone__para">123456789</p>
                    </div>
                    <div class="fax">
                        <h5 class="fax__title"><i class="fa-sharp fa-solid fa-print"></i> Fax</h5>
                        <p class="fax__para">0879766</p>
                    </div>
                    <div class="opening">
                        <h5 class="opening__title"><i class="fa-sharp fa-solid fa-mobile-screen"></i> Opening Times</h5>
                        <p class="opening__para">9:00 AM to 6:00 PM</p>
                    </div>

                    <div class="comment">
                        <h5 class="comment__title"><i class="fa-sharp fa-solid fa-clock-rotate-left"></i> Comments</h5>
                        <p class="comment__para">Shop Laptop feature only the best laptop deals on the market. By
                            comparing laptop deals from the likes of PC World,
                            Comet, Dixons, The Link and Carphone Warehouse</p>
                    </div>
                    <div class="contact">
                        <h4 class="contact__title">Contact Us</h4>
                        <div class="name">
                            <input autocomplete="off" name="Email" id="Email" class="inputt" type="email"
                                placeholder="Your Name">
                        </div>
                        <div class="name">
                            <input autocomplete="off" name="Email" id="Email" class="inputt" type="email"
                                placeholder="Enter Email.. ">
                        </div>
                        <div class="name">
                            <input placeholder="Enquiry" class="mss contact__ms" name="text" type="text">
                        </div>
                    </div>
                    <div class="captcha">
                        <h4 class="captcha__title">Captcha</h4>
                        <div class="name">
                            <input autocomplete="off" class="inputt" type="email"
                                placeholder="Enter the code in the box below">
                        </div>
                        <img src="./images/index.jfif" />
                    </div>
                    <a href="" class="submitt">SUBMIT</a>

                </div>
                <div class="location__map">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://formatjson.org/">format json</a></div>
                    </div>

                </div>

            </div>


        </div>


        </div>
    </section>


    <section class="new">
        <div class="newsletter">
            <div class="subscribe">
                <i class="fa-solid fa-envelope-open-text"></i>
                <h3 class="new__title"> Newsletter </h3>
                <div class="new__body">
                    <p class="new__para">Get 30% Discount with notified about the latest news and updates. Free shipping
                        on purchase $99</p>
                </div>
            </div>
            <div class="input-group mb-3 email">
                <input type="text" class="form-control " value=" Enter Your Email Here.. " aria-label=" "
                    aria-describedby="button-addon2">
                <button class="send">
                    <div class="svg-wrapper-1">
                        <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path fill="currentColor"
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <span>Send</span>
                </button>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
