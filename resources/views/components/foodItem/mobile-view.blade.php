<div class="fixed-food">
    <section class="food-items-bg  d-block d-lg-none mobilefoodTab-view">
        <div class="tabs-fixed">
            <div class="container ">
                <div class="d-flex">
                    <div class=" justify-content-start">
                    </div>
                    <div class=" ml-auto justify-content-end">
                        <p class="mb-0" data-toggle="modal" data-target="#fillter-modal"> <span class="material-icons align-top pr-2">
                                filter_list
                            </span class="align-top">Filter</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <ul class="nav nav-tabs foodtabs" id="foodTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" id="" data-toggle="tab" href="#mobile-pally" role="tab" aria-controls="mobilepally" aria-selected="true">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-recommended-tab" data-toggle="tab" href="#mobile-recommended" role="tab" aria-controls="mobile-recommended" aria-selected="false">Pally</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-pre-orders-tab" data-toggle="tab" href="#mobile-pre-orders" role="tab" aria-controls="mobile-pre-orders" aria-selected="false">Recommended</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <ul class="list-unstyled mb-0 select-bg float-right d-none d-lg-block">
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Categories</option>
                                        <option>Soup & stew ingredients</option>
                                        <option>Foodstuffs</option>
                                        <option>Meat, Poultry & Seafood</option>
                                    </select>
                                </div>
                            </li>
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Sub Categories</option>
                                        <option>Grains
                                        </option>
                                        <option>Tubers & Roots
                                        </option>
                                    </select>
                                </div>
                            </li>
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Sort By: Price (Low to High)</option>
                                        <option>Price (Low to High)</option>
                                        <option>Price (High to Low)</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="border-bottom">
            </div>
        </div>

        <div class="food-bg product_list">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="tab-content mobiletabcontent" id="foodTabContent">
                            <div class="tab-pane fade show active pally-bg" id="mobile-pally" role="tabpanel" aria-labelledby="mobile-pally-tab">
                                <h6 class="inner-head mb-3 mt-3">{{$shop->count()}} Available Deals</h6>
                                @foreach(range(0,$shop->count()-10) as $item)
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="product_detail.html">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img" src="{{$shop[$item]->image_url}}" alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">{{$shop[$item]->title}} </h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>{{$shop[$item]->percentage}}% | {{$shop[$item]->season}} Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦{{$shop[$item]->price}} <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: {{explode(' ', $shop[$item]->time_left)[1]}}</h6>
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
                                </div>
                                @endforeach

                            </div>
                            <div class="tab-pane fade recommended-bg" id="mobile-recommended" role="tabpanel" aria-labelledby="mobile-recommended-tab">
                                <h6 class="inner-head mb-3 mt-3">{{$pally->count()}} Available Deals</h6>
                                @foreach(range(0,$pally->count()-1) as $item)
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img" src="{{$pally[$item]->image_url}}" alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">{{$pally[$item]->title}} </h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>{{$pally[$item]->percentage}}% | {{$pally[$item]->season}} Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦{{$pally[$item]->price}}
                                            <s>(₦{{$pally[$item]->price + 0.28 * $pally[$item]->price}})</s>
                                            </h5>
                                            <section class='rating-widget mb-2'>
                                            @if ($pally[$item]->rating < 1)
                                                <div class="no-ratings">
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
                            </div>
                            <div class="tab-pane fade preorder-bg" id="mobile-pre-orders" role="tabpanel" aria-labelledby="mobile-pre-orders-tab">
                                <h6 class="inner-head mb-3 mt-3">{{$recommended->count()}} Available Deals</h6>
                                <div class="">
                                    @foreach(range(0,$recommended->count()-1) as $item)
                                    <div class="d-flex mobile-product">
                                        <div class=" justify-content-start">
                                            <div class="pally-inner">
                                                <div class="products-img-wrapper  mb-2 pointer">
                                                    <a href="#">
                                                        <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                                        </div>
                                                        <img class="mb-3 product-img" src="{{$recommended[$item]->image_url}}" alt="Pre-order1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" ml-2 justify-content-end">
                                            <div class="pally-content">

                                                <a href="#" class="inner-head">
                                                    <h5 class="mb-2">{{$recommended[$item]->title}}</h5>
                                                </a>
                                                <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                        arrow_right_alt
                                                    </span>{{$recommended[$item]->percentage}}% | {{$recommended[$item]->season}} Season</a>
                                                <h6 class="mb-2 mt-2 font-weight-bold simhead">₦{{$recommended[$item]->price}} per kg
                                                </h6>
                                                <p class="text-red mb-2">1kg of {{rand(20,46)}}kg left</p>
                                                <div class="preorder-progress stat-bar mb-2">
                                                    <span class="stat-bar-rating" role="stat-bar" style="width: {{$recommended[$item]->percentage}}%;">{{$recommended[$item]->percentage}}%</span>
                                                </div>
                                                <p class="mb-2 dgrey-clr">Delivery Date: {{$recommended[$item]->delivery_date}}</p>
                                                <a href="#">
                                                    <button type="button" class="brown-btn  text-uppercase btn-effects " data-toggle="modal" data-target="#booknowModal">Book
                                                        Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="load-bg text-center mb-5 d-none d-lg-block">
                            <a href="{{route('home', $currentPage+10)}}">
                                <button typ="button" class="load-more text-uppercase ">
                                    Load more items
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
