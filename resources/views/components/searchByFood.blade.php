<style>
    @media (max-width: 1000px) {
        .custom-card-food {
            padding: 2rem !important;
        }

        .center-col-5 {
            display: flex;
            justify-content: center;
        }

        .center-col-7 h2 {
            text-align: center !important;
        }
    }
</style>
<div class="container-fluid mt-5" style="background-color: #FEFAF1">
    <div class="container pt-5 pb-5">
        <h2 style="font-size: 43px">Search by Food</h2>
        <div class="slider-container" id="searchByFood">
            <div class="row">
                <div class="slider-arrows  d-flex justify-content-end">
                    <button type="button" class="btn">View All <img src="/home/viewAll.png" alt=""></button>
                    <button type="button" id="left" class="btn slider-arrow slider-arrow-prev"><img src="/home/Arrowleft.png" width="50px" height="50px" alt=""></button>
                    <button type="button" id="right" class="btn slider-arrow slider-arrow-next"><img src="/home/Arrowright.png" width="50px"
                            height="50px" alt=""></button>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="slides-wrapper">
                        <div class="slides-container">
                            <ul class="slider-list">
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (1).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Steak</h1>

                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (3).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Chowmein</h1>
                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (4).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Sub-sandiwch
                                        </h1>
                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (5).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Noodles</h1>
                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (6).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Burger</h1>

                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (7).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Pizza</h1>

                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (3).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Chowmein</h1>
                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (4).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Sub-sandiwch
                                        </h1>
                                    </div>
                                </li>
                                <li class="slider-item d-flex justify-content-center">
                                    <div class="card cardImgFood mt-4"
                                        style="width: 13rem; background-color: transparent !important;">
                                        <img src="/home/searchbyfood (5).png" style="border-radius: 50%"
                                            class="card mt-4-img-top" alt="...">
                                        <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Noodles</h1>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="" style="background-color: #FEEFD0">
    <div class="container custom-card-food p-5">
        <div class="row p-5" style="background-color: white; border-radius: 46px">
            <div class="col-xl-4">
                <div class="card">
                    <div class="row">
                        <div class="col-xl-5 center-col-5">
                            <img src="/home/discount.png" width="110px" alt="">
                        </div>
                        <div class="col-xl-7 center-col-7 d-flex align-items-center">
                            <h2 class="mb-0" style="font-size: 30px; color: #913737; padding: 0px;"><b>Daily
                                    Discounts</b></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="row">
                        <div class="col-xl-5 center-col-5">
                            <img src="/home/tracking.png" width="110px" alt="">
                        </div>
                        <div class="col-xl-7 center-col-7 d-flex align-items-center">
                            <h2 class="mb-0" style="font-size: 30px; color: #913737; padding: 0;"><b>Live
                                    Tracking</b></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 d-flex">
                <div class="card">
                    <div class="row">
                        <div class="col-xl-5 center-col-5">
                            <img src="/home/trackingd.png" width="110px" alt="">
                        </div>
                        <div class="col-xl-7 center-col-7 d-flex align-items-center">
                            <h2 class="mb-0" style="font-size: 30px; color: #913737; padding: 0px;"><b>Quick
                                    Delivery</b></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-container">
        
            <img class="w-100" src="/home/AppDownload.png" alt="">
        {{-- <div class="row app">
            <div class="col-xl-5 center-col-5">
                <div style="background-color: transparent;" class="card d-flex justify-content-end">
                    <img src="/home/mobile.png" width="392px" alt="">
                </div>
            </div>
            <div class="col-xl-4" style="background-color: #FEEFD0;">
                <div style="background-color: transparent;" class="card d-flex justify-content-end">
                    <h2 style="font-size: 60px; color:#913737">Install the app</h2>
                    <p style="font-size: 18px">It's never been easier to order food. Look for the finest discounts and
                        you'll be lost in a world of delectable food.</p>
                </div>
               
            </div>
        </div> --}}
    </div>
</div>
<script>
    const sliderList = document.querySelector("#searchByFood .slider-list");

    arrowIcons = document.querySelectorAll("#searchByFood .slider-arrow");

    let isDragging = false;

    if(sliderList.clientWidth == sliderList.scrollWidth) {
        sliderList[0].parentElement.style.display = "none";
        sliderList[1].parentElement.style.display = "none";
    }

    const handleIcons = (scrollVal) => {
    console.log("scrollVal", scrollVal);
    console.log("sliderList.scrollWidth", sliderList.scrollWidth);
    console.log("sliderList.clientWidth", sliderList.clientWidth);
      let maxScrollableWidth = sliderList.scrollWidth - sliderList.clientWidth;
      arrowIcons[0].style.opacity = scrollVal <= 0 ? "0.5" : "1";

      arrowIcons[1].style.opacity = maxScrollableWidth - scrollVal <= 1 ? "0.5" : "1";
    }

    arrowIcons.forEach(icon => {
      icon.addEventListener("click", () => {
        // if clicked icon is left, reduce 350 from sliderList scrollLeft else add
        let scrollWidth = sliderList.scrollLeft += icon.id === "left" ? -340 : 340;
    
        handleIcons(scrollWidth);
      });
    });



    const dragging = (e) => {
      if(!isDragging) return;
      sliderList.classList.add("dragging");
      sliderList.scrollLeft -= e.movementX;
      handleIcons(sliderList.scrollLeft)
    }

    const dragStop = () => {
      isDragging = false;
      sliderList.classList.remove("dragging");
    }

    sliderList.addEventListener("mousedown", () => isDragging = true);
    sliderList.addEventListener("mousemove", dragging);
    document.addEventListener("mouseup", dragStop);


    
                







   
</script>
