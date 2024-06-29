<section class="side-shopping-cart">
    <h4 class="cart-tile mt-3 mb-4 px-1">Cart</h4>
    <i class="fa-solid fa-xmark shopping-cart-closing-icon"></i>
    <div class="side-shopping-cart-content">
        <div class="delivery-and-pick-up-options-and-cart-container">
            <div class="row delivery-and-pick-up-options-container justify-content-center mb-4">       
                <div class="col-5">
                    <div class="delivery-option option text-center">
                        <h4 class="option-title mb-1">Delivery</h4>
                        <p class="time-or-availability mb-0">30 mins</p>
                    </div>
                </div>
                <div class="col-5">
                    <div class="pick-up-option option text-center">
                        <h4 class="option-title mb-1">Pick Up</h4>
                        <p class="time-or-availability mb-0">Not Available</p>
                    </div>
                </div>
            </div>
            <div class="row side-cart">
                <div class="col-12">    
                    <h5 class="mb-3">Your Items</h5>
                    <div class="selected-items-container">
                        <div class="selected-item pb-3">
                            <div class="row">
                                <div class="col-4 img-container">
                                    <img src="home/single-item-image.png" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <div class="row content-container">
                                        <div class="col-7">
                                            <h6 class="title mt-2">Zinger Burger</h6>
                                            <p class="mb-0">OMI 40</p>
                                        </div>
                                        <div class="col-5 incre-and-decre-buton-col">
                                            <div class="incre-and-decre-buton d-flex">
                                                <i class="fa fa-trash-can"></i>
                                                <p class="quantity mb-0">1</p>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>    
                                </div>   
                            </div>
                        </div>
                        <div class="selected-item pb-3">
                            <div class="row">
                                <div class="col-4 img-container">
                                    <img src="home/available-items/pizza.png" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <div class="row content-container">
                                        <div class="col-7">
                                            <h6 class="title mt-2">Cheese Pizza</h6>
                                            <p class="mb-0">OMI 80</p>
                                        </div>
                                        <div class="col-5 incre-and-decre-buton-col">
                                            <div class="incre-and-decre-buton d-flex">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <p class="quantity mb-0">1</p>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                
                            </div>
                        </div>
                        <div class="selected-item pb-3">
                            <div class="row">
                                <div class="col-4 img-container">
                                    <img src="home/available-items/shake.png" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <div class="row content-container">
                                        <div class="col-7">
                                            <h6 class="title mt-2">Banana Shakes</h6>
                                            <p class="mb-0">OMI 70</p>
                                        </div>
                                        <div class="col-5 incre-and-decre-buton-col">
                                            <div class="incre-and-decre-buton d-flex">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <p class="quantity mb-0">1</p>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                
                            </div>
                        </div>
                        <div class="selected-item pb-3">
                            <div class="row">
                                <div class="col-4 img-container">
                                    <img src="home/available-items/pizza.png" alt="" class="w-100">
                                </div>
                                <div class="col-8">
                                    <div class="row content-container">
                                        <div class="col-7">
                                            <h6 class="title mt-2">Cheese Pizza</h6>
                                            <p class="mb-0">OMI 80</p>
                                        </div>
                                        <div class="col-5 incre-and-decre-buton-col">
                                            <div class="incre-and-decre-buton d-flex">
                                                <i class="fa-solid fa-trash-can"></i>
                                                <p class="quantity mb-0">1</p>
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="total-price-container d-flex justify-content-between mt-3">
                        <h6 class="total-text">Total Price</h6>
                        <h6 class="total-price">OMI. 210</h6>
                    </div>
                    <div class="proceed-to-checkout-button-container d-flex justify-content-center mt-2">
                        <a href="{{ route('checkout') }}" class="proceed-to-checkout-link">Proceed to Checkout</a>
                    </div>
                </div>
            </div>  
        </div>
    </div>     
</section>

