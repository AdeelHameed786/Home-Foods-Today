@include('components.header')
@include('components.navbar')

<main class="create-an-account">
    <div class="container d-flex justify-content-center">
        <div class="create-an-account-content">
            <h3 class="text-center my-4">Create An Account</h3>
            <div class="continue-with-container">
                    <div class="continue-with-google-container single-continue-with-container mb-3">
                        <p class="mb-0 d-flex justify-content align-items-center justify-content-center"><img src="home/google-icon.png" alt="">Continue with Google</p>
                    </div>
                    <div class="continue-with-facebook-container single-continue-with-container">
                        <p class="mb-0 text-white d-flex justify-content align-items-center justify-content-center"><img src="home/facebook-icon.png" alt="">Continue with Facebook</p>
                    </div>        
            </div>
            <div class="or my-4">
                OR
            </div>
            <form>
                <div class="two-fields-in-a-row-container mb-md-4 mb-3">
                    <div class="half-width-label-and-field field-and-label-container mb-md-0 mb-3">  
                        <input type="text" class="form-control child-input" id="first-name" placeholder="Enter your first name">
                    </div>
                    <div class="half-width-label-and-field field-and-label-container">
                        <input type="text" class="form-control child-input" id="last-name" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container">
                        <input type="email" class="form-control child-input" id="email-address" placeholder="Enter your email address">
                    </div>
                </div>  
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container">
                        <div class="input-container">
                            <input type="password" class="form-control password-input-field" id="password" placeholder="Enter your password">
                            <i class="fa-regular fa-eye" data-target="password" data-action="show"></i>
                            <i class="fa-regular fa-eye-slash" data-target="password" data-action="hide"></i>
                        </div>
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-4">
                    <div class="full-width-label-and-field field-and-label-container">

                        <div class="input-container">
                            <input type="password" class="form-control password-input-field" id="confirmPassword" placeholder="Enter your password again">
                            <i class="fa-regular fa-eye" data-target="confirmPassword" data-action="show"></i>
                            <i class="fa-regular fa-eye-slash" data-target="confirmPassword" data-action="hide"></i>
                        </div>
                    </div>
                </div>
                <div class="subscribe-to-our-newsletter d-flex align-items-center gap-2">
                    <input type="checkbox" name="subscribe-to-our-newsletter" id="subscribe-to-our-newsletter">
                    <label for="subscribe-to-our-newsletter" class="mb-0">Subscribe to our newsletter</label>
                </div>
                <p class="agree-para mt-3">By creating an account you agree to the <a href="#">Privacy Policy</a> and to the <a href="http://">terms of use</a></p>
                <button class="create-an-account-button btn btn-primary w-100 mt-2">Create An account</button>
                <p class="text-center mb-0 mt-4">Already have an account? <a href="{{route('log-in')}}" class="login-page-link fw-bold">Log In</a></p>               
            </form>
        </div>
    </div>


        

</main>

@include('components.footer')