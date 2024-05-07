@include('components.header')
@include('components.navbar')

<main class="login">
    <div class="container d-flex justify-content-center">
        <div class="login-content">
            <h3 class="text-center my-4">Log In</h3>
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
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container">
                        <input type="email" class="form-control child-input" id="email-address" placeholder="Enter your email address">
                    </div>
                </div>  
                <div class="one-field-in-a-row-container mb-4">
                    <div class="full-width-label-and-field field-and-label-container">

                        <div class="input-container">
                            <input type="password" class="form-control password-input-field" id="confirmPassword" placeholder="Enter your password">
                            <i class="fa-regular fa-eye" data-target="confirmPassword" data-action="show"></i>
                            <i class="fa-regular fa-eye-slash" data-target="confirmPassword" data-action="hide"></i>
                        </div>
                    </div>
                </div>
                
              
                <button class="login-button btn btn-primary w-100 mt-2">Log In</button>
                <p class="text-center mb-0 mt-4">Don't have an account? <a href="{{route('create-an-account')}}" class="create-an-page-link fw-bold">Create an account</a></p>               
            </form>
        </div>
    </div>


       

</main>

@include('components.footer')