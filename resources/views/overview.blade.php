@extends('admin_dashboard')
@section('admin')
<div class="overview">
    <h2 class="overview__title">Overview</h2>
    <div class="overview__details">
        <div class="overviewPart">
            <div class="overview__icon">
                <i class="fa-solid fa-bag-shopping bag"></i>
                <span>+24%</span>
            </div>
            <h2>$27.340.00</h2>
            <p>Total Sales</p>
        </div>
        <div class="overviewPart">
            <div class="overview__icon">
                <i class="fa-solid fa-bullseye bull"></i>
                <span>+24%</span>
            </div>
            <h2>$27.340.00</h2>
            <p>Total Sales</p>
        </div>
        <div class="overviewPart">
            <div class="overview__icon">
                <i class="fa-solid fa-users user"></i>
                <span>+24%</span>
            </div>
            <h2>$27.340.00</h2>
            <p>Total Sales</p>
        </div>
        <div class="overviewPart">
            <div class="overview__icon">
                <i class="fa-solid fa-cart-shopping shop"></i>
                <span>+24%</span>
            </div>
            <h2>$27.340.00</h2>
            <p>Total Sales</p>
        </div>
    </div>
    <table id="column-example-17"
        class="charts-css column show-labels show-primary-axis show-data-axes data-spacing-20">
        <caption> Column Example #17 </caption>
        <thead>
            <tr>
                <th scope="col"> Year </th>
                <th scope="col"> Progress </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> 2016 </th>
                <td style="--size:0.2;"></td>
            </tr>
            <tr>
                <th scope="row"> 2017 </th>
                <td style="--size:0.4;"></td>
            </tr>
            <tr>
                <th scope="row"> 2018 </th>
                <td style="--size:0.6;"></td>
            </tr>
            <tr>
                <th scope="row"> 2019 </th>
                <td style="--size:0.8;"></td>
            </tr>
            <tr>
                <th scope="row"> 2020 </th>
                <td style="--size:1;"></td>
            </tr>
        </tbody>
    </table>
    <div class="popular">
        <h3>Popular Products</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Aug 12,2020</td>
                    <td>Fashion</td>
                    <td>Swallow</td>
                    <td>$99.89</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Aug 12,2020</td>
                    <td>Fashion</td>
                    <td>Swallow</td>
                    <td>$99.89</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jacob</td>
                    <td>Aug 12,2020</td>
                    <td>Fashion</td>
                    <td>Swallow</td>
                    <td>$99.89</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
