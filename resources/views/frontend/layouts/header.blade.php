 <!----------------------- Join today Top bar -------------------------->
 <section class="top-bar-head"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-12 d-md-flex justify-content-md-center text-center"> 
                <h6 class="mr-3">Join today and be a part of the fastest growing B2B Network</h6> 
                <a href="#">Join Now</a> 
            </div> 
        </div> 
    </div> 
</section>
<!----------------------- Top Nav Bar Premium services ------------------------->
<section class="top-quick-nav"> 
    <div class="container"> 
        <nav class="navbar navbar-expand-md navbar-light"> 
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#nav-top-left" aria-expanded="true"><span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="navbar-collapse collapse hide" id="nav-top-left"> 
                <ul class="navbar-nav left"> 
                    <li class="nav-item"> 
                        <a href="premiumservices.html" title="Premium Services"> <span><i class="fas fa-star"></i> Premium Services</span> </a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{'/buyers'}}" title="Buyers">Buyers</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{'/products'}}" title="Products">Products</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{'/companies'}}" title="Companies">Companies</a>
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{'/manufacturers'}}" title="Manufacturers">Manufacturers</a> 
                    </li> 
                </ul> 
                <ul class="navbar-nav right"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="contact.html">Contact Us</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="#">Need Help? </a> 
                    </li> 
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fi fi-us"> </span> English</a> 
                        <div class="dropdown-menu" aria-labelledby="language-dropdown"> 
                            <a class="dropdown-item" href="https://tradevaly.com.bd" title="English"> <span class="fi fi-us"> </span> English </a> 
                            <a class="dropdown-item" href="https://tradevaly.com.bd" title="Chinese"> <span class="fi fi-cn"> </span> Chinese </a> 
                        </div> 
                    </li> 
                </ul> 
            </div> 
        </nav> 
    </div>
</section>
<!---------------------------------- Main Header Menu ------------------------------------->
<header> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-3 col-xl-3 d-flex justify-content-center justify-content-md-start mb-md-0 mb-3"> 
                <a href="index.html" title="Trade Valy"> 
                    <img src="{{asset('assets/frontend/img/logo.png')}}" class="logo w-100 mt-0" alt="tradevaly"> 
                </a> 
            </div> 
            <div class="col-md-5 col-xl-6 pr-md-0"> 
                <div class="head-search"> 
                    <form method="GET" action="search" accept-charset="UTF-8" class="form-inline strip-form" id="search_details"> 
                        <input minlength="3" required="" placeholder="What are you looking for?" name="s" type="search" value=""> 
                        <select required="" name="type">
                            <option value="product" selected="selected">Products</option>
                            <option value="seller">Companies</option>
                            <option value="buyer">Buyers</option>
                        </select> 
                        <button type="submit"><i class="fa fa-search"></i></button> 
                    </form> 
                </div> 
            </div> 
            <div class="col-md-4 col-xl-3 d-flex justify-content-center justify-content-md-end mt-md-0 mt-2 header-list"> 
                <ul> 
                    <li> <i class="fas fa-user-circle"></i> <small> <a href="{{'/login'}}">Sign In</a> <sub class="headerLoginRegisterSeperator">/</sub> <a href="javascript:registerPopup('Join Free');" title="Join Free" type="button" data-toggle="modal" data-target="#exampleModalCenter">Join Free</a> </small> <span>My Account</span> </li> 
                    <li> <a href="{{url('rfq')}}"> <i class="fas fa-envelope"></i> <small>Post</small> <span>RFQ</span> </a> </li> 
                </ul> 
            </div> 
        </div> 
    </div>
</header>