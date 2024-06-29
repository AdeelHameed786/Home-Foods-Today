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
            <form action="#" method="post" id="create-an-account" autocomplete="off">
                <div class="two-fields-in-a-row-container mb-md-4 mb-3">
                    <div class="half-width-label-and-field field-and-label-container d-flex flex-column align-items-start gap-2 mb-md-0 mb-3">  
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control child-input" id="first-name" name="first_name" placeholder="Enter your first name">
                    </div>
                    <div class="half-width-label-and-field field-and-label-container d-flex flex-column align-items-start gap-2 mb-md-0 mb-3">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control child-input" id="last-name" name="last_name" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container d-flex flex-column align-items-start gap-2">
                        <label for="email-address">Email</label>
                        <input type="email" class="form-control child-input" id="email-address" name="email-address" placeholder="Enter your email address">
                    </div>
                </div>  
                <div class="one-field-in-a-row-container mb-md-4 mb-3">
                    <div class="full-width-label-and-field field-and-label-container d-flex flex-column align-items-start gap-2">
                        <label for="password">Password</label>
                        <div class="input-container">
                            <input type="password" class="form-control password-input-field" id="password" name="password" placeholder="Enter your password">
                            <i class="fa-regular fa-eye" data-target="password" data-action="show"></i>
                            <i class="fa-regular fa-eye-slash" data-target="password" data-action="hide"></i>
                        </div>
                    </div>
                </div>  
                <div class="one-field-in-a-row-container mb-4">
                    <div class="full-width-label-and-field field-and-label-container d-flex flex-column align-items-start gap-2">
                        <label for="confirm-password">Confirm Password</label>
                        <div class="input-container">
                            <input type="password" class="form-control password-input-field" id="confirm-password" name="confirm-password" placeholder="Enter your password again">
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
                <button type="button" id="create-an-account-button"   class="create-an-account-button btn btn-primary w-100 mt-2">Create An account</button>
                <p class="text-center mb-0 mt-4">Already have an account? <a href="{{route('log-in')}}" class="login-page-link fw-bold">Log In</a></p>               
            </form>
        </div>
    </div>

</main>

@push('script')
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
    
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "{{ config('services.firebase.apiKey') }}",
            authDomain: "{{ config('services.firebase.authDomain') }}",
            projectId: "{{ config('services.firebase.projectId') }}",
            storageBucket: "{{ config('services.firebase.storageBucket') }}",
            messagingSenderId: "{{ config('services.firebase.messagingSenderId') }}",
            appId: "{{ config('services.firebase.appId') }}"
        };      
    
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
    </script>
@endpush

@include('components.footer')

