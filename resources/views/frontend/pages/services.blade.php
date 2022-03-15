@extends('frontend.layouts.app')

@push('style')
    
@endpush

@section('content')
    
<section class="inner-banner-leftnav">
    <div class="text-center">
        <h1>Premium Memberships <br></h1>
        <span>Unlimited Business Solutions</span>
    </div>
</section>     

<section class="premium-pricing join-free-packages">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center sec-heading d-none d-lg-block d-xl-block">
                <h3>Our Premium <span>Packages</span></h3>
                <h6>Premium Features and Ultimate Services</h6>
            </div>           
            <div class="table-responsive-lg w-100 d-none d-lg-block d-xl-block">
                <table cellpadding="0" cellspacing="0" width="100%" class="lite-table mt-3">
                    <tbody id="premiumPackageComponent">
                        <tr>
                            <td style="background:none;" rowspan="2" class="td1 td3 height border-0" width="276"></td>
                        </tr>
                        <tr>
                            <td class="height2 elite-td">
                                <a href="" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days.">
                                    <img src="{{asset("assets/frontend/img/lg_elite.svg")}}" width="138" height="44" alt="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." class="lazy" style="">
                                </a>
                            </td>
                            <td class="height2 gold-td">
                                <a href="" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days.">
                                    <img src="{{asset("assets/frontend/img/lg_gold.svg")}}" width="138" height="44" alt="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." class="lazy" style="">
                                </a>
                            </td>
                            <td class="height2 platinum-td">
                                <a href="" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days.">
                                    <img src="{{asset("assets/frontend/img/lg_platinum.svg")}}" width="138" height="44" alt="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." class="lazy" style="">
                                </a>
                            </td>
                            <td class="height2 platinum-plus-td">
                                <a href="" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days.">
                                    <img src="{{asset("assets/frontend/img/lg_platinum_plus.svg")}}" width="138" height="44" alt="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." class="lazy" style="">
                                </a>
                            </td>
                            <td class="height2 exclusive-td">
                                <a href="" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days.">
                                    <img src="{{asset("assets/frontend/img/lg_exclusive.svg")}}" width="138" height="44" alt="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." class="lazy" style="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="6">Premium Features</td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                            <td width="170">
                                Buyer Inquiries
                            </td>
                            <td width="170">
                                Verified Buyer Inquiries
                            </td>
                            <td width="170">
                                Connected Buyers
                            </td>
                            <td width="170">
                                Connected A &amp; B Grade Buyers
                            </td>
                            <td width="170">
                                Connected A Grade Buyers
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                            <td width="170">
                                10
                            </td>
                            <td width="170">
                                15
                            </td>
                            <td width="170">
                                20
                            </td>
                            <td width="170">
                                30
                            </td>
                            <td width="170">
                                50
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                Yearly
                            </td>
                            <td width="170">
                                Quarterly
                            </td>
                            <td width="170">
                                Monthly
                            </td>
                            <td width="170">
                                Weekly / Monthly
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="6">H2H (Human Assistance)</td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                Shared
                            </td>
                            <td width="170">
                                01 Hour
                            </td>
                            <td width="170">
                                02 Hours
                            </td>
                            <td width="170">
                                08 Hours
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                Yes (Brief)
                            </td>
                            <td width="170">
                                Yes (Advanced)
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="6">Digital Services</td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Professional Logo</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Professional Website</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                (5 Keywords) 1st Page Guaranteed Ranking on Google
                            </td>
                            <td width="170">
                                (10 Keywords) 1st Page Guaranteed Ranking on Google
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                Basic Marketing
                            </td>
                            <td width="170">
                                Advance Marketing
                            </td>
                            <td width="170">
                                Paid Marketing
                            </td>
                        </tr>
                        <tr>
                            <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-times text-warning"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                            <td width="170">
                                <i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="td3">Download</td>
                            <td>
                                <a href="files/elite.pdf" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." download="Eworldtrade Premium Service E-Lite.pdf" class="text-secondary text-underline">Detail Brochure</a>
                            </td>
                            <td>
                                <a href="files/gold.pdf" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." download="Eworldtrade Premium Service Gold.pdf" class="text-secondary text-underline">Detail Brochure</a>
                            </td>
                            <td>
                                <a href="files/platinum.pdf" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." download="Eworldtrade Premium Service Platinum.pdf" class="text-secondary text-underline">Detail Brochure</a>
                            </td>
                            <td>
                                <a href="files/platinum-plus.pdf" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." download="Eworldtrade Premium Service Platinum +.pdf" class="text-secondary text-underline">Detail Brochure</a>
                            </td>
                            <td>
                                <a href="files/exclusive.pdf" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." download="Eworldtrade Premium Service Exclusive.pdf" class="text-secondary text-underline">Detail Brochure</a>
                            </td>
                        </tr>
                        <tr class="price bold market">
                            <td class="td3">Annual Price</td>
                            <td><span class="mony"><font class="india-pre">USD $</font><font class="font18 premium-price">399</font></span></td>
                            <td><span class="mony"><font class="india-pre">USD $</font><font class="font18 premium-price">1499</font></span></td>
                            <td><span class="mony"><font class="india-pre">USD $</font><font class="font18 premium-price">2499</font></span></td>
                            <td><span class="mony"><font class="india-pre">USD $</font><font class="font18 premium-price">3999</font></span></td>
                            <td><span class="mony"><font class="india-pre">USD $</font><font class="font18 premium-price">7999</font></span></td>
                        </tr>
                        <tr id="premiumPackageCallToAction">
                            <td style="background:#fff;" class="td3 border-0"></td>
                            <td>
                                <a href="" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." class="lite-btn apply">Apply Now</a>
                            </td>
                            <td>
                                <a href="#" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." class="lite-btn apply">Apply Now</a>
                            </td>
                            <td>
                                <a href="#" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." class="lite-btn apply">Apply Now</a>
                            </td>
                            <td>
                                <a href="#" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." class="lite-btn apply">Apply Now</a>
                            </td>
                            <td>
                                <a href="#" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." class="lite-btn apply">Apply Now</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <section id="premiumPackageFluidComponent" class="px-3 w-100 mt-5 d-block d-sm-block d-md-block d-lg-none">
                <div class="packages-border">
                    <div class="packages-heading text-center mt-2 mb-5">
                        <h1 class="font-weight-bold">Our Premium <span>Packages</span></h1>
                        <p>Premium Features and Ultimate Services</p>
                    </div>
                    <div id="packages-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer owl-height" style="height: 0px;"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="mt-3">
                            <div class="packages-section bg-white text-center">
                                <figure class="lite-bg pt-3 pb-2 mb-0">
                                    <a href="#" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days.">
                                        <img src="{{asset("assets/frontend/img/lg_elite.svg")}}" data-src="{{asset("assets/frontend/img/lg_elite.svg")}}" width="138" height="44" alt="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." class="owl-lazy" style="opacity: 1;">
                                    </a>
                                </figure>
                                <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                                    <tbody>
                                        <tr>
                                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Premium Features</td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                                            <td>
                                                Buyer Inquiries
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                                            <td>
                                                10
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">H2H (Human Assistance)</td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                                            <td>
                                                <i class="fas fa-check text-success"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Digital Services</td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Professional Logo</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Professional Website</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                                            <td>
                                                <i class="fas fa-times text-warning"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="d-block pt-3 pb-3">
                                    <a href="files/elite.pdf" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." download="Eworldtrade Premium Service E-Lite.pdf" class="bg-none p-0 text-secondary text-underline">Download Detail Brochure</a>
                                </div>
                                <h4 class="pt-3 pb-3 mb-0 font-weight-bold">USD $<span>399</span></h4>
                                <div class="d-block pt-3 pb-3 last-child">
                                    <a href="#" title="E-Lite Premium Service. Contact More Buyer and Grow your business. In only USD 399 for 365 days." class="lite-btn apply py-2 px-5">Apply Now</a>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="owl-item">
                                <div class="mt-3">
                                    <div class="packages-section bg-white text-center">
                                        <figure class="lite-bg pt-3 pb-2 mb-0">
                                            <a href="#" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days.">
                                                <img src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="files/lg_gold.svg" width="138" height="44" alt="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." class="owl-lazy">
                                            </a>
                                        </figure>
                                        <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                                            <tbody>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Premium Features</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                                                    <td>
                                                        Verified Buyer Inquiries
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                                                    <td>
                                                        15
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                                                    <td>
                                                        Yearly
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">H2H (Human Assistance)</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                                                    <td>
                                                        Shared
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Digital Services</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Logo</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Website</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-block pt-3 pb-3">
                                            <a href="files/gold.pdf" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." download="Eworldtrade Premium Service Gold.pdf" class="bg-none p-0 text-secondary text-underline">Download Detail Brochure</a>
                                        </div>
                                        <h4 class="pt-3 pb-3 mb-0 font-weight-bold">USD $<span>1499</span></h4>
                                        <div class="d-block pt-3 pb-3 last-child">
                                            <a href="" title="Gold Premium Service. Contact More Buyer and Grow your business. In only USD 1499 for 365 days." class="lite-btn apply py-2 px-5">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="mt-3">
                                    <div class="packages-section bg-white text-center">
                                        <figure class="lite-bg pt-3 pb-2 mb-0">
                                            <a href="#" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days.">
                                                <img src="" data-src="{{asset("assets/frontend/img/lg_platinum.svg")}}" width="138" height="44" alt="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." class="owl-lazy">
                                            </a>
                                        </figure>
                                        <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                                            <tbody>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Premium Features</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                                                    <td>
                                                        Connected Buyers
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                                                    <td>
                                                        20
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                                                    <td>
                                                        Quarterly
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">H2H (Human Assistance)</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                                                    <td>
                                                        01 Hour
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Digital Services</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Logo</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Website</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                                                    <td>
                                                        <i class="fas fa-times text-warning"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                                                    <td>
                                                        Basic Marketing
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-block pt-3 pb-3">
                                            <a href="files/platinum.pdf" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." download="Eworldtrade Premium Service Platinum.pdf" class="bg-none p-0 text-secondary text-underline">Download Detail Brochure</a>
                                        </div>
                                        <h4 class="pt-3 pb-3 mb-0 font-weight-bold">USD $<span>2499</span></h4>
                                        <div class="d-block pt-3 pb-3 last-child">
                                            <a href="" title="Platinum Premium Service. Contact More Buyer and Grow your business. In only USD 2499 for 365 days." class="lite-btn apply py-2 px-5">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item">
                                <div class="mt-3">
                                    <div class="packages-section bg-white text-center">
                                        <figure class="lite-bg pt-3 pb-2 mb-0">
                                            <a href="" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days.">
                                                <img src="{{asset("assets/frontend/img/lg_platinum_plus.svg")}}" data-src="{{asset("assets/frontend/img/lg_platinum_plus.svg")}}" width="138" height="44" alt="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." class="owl-lazy">
                                            </a>
                                        </figure>
                                        <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                                            <tbody>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Premium Features</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                                                    <td>
                                                        Connected A &amp; B Grade Buyers
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                                                    <td>
                                                        30
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                                                    <td>
                                                        Monthly
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">H2H (Human Assistance)</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                                                    <td>
                                                        02 Hours
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                                                    <td>
                                                        Yes (Brief)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Digital Services</td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Logo</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Professional Website</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                                                    <td>
                                                        (5 Keywords) 1st Page Guaranteed Ranking on Google
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                                                    <td>
                                                        Advance Marketing
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                                                    <td>
                                                        <i class="fas fa-check text-success"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-block pt-3 pb-3">
                                            <a href="files/platinum-plus.pdf" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." download="Eworldtrade Premium Service Platinum +.pdf" class="bg-none p-0 text-secondary text-underline">Download Detail Brochure</a>
                                        </div>
                                        <h4 class="pt-3 pb-3 mb-0 font-weight-bold">USD $<span>3999</span></h4>
                                        <div class="d-block pt-3 pb-3 last-child">
                                            <a href="#" title="Platinum + Premium Service. Contact More Buyer and Grow your business. In only USD 3999 for 365 days." class="lite-btn apply py-2 px-5">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item"><div class="mt-3">
                                <div class="packages-section bg-white text-center">
                                    <figure class="lite-bg pt-3 pb-2 mb-0">
                                        <a href="#" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days.">
                                            <img src="" data-src="{{asset("assets/frontend/img/lg_exclusive.svg")}}" width="138" height="44" alt="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." class="owl-lazy">
                                        </a>
                                    </figure>
                                    <table cellpadding="0" cellspacing="0" width="100%" class="lite-table">
                                        <tbody><tr>
                                            <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Premium Features</td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Trusted Supplier Premium Membership Flag</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Profile Listing on B2B eWorldTrade</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Connected Buyers</td>
                                                <td>
                                                    Connected A Grade Buyers
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Showcase Product Posting</td>
                                                <td>
                                                    50
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Online Products Exposure</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Buyer's Connectivity &amp; Follow-ups</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Performance &amp; Buyer Report</td>
                                                <td>
                                                    Weekly / Monthly
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Access to Global Buyer Directory</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Unlimited Product Posting</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Buyer Alerts</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Sub Accounts</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Upload Company Certificate / Video / Brochure / Images</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">H2H (Human Assistance)</td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Customer Support Assistance</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Key Account Manager</td>
                                                <td>
                                                    08 Hours
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Email Marketing Campaign</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Extensive Product Research &amp; Analysis</td>
                                                <td>
                                                    Yes (Advanced)
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Tradeshow Facilitation</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 bold market text-center packageComponentMainHeading" colspan="2">Digital Services</td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Professional Logo</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Professional Website</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Google AdWords (SEM)</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Google Search Engine Optimization (SEO)</td>
                                                <td>
                                                    (10 Keywords) 1st Page Guaranteed Ranking on Google
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">White Board / 2D / Motion Graphic Video</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Social Media Marketing</td>
                                                <td>
                                                    Paid Marketing
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td3 packageComponentSubHeading">Logo Stationary, Brochure Designing</td>
                                                <td>
                                                    <i class="fas fa-check text-success"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-block pt-3 pb-3">
                                        <a href="files/exclusive.pdf" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." download="Eworldtrade Premium Service Exclusive.pdf" class="bg-none p-0 text-secondary text-underline">Download Detail Brochure</a>
                                    </div>
                                    <h4 class="pt-3 pb-3 mb-0 font-weight-bold">USD $<span>7999</span></h4>
                                    <div class="d-block pt-3 pb-3 last-child">
                                        <a href="#" title="Exclusive Premium Service. Contact More Buyer and Grow your business. In only USD 7999 for 365 days." class="lite-btn apply py-2 px-5">Apply Now</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button></div><div class="owl-dots disabled"></div></div>
                </div>
            </section>
        </div>
    </div>
</section>

@stop

@push('script')
    
@endpush