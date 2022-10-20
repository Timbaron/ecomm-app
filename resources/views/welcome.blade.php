@extends('layouts.app')

@section('content')
<main>
    <!------ DESKTOP-HEADER-SECTION-START  ------>
    @include('components.header.desktop')
    <!------ DESKTOP-HEADER-SECTION-END  ------>
    <!------ MOBILE-HEADER-SECTION-START ------>
    @include('components.header.mobile')
    <!------ MOBILE-HEADER-SECTION-END ------>
    <!------ HERO_SECTION_START ------>
    @include('components.hero.index')
    <!------ HERO_SECTION_END ------>
    <!------ CATEGORIES_SECTION_START  ------>
    @include('components.categories.index')
    <!------ CATEGORIES_SECTION_END  ------>

    <!------ FOOD-ITEMS-WEB-VIEW-SECTION-START ------>
    @include('components.foodItem.web-view')
    <!------ FOOD-ITEMS-WEB-VIEW-SECTION-START ------>
    <!------ FOOD-ITEMS-MOBILE-SECTION-START ------>
    @include('components.foodItem.mobile-view')
    <!------ FOOD-ITEMS-MOBILE-SECTION-START ------>
    <!------ PARTNER & MEDIA SECTION-START ------>
    @include('components.Partner_media.index')
    <!------ PARTNER & MEDIA SECTION-END ------>
    <!------ DOWNLOAD-APP-SECTION-START ------>
    @include('components.download.app')
    <!------ DOWNLOAD-APP-SECTION-END ------>
    <!------ DOWNLOAD-BOTTOM-SECTION-START ------>
    @include('components.download.bottom')
    <!------ DOWNLOAD-BOTTOM-SECTION-END ------>
    <!------ FOOTER-SECTION-START ------>
    @include('components.footer.index')
    <!------ FOOTER-SECTION-END ------>
    <!------ PRE-ORDER-MODAL-START ------>
    @include('components.modals.preorder')
    <!----- PRE-MODAL-MOBILE-VIEW-START------>
    @include('components.modals.preorder_mobile')
    <!----- PRE-MODAL-MOBILE-VIEW-END------>
    <!------ PRE-ORDER-MODAL-END ------>
    <!------ FILTER-MODAL-START ------->
    @include('components.modals.filter')
    <!------ FILTER-MODAL-END ------->
    <!------ MOBILE-LOADER-START ------>
    @include('components.loaders.mobile')
    <!------ MOBILE-LOADER-END ------>
    <!------ MOBILE-FOOTER-CSS-START ------>
    @include('components.footer.mobile')
    <!------ MORE-MODAL-START ------>
    @include('components.modals.more')
    <!------ MORE-MODAL-END ------>
    <!------ MOBILE-FOOTER-CSS-END ------>
    <!------ MOBILE-SEARCH-BAR-MODAL-START ------>
    @include('components.modals.search_bar_mobile')
    <!------ MOBILE-SEARCH-BAR-MODAL-END ------>
</main>
@endsection
