<div class="sidebar">
    <div class="logo__details">
        <div class="logo__img"><img src="{{asset('Frontend/./images/logo (1).png')}}" /></div>
        <i class="fa-sharp fa-solid fa-bars"></i>
    </div>
    <ul>
        <li>
            <a href="{{route('admin_dashboard')}}">
                <i class="fa-solid fa-grip"></i>
                <span class="link__name">Dashboard</span>
            </a>

        </li>
        {{-- <li>
            <a href="#">
                <i class="fa-solid fa-user"></i>
                <span class="link__name">User</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-message"></i>
                <span class="link__name">Message</span>
            </a>
        </li> --}}
        <li>
            <a href="{{route('all.blog.category')}}">
                <i class="fa-solid fa-chart-simple"></i>
                <span class="link__name">All Blogs Category</span>
            </a>
        </li>
        <li>
            <a href="{{route('add.blog.category')}}">
                <i class="fa-solid fa-folder"></i>
                <span class="link__name">Create Blog Category</span>
            </a>
        </li>
        <li>
            <a href="{{route('all.blog')}}">
                <i class="fa-solid fa-chart-simple"></i>
                <span class="link__name">All Blogs</span>
            </a>
        </li>
        <li>
            <a href="{{route('create.blog')}}">
                <i class="fa-solid fa-folder"></i>
                <span class="link__name">Create Blogs</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="link__name">Order</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                <span class="link__name">Settings</span>
            </a>
        </li>

    </ul>
</div>
