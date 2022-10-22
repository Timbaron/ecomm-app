<section class="food-items-bg  d-none d-lg-block webfoodTab-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <ul class="nav nav-tabs foodtabs" id="foodTab" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" id="shop" data-toggle="tab" href="#pally" role="tab" aria-controls="pally" aria-selected="true">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="recommended-tab" data-toggle="tab" href="#recommended" role="tab" aria-controls="recommended" aria-selected="false">Pally</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pre-orders-tab" data-toggle="tab" href="#pre-orders" role="tab" aria-controls="pre-orders" aria-selected="false">Recommended</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-7">
                <form class="form-inline select-bg float-right">
                    <div class="form-group mb-0">
                        <select class="form-control border-right-0">
                            <option>Categories</option>
                            <option>Soup & stew ingredients</option>
                            <option>Foodstuffs</option>
                            <option>Meat, Poultry & Seafood</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <select class="form-control  border-right-0">
                            <option>Sub Categories</option>
                            <option>Grains</option>
                            <option>Tubers & Roots
                            </option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <select class="form-control">
                            <option>Sort By: Price (Low to High)</option>
                            <option>Price (Low to High)</option>
                            <option>Price (High to Low)</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <hr class="border-bottom">
        <div class="row ">
            <div class="col-lg-12">
                <div class="tab-content main" id="foodTabContent">
                    <div class="tab-pane fade show active " id="pally" role="tabpanel" aria-labelledby="pally-tab">
                        <h6 class="inner-head"> Available Deals</h6>
                        <div class="">
                            <div class="row" id="shopItems" >
                                <div class="col-md-6 col-lg-3" >
                                    <div class="pally-inner" >
                                        <div class="loading">Loading&#8230;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade recommended-bg" id="recommended" role="tabpanel" aria-labelledby="recommended-tab">
                        <h6 class="inner-head mb-3 mt-3"> Available Deals</h6>
                        <div class="">
                            <div class="row">
                                @if(isset($pally))
                                @foreach(range(0,$pally->count()-1) as $item)
                                <div class="col-md-6 col-lg-3">
                                    <div class="pally-inner ">
                                        <div class="products-img-wrapper  mb-3 pointer">
                                            <a href="#">
                                                <div class="heart-icon">
                                                    <span class="material-icons">
                                                        favorite_border
                                                    </span>
                                                </div>
                                                <img class="mb-3 product-img" src="{{$pally[$item]->image_url}}" alt="Product-img1">
                                            </a>
                                        </div>

                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">{{$pally[$item]->title}} </h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>{{$pally[$item]->percentage}}% | <span class="clr-red">{{$pally[$item]->season}} Season</span></a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦{{$pally[$item]->price}}
                                                <s>(₦{{$pally[$item]->price + 0.28 * $pally[$item]->price}})</s>
                                            </h5>
                                            <section class='rating-widget'>
                                                @if ($pally[$item]->rating < 1) <div class="no-ratings">
                                                    <p>No ratings yet</p>
                                        </div>
                                        @else
                                        <div class="rating-main pro-detail-star" data-vote="0">
                                            <div class="mainstar hidden">
                                                <span class="full" data-value="0"></span>
                                                <span class="half" data-value="0"></span>
                                            </div>
                                            @foreach(range(1,$pally[$item]->rating) as $star)
                                            <div class="star">
                                                <span class="full" data-value="1"></span>
                                                <span class="half" data-value="0.5"></span>
                                                <span class="selected"></span>

                                            </div>
                                            @endforeach
                                        </div>
                                        <div class='success-box'>
                                            <div class='text-message'></div>
                                        </div>
                                        @endif
</section>
<a href="#">
    <button type="button" class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
        TYPE</button>
</a>
</div>

