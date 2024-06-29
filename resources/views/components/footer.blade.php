<style>
    .footer-link li{
        cursor: pointer;
    }

    .footer-link li:hover{
        color: #913737;
    }

    @media (max-width: 1000px) {
        .footer-container {
            padding-left: 10px !important;
            padding-right: 10px !important;
        }
    }
</style>    

@include('components.shopping_cart')
<footer class="footer">
    
    <div class="container footer-container">
        <hr class="top-hr">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <h4 class="column-heading logo-heading">Home Foods Today</h4>
                <ul class="footer-link">
                    <li>About us</li>
                    <li>Team</li>
                    <li>Careers</li>
                    <li>Blog</li>
                </ul>
            </div>
            <div class="col-xl-2 col-md-6">
                <h4 class="column-heading">Contact</h4>
                <ul class="footer-link">
                    <li>Help & Support</li>
                    <li>Partner with us</li>
                    <li>Ride with us</li>
                </ul>
            </div>
            <div class="col-xl-3 col-md-6">
                <h4 class="column-heading">Legal</h4>
                <ul class="footer-link">
                    <li>Terms & Conditions</li>
                    <li>Refund & Cancellation</li>
                    <li>Privacy Policy</li>
                    <li>Cookie Policy</li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-6 follow-us">
                <h4 class="column-heading">Follow Us</h4>
                <p class="text-white para">Receive exclusive offers in your mailbox</p>
                <form class="d-flex" style="padding: 0px 30px" role="search">
                    <div class="input-container">
                        <img class="search" src="/home/envelope.png" alt="">
                        <input class="form-control search-form me-2" type="email" placeholder="Enter Your email"
                            aria-label="Search">
                    </div>
                    <button class="btn btn-primary ms-2" type="submit">Subscribe</button>
                </form>
                <div class="d-flex social">
                    <a href="#"><img src="/home/instagram.png" alt=""></a>
                    <a href="#"><img src="/home/facebook.png" alt=""></a>
                    <a href="#"><img src="/home/twitter.png" alt=""></a>
                </div>
                
            </div>
            
        </div>
        <hr class="bottom-hr">
        <div class="copyright">
            <h4>© 2024 Home Foods Today. All Rights Reserved.</h4>
        </div>
    </div>
    
</footer>

{{-- jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
{{-- script.js --}}
<script src="js/script.js"></script>

@stack("script")


</body>

</html>

