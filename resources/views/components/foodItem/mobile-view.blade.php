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
                                <a class="nav-link active" id="mobile-shop" data-toggle="tab" href="#mobile-pally" role="tab" aria-controls="mobilepally" aria-selected="true">Shop</a>
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
                                <h6 class="inner-head"><span id="count"></span> Available Deals</h6>
                                <div class="">
                                    <div class="row" id="items">
                                        <div class="col-md-6 col-lg-3">
                                            <div class="pally-inner">
                                                <div class="loading">Loading&#8230;</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
<div class="load-bg text-center mb-5 d-none d-lg-block">
        <button typ="button" class="load-more text-uppercase ">
            Load more items
        </button>
</div>
</div>
</div>
</div>
</div>

</section>
</div>


<script>
    /* The below code is using ajax to get the data from the server and then loading the data into the
    html. */
    window.addEventListener('load', function(event) {
        event.preventDefault();
        $.ajax({
            url: '/getItem/shop',
            type: 'GET',
            data: {
                item: 'shop'
            },
            success: function(data) {
                loadShopList(data);
                /* The below code is a simple example of pagination. It is showing 12 items at a time
                and when the user clicks on the load more button, it will show the next 12 items. */
                var allItems = document.querySelector('#items');
                var items = Array.from(allItems.querySelectorAll(".item"));
                var loadMore = document.getElementById("loadMore");
                maxItems = 12;
                loadItems = 12;
                hiddenClass = "hiddenStyle";
                hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

                items.forEach(function(item, index) {
                    if (index > maxItems - 1) {
                        item.classList.add(hiddenClass);
                    }
                });

                loadMore.addEventListener("click", function() {
                    [].forEach.call(document.querySelectorAll("." + hiddenClass), function(
                        item,
                        index
                    ) {
                        if (index < loadItems) {
                            item.classList.remove(hiddenClass);
                        }

                        if (document.querySelectorAll("." + hiddenClass).length === 0) {
                            loadMore.style.display = "none";
                        }
                    });
                });
            }
        });
    });
    document.getElementById('mobile-shop').addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '/getItem/shop',
            type: 'GET',
            data: {
                item: 'shop'
            },
            success: function(data) {
                loadShopList(data);
                /* The below code is a simple example of pagination. It is showing 12 items at a time
                and when the user clicks on the load more button, it will show the next 12 items. */
                var allItems = document.querySelector('#items');
                var items = Array.from(allItems.querySelectorAll(".item"));
                var loadMore = document.getElementById("loadMore");
                maxItems = 12;
                loadItems = 12;
                hiddenClass = "hiddenStyle";
                hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

                items.forEach(function(item, index) {
                    if (index > maxItems - 1) {
                        item.classList.add(hiddenClass);
                    }
                });

                loadMore.addEventListener("click", function() {
                    [].forEach.call(document.querySelectorAll("." + hiddenClass), function(
                        item,
                        index
                    ) {
                        if (index < loadItems) {
                            item.classList.remove(hiddenClass);
                        }

                        if (document.querySelectorAll("." + hiddenClass).length === 0) {
                            loadMore.style.display = "none";
                        }
                    });
                });
            }
        });
    });
    document.getElementById('mobile-recommended-tab').addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '/getItem/pally',
            type: 'GET',
            data: {
                item: 'pally'
            },
            success: function(data) {
                loadPallyList(data);
                /* The below code is a simple example of pagination. It is showing 12 items at a time
                and when the user clicks on the load more button, it will show the next 12 items. */
                var allItems = document.querySelector('#items');
                var items = Array.from(allItems.querySelectorAll(".item"));
                var loadMore = document.getElementById("loadMore");
                maxItems = 12;
                loadItems = 12;
                hiddenClass = "hiddenStyle";
                hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

                items.forEach(function(item, index) {
                    if (index > maxItems - 1) {
                        item.classList.add(hiddenClass);
                    }
                });

                loadMore.addEventListener("click", function() {
                    [].forEach.call(document.querySelectorAll("." + hiddenClass), function(
                        item,
                        index
                    ) {
                        if (index < loadItems) {
                            item.classList.remove(hiddenClass);
                        }

                        if (document.querySelectorAll("." + hiddenClass).length === 0) {
                            loadMore.style.display = "none";
                        }
                    });
                });
            }
        });
    });
    document.getElementById('mobile-pre-orders-tab').addEventListener('click', function(event) {
        event.preventDefault();
        $.ajax({
            url: '/getItem/recommended',
            type: 'GET',
            data: {
                item: 'recommended'
            },
            success: function(data) {
                loadRecommended(data);
                /* The below code is a simple example of pagination. It is showing 12 items at a time
                and when the user clicks on the load more button, it will show the next 12 items. */
                var allItems = document.querySelector('#items');
                var items = Array.from(allItems.querySelectorAll(".item"));
                var loadMore = document.getElementById("loadMore");
                maxItems = 12;
                loadItems = 12;
                hiddenClass = "hiddenStyle";
                hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

                items.forEach(function(item, index) {
                    if (index > maxItems - 1) {
                        item.classList.add(hiddenClass);
                    }
                });

                loadMore.addEventListener("click", function() {
                    [].forEach.call(document.querySelectorAll("." + hiddenClass), function(
                        item,
                        index
                    ) {
                        if (index < loadItems) {
                            item.classList.remove(hiddenClass);
                        }

                        if (document.querySelectorAll("." + hiddenClass).length === 0) {
                            loadMore.style.display = "none";
                        }
                    });
                });
            }
        });
    });

    /* The below code is loading the data from the API into the HTML page. */
    function loadShopList(data) {
        holder = document.getElementById('items');
        document.getElementById('count').innerText = data.length;
        holder.innerHTML = '';
        data.forEach((shop, index) => {
            var item = `
            <div class="col-md-6 col-lg-3 item">
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
        })
    }

    function loadPallyList(data) {
        holder = document.getElementById('items');
        document.getElementById('count').innerText = data.length;
        holder.innerHTML = '';

        data.forEach((pally, index) => {
            var item = `<div class="col-md-6 col-lg-3 item">
                                    <div class="pally-inner ">
                                        <div class="products-img-wrapper  mb-3 pointer">
                                            <a href="#">
                                                <div class="heart-icon">
                                                    <span class="material-icons">
                                                        favorite_border
                                                    </span>
                                                </div>
                                                <img class="mb-3 product-img" src="${pally.image_url}" alt="Product-img1">
                                            </a>
                                        </div>

                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">${pally.title} </h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>${pally.percentage}% | <span class="clr-red">${pally.season} Season</span></a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">???${pally.price}
                                                <s>(???${eval(pally.price + 0.28 * pally.price)})</s>
                                            </h5>
                                </div>`

            if (pally.rating > 0) {
                rating = ``;
                for (let i = 0; i < pally.rating; i++) {
                    rating += `<span class="material-icons-outlined">
                                        star
                                    </span>`
                }

                item += rating;
            }

            item += `<a href="#">
                                            <button type="button" class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                SLOT</button>
                                        </a>
                                    </div>`
            holder.innerHTML += item;

        })
    }

    function loadRecommended(data) {
        holder = document.getElementById('items');
        document.getElementById('count').innerText = data.length;
        holder.innerHTML = '';
        data.forEach((recommended, index) => {
            var item = `<div class="col-md-6 col-lg-3 item">
                                <div class="pally-inner">
                                    <div class="products-img-wrapper  mb-3 pointer">
                                        <a href="#">
                                            <div class="heart-icon">
                                                <span class="material-icons">
                                                    favorite_border
                                                </span>
                                            </div>
                                            <img class="mb-3 product-img" src="${recommended.image_url}" alt="Pre-order1">
                                        </a>
                                    </div>

                                    <div class="pally-content">
                                        <a href="#" class="inner-head">
                                            <h5 class="mb-2">${recommended.title}</h5>
                                        </a>
                                        <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                arrow_right_alt
                                            </span>${recommended.percentage}% | ${recommended.season} Season</a>
                                        <h6 class="mb-2 mt-2 font-weight-bold simhead">???${recommended.price} per kg</h6>
                                        <p class="text-red mb-2">1kg of kg ${Math.floor(Math.random() * 46 + 20)} left</p>
                                        <div class="preorder-progress stat-bar mb-2">
                                            <span class="stat-bar-rating" role="stat-bar" style="width: ${recommended.percentage}%;">${recommended.percentage}%</span>
                                        </div>
                                        <p class="mb-2 dgrey-clr">Delivery Date: ${recommended.delivery_date}</p>
                                        <a href="#">
                                            <button type="button" class="brown-btn  text-uppercase btn-effects " data-toggle="modal" data-target="#preorderModal">Book
                                                Now</button>
                                        </a>
                                    </div>

                                </div>
                            </div>`
            holder.innerHTML += item;

        })
    }
</script>
