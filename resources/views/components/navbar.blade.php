<div class="navbar-container {{ Request::is('get-location') ? 'get-location-page-navbar-container' : '' }}">  
        <nav class="navbar navbar-expand-lg nav-1 pt-3 pb-2">
            <div class="container">
                <div class="row w-100 align-items-center">
                    <div class="col-3">   
                        <a class="navbar-brand logo-link" href="/"><img src="/home/logohome.png" alt="" class="logo"></a>
                    </div>  
                    <div class="col-9">
                        <div class="row w-100 justify-content-end">
                            @if(!Request::is('get-location') )
                            <div class="col-md-5 restaurant-search-col">
                                <div class="d-flex searchCustom restaurant-search">
                                    <form action="">
                                        <svg style="width: 20px" id="tnb-google-search-icon" viewBox="0 0 17 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.8153 10.3439C12.6061 9.2673 13.0732 7.9382 13.0732 6.5C13.0732 2.91015 10.163 0 6.57318 0C2.98333 0 0.0731812 2.91015 0.0731812 6.5C0.0731812 10.0899 2.98333 13 6.57318 13C8.01176 13 9.3412 12.5327 10.4179 11.7415L10.4171 11.7422C10.4466 11.7822 10.4794 11.8204 10.5156 11.8566L14.3661 15.7071C14.7566 16.0976 15.3898 16.0976 15.7803 15.7071C16.1708 15.3166 16.1708 14.6834 15.7803 14.2929L11.9298 10.4424C11.8936 10.4062 11.8553 10.3734 11.8153 10.3439ZM12.0732 6.5C12.0732 9.53757 9.61075 12 6.57318 12C3.53561 12 1.07318 9.53757 1.07318 6.5C1.07318 3.46243 3.53561 1 6.57318 1C9.61075 1 12.0732 3.46243 12.0732 6.5Z"
                                                fill="black"></path>
                                        </svg>
                                        <input class="form-control me-2 py-2" type="search" placeholder="Find for restaurant"
                                        aria-label="Search">
                                    </form>
                                </div>  
                            </div>
                            <div class="col-md-4 location-search-col">
                                <div class="d-flex searchCustom location-search">
                                    <form action="">
                                        <svg width="20" height="21" viewBox="0 0 18 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.75623 8.75C3.75623 7.49022 4.25667 6.28204 5.14747 5.39124C6.03827 4.50045 7.24645 4 8.50623 4C9.766 4 10.9742 4.50045 11.865 5.39124C12.7558 6.28204 13.2562 7.49022 13.2562 8.75C13.2562 10.0098 12.7558 11.218 11.865 12.1088C10.9742 12.9996 9.766 13.5 8.50623 13.5C7.24645 13.5 6.03827 12.9996 5.14747 12.1088C4.25667 11.218 3.75623 10.0098 3.75623 8.75ZM8.50623 5.5C7.64427 5.5 6.81762 5.84241 6.20813 6.4519C5.59864 7.0614 5.25623 7.88805 5.25623 8.75C5.25623 9.61195 5.59864 10.4386 6.20813 11.0481C6.81762 11.6576 7.64427 12 8.50623 12C9.36818 12 10.1948 11.6576 10.8043 11.0481C11.4138 10.4386 11.7562 9.61195 11.7562 8.75C11.7562 7.88805 11.4138 7.0614 10.8043 6.4519C10.1948 5.84241 9.36818 5.5 8.50623 5.5Z"
                                                fill="#767676" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.0302357 7.607C0.201162 5.5338 1.14546 3.60069 2.67565 2.19147C4.20584 0.782256 6.21 -6.33557e-06 8.29024 0H8.72224C10.8025 -6.33557e-06 12.8066 0.782256 14.3368 2.19147C15.867 3.60069 16.8113 5.5338 16.9822 7.607C17.1724 9.91628 16.459 12.2093 14.9922 14.003L10.1992 19.864C9.99412 20.1148 9.73582 20.317 9.44303 20.4557C9.15024 20.5945 8.83026 20.6665 8.50624 20.6665C8.18221 20.6665 7.86224 20.5945 7.56944 20.4557C7.27665 20.317 7.01836 20.1148 6.81324 19.864L2.02024 14.003C0.553352 12.2093 -0.160079 9.9163 0.0302357 7.607ZM8.29024 1.5C6.58672 1.50026 4.94557 2.14103 3.69256 3.29512C2.43954 4.44921 1.66627 6.03225 1.52624 7.73C1.36784 9.65186 1.96152 11.5602 3.18224 13.053L7.97524 18.915C8.03967 18.9939 8.12083 19.0574 8.21283 19.101C8.30484 19.1447 8.4054 19.1673 8.50724 19.1673C8.60907 19.1673 8.70963 19.1447 8.80164 19.101C8.89365 19.0574 8.9748 18.9939 9.03924 18.915L13.8322 13.053C15.0522 11.5599 15.6452 9.65159 15.4862 7.73C15.3462 6.03208 14.5728 4.4489 13.3195 3.29478C12.0663 2.14066 10.4249 1.50001 8.72124 1.5H8.29024Z"
                                                fill="#767676" />
                                        </svg>
                                        <input class="form-control me-2 py-2" type="search" placeholder="Location"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-3 col-md-4 d-flex justify-content-lg-center justify-content-end">
                                <div class="select-container ">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5 0C12.5767 0 14.6068 0.615814 16.3335 1.76957C18.0602 2.92332 19.406 4.5632 20.2007 6.48182C20.9955 8.40045 21.2034 10.5116 20.7982 12.5484C20.3931 14.5852 19.3931 16.4562 17.9246 17.9246C16.4562 19.3931 14.5852 20.3931 12.5484 20.7982C10.5116 21.2034 8.40045 20.9955 6.48182 20.2007C4.5632 19.406 2.92332 18.0602 1.76957 16.3335C0.615812 14.6068 0 12.5767 0 10.5C0.0032692 7.71623 1.11057 5.04741 3.07899 3.07899C5.04741 1.11057 7.71623 0.00326926 10.5 0ZM2.10309 6.58823H6.23926C6.68937 4.72128 7.5103 2.9639 8.65323 1.42059C7.23434 1.71217 5.90321 2.33125 4.76598 3.22845C3.62874 4.12565 2.71688 5.27616 2.10309 6.58823ZM1.23529 10.5C1.2346 11.4067 1.36745 12.3085 1.62956 13.1765H5.985C5.69125 11.4042 5.69125 9.59575 5.985 7.82353H1.62956C1.36745 8.69149 1.2346 9.59332 1.23529 10.5ZM10.5 19.7647C10.5257 19.7648 10.5511 19.7595 10.5745 19.749C10.5979 19.7386 10.6189 19.7232 10.6359 19.704C11.9618 18.2762 12.9356 16.4428 13.4853 14.4118H7.5147C8.06441 16.4428 9.03823 18.2762 10.3641 19.704C10.3811 19.7232 10.4021 19.7386 10.4255 19.749C10.4489 19.7595 10.4743 19.7648 10.5 19.7647ZM13.7622 13.1765C14.0793 11.4062 14.0793 9.59376 13.7622 7.82353H7.23779C6.92074 9.59376 6.92074 11.4062 7.23779 13.1765H13.7622ZM19.7647 10.5C19.7654 9.59332 19.6325 8.69149 19.3704 7.82353H15.015C15.3087 9.59575 15.3087 11.4042 15.015 13.1765H19.3704C19.6325 12.3085 19.7654 11.4067 19.7647 10.5ZM10.5 1.23529C10.4743 1.23515 10.4489 1.2405 10.4255 1.25097C10.4021 1.26145 10.3811 1.27681 10.3641 1.29603C9.03823 2.72382 8.06441 4.55721 7.5147 6.58823H13.4853C12.9356 4.55721 11.9618 2.72382 10.6359 1.29603C10.6189 1.27681 10.5979 1.26145 10.5745 1.25097C10.5511 1.2405 10.5257 1.23515 10.5 1.23529ZM12.3468 1.42059C13.4897 2.9639 14.3106 4.72128 14.7607 6.58823H18.8969C18.2831 5.27616 17.3713 4.12565 16.234 3.22845C15.0968 2.33125 13.7657 1.71217 12.3468 1.42059ZM18.8969 14.4118H14.7607C14.3106 16.2787 13.4897 18.0361 12.3468 19.5794C13.7657 19.2878 15.0968 18.6687 16.234 17.7715C17.3713 16.8743 18.2831 15.7238 18.8969 14.4118ZM8.65323 19.5794C7.5103 18.0361 6.68937 16.2787 6.23926 14.4118H2.10309C2.71688 15.7238 3.62874 16.8743 4.76598 17.7715C5.90321 18.6687 7.23434 19.2878 8.65323 19.5794Z"
                                            fill="black" />
                                    </svg>
                                    <select class="form-select form-select-sm"
                                        aria-label=".form-select-lg example">
                                        <option>Eng</option>
                                        <option selected>Arabic</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-around align-items-center">
                                    <div class="shopping-cart-icon-container">
                                        <svg class="shopping-cart-icon" width="15" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path
                                            d="M16.875 5.3125H13.5V4.25C13.5 3.12283 13.0259 2.04183 12.182 1.2448C11.3381 0.447767 10.1935 0 9 0C7.80653 0 6.66193 0.447767 5.81802 1.2448C4.97411 2.04183 4.5 3.12283 4.5 4.25V5.3125H1.125C0.826631 5.3125 0.540483 5.42444 0.329505 5.6237C0.118527 5.82296 0 6.09321 0 6.375V18.0625C0 18.9079 0.355579 19.7186 0.988515 20.3164C1.62145 20.9142 2.47989 21.25 3.375 21.25H14.625C15.5201 21.25 16.3786 20.9142 17.0115 20.3164C17.6444 19.7186 18 18.9079 18 18.0625V6.375C18 6.09321 17.8815 5.82296 17.6705 5.6237C17.4595 5.42444 17.1734 5.3125 16.875 5.3125ZM6.75 4.25C6.75 3.68641 6.98705 3.14591 7.40901 2.7474C7.83097 2.34888 8.40326 2.125 9 2.125C9.59674 2.125 10.169 2.34888 10.591 2.7474C11.0129 3.14591 11.25 3.68641 11.25 4.25V5.3125H6.75V4.25ZM15.75 18.0625C15.75 18.3443 15.6315 18.6145 15.4205 18.8138C15.2095 19.0131 14.9234 19.125 14.625 19.125H3.375C3.07663 19.125 2.79048 19.0131 2.5795 18.8138C2.36853 18.6145 2.25 18.3443 2.25 18.0625V7.4375H4.5V8.5C4.5 8.78179 4.61853 9.05204 4.8295 9.2513C5.04048 9.45056 5.32663 9.5625 5.625 9.5625C5.92337 9.5625 6.20952 9.45056 6.42049 9.2513C6.63147 9.05204 6.75 8.78179 6.75 8.5V7.4375H11.25V8.5C11.25 8.78179 11.3685 9.05204 11.5795 9.2513C11.7905 9.45056 12.0766 9.5625 12.375 9.5625C12.6734 9.5625 12.9595 9.45056 13.1705 9.2513C13.3815 9.05204 13.5 8.78179 13.5 8.5V7.4375H15.75V18.0625Z"
                                            fill="black" />
                                        </svg> 
                                        
                                    </div>
                                   
                                    <a href="{{ route('favourites') }}">
                                        <svg class="favourites-heart-icon ms-3" width="20" height="25" viewBox="0 0 32 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 24.3951L13.68 22.6402C5.44 16.4318 0 12.3238 0 7.31187C0 3.20393 3.872 0 8.8 0C11.584 0 14.256 1.07684 16 2.76522C17.744 1.07684 20.416 0 23.2 0C28.128 0 32 3.20393 32 7.31187C32 12.3238 26.56 16.4318 18.32 22.6402L16 24.3951Z"
                                            fill="#913737" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </nav>
        @if(!Request::is('get-location') )
        <nav class="navbar navbar-expand-lg p-lg-3 p-0 nav-2">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo Request::is('/') ? 'active' : ''; ?>" aria-current="page" href="/">
                                <img class="mb-1 me-1" src="/home/home-icon.svg" width="20px" alt="">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo Request::is('delivery') ? 'active' : ''; ?>" aria-current="page" href="{{ route("delivery")}}">
                                <img class="mb-1 me-1" src="/home/deliveryIcon.png" width="20px" alt="">Delivery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?php echo Request::is('pick-up') ? 'active' : ''; ?>" aria-current="page" href="{{ route("pick-up")}}"><img class="mb-1 me-1" src="/home/pick up.png"
                                    width="20px" alt="">Pick up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo Request::is('restaurants') ? 'active' : ''; ?>" aria-current="page" href="{{ route("restaurants")}}"><img class="mb-1 me-1" src="/home/shop.png" width="20px" alt="">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><img class="mb-1 me-1" src="/home/caterer.png" width="20px" alt="">Caterers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#"><img class="mb-1 me-1" src="/home/dine in.png" width="20px" alt="">Dine In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " aria-current="page" href="#"><img class="mb-1 me-1" src="/home/Restaurant Menu.png" width="20px" alt="">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('log-in') }}" class="btn btn-transparent login-btn for-mobile" style="padding: 10px 20px !important">Log In</a>
                            <a href="{{ route('create-an-account') }}" class="btn btn-primary signup-btn for-mobile" style="padding: 10px 20px !important">Sign Up</a>

                        </li>
                    </ul>
                </div>
                <a href="{{ route('log-in') }}" class="btn btn-transparent login-btn for-desktop" style="padding: 10px 20px !important">Log In</a>
                <a href="{{ route('create-an-account') }}" class="btn btn-primary signup-btn for-desktop" style="padding: 10px 20px !important">Sign Up</a>
            </div>
           
        </nav>
        @endif  
      
</div>

