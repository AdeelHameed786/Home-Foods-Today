@include('components.header')
@include('components.navbar')

<main class="profile-page">
    <div class="container d-flex justify-content-center">
        <div class="profile-content">
            <h3 class="text-center mt-md-4 mt-3 mb-5">Profile</h3>
            <form>
                <div class="two-fields-in-a-row-container mb-md-4 mb-0">
                    <div class="half-width-label-and-field field-and-label-container flex-column align-items-start gap-2 mb-md-0 mb-3">  
                        <label for="first-name"><b>First Name</b></label>
                        <input type="text" class="form-control child-input" id="first-name" placeholder="Efat">
                    </div>
                    <div class="half-width-label-and-field field-and-label-container flex-column align-items-start gap-2 mb-md-0 mb-3">
                        <label for="last-name"><b>Last Name</b></label>
                        <input type="text" class="form-control child-input" id="last-name" placeholder="Ara Mim">
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container flex-column align-items-start gap-2">
                        <label for="email-address"><b>Email Address</b></label>
                        <input type="email" class="form-control child-input" id="email-address" placeholder="efat@gmail.com">
                    </div>
                </div>  
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container flex-column align-items-start gap-2">
                        <label for="password"><b>Password</b></label>
                        <div class="input-container">
                            <input type="type" class="form-control password-input-field" id="password" placeholder="homefoodstoday123">
                        </div>
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container flex-column align-items-start gap-2">
                        <label for="password"><b>Contact Number</b></label>
                        <div class="input-container">
                            <input type="tel" class="form-control password-input-field" id="password" placeholder="+968 91 234 567">
                        </div>
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container flex-column align-items-start gap-2">
                        <label for="password"><b>House Address</b></label>
                        <div class="input-container">
                            <input type="tel" class="form-control password-input-field" id="password" placeholder="House # 123 Al Hail Street">
                        </div>
                    </div>
                </div>
                <div class="two-fields-in-a-row-container mb-md-4 mb-0">
                    <div class="half-width-label-and-field field-and-label-container flex-column align-items-start gap-2 mb-md-0 mb-3">  
                        <label for="city"><b>City</b></label>
                        <input type="text" class="form-control child-input" id="city" placeholder="Salalah">
                    </div>
                    <div class="half-width-label-and-field field-and-label-container flex-column align-items-start gap-2 mb-md-0 mb-3">
                        <label for="state"><b>State</b></label>
                        <input type="text" class="form-control child-input" id="state" placeholder="Dhofar Governorate of Oman">
                    </div>
                </div>
                <div class="selected-payment-methods-container mb-md-4 mb-3">
                    <div class="row">
                        <label><b>My payment methods</b></label>
                        <div class="selected-payment-methods mt-2">
                            <p class="mb-0">You have no saved payment options yet.</p>
                        </div>
                    </div>
                </div>
                <div class="notification-container mb-md-4 mb-3">
                    <div class="row">
                        <label><b>Notification</b></label>
                        <div class="notification d-flex justify-content-between mt-2">
                            <p class="mb-0">Push Notification</p>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="connected-accounts-container mb-md-4 mb-3">
                    <div class="row">
                        <label><b>Connected Accounts</b></label>
                        <div class="connected-accounts mt-3">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 mb-md-0 mb-2 d-flex px-2">
                                    <div class="single-account">
                                        <div class="icon"><img src="home/facebook-rounded-icon.png" alt=""></div>
                                        <div class="account-name-and-connection-status">
                                            <p class="account-name mb-1">Facebook</p>
                                            <p class="connection-status connected mb-0">Connected</p>
                                        </div>
                                        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="cross-icon" height="12px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 mb-md-0 mb-2 d-flex px-2">
                                    <div class="single-account">
                                        <div class="icon"><img src="home/google-icon.png" alt=""></div>
                                        <div class="account-name-and-connection-status">
                                            <p class="account-name mb-1">Google</p>
                                            <p class="connection-status connected mb-0">Connected</p>
                                        </div>
                                        <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg class="cross-icon" height="12px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="12px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 d-flex px-2">
                                    <div class="single-account">
                                        <div class="icon"><img src="home/apple-icon.png" alt=""></div>
                                        <div class="account-name-and-connection-status">
                                            <p class="account-name mb-1">Apple</p>
                                            <p class="connection-status not-connected mb-0">Not connected <span>Connect?</span>
                                            </p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="save-btn btn btn-primary hover-non-transparent px-5 mt-2">Save</button>            
            </form>
        </div>
    </div>
</main>

@include('components.footer')