<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review</title>
    <link rel="stylesheet" href="{{asset('Frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link href="metro-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

@include('user.header')

    <section class="newCollection">
        <div>
            <div class="information">
                {{-- <img src="./images/left-banner-272x340.jpg" class="banner" /> --}}
                <div class="list-group bla">
                    <a href="#" class="list-group-item list-group-item-action active">
                        LATEST PRODUCT
                    </a>
                    @foreach ($blogs as $blog)
                    <a href="{{route('item.details',$blog->id)}}" class="list-group-item list-group-item-action prod__link">
                        <img src="{{asset($blog->blog_image)}}" class="prod__img" />
                        <div>
                            <p class="prod__para">{{$blog->title}}</p>
                            <p class="prod__price">${{$blog->price}}.00</p>
                        </div>
                    </a>
                    @endforeach

                    {{-- <a href="#" class="list-group-item list-group-item-action prod__link"><img
                            src="./images/11-264x340.jpg" class="prod__img" />
                        <div>
                            <p class="prod__para">Mechanical watch</p>
                            <p class="prod__price">$122.00</p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action prod__link"><img
                            src="./images/4-264x340.jpg" class="prod__img" />
                        <div>
                            <p class="prod__para">Crystal Gym</p>
                            <p class="prod__price">$122.00</p>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
        <div>

            @foreach ($item as $i)

            <div class="newCollection__body">
                <div class="newCollection__links">
                    <a href="index.html" class="newCollection__link"><i class="fa-sharp fa-solid fa-house"></i> </a>
                    <a href="" class="newCollection__link"><i class="fa-sharp fa-solid fa-angles-right"></i> Review
                        Product</a>
                </div>
            </div>

            @endforeach


            <div class="blogsInfo">
                <div class="blogsPart reviewDetails ">
                    <div class="owlImg">



                        <img src="{{asset($i->blog_image)}}" />
                        {{-- <div class="item">
                            <i class="fa-sharp fa-solid fa-circle-left left"></i>
                            <img src="./images/1-264x340.jpg" />
                            <img src="./images/11-264x340.jpg" />
                            <img src="./images/4-264x340.jpg" />
                            <i class="fa-sharp fa-solid fa-circle-right right"></i>
                        </div> --}}


                    </div>

                    <div class="blogsPart__body">
                        <h4 class="blogsPart__title">{{$i->title}}</h4>
                        <p>{{$i->paragraph}}</p>
                        <div class="review__body">
                            <div class="reviewStar">
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                                <i class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <a href="" class="userReview">1 Review</a>
                            <a href="" class="writeReview"><i class="fa-sharp fa-solid fa-pen"></i> Write A Review</a>
                        </div>
                        {{-- <div class="review__discription">
                            <div class="brand">
                                <h4 class="brand__title">Brands</h4>
                                <p class="brand__para">Apple</p>
                            </div>
                            <div class="brand">
                                <h4 class="brand__title">Product Code:</h4>
                                <p class="brand__para">Product 15</p>
                            </div>
                            <div class="brand">
                                <h4 class="brand__title">Reward Points:</h4>
                                <p class="brand__para">100</p>
                            </div>
                            <div class="brand">
                                <h4 class="brand__title">Availability:</h4>
                                <p class="brand__para">In Stock</p>
                            </div>
                        </div> --}}
                        <div class="review__price">
                            <h3 class="price__title">${{$i->price}}.00 <del>$122.00</del></h3>
                            <p class="price__para">Ex Tax: $90.00</p>
                            <p class="price__para">Price in reward points: 400</p>
                            <p class="price__para">10 or more $107.60</p>
                            <p class="price__para">20 or more $94.40</p>
                            <p class="price__para">20 or more $94.40</p>

                        </div>
                        <div class="available">
                            <h2>Available Options</h2>
                            <p><span>*</span> Radio</p>
                            <input type="radio" id="small" name="size" value="small">
                              <label for="small">Small (+$12.00)</label><br>
                            <input type="radio" id="medium" name="size" value="medium">
                              <label for="medium">Medium (+$24.00)</label><br>
                            <input type="radio" id="large" name="size" value="large">
                              <label for="large">Large (+$48.00)</label><br>
                            <div class="checkbox">
                                <p><span>*</span> Checkbox</p>
                                <input type="checkbox" id="small" name="size" value="small">
                                  <label>Small (+$12.00)</label><br>
                                <input type="checkbox" id="medium" name="size" value="medium">
                                  <label>Medium (+$24.00)</label><br>
                                <input type="checkbox" id="large" name="size" value="large">
                                  <label>Large (+$48.00)</label><br>
                            </div>
                            <div class="delivery">
                                <p><span>*</span> Delivery Date</p>
                                <input type="date" name="date" id="date">
                            </div>
                            <div class="qty">
                                <h6>Qty</h6>
                                <input type="text" class="qtyText" value="1" />
                                <a href="" class="qty__link"> ADD TO CART</a>
                            </div>
                            <div class="add">
                                <a href=""> <i class="fa-sharp fa-solid fa-heart"></i> Add To Wish List</a>
                                <a href=""> <i class="fa-sharp fa-solid fa-copy"></i> Add To Compare</a>
                            </div>

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



    <script src="{{asset('Frontend/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('Frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('Frontend/js/bootstrap.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="./js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

</body>

</html>
