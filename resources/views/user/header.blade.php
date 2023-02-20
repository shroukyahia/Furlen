<?php
use App\Models\BlogCategory;
use App\Models\Blog;

$blogcategory = BlogCategory::latest()->get();
$blogs = Blog::latest()->paginate(5);

?>
<nav class="navbar">
    <img src="{{asset('Frontend/./images/logo (1).png')}}" />
    <div class="search">
        <select class="formSelect">
            <option>All Categories</option>
            <option>Nightstand</option>
            <option>&nbsp;&nbsp;&nbsp;coffer</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cradle</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dresser</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trundle bed</option>
            <option>&nbsp;&nbsp;&nbsp;Commode</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cathedra</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;confidante</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sideboard</option>
            <option>&nbsp;&nbsp;&nbsp;Modern antique</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;curule chair</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;faldstool</option>
            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vargueno</option>
        </select>
        <input class="searchbox" type="text" name="serach" placeholder="Search for Products..." />
        <a class="search__link" href="/">SEARCH</a>
    </div>
    <div class="cart_Shipping">
        <div class="shipping">
            <i class="fa-solid fa-truck-fast"></i>
            <div class="freeShip">
                <span> Over $90</span>
                <p class="freeShip__title">Free Shipping</p>
            </div>

        </div>
        <div class="cart">
            <i class="fa-sharp fa-solid fa-cart-shopping"></i>
            <div class="cartItem">
                <span>0 Item</span>
                <p class="cart__title">My Cart</p>
            </div>
        </div>
    </div>
</nav>

<header>
    <div class="shopHeader">
        <div class="shopCategories">
            <div class=" shopMenu dropdown">
                <a class="nav-link dropdown-toggle shopMenu__link" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-bars-staggered"></i> SHOP BY CATEGORIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($blogcategory as $item)
                    <a class="dropdown-item" href="{{route('category.items',$item->id)}}">
                        <i class="fa-solid fa-tv"></i>
                        {{$item->blog_category}}
                    </a>
                    @endforeach

                </div>
            </div>
            <ul class="shopHeader__item">
                <li><a href="{{url('/home')}}" class="shopHeader__link">HOME</a></li>
                <li><a href="newCollection.html" class="shopHeader__link">NEW COLLECTION</a></li>
                <li><a href="" class="shopHeader__link">SPECIALS</a></li>
                <li><a href="{{url('/contactus')}}" class="shopHeader__link">CONTACT US</a></li>
                <li><a href="{{route('all.items')}}" class="shopHeader__link">BLOGS</a></li>
            </ul>
        </div>
        <div class="shopOffer">
            <p class="shopOffer__title"><i class="fa-solid fa-gift"></i> View Offer Deals</p>
        </div>
    </div>
</header>
