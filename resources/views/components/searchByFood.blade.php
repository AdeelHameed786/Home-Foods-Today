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
<section class="search-by-food-section">
    <div class="container-fluid mt-5" >
        <div class="container pt-5 pb-5">
            <div class="slider-container" id="searchByFood">
                <div class="d-flex justify-content-between">
                    <h2>Search by Food</h2>
                    <div class="slider-arrows  d-flex justify-content-end">
                        <button type="button" class="btn">View All</button>
                        <button type="button" id="left" class="btn slider-arrow slider-arrow-prev"><img src="/home/Arrowleft.png" width="50px" height="50px" alt=""></button>
                        <button type="button" id="right" class="btn slider-arrow slider-arrow-next"><img src="/home/Arrowright.png" width="50px" height="50px" alt=""></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slides-wrapper">
                            <div class="slides-container">
                                <ul class="slider-list">
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (1).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Steak</h1>
    
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (3).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Chowmein</h1>
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (4).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Sandiwch
                                            </h1>
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (5).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Noodles</h1>
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (6).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Burger</h1>
    
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (7).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Pizza</h1>
    
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (3).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Chowmein</h1>
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
                                            style="width: 13rem; background-color: transparent !important;">
                                            <img src="/home/searchbyfood (4).png" style="border-radius: 50%"
                                                class="card mt-4-img-top" alt="...">
                                            <h1 style="font-size: 22px; padding: 10px 27px 0px 0px;">Sub-sandiwch
                                            </h1>
                                        </div>
                                    </li>
                                    <li class="slider-item d-flex justify-content-center">
                                        <div class="cardImgFood mt-4"
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
</section>


<script>
    const searchByFoodSliderList = document.querySelector("#searchByFood .slider-list");
    searchByFoodSliderListArrowIcons = document.querySelectorAll("#searchByFood .slider-arrow");
    let isSearchByFoodSliderListDragging = false;
    let searchByFoodSliderListStartX = 0;
    let searchByFoodSliderListStartY = 0; 

    if (searchByFoodSliderList.clientWidth == searchByFoodSliderList.scrollWidth) {
        searchByFoodSliderListArrowIcons[0].parentElement.style.display = "none";
        searchByFoodSliderListArrowIcons[1].parentElement.style.display = "none";
    }

    const handleSearchByFoodIcons = (scrollVal) => {
        let maxScrollableWidth = searchByFoodSliderList.scrollWidth - searchByFoodSliderList.clientWidth;
        searchByFoodSliderListArrowIcons[0].style.opacity = scrollVal <= 0 ? "0.5" : "1";
        searchByFoodSliderListArrowIcons[1].style.opacity = maxScrollableWidth - scrollVal <= 1 ? "0.5" : "1";
    }

    searchByFoodSliderListArrowIcons.forEach(icon => {
        icon.addEventListener("click", () => {
            let scrollWidth;
            const dragDistance = window.innerWidth < 575 ? 276 : 340;
            if (icon.id === "left") {
                scrollWidth = searchByFoodSliderList.scrollLeft -= dragDistance;
            } else if (icon.id === "right") { // Corrected ID check
                scrollWidth = searchByFoodSliderList.scrollLeft += dragDistance;
            }
            handleSearchByFoodIcons(scrollWidth);
        });
    });

    const searchByFoodSliderListDragging = (e) => {
        if (!isSearchByFoodSliderListDragging) return;

        // Calculate movementX for both touch and mouse events
        const movementX = e.type === 'touchmove' ? e.touches[0].clientX - searchByFoodSliderListStartX : e.movementX;

        // Calculate movementY for both touch and mouse events
        const movementY = e.type === 'touchmove' ? e.touches[0].clientY - searchByFoodSliderListStartY : e.movementY;

        // Calculate the absolute value of movementX and movementY
        const absMovementX = Math.abs(movementX);
        const absMovementY = Math.abs(movementY);

        // Allow default touch behavior if the touch event occurs outside the tabs section
        if (!searchByFoodSliderList.contains(e.target)) {
            return;
        }

        // If the drag is more horizontal than vertical, handle tab scrolling
        if (absMovementX > absMovementY) {
            e.preventDefault(); // Prevent default touch behavior (e.g., scrolling)
            searchByFoodSliderList.classList.add("dragging");
            searchByFoodSliderList.scrollLeft -= movementX;
            handleSearchByFoodIcons(searchByFoodSliderList.scrollLeft);
            searchByFoodSliderListStartX = e.type === 'touchmove' ? e.touches[0].clientX : searchByFoodSliderListStartX;
        }
    }

    const searchByFoodSliderDragStart = (e) => {
        if (e.type === 'mousedown' || e.touches.length === 1) {
            isSearchByFoodSliderListDragging = true;
            searchByFoodSliderListStartX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX;
            searchByFoodSliderListStartY = e.type === 'touchstart' ? e.touches[0].clientY : e.clientY;
        }
    }

    const searchByFoodSliderDragStop = () => {
        isSearchByFoodSliderListDragging = false;
        searchByFoodSliderList.classList.remove("dragging");
    }

    searchByFoodSliderList.addEventListener("mousedown", searchByFoodSliderDragStart);
    searchByFoodSliderList.addEventListener("mousemove", searchByFoodSliderListDragging);
    document.addEventListener("mouseup", searchByFoodSliderDragStop);
    searchByFoodSliderList.addEventListener("touchstart", searchByFoodSliderDragStart);
    searchByFoodSliderList.addEventListener("touchmove", searchByFoodSliderListDragging);
    document.addEventListener("touchend", searchByFoodSliderDragStop);

    handleSearchByFoodIcons(searchByFoodSliderList.scrollLeft);
    
</script>
