<?php
use App\Models\BlogCategory;
use App\Models\Blog;

$blogcategory = BlogCategory::latest()->paginate(3);
$blogs = Blog::latest()->paginate(5);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('Frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

@include('user.header')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('Frontend/./images/Main-banner-1-1903x670.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('Frontend/./images/Main-banner-2-1903x670.jpg')}}" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="shopByCategory ">
        <div class="shop__body" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <h1 class="shop__title">Shop By Category</h1>
            <p class="shop__para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum<br>
                has been the industry's have
                lorem available</p>
            <a class="shop__link" href="">View More</a>
        </div>
        <div class="shopImage">

            @foreach ($blogcategory as $item)
            <a href="{{route('category.items',$item->id)}}"  style="text-decoration: none; color: inherit;">
                <div class="shopImage__body">
                    <img src="{{$item->image_category}}" />
                    <div class="shopImage__desc">
                        <span class="shopImage__item">127 items</span>
                        <p class="shopImage__para">{{$item->blog_category}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>




    <section class="arrivalItem">
        <div class="arrival__body">
            <h1 class="arrival__title">New Arrival Item</h1>
            <div class="arrival__links">
                <a class="featured" href="">Featured</a>
                <a class="hotSale" href="">Hot Sale</a>
                <div class="prev_next">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="newImage">

            @foreach ($blogs as $item)
            <a href="{{route('item.details',$item->id)}}" tyle="text-decoration: none;">
                <div class="arrivalImage">
                    <img src="{{asset($item->blog_image)}}" width="270px" height="340px"/>
                    <div class="arrival__box">
                        <div class="arrival__category">
                            <a href="reviewCart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                            <a href=""><i class="fa-sharp fa-solid fa-eye"></i></a>
                            <a href=""><i class="fa-sharp fa-solid fa-heart"></i></a>
                            <a href=""><i class="fa-sharp fa-solid fa-right-left"></i></a>
                        </div>
                    </div>
                    <div class="arrivalImage__body">
                        <div class="arrivalStar">
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                            <i class="fa-sharp fa-solid fa-star"></i>
                        </div>
                        <div>
                            <p class="arrival__para">{{$item->title}}</p>
                            <p class="arrival__price">${{$item->price}}</p>
                        </div>
                    </div>
                </div>
            </a>

            @endforeach


            {{-- <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                <div class="arrival__box">
                    <div class="arrival__category">
                        <a href="reviewCart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-eye"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-heart"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-right-left"></i></a>
                    </div>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar small">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Mechanical watch</p>
                        <p class="arrival__price">$122.00</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/4-264x340.jpg')}}" />
                <div class="arrival__box">
                    <div class="arrival__category">
                        <a href="reviewCart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                        <!-- Button trigger modal -->


                        <a href=""><i class="fa-sharp fa-solid fa-heart"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-right-left"></i></a>
                    </div>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Crystal Gym & Fitness Glove</p>
                        <p class="arrival__price">$122.00</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/2-264x340.jpg')}}" />
                <div class="arrival__box">
                    <div class="arrival__category">
                        <a href="reviewCart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-eye"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-heart"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-right-left"></i></a>
                    </div>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Solid Men & Women Muffler</p>
                        <p class="arrival__price">$1,202.00</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/9-264x340.jpg')}}" />
                <div class="arrival__box">
                    <div class="arrival__category">
                        <a href="reviewCart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-eye"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-heart"></i></a>
                        <a href=""><i class="fa-sharp fa-solid fa-right-left"></i></a>
                    </div>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Touch Women White Heels</p>
                        <p class="arrival__price">$2,000.00</p>
                    </div>
                </div>
            </div> --}}
        </div>



    </section>





    <section class="modern">
        <div class="modern__body">
            <span class="flat">20% Flat</span>
            <h1 class="modern__title">Modern Chair Collection</h1>
            <p class="modern__para">Get the discount 20% on order over $99</p>
            <a href="" class="modern__link"> Shop Now</a>
        </div>
    </section>

    <section class="arrivalItem">
        <div class="arrival__body">
            <h1 class="arrival__title">Featured Product</h1>
            <div class="arrival__links">
                <div class="prev_next">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="newImage">
            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/13-264x340.jpg')}}" />
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Solid Backpack</p>
                        <p class="arrival__price">$241.99</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/5-264x340.jpg')}}" />
                <div class="arrivalImage__body">
                    <div class="arrivalStar small">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Mechanical watch</p>
                        <p class="arrival__price">$122.00</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/14-264x340.jpg')}}" />
                <div class="featured__category">
                    <span>10%</span>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Crystal Gym & Fitness Glove</p>
                        <p class="arrival__price">$122.00</p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                <div class="featured__category">
                    <span>20%</span>
                </div>
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Solid Men & Women Muffler</p>
                        <p class="arrival__price">$98.00 <del>$122.00</del></p>
                    </div>
                </div>
            </div>

            <div class="arrivalImage">
                <img src="{{asset('Frontend/./images/1-264x340.jpg')}}" />
                <div class="arrivalImage__body">
                    <div class="arrivalStar">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                    </div>
                    <div>
                        <p class="arrival__para">Touch Women White Heels</p>
                        <p class="arrival__price">$2,000.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grab">
        <div class="sofaset">

            <div class="sofaset__body">
                <h1 class="grab__title">25% Flat</h1>
                <p class="grab__para">New Sofaset</p>
                <a href="" class="grab__link">Grab Offer!!</a>
            </div>
        </div>

        <div class="watch">
            <div class="watch__body">
                <h1 class="grab__title">25% Flat</h1>
                <p class="grab__para">Wooden Watch</p>
                <a href="" class="grab__link">Grab Offer!!</a>
            </div>
        </div>

    </section>

    <section class="shopByCategory ">
        <div class="arrival__body">
            <h1 class="arrival__title">Featured Product</h1>
            <div class="arrival__links">
                <div class="prev_next">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                    <i class="fa-sharp fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="shopImage">
            <div class="shopImage__body blog plus">
                <img src="{{asset('Frontend/./images/blog5-1098x1193.jpg')}}" />
                <div class="shopImage__plus">
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-link"></i>
                </div>
                <div class="shopImage__desc">
                    <span class="shopImage__item">11 Sep 2019</span>
                    <p class="shopImage__para">Libero Lorem Vehicula Quanato Verbl</p>
                </div>
            </div>
            <div class="shopImage__body blog plus">
                <img src="{{asset('Frontend/./images/blog4-1098x1193.jpg')}}" />
                <div class="shopImage__plus">
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-link"></i>
                </div>
                <div class="shopImage__desc">
                    <span class="shopImage__item">11 Sep 2019</span>
                    <p class="shopImage__para">Libero Lorem Vehicula Quanato Verbl</p>
                </div>
            </div>

            <div class="shopImage__body blog plus">
                <img src="{{asset('Frontend/./images/blog3-1098x1193.jpg')}}" />
                <div class="shopImage__plus">
                    <i class="fa-solid fa-plus"></i>
                    <i class="fa-solid fa-link"></i>
                </div>
                <div class="shopImage__desc">
                    <span class="shopImage__item">11 Sep 2019</span>
                    <p class="shopImage__para">Libero Lorem Vehicula Quanato Verbl</p>
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

</body>

</html>