</div>
</div>
@endforeach
@endif
</div>
</div>
</div>
<div class="tab-pane fade preorder-bg" id="pre-orders" role="tabpanel" aria-labelledby="pre-orders-tab">
    <h6 class="inner-head mb-3 mt-3"> Available Deals</h6>
    <div class="">
        <div class="row">
            @if(isset($recommended))
            @foreach(range(0,$recommended->count()-1) as $item)
            <div class="col-md-6 col-lg-3">
                <div class="pally-inner">
                    <div class="products-img-wrapper  mb-3 pointer">
                        <a href="#">
                            <div class="heart-icon">
                                <span class="material-icons">
                                    favorite_border
                                </span>
                            </div>
                            <img class="mb-3 product-img" src="{{$recommended[$item]->image_url}}" alt="Pre-order1">
                        </a>
                    </div>

                    <div class="pally-content">
                        <a href="#" class="inner-head">
                            <h5 class="mb-2">{{$recommended[$item]->title}}</h5>
                        </a>
                        <a href="#" class="red-bg"><span class="material-icons-outlined">
                                arrow_right_alt
                            </span>{{$recommended[$item]->percentage}}% | {{$recommended[$item]->season}} Season</a>
                        <h6 class="mb-2 mt-2 font-weight-bold simhead">₦{{$recommended[$item]->price}} per kg</h6>
                        <p class="text-red mb-2">1kg of {{rand(20,46)}}kg left</p>
                        <div class="preorder-progress stat-bar mb-2">
                            <span class="stat-bar-rating" role="stat-bar" style="width: {{$recommended[$item]->percentage}}%;">{{$recommended[$item]->percentage}}%</span>
                        </div>
                        <p class="mb-2 dgrey-clr">Delivery Date: {{$recommended[$item]->delivery_date}}</p>
                        <a href="#">
                            <button type="button" class="brown-btn  text-uppercase btn-effects " data-toggle="modal" data-target="#preorderModal">Book
                                Now</button>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
</div>
<div class="load-bg text-center mb-5 d-none d-lg-block">
    <a href="">
        <button typ="button" class="load-more text-uppercase ">
            Load more items
        </button>
    </a>
</div>
</div>
</div>

</div>
</section>
<script>
    // detect when the shop recommended section is in view
    // when the page loads

    window.addEventListener('load', function(event) {
        // hit the getItem api route to get with ajax request
        event.preventDefault();
        $.ajax({
            url: '/getItem/shop',
            type: 'GET',
            data: {
                item: 'shop'
            },
            success: function(data) {
                loadShopList(data);
            }
        });
    });
    document.getElementById('recommended-tab').addEventListener('click', function(event) {
        // hit the getItem api route to get with ajax request
        event.preventDefault();
        $.ajax({
            url: '/getItem/pally',
            type: 'GET',
            data: {
                item: 'pally'
            },
            success: function(data) {
                console.log(data);
            }
        });
    });
    document.getElementById('pre-orders-tab').addEventListener('click', function(event) {
        // hit the getItem api route to get with ajax request
        event.preventDefault();
        $.ajax({
            url: '/getItem/recommended',
            type: 'GET',
            data: {
                item: 'recommended'
            },
            success: function(data) {
                console.log(data);
            }
        });
    });

    function loadShopList(data) {
        holder = document.getElementById('shopItems');
        holder.innerHTML = '';
        data.forEach((shop, index) => {
            var item = `
            <div class="col-md-6 col-lg-3">
                                    <div class="pally-inner ">
                                    <div class="products-img-wrapper  mb-3 pointer">
                        <a href="product_detail.html">
                            <div class="heart-icon">
                                <span class="material-icons">
                                    favorite_border
                                </span>
                            </div>
                            <img class=" product-img mb-3" src="${shop.image_url}" alt="Product-img1" loading="lazy">
                        </a>
                    </div>

                    <div class="pally-content">
                        <a href="#" class="inner-head">
                            <h5 class="mb-2">${shop.title} </h5>
                        </a>
                        <a href="#" class="red-bg"><span class="material-icons-outlined">
                                arrow_right_alt
                            </span>${shop.percentage}% | <span class="clr-gr">${shop.season} Season</span></a>
                        <h5 class="mb-2 mt-2 font-weight-bold simhead">${shop.price} <small>per
                                slot (slot size per person goes here)</small></h5>
                        <h6 class="mb-2">Time left: ${(shop.time_left).split()[1]}</h6>
                        <ul class="list-unstyled pallylist-bg mb-2">
                            <li class="d-inline-block pally-left">
                                <img class="list-img" src="assets/images/list-img1.jpg" alt="list-img1">
                            </li>
                            <li class="d-inline-block pally-left">
                                <img class="list-img" src="assets/images/list-img3.jpg" alt="list-img2">
                            </li>
                            <li class="d-inline-block pally-left">
                                <img class="list-img" src="assets/images/list-img3.jpg" alt="list-img3">
                            </li>
                            <li class="d-inline-block pally-left">
                                <img class="list-img" src="assets/images/list-img1.jpg" alt="list-img1">
                            </li>
                            <li class="d-inline-block">
                                <small>2 slots left</small>
                            </li>
                        </ul>
                        <a href="#">
                            <button type="button" class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                SLOT</button>
                        </a>
                    </div>
                    </div>
                    </div>`

                    holder.innerHTML += item;
                    // append item to holder


        })
    }
    
</script>
