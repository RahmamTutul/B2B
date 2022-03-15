@extends('frontend.layouts.app')

@push('css')
    
@endpush

@section('content')
<section class="buyers-listing-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <section class="quote-now bg-white productQuoteRegister mt-0 mb-4">
                    <h6>
                        Tell Us What You <span>NEED</span>
                    </h6>
                    <form method="POST" name="quoteForm" action="https://www.tradevaly.com.bd/user/basic-signup-n/" novalidate="novalidate">
                        <div class="form-row mt-3">
                            <div class="col-sm-12">
                                <label>Requirements</label>
                                <input type="text" name="products_want" class="form-control" placeholder="Enter product/service name" title="Comma seperated keywords" autocomplete="off" required="" aria-required="true">
                            </div> 
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <label>Name</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name" title="Please enter your Full Name here" autocomplete="name" required="" aria-required="true">
                            </div> 
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="name@company.com" title="Please enter your Email Address here" autocomplete="email" required="" aria-required="true">
                            </div> 
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <label>Company</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name" title="Please enter your Company Name here" autocomplete="organization" required="" aria-required="true">
                            </div> 
                            <div class="col-lg-6 col-md-12 col-sm-6">
                                <label>Phone Number</label>
                                <div class="iti iti--allow-dropdown"><div class="iti__flag-container"><div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Bangladesh (বাংলাদেশ): +880"><div class="iti__flag iti__bd"></div><div class="iti__arrow"></div></div></div><input type="tel" name="phone_number" class="form-control tel" placeholder="Phone / Mobile" title="Please enter your Phone or Mobile Number here" minlength="6" maxlength="30" required="" autocomplete="off" data-intl-tel-input-id="0" aria-required="true"></div>
                            </div> 
                            <div class="col-md-12">
                                <label>I am a</label>
                                <select class="form-control" name="type" required="" aria-required="true">
                                    <option value="seller">Seller</option>
                                    <option value="buyer" selected="">Buyer</option>
                                </select>
                            </div>
                            <div class="col-12 form-p-0 text-center">
                                <button type="submit" class="btn btn-outline-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </section>

                <div class="filter-leftbar mt-2">
                    <div class="fiter-by-country-lft">
                        <h6>Country <a href="https://www.tradev aly.com.bd/countries/">- View All -</a></h6>
                        <ul>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=22">
                                    <i class="fi fi-bd"> </i>
                                    <span class="buyer-country-name">Bangladesh</span>
                                    <span class="buyer-country-count">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=43">
                                    <i class="fi fi-cn"> </i>
                                    <span class="buyer-country-name">China</span>
                                    <span class="buyer-country-count">(30)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=59">
                                    <i class="fi fi-de"> </i>
                                    <span class="buyer-country-name">Germany</span>
                                    <span class="buyer-country-count">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=96">
                                    <i class="fi fi-hk"> </i>
                                    <span class="buyer-country-name">Hong Kong</span>
                                    <span class="buyer-country-count">(2)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=104">
                                    <i class="fi fi-in"> </i>
                                    <span class="buyer-country-name">India</span>
                                    <span class="buyer-country-count">(5)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=110">
                                    <i class="fi fi-il"> </i>
                                    <span class="buyer-country-name">Israel</span>
                                    <span class="buyer-country-count">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=164">
                                    <i class="fi fi-ng"> </i>
                                    <span class="buyer-country-name">Nigeria</span>
                                    <span class="buyer-country-count">(1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=173">
                                    <i class="fi fi-pk"> </i>
                                    <span class="buyer-country-name">Pakistan</span>
                                    <span class="buyer-country-count">(13)</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tradevaly.com.bd/search?type=product&amp;s=tshirt&amp;country_id=226">
                                    <i class="fi fi-tr"> </i>
                                    <span class="buyer-country-name">Turkey</span>
                                    <span class="buyer-country-count">(1)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--- ************** Result Tab ***************************************-->

            <div class="col-md-9">
                <h3 class="hd-show-result">Showing <span>509+</span> Products below</h3>
                <div class="buyer-listing-tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="https://www.tradevaly.com.bd/search?type=buyer&amp;s=tshirt">Buying Leads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.tradevaly.com.bd/search?type=seller&amp;s=tshirt">Companies</a>
                        </li>
                    </ul>
                </div>                    
                <div class="buyer-listing-result-col">
                    <div class="tab-content">
                        <div class="tab-pane container active" id="companies-tabs">
                            <div class="buyer-listing-result-row buyer-tab-company company-sec">
                                <span class="buyer-listing-result-date"><i class="icon-date-ic"></i> 15 Feb, 2022</span>
                                <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" data-detail-link="" data-event-type="Buyer Offer" title="Tshirt inquiry"><h5>Tshirt inquiry</h5></a>
                                <p>I am looking for quality tshirts <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" title="Tshirt inquiry">Show More...</a></p>
                                <ul class="buyer-listing-info buyers-info offer-detail-visible">
                                    <li>
                                        <i class="far fa-building"></i>
                                        <label>Company Name:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-address-card"></i>
                                        <label>Contact Number:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        <label>Purchaser:</label>
                                        <span class="text-truncate">Angelin Irena</span>
                                    </li>
                                </ul>
                                <div class="buyer-listing-action offer-action">
                                    <a href="https://www.tradevaly.com.bd/indonesia/" title="Indonesia">
                                        <i class="fi fi-id"></i>
                                    </a>    
                                    <a href="https://www.tradevaly.com.bd/premium-services/free?cmp=corona" title="Free">
                                        <img src="{{asset("assets/frontend/img/lg_free.svg")}}" width="112" height="34" alt="Free" class="lazy" style="">
                                    </a>
                                    <a href="javascript:registerPopup('Quote Now');" class="buyer-listing-btn">Contact Now</a>
                                </div>
                            </div>
                            
                            <div class="buyer-listing-result-row buyer-tab-company company-sec">
                                <span class="buyer-listing-result-date"><i class="icon-date-ic"></i> 15 Feb, 2022</span>
                                <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" data-detail-link="" data-event-type="Buyer Offer" title="Tshirt inquiry"><h5>Tshirt inquiry</h5></a>
                                <p>I am looking for quality tshirts <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" title="Tshirt inquiry">Show More...</a></p>
                                <ul class="buyer-listing-info buyers-info offer-detail-visible">
                                    <li>
                                        <i class="far fa-building"></i>
                                        <label>Company Name:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-address-card"></i>
                                        <label>Contact Number:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        <label>Purchaser:</label>
                                        <span class="text-truncate">Angelin Irena</span>
                                    </li>
                                </ul>
                                <div class="buyer-listing-action offer-action">
                                    <a href="https://www.tradevaly.com.bd/indonesia/" title="Indonesia">
                                        <i class="fi fi-id"></i>
                                    </a>    
                                    <a href="https://www.tradevaly.com.bd/premium-services/free?cmp=corona" title="Free">
                                        <img src="{{asset("assets/frontend/img/lg_free.svg")}}" width="112" height="34" alt="Free" class="lazy" style="">
                                    </a>
                                    <a href="javascript:registerPopup('Quote Now');" class="buyer-listing-btn">Contact Now</a>
                                </div>
                            </div>
                            
                            <div class="buyer-listing-result-row buyer-tab-company company-sec">
                                <span class="buyer-listing-result-date"><i class="icon-date-ic"></i> 15 Feb, 2022</span>
                                <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" data-detail-link="" data-event-type="Buyer Offer" title="Tshirt inquiry"><h5>Tshirt inquiry</h5></a>
                                <p>I am looking for quality tshirts <a href="https://www.tradevaly.com.bd/importers/tshirt-inquiry/703160/" title="Tshirt inquiry">Show More...</a></p>
                                <ul class="buyer-listing-info buyers-info offer-detail-visible">
                                    <li>
                                        <i class="far fa-building"></i>
                                        <label>Company Name:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-address-card"></i>
                                        <label>Contact Number:</label>
                                        <span data-text-blur="">
                                            <a href="javascript:registerPopup('Membership Required');">Membership Required</a>
                                        </span>
                                    </li>
                                    <li>
                                        <i class="far fa-user"></i>
                                        <label>Purchaser:</label>
                                        <span class="text-truncate">Angelin Irena</span>
                                    </li>
                                </ul>
                                <div class="buyer-listing-action offer-action">
                                    <a href="https://www.tradevaly.com.bd/indonesia/" title="Indonesia">
                                        <i class="fi fi-id"></i>
                                    </a>    
                                    <a href="https://www.tradevaly.com.bd/premium-services/free?cmp=corona" title="Free">
                                        <img src="{{asset("assets/frontend/img/lg_free.svg")}}" width="112" height="34" alt="Free" class="lazy" style="">
                                    </a>
                                    <a href="javascript:registerPopup('Quote Now');" class="buyer-listing-btn">Contact Now</a>
                                </div>
                            </div>
                            <div class="tab-pagination-col">
                                <ul>
                                    <li class="ttl-num-page">Page 1 of 26</li>
                                    <li class="active-pagination"><a href="javascript:;">1</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=2" rel="next">2</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=3" rel="next">3</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=4" rel="next">4</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=5" rel="next">5</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=6" rel="next">6</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=7" rel="next">7</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=8" rel="next">8</a></li>
                                    <li class="disabled"><a href="javascript:;">...</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=25" rel="next">25</a></li>
                                    <li><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=26" rel="next">26</a></li>
                                    <li class="pagintion-prev disabled"><a href="javascript:;">Prev</a></li>
                                    <li class="pagintion-next"><a href="https://www.tradevaly.com.bd/search/?s=tshirt&amp;type=product&amp;page=2" rel="next">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="inner-banner-leftnav company-join-banner mt-3">
                    <div class="mx-auto w-75">
                        <h4>Haven’t found the right supplier yet? Let matching verified suppliers find you.</h4>
                        <a href="postrfq.html" class="btn btn-sm btn-danger">Get Quotation Now</a>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@stop

@push('script')
    
@endpush