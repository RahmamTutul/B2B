<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"> 
        <title>Global B2B Marketplace for Worldwide Manufacturers and Whole Suppliers | International Portal for Export</title> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/style.css')}}" media="all">  
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/rfq.css')}}" media="all"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/intlTelinput.css')}}" media="all"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/bootstrap-4.6.1/css/bootstrap.min.css')}}" media="all"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/bootstrap-4.6.1/css/bootstrap-grid.css')}}" media="all"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/fontawesome/css/all.min.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/fontawesome/css/fontawesome.min.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/flag-icon/css/flag-icons.min.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/flag-icons/css/flag-icon.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/OwlCarousel/dist/assets/owl.carousel.min.css')}}" media="all">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/OwlCarousel/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="//cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        @yield('style')
    </head>
    <body>
          
        @include('frontend.layouts.header')
        
        @yield('content')
        <!--/************************** Footer Area ****************************/--->
        @include('frontend.layouts.footer')

        <!---************************************* Sign Up ***********************************--> 

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content joinfree ">
                    <div class="modal-header mh2">
                        <h5 class="modal-title" id="exampleModalLongTitle">JOIN FREE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="signup-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <div class="col-xs-6"><input type="text" class="form-control" name="full_name" placeholder="Name" required="required"></div>       	
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6"><input type="phone" class="form-control" name="phone" placeholder="Phone" required="required"></div>       	
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="type" id="type">
                                        <option class="optioncontrol" value="buyer">Buyer</option>
                                        <option class="optioncontrol" value="supplier">Supplier</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                </div>        
                                <div class="form-group">
                                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btncolor btn-lg btn-block">Register Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!---************************************* Sign Up End ***********************************-->
        <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/frontend/js/intlTelinput.js')}}"></script>
        <script src="//cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script type="text/javascript" src="{{asset('assets/frontend/bootstrap-4.6.1/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/frontend/OwlCarousel/dist/owl.carousel.min.js')}}"></script>
         @yield('script')
        {!! Toastr::message() !!}
        <script>
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {
                        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "bd";
                        callback(countryCode);
                        });
                    },
                 utilsScript: "{{URL::asset('assets/frontend/js/utils.js')}}"
             });
         </script>
        <script>
            $(document).on("click", "[data-initial-toggle]", function(){
                var alphabet = $(this).data('initial-toggle');
                $("[data-initial]").attr("class", "d-none");
                $("[data-initial='"+alphabet+"']").attr("class", "d-inline-block");
                $("[data-initial-toggle]").removeClass('active');
                $(this).addClass('active');
            });
        </script>
        <script type="text/javascript">
            $('.owl-carousel-tabs').owlCarousel({ loop: false, margin: 5, dots: false, nav: false, lazyLoad: true, lazyLoadEager: 7, stagePadding: 60, responsive:{ 0: { items: 2 }, 600: { items: 4 }, 1000: { items: 6 } }});
        </script>

        <script type="text/javascript"> 
            $(document).ready(function(){ $('#premiumServiceCarousel').owlCarousel({ loop: true, margin: 0, nav: false, lazyLoad: true, dots: false, items: 1, autoplay: true, autoplayHoverPause: true, responsiveClass: true }); }); $(document).on("click", ".premiumServiceCarouselComponent", function(event){ var target = $(event.target); if(!target.is("a")){ window.location.href = $(this).data('route'); } }); 
        </script>

        <script> 
            $(document).ready(function(){ $("#tradeShowCarousel").owlCarousel({ items: 1, loop: true, margin: 0, nav: false, lazyLoad: true, dots: false, autoplay: true, autoplayHoverPause: true, responsiveClass: true }); }); 
        </script>

        <script type="text/javascript">
            $(document).ready(function(){ $('#featuredSuppliers').owlCarousel({ items: 1, loop: true, margin: 0, nav: false, lazyLoad: true, dots: true, autoplay: true, autoplayHoverPause: true, responsiveClass: true }); }); 
        </script>

        <script type="text/javascript"> 
            $(document).ready(function(){ $('.testimonails-slider').owlCarousel({ items: 1, loop: true, margin: 0, nav: false, lazyLoad: true, dots: true, autoplay: true, autoplayHoverPause: true, responsiveClass: true }); }); 
        </script>

        <script> $(document).ready(function(){ $("#owlAbout").owlCarousel({ items: 1, autoHeight:true }); }); </script>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }
        </script>
        <script>
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        </script>
       
    </body>
</html>