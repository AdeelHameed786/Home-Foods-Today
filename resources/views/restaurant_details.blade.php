@include('components.header')
@include('components.navbar')   

<main class="restaurant-details">
    <section>
        <div class="container">
            <div class="row mt-md-4 mt-3">
                <div class="col-lg-9 col-md-8">
                    <div class="breadcrumb align-items-center gap-3 mb-4">
                        <p class="city-name mb-0"><a href="#">Muscat</a></p>
                        <img src="home/right-arrow.png" alt="">
                        <p class="restaurant-list-text mb-0"><a href="#"> Restaurant List</a></p>
                        <img src="home/right-arrow.png" alt="">
                        <p class="restaurant-name mb-0">Taco Bell</p>
                    </div>
                    <div class="restaurant-main-image-categories-restaurant-name-discount-container">
                        <div class="restaurant-main-image-container">
                            <img src="home/donutsHut.png" alt="">
                        </div>
                        <div class="categories-restaurant-name-discount-container">
                            <h3 class="restaurant-name mt-md-5 mt-0 mb-2">
                                Taco Bell
                            </h3>
                            <div class="col d-flex flex-column gap-2 address-distance-open-map-link-container for-mobile mb-md-0 mb-3">
                                <p class="address mb-0">Shop# 37, Ground Floor, Main Blvd,  Asif Block Allama Iqbal Town, Lahore</p>
                                <div class="distace-and-open-map-link d-flex gap-3">
                                    <p class="distance mb-0">4.2 km away</p>
                                    <p class="open-map-link mb-0"><a href="#">Open in Maps</a></p>
                                </div>
                                
                            </div>     
                            <div class="categories-container">
                                <div class="category">Sandwiches</div>
                                <div class="category"><div class="dot"> . </div> Pizza</div>
                                <div class="category"><div class="dot"> . </div> Burgers</div> 
                                <div class="category"><div class="dot"> . </div> Fast Foods</div> 
                                <div class="category"><div class="dot"> . </div> Beverages</div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 d-flex justify-content-end align-items-start add-to-favourites-button-col for-desktop">
                    <div class="add-to-favourites-button">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-heart"></i>
                        <div class="text">Add to favourites</div>
                    </div>
                </div>
            </div>  
            <div class="row mt-md-4 mt-3 restaurant-rating-review-more-info-container-row for-desktop">
                <div class="col d-flex gap-3">
                    <div class="restaurant-rating-review-more-info-container d-flex gap-3">
                        <div class="rating-container d-flex align-items-center">
                            <img src="home/star.png" alt="" class="">
                            <p class="rating-points mb-0"> 4.6/5 </p>
                            <p class="number-of-reviews mb-0"> (45)</p>
                        </div>  
                        <div class="see-reviews-link d-flex align-items-center text-primary" data-bs-toggle="modal" data-bs-target="#reviews-modal">See reviews</div>
                        <div class="more-info-link d-flex align-items-center text-primary" data-bs-toggle="modal" data-bs-target="#more-info-modal">
                            <img src="home/more-info-icon.png" alt="more-info-icon" class="more-info-icon">
                            <p class="text mb-0">More Info</p>      
                        </div>
                    </div>
                </div>
            </div>
            <div class="row add-to-favourites-button-row for-mobile">
                <div class="col-12">
                    <div class="add-to-favourites-button">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-heart"></i>
                        <div class="text">Add to favourites</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 address-distance-open-map-link-container-row for-desktop">
                <div class="col d-flex gap-3 address-distance-open-map-link-container">
                    <div class="address">Shop# 37, Ground Floor, Main Blvd,  Asif Block Allama Iqbal Town, Lahore</div>
                    <div class="dot fw-bold"> . </div>
                    <div class="distance">4.2 km away</div>
                    <div class="dot fw-bold"> . </div>
                    <div class="open-map-link"><a href="#">Open in Maps</a></div>
                </div>
            </div>
            <div class="row mt-5 categories-slider-and-item-searchbar-container pb-md-0 pb-2">
                <div class="available-items-and-search-icon d-flex align-items-center justify-content-between">
                    <h3 class="mb-md-2 mb-2">Available Items</h3>
                    <div class="search-icon-container for-mobile">
                        <svg style="width: 21px" id="tnb-google-search-icon" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z" fill="black"></path>
                        </svg>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="categories-slider mb-md-0 mb-3">
                        <div class="wrapper tabs-wrapper">  
                            <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
                            <ul class="tabs-box p-0">
                              <li class="tab active" data-content="furniture-assembly">Burgers (4)</li>
                              <li class="tab" data-content="handyman-services">Pastery (3)</li>
                              <li class="tab" data-content="electrical-services">Cake Rusk (2)</li>
                              <li class="tab" data-content="plumbing-services">Brownies (3)</li>
                              <li class="tab" data-content="painting-and-dec">Premium Desert (5)</li>
                              <li class="tab" data-content="cleaning-services">Nimco & Snack (9)</li>
                              <li class="tab" data-content="rubish-removal">Nimco & Snack (9)</li>
                              <li class="tab" data-content="gardening">Nimco & Snack (9)</li>
                              <li class="tab" data-content="transportaton-and-moving">Nimco & Snack (9)</li>
                            </ul>
                            <div class="icon"><i id="right" class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3 d-flex justify-content-md-end align-items-center search-for-items-field-containter for-desktop">
                    <div class="d-flex searchCustom-1 item-search w-100">
                        <svg style="width: 20px" id="tnb-google-search-icon" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z" fill="black"></path>
                        </svg>
                        <input class="form-control py-2" type="search" placeholder="Search for Item" aria-label="Search">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="burger-category-content category-content my-5">
                        <h3 class="mb-4">Burger</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="pizza-category-content category-content my-5">
                        <h3 class="mb-4">Pizza</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="pastery-category-content category-content my-5">
                        <h3 class="mb-4">Pastery</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="cake-category-content category-content my-5">
                        <h3 class="mb-4">Cake</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-item-card mb-3">
                                    <div class="row">
                                        <div class="col-7 content-container">
                                            <h5 class="title">Zinger Burger</h5>
                                            <p class="desc mb-1">Cheese Cake with Lotus biscoff spread and crushed lotus biscuits.</p>
                                            <h6 class="price mb-0">OMI 40</h6>
                                        </div>
                                        <div class="col-5 img-container position-relative">
                                            <img src="home/single-item-image.png" alt="">
                                            <dv class="add-button position-absolute">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </dv>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>  
    <!-- Review Modal -->   
    <div class="modal modal-1 fade reviews-modal" id="reviews-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reviews</h5>
                <p class="restaurant-name mb-0">Saffron Sands - Muscat</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>  
                <div class="modal-body d-flex flex-column gap-4">
                    <div class="rating-box">
                        <div class="summary"><i class="fa-solid fa-arrow-up d-flex align-items-center"></i><p class="mb-0 text-white">This resturant is getting better reviews!</p></div>
                        <div class="row overall-rating-and-single-star-rating-row">
                            <div class="col-lg-4 overall-rating-container mb-lg-0 mb-3">
                                <div class="overall-rating-container-content d-flex flex-column align-items-center w-100">
                                    <h1 class="overall-rating">4.6</h1>
                                    <div class="overall-stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                    </div>
                                    <div class="total-number-of-ratings-container">
                                        <p class="text mb-0">All Rating</p>
                                        <p class="mb-0"> (300+)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 single-star-rating-container d-flex flex-column gap-1">
                        
                                <div class="single-star-rating-row d-flex align-items-center gap-3">
                                    <div class="star-number-and-star-icon d-flex gap-1 align-items-center">
                                        <p class="one mb-0">1</p>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="bar one-star-bar">
                                        <div class="filled"></div>
                                    </div>
                                    <div class="percentage one-star-percentage">14%</div>
                                </div>
                                <div class="single-star-rating-row d-flex align-items-center gap-3">
                                    <div class="star-number-and-star-icon d-flex gap-1 align-items-center">
                                        <p class="two mb-0">2</p>
                                        <i class="fa-solid fa-star"></i>
                                        </div>
                                    <div class="bar two-star-bar">
                                        <div class="filled"></div>
                                    </div>
                                    <div class="percentage two-star-percentage"> 17%</div>
                                </div>
                                <div class="single-star-rating-row d-flex align-items-center gap-3">
                                    <div class="star-number-and-star-icon d-flex gap-1 align-items-center">
                                        <p class="three mb-0">3</p>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="bar three-star-bar">
                                        <div class="filled"></div>
                                    </div>
                                    <div class="percentage three-star-percentage">21%</div>
                                </div>
                                <div class="single-star-rating-row d-flex align-items-center gap-3">
                                    <div class="star-number-and-star-icon d-flex gap-1 align-items-center">
                                        <p class="four mb-0">4</p>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="bar four-star-bar">
                                        <div class="filled"></div>
                                    </div>
                                    <div class="percentage four-star-percentage">7%</div>
                                </div>
                                <div class="single-star-rating-row d-flex align-items-center gap-3">
                                    <div class="star-number-and-star-icon d-flex gap-1 align-items-center">
                                        <p class="five mb-0">5</p>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="bar five-star-bar">
                                        <div class="filled"></div>
                                    </div>
                                    <div class="percentage five-star-percentage">41%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-box">
                        <ul class="nav nav-pills gap-md-3 gap-2 mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-top-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-top-reviews" type="button" role="tab" aria-controls="pills-top-reviews" aria-selected="true">Top Reviews</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-newest-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-newest-reviews" type="button" role="tab" aria-controls="pills-newest-reviews" aria-selected="false">Newest Reviews</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-highest-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-highest-reviews" type="button" role="tab" aria-controls="pills-highest-reviews" aria-selected="false">Highest Reviews</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-lowest-reviews-tab" data-bs-toggle="pill" data-bs-target="#pills-lowest-reviews" type="button" role="tab" aria-controls="pills-lowest-reviews" aria-selected="false">Lowest Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-top-reviews" role="tabpanel" aria-labelledby="pills-top-reviews-tab">
                                <div class="single-rating-boxes-container d-flex flex-column gap-3">
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-newest-reviews" role="tabpanel" aria-labelledby="pills-newest-reviews-tab">
                                <div class="single-rating-boxes-container d-flex flex-column gap-3">
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-highest-reviews" role="tabpanel" aria-labelledby="pills-highest-reviews-tab">
                                <div class="single-rating-boxes-container d-flex flex-column gap-3">
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                    <div class="single-rating-box">
                                        <div class="profile-image-name-stars-and-time d-flex gap-md-3 gap-2">
                                            <div class="profile-image">
                                                <img src="home/reviews/mark.png" alt="">
                                            </div>
                                            <div class="name-stars-and-time">
                                                <div class="name-container mb-md-1 mb-0">
                                                    <h4 class="name mb-md-0 mb-1">Name</h4>
                                                </div>
                                                <div class="stars-and-time d-flex gap-md-2 gap-1">
                                                    <div class="stars-container">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <p class="time">1 week ago</p>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="review-desc">Hands down the best dining experience I've had! Amazing food, impeccable service, and a cozy ambiance. Will definitely be back!</p>
                                        <div class="review-on-which-item-container d-flex mx-5">
                                            <div class="col-md-9 d-flex align-items-center"><h3 class="item-name">Donuts</h3></div>
                                            <div class="col-md-3"><img src="home/donuts.png" alt="" class="item-image"></div>
                                        </div>
                                        <div class="seller-response-container mt-3">
                                            <h5>Seller response</h5>
                                            <p class="seller-response">Thank you so much for your feedback.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Review Modal -->

    <!-- More Info Modal -->
    <div class="modal modal-1 fade more-info-modal" id="more-info-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">More Info</h5>
                <p class="restaurant-name mb-0">Saffron Sands - Muscat</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>  
                <div class="modal-body d-flex gap-4 px-4 py-4">
                    <div class="clock-icon d-flex">
                        <i class="fa-regular fa-clock clock-icon"></i>
                    </div>
                    <div class="timing-box-and-delivery-fee-minimum-order-and-service-fee-container">
                        <div class="timing-box mb-4">
                            <h5 class="timing-heading mb-3">Timing</h5>
                            <h6 class="open-until mb-0">Now open until 21:00</h6>
                            <div class="today-timing mb-2">
                                <p class="day today mb-0">Today</p>
                                <p class="timing mb-0">12:00 - 21:00</p>
                            </div>
                            <div class="mon-to-thurs-timing mb-2">
                                <p class="day today mb-0">Monday - Thursday</p>
                                <p class="timing mb-0">12:00 - 21:00</p>
                            </div>
                            <div class="friday-timing mb-2">
                                <p class="day today mb-0">Friday</p>
                                <p class="timing mb-0">12:00 - 21:00</p>
                            </div>
                            <div class="weekend-timing mb-2">
                                <p class="day today mb-0">Saturday - Sunday</p>
                                <p class="timing mb-0">12:00 - 21:00</p>
                            </div>
                        </div>  
                        <div class="delivery-fee-minimum-order-and-service-fee-container">
                                <div class="delivery-fee-container">
                                    <h5 class="heading">Delivery Fee</h5>
                                    <p class="desc">Delivery fee is charged based on time of day, distance, and surge conditions
                                    </p>
                                </div>
                                <div class="minimum-order-container">
                                    <h5 class="heading">Minimum order</h5>
                                    <p class="desc">Minimum order allowed is for OMI.200</p>
                                </div>
                                <div class="service-fee-container">
                                    <h5 class="heading">Service fee</h5>
                                    <p class="desc">This fee goes into providing you better customer care and app experience.</p>
                                </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div> <!-- End Review Modal -->
