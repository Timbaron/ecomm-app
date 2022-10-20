<section class="categoires_wrapper mt-3 mb-3  d-lg-block">
    <div class="container">
        <div id="categoires-bg">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-6">
                    <h4 class="heading">Categories</h4>
                </div>
                <div class="col-6 col-md-6 col-lg-6 text-right">
                    <a href="#" class="text-uppercase brown-text viewall-btn">View All</a>
                </div>
            </div>
            <div id="folloersSlider" class="dvslider">

                <div class="owl-carousel owl-theme">
                    @foreach($categories as $category)
                        <div class="item">
                            <div class="followers-inner">
                                <a href="listing.html">
                                    <img src="{{$category->image}}" loading="lazy">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</section>
