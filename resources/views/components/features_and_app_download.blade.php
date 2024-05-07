{{-- <section class="features-and-app-download-section" >
    <div class="container p-md-5 py-4">
        <div class="features-container">
            <div class="row p-5 gap-lg-0 gap-3">
                <div class="col-lg-4 single-feature">
                    <div class="row d-flex flex-lg-wrap flex-nowrap justify-content-center">
                        <div class="col-lg-4 image-container">
                            <img src="/home/discount.png" alt="" class="image">
                        </div>
                        <div class="col-lg-8 d-flex align-items-center text-container">
                            <h3 class="mb-0 text" ><b>Daily <br> Discounts</b></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-feature">
                    <div class="row d-flex flex-lg-wrap flex-nowrap justify-content-center">
                        <div class="col-lg-4 image-container">
                            <img src="/home/tracking.png" alt="" class="image">
                        </div>
                        <div class="col-lg-8 d-flex align-items-center text-container">
                            <h3 class="mb-0 text" ><b>Live <br> Tracking</b></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 single-feature">
                    <div class="row d-flex flex-lg-wrap flex-nowrap justify-content-center">
                        <div class="col-lg-4 image-container">
                            <img src="/home/trackingd.png" alt="" class="image">
                        </div>
                        <div class="col-lg-8 d-flex align-items-center text-container">
                            <h3 class="mb-0 text" ><b>Quick <br> Delivery</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        <div class="app-download-container">
            <img class="w-100" src="/home/AppDownload.png" alt="">
            <div class="row content">
            
                <div style="background-color: transparent;" class="d-flex flex-column  justify-content-end">
                    <h2 style="font-size: 60px; color:#913737">Install the app</h2>
                    <p style="font-size: 18px">It's never been easier to order food. Look for the finest discounts and you'll be lost in a world of delectable food.</p> 
                    <div class="download-buttons">
                        <img src="home/google-play-download-imge.png" alt="">    
                        <img src="home/apple-store-download-image.png" alt="">    
                    </div>  
                </div>
            </div>
        </div>
</section> --}}

@section('script') 
    <script>
        function adjustWidths() {
            // Get all text containers
            const textContainers = document.querySelectorAll('.features-and-app-download-section .single-feature .text-container');
            let maxWidth = 0;

            // Find the maximum width
            textContainers.forEach(container => {
                const width = container.offsetWidth;
                if (width > maxWidth) {
                    maxWidth = width;
                }
            });

            // Set all text containers to the maximum width
            textContainers.forEach(container => {
                container.style.width = maxWidth + 1 + 'px';
            });
            console.log(maxWidth);
        }

        
        if (window.innerWidth < 991) {
            window.addEventListener('load', adjustWidths);
        }
        // Check widths on page load

        // Check widths on window resize
        window.addEventListener('resize', function() {
            // Check if window width is less than 1200px
            if (window.innerWidth < 991) {
                adjustWidths();
            }
        });
    </script>
@endsection