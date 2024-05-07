@include('components.header')
@include('components.navbar')

<main class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="delivery-address-container container-1 mb-4">
                    <h4 class="mb-3">Delivery address</h4>
                    <div class="details-container">
                        <div class="location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">
                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 90 c -1.415 0 -2.725 -0.748 -3.444 -1.966 l -4.385 -7.417 C 28.167 65.396 19.664 51.02 16.759 45.189 c -2.112 -4.331 -3.175 -8.955 -3.175 -13.773 C 13.584 14.093 27.677 0 45 0 c 17.323 0 31.416 14.093 31.416 31.416 c 0 4.815 -1.063 9.438 -3.157 13.741 c -0.025 0.052 -0.053 0.104 -0.08 0.155 c -2.961 5.909 -11.41 20.193 -20.353 35.309 l -4.382 7.413 C 47.725 89.252 46.415 90 45 90 z" style="stroke: none; stroke-width: 3px; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; stroke: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 45.678 c -8.474 0 -15.369 -6.894 -15.369 -15.368 S 36.526 14.941 45 14.941 c 8.474 0 15.368 6.895 15.368 15.369 S 53.474 45.678 45 45.678 z" style="stroke: none; stroke-width: 3px; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; stroke: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                        </div>
                        <div class="address-details">
                            <p class="house-and-street-address mb-2">Building  Street 2</p>
                            <p class="area mb-2">Awqadein</p>
                            <p class="city-and-country mb-0">Salalah, Oman</p>
                        </div>  
                    </div>
                    <p class="change-button">Change</p>
                </div>
                <div class="personal-details container-1 mb-4">
                    <h4 class="mb-3">Personal Details</h4>
                    <div class="details">
                        <h6 class="name">Efat Ara Min</h6>
                        <p class="email mb-0">efataramim123@gmail.com</p>
                        <p class="mb-0">+1 234 567 8901</p>
                    </div>
                </div>
                <div class="paymnet-methods-container container-1 mb-4">
                    <h4 class="mb-3">Payment Method</h4>
                    <div class="payment-methods">
                        <div class="payment-method cash-on-delivery-method mb-3">
                            <div class="radio-container">
                                <input type="radio" name="cash_on_delivery" id="cash-on-delivery" class="cash-on-delivery"> 
                                <label for="cash-on-delivery"> <img src="home/cash-on-delivery-icon.png" alt="cash on delivery icon" class="cash-on-delivery-icon"> Cash On Delivery</label>
                            </div>
                        </div>
                        <div class="payment-method card-method">
                            <div class="radio-container">
                                <input type="radio" name="card_option" id="card"> 
                                <label for="card"> 
                                    <div class="cards-options d-flex gap-4">
                                        <div class="card-option d-flex gap-2 ">
                                            <img src="home/visa-card.png" alt="">
                                            Visa
                                        </div>
                                        <div class="card-option d-flex gap-2">
                                            <img src="home/master-card.png" alt="">
                                            Master Card
                                        </div>
                                    </div>
                                   
                                </label>
                            </div>
                            <form action="">
                                <div class="one-field-row mb-3">
                                    <input type="number" name="" id="" placeholder="Card Number">
                                </div>
                                <div class="two-fields-row  d-flex gap-3 mb-3">
                                    <input type="text" name="date" id="date" placeholder="MM/YY" onclick="this.type='date'">
                                    <input type="number" name="" id="" placeholder="CVC">
                                </div>
                                <div class="one-field-row">
                                    <input type="text" name="" id="" placeholder="Name of the card holder">
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tip-to-order container-1">
                    <h3>Tip to order</h3>
                    <p>Your rider recieves 100% of the tip</p>
                    <div class="tip-options d-flex gap-2">
                        <span class="not-now option ">Not Now</span>
                        <span class="fix option active">OMI. 50.00</span>
                        <span class="fix option">OMI. 100.00</span>
                        <span class="fix option">OMI. 200.00</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="order-details-container container-1">
                    <h3>Your order from</h3>
                    <h6>Al-Wadi Beef Rice - Oasis Eats - Al-Riyadh Street, Al-Fakeh, Oman</h6>
                    <div class="items-and-prices py-3">
                        <div class="quantity-item-and-price d-flex justify-content-between mb-1">
                            <div class="quantity-and-item d-flex gap-2">
                                <span class="item-quantity">1</span>
                                <div class="multiply"> x </div>
                                <span class="item-title"> Beef Rice</span>
                            </div>
                            <span class="price">OMI. 630 </span>    
                        </div>
                        <div class="quantity-item-and-price d-flex justify-content-between mb-1">
                            <div class="quantity-and-item d-flex gap-2">
                                <span class="item-quantity">1</span>
                                <div class="multiply"> x </div>
                                <span class="item-title"> Beef Rice</span>
                            </div>
                            <span class="price">OMI. 630 </span>    
                        </div>
                        <div class="quantity-item-and-price d-flex justify-content-between mb-1">
                            <div class="quantity-and-item d-flex gap-2">
                                <span class="item-quantity">1</span>
                                <div class="multiply"> x </div>
                                <span class="item-title"> Beef Rice</span>
                            </div>
                            <span class="price">OMI. 630 </span>    
                        </div>
                        <div class="quantity-item-and-price d-flex justify-content-between mb-1">
                            <div class="quantity-and-item d-flex gap-2">
                                <span class="item-quantity">1</span>
                                <div class="multiply"> x </div>
                                <span class="item-title"> Beef Rice</span>
                            </div>
                            <span class="price">OMI. 630 </span>    
                        </div>
                    </div>
                    <div class="subtotal-price d-flex justify-content-between py-2">
                        <p class="text mb-0">Subtotal</p>
                        <p class="price mb-0">OMI. 504</p>
                    </div>
                    <div class="delivery-fee d-flex justify-content-between">
                        <p class="text mb-0">Delivery fee</p>
                        <p class="fee mb-0">Free</p>
                    </div>
                    <div class="service-fee d-flex justify-content-between">
                        <p class="text">Services fee</p>
                        <p class="fee">Free</p>
                    </div>
                    <div class="total-price d-flex justify-content-between mt-3">
                        <div class="text">
                            <h4 class="total-text mb-0">Total</h4>
                            <p class="mb-0">(Inc.tax)</p>
                        </div>
                        <div class="price">
                            <h4>OMI. 511.99</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <button class="btn btn-primary w-100 mt-3">Place Order</button>
            </div>
        </div>
    </div>
</main>

@include("components.footer")