</main>
          
@push('script')
    <script>
        const tabsBox = document.querySelector(".tabs-box");
        const allTabs = tabsBox.querySelectorAll(".tab");
        const arrowIcons = document.querySelectorAll(".tabs-wrapper .icon i");

        let isDragging = false;
        let startX = 0;
        let startY = 0; 

        if (tabsBox.clientWidth == tabsBox.scrollWidth) {
            arrowIcons[0].parentElement.style.display = "none";
            arrowIcons[1].parentElement.style.display = "none";
        }

        const handleIcons = (scrollVal) => {
            let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
            arrowIcons[0].parentElement.style.opacity = scrollVal <= 0 ? "0.5" : "1";
            arrowIcons[1].parentElement.style.opacity = maxScrollableWidth - scrollVal <= 1 ? "0.5" : "1";
        }

        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                let scrollWidth;
                const dragDistance = window.innerWidth < 575 ? 276 : 340;
                if (icon.id === "left") {
                    scrollWidth = tabsBox.scrollLeft -= dragDistance;
                } else if (icon.id === "right") { // Corrected ID check
                    scrollWidth = tabsBox.scrollLeft += dragDistance;
                }
                handleIcons(scrollWidth);
            });
        });

        const dragging = (e) => {
            if (!isDragging) return;

            // Calculate movementX for both touch and mouse events
            const movementX = e.type === 'touchmove' ? e.touches[0].clientX - startX : e.movementX;

            // Calculate movementY for both touch and mouse events
            const movementY = e.type === 'touchmove' ? e.touches[0].clientY - startY : e.movementY;

            // Calculate the absolute value of movementX and movementY
            const absMovementX = Math.abs(movementX);
            const absMovementY = Math.abs(movementY);

            // Allow default touch behavior if the touch event occurs outside the tabs section
            if (!tabsBox.contains(e.target)) {
                return;
            }

            // If the drag is more horizontal than vertical, handle tab scrolling
            if (absMovementX > absMovementY) {
                e.preventDefault(); // Prevent default touch behavior (e.g., scrolling)
                tabsBox.classList.add("dragging");
                tabsBox.scrollLeft -= movementX;
                handleIcons(tabsBox.scrollLeft);
                startX = e.type === 'touchmove' ? e.touches[0].clientX : startX;
            }
        }

        const dragStart = (e) => {
            if (e.type === 'mousedown' || e.touches.length === 1) {
                isDragging = true;
                startX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX;
                startY = e.type === 'touchstart' ? e.touches[0].clientY : e.clientY;
            }
        }

        const dragStop = () => {
            isDragging = false;
            tabsBox.classList.remove("dragging");
        }

        tabsBox.addEventListener("mousedown", dragStart);
        tabsBox.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        tabsBox.addEventListener("touchstart", dragStart);
        tabsBox.addEventListener("touchmove", dragging);
        document.addEventListener("touchend", dragStop);
    </script>
@endpush
@include('components.footer')
