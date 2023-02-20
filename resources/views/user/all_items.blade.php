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

    <section class="newCollection">
        <div>
            <div class="information">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        REFINE SEARCH
                    </a>
                    <a href="#" class="list-group-item list-group-item-action cat__link ">Category</a>
                    <div class="checkboxCategory">
                        <input type="checkbox" id="small" name="size" value="small" class="categoryType">
                          <label>Shoes</label><br>
                        <input type="checkbox" id="medium" name="size" value="medium" class="categoryType">
                          <label>Clothes</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>Bags</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>Accessories</label><br>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action cat__link ">Color</a>
                    <div class="checkboxCategory">
                        <input type="checkbox" id="small" name="size" value="small" class="categoryType">
                          <label>White</label><br>
                        <input type="checkbox" id="medium" name="size" value="medium" class="categoryType">
                          <label>Red</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>Green</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>Blue</label><br>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action cat__link ">Category</a>
                    <div class="checkboxCategory">
                        <input type="checkbox" id="small" name="size" value="small" class="categoryType">
                          <label>$50.00 - $100.00</label><br>
                        <input type="checkbox" id="medium" name="size" value="medium" class="categoryType">
                          <label>$101.00 - $150.00</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>$151.00 - $200.00</label><br>
                        <input type="checkbox" id="large" name="size" value="large" class="categoryType">
                          <label>201.00 - Above</label><br>
                    </div>
                    <a href="" class="catSearch">REFINE SEARCH</a>
                </div>
                <img src="{{asset('Frontend/./images/left-banner-272x340.jpg')}}" class="bannerCat" />
                <div class="list-group bla">
                    <a href="#" class="list-group-item list-group-item-action active">
                        LATEST PRODUCT
                    </a>
                    <a href="#" class="list-group-item list-group-item-action prod__link">
                        <img src="{{asset('Frontend/./images/8-264x340.jpg')}}" class="prod__img" />
                        <div>
                            <p class="prod__para">Solid Backpack</p>
                            <p class="prod__price">$241.99</p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action prod__link"><img
                            src="{{asset('Frontend/./images/11-264x340.jpg')}}" class="prod__img" />
                        <div>
                            <p class="prod__para">Mechanical watch</p>
                            <p class="prod__price">$122.00</p>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action prod__link"><img
                            src="{{asset('Frontend/./images/4-264x340.jpg')}}" class="prod__img" />
                        <div>
                            <p class="prod__para">Crystal Gym</p>
                            <p class="prod__price">$122.00</p>
                        </div>
                    </a>
                </div>

            </div>



        </div>
        <div>
            <div class="newCollection__body">
                <h5>NIGHTSTAND</h5>
                <div class="catHome__links">
                    <a href="index.html" class="catHome__link"><i class="fa-sharp fa-solid fa-house"></i> </a>
                    <a href="" class="catHome__link"><i class="fa-sharp fa-solid fa-angles-right"></i>
                        Category</a>
                </div>
            </div>
            <div class="catInfo">
                <img src="{{asset('Frontend/./images/category-baner-1098x200.jpg')}}" class="catHomebanner" />
                <p class="catHome__para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the
                    industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic</p>

                <h4 class="catHome__title">Refine Search</h4>
                <div class="subCat">
                    <a href="" class="subcat__link"> Coffer</a>
                    <a href="" class="subcat__link"> Commode</a>
                    <a href="" class="subcat__link"> Modern antique</a>
                </div>
            </div>
            <div class="newCollection__form">
                <div class="prodCollection">
                    <p><i class="fa-sharp fa-solid fa-table-cells"></i></p>
                    <p><i class="fa-sharp fa-solid fa-xmarks-lines"></i></p>
                    <p class="prodCompare">Product Compare (0)</p>
                    <div class="prodSort">
                        <span>Sort By: </span>
                        <select class="prod__select">
                            <option>Default</option>
                            <option>Nightstanddd</option>
                        </select>
                        <span>Show: </span>
                        <select class="prod__select">
                            <option>15</option>
                            <option>Nightstand</option>
                        </select>
                    </div>

                </div>

            </div>

            <div class="prodDisc catDisc">
                @foreach ($blogs as $item)
                <a href="{{route('item.details',$item->id)}}" style="text-decoration: none;">
                    <div class="arrivalImage">
                        <img src="{{asset($item->blog_image)}}" />
                        <div class="arrivalImage__body">
                                <p class="arrival__para">{{$item->title}}</p>
                                <div class="arrivalStar small">
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                    <i class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="featured__category newCategory">
                                    <p class="arrival__para">{{$item->paragraph}}</p>
                                </div>
                                <div>
                                    <p class="arrival__price">${{$item->price}}.00</p>
                                </div>
                        </div>
                    </div>
                </a>
                @endforeach
                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}

                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}
                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}

                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}
                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}

                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}
                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}

                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}
                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/11-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}

                {{-- <div class="arrivalImage">
                    <img src="{{asset('Frontend/./images/16-264x340.jpg')}}" />
                    <div class="featured__category newCategory">
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
                </div> --}}


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
