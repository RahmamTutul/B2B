@extends('frontend.layouts.app')

@section('content')
     <!--------------------------- Company Overview Banner Area ------------------------------------>

     <section class="inner-banner company-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <i class="com-logo"> 
                        <img src="img/companyimg001.jpg" alt="Multiproductos Internacionales,  S.A." height="200px">
                    </i>
                    <h1>Multiproductos Internacionales,  S.A.</h1>
                    <span class="company-cat">Manufacturer</span>
                    <ul>
                        <li><i class="fi fi-gt"> </i><span>Guatemala , Guatemala</span></li>
                        <li><i class="fas fa-globe"></i><a href="www.companyweb.com" target="_blank"><span>www.companyweb.com</span></a></li>

                    </ul>
                </div>
                <figure class="col-lg-4 col-12 text-lg-right">
                    <a href="#" title="Premium Service" class="mr-3">
                        <img src="img/trusted-profile.jpg" alt="Trusted Partner Image">
                    </a>
                    <a href="#" title="Platinum">
                        <img src="img/lg_platinum.svg" alt="Service Image" class="mt-2">
                    </a>
                </figure>
            </div>
        </div>
    </section>

    <!----------------------------------Company Overview Details and Contact From Area -------------------------->

    <section class="com-details bggrey">
        <div class="container brd-white-pad">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="hd-rd-brdr hd-inner-link">Company Overview</h4>
                    <p>Mulitproductos Internacionales, S.A. was founded in 2009 and specializes in the manufacture of bulletproof vests and bulletproof clothing. We pride ourselves in our versatility to manufacture protective gear for any need. We serve government agencies, security companies and the general public with each segment´s specific protection needs. We have extensive experience in completing custom jobs and can adapt to specific customer requirements.</p>
                </div>
                <div class="col-md-4">
                    <div class="com-formsec">
                        <h2>Schedule Meeting</h2>
                        <form action="#" method="post" id="schedule-meeting">
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" name="full_name" placeholder="Name" value="">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" placeholder="Email Address" value="">
                                </div>
                                <div class="col-12">
                                    <div class="iti iti--allow-dropdown">
                                        <div class="iti__flag-container">
                                            <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="United States: +1">
                                                <div class="iti__flag iti__us">
                                                </div>
                                                <div class="iti__arrow">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="tel" name="phone_number" placeholder="Phone Number" value="" autocomplete="off" data-intl-tel-input-id="0">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <select class="form-control" required="" name="network_name">
                                        <option value="">I am available on</option>
                                        <option value="skype">Skype</option>
                                        <option value="qq">QQ</option>
                                        <option value="wechat">Wechat</option>
                                        <option value="whatsapp">Whatsapp</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" required="required" name="network_id" style="display:none;">
                                </div>
                                <div class="col-12">
                                    <input type="date" name="schedule_date" required="required" class="form-control" placeholder="Date">
                                </div>
                                <div class="input-group clockpicker col-12">
                                    <input type="text" name="schedule_time" class="form-control clockpicker" value="09:30">
                                </div>
                                <div class="col-12 mt-3">
                                    <input type="submit" value="submit" placeholder="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------- Company Products ---------------------------------->

    <section class="prd-showcase bggrey">
        <div class="container brd-white-pad">
            <h2>Product <span>Showcase</span></h2>
            <div class="Showcase-prd-tabs">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle-product="all" href="javascript:;">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle-product="high-energy-ray-medical-equipments" href="javascript:;">High-Energy-Ray Medical Equipments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle-product="face-mask" href="javascript:;">Face Mask</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle-product="470" href="javascript:;">Cosmetic Sponge</a>
                    </li>
                </ul>
            </div>
            <div class="prd-showcase-result-col bggrey">
                <div class="tab-content">
                    <div class="tab-pane active" id="all-prod">
                        <div class="prd-showcase-listing-result-row">
                            <ul>
                                <li data-json="" data-product-industry="handbags, handbags, makeup-tools, brush ">
                                    <a href="#" title="Stylish Brush Set with Storage PU Handbag">
                                        <img src="img/productc1.jpg" alt="Stylish Brush Set with Storage PU Handbag" class="lazy" data-src="img/productc1.jpg">
                                        <span style="text-align: center;">Stylish Brush Set with Storage PU Handbag</span>
                                        <span class="product-industry" style="text-align: center;">Handbags, Handbags, Makeup Tools, Brush</span>
                                    </a>
                                </li>
                                <li data-json="" data-product-industry="makeup, makeup-sets, makeup-tools, makeup-brushes, brush, pc ">
                                    <a href="#" title="10 Pcs Makeup Brush Set with High Quality PU Bag">
                                        <img src="img/productc2.jpg" alt="10 Pcs Makeup Brush Set with High Quality PU Bag" class="lazy" style="">
                                        <span style="text-align: center;">10 Pcs Makeup Brush Set with High Quality PU Bag</span>
                                        <span class="product-industry" style="text-align: center;">Makeup, Makeup Sets, Makeup Tools, Makeup Brushes, Brush, PC</span>
                                    </a>
                                </li>
                                <li data-json="" data-product-industry="makeup, makeup-sets, makeup-tools, makeup-brushes, brush, pc ">
                                    <a href="#" title="10 Pcs Makeup Brush Set with High Quality PU Bag">
                                        <img src="img/productc2.jpg" alt="10 Pcs Makeup Brush Set with High Quality PU Bag" class="lazy" style="">
                                        <span style="text-align: center;">10 Pcs Makeup Brush Set with High Quality PU Bag</span>
                                        <span class="product-industry" style="text-align: center;">Makeup, Makeup Sets, Makeup Tools, Makeup Brushes, Brush, PC</span>
                                    </a>
                                </li>
                                <li data-json="" data-product-industry="handbags, handbags, makeup-tools, brush ">
                                    <a href="#" title="Stylish Brush Set with Storage PU Handbag">
                                        <img src="img/productc1.jpg" alt="Stylish Brush Set with Storage PU Handbag" class="lazy" data-src="img/productc1.jpg">
                                        <span style="text-align: center;">Stylish Brush Set with Storage PU Handbag</span>
                                        <span class="product-industry" style="text-align: center;">Handbags, Handbags, Makeup Tools, Brush</span>
                                    </a>
                                </li>
                                <li data-json="" data-product-industry="handbags, handbags, makeup-tools, brush ">
                                    <a href="#" title="Stylish Brush Set with Storage PU Handbag">
                                        <img src="img/productc1.jpg" alt="Stylish Brush Set with Storage PU Handbag" class="lazy" data-src="img/productc1.jpg">
                                        <span style="text-align: center;">Stylish Brush Set with Storage PU Handbag</span>
                                        <span class="product-industry" style="text-align: center;">Handbags, Handbags, Makeup Tools, Brush</span>
                                    </a>
                                </li>
                                <li data-json="" data-product-industry="makeup, makeup-sets, makeup-tools, makeup-brushes, brush, pc ">
                                    <a href="#" title="10 Pcs Makeup Brush Set with High Quality PU Bag">
                                        <img src="img/productc2.jpg" alt="10 Pcs Makeup Brush Set with High Quality PU Bag" class="lazy" style="">
                                        <span style="text-align: center;">10 Pcs Makeup Brush Set with High Quality PU Bag</span>
                                        <span class="product-industry" style="text-align: center;">Makeup, Makeup Sets, Makeup Tools, Makeup Brushes, Brush, PC</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!----------------------------- Company Details Menu Tab ------------------------>

    <section class="company-about bggrey">
        <div class="container brd-white-pad">
            <div class="row">
                <div class="col-md-3">
                    <div class="company-about-tabs">
                        <h2>About Us</h2>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" title="Company Information" data-toggle="tab" href="#company-info">Company Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Video Overview" data-toggle="tab" href="#videoview">Video Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Brouchers" data-toggle="tab" href="#brouchers">Brouchers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Certificates" data-toggle="tab" href="#certificate">Certificates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Code of conduct" data-toggle="tab" href="#coc">Code of conduct</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Factory tour" data-toggle="tab" href="#fac-tour">Factory tour</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Quality Control" data-toggle="tab" href="#quality-control">Quality Control</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Research development" data-toggle="tab" href="#researchdevelopment">Research development</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" title="Service Support" 1="" href="#);">Service Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="company-about-col">
                        <div class="tab-content">
                            <div class="tab-pane active" id="company-info">
                                <div class="company-about-listing-result-row">
                                    <h2>Shenzhen Karina Makeup Tools Ltd</h2>
                                    <p></p><p>SHENZHEN KARINA MAKEUP TOOLS LTD is BSCI, Sedex and ISO9001(certification No.07614Q12035ROM), ISO14001 (07614E10647ROM) and Ethical Audit approved factory, Established on March 10, 2010 , Located in the town Guanlan Shenzhen.</p> <p> </p> <p>Main manufacturing processes:</p> <p>Bristle trimming, Bristle assembly, Assembly, Packing. </p> <p>Factory area:</p> <p>7,000 square meters, Employee number about 160 employees. </p> <p>Production capacity: </p> <p>3,000,000 pieces per month and the lead-time is about 15~45 days subject to order qty.</p><p></p>

                                    <ul>
                                        <li>Business Type: <b>Manufacturer</b></li>
                                        <li>Main Products: <b class="text-truncate">makeup accessories, makeup brush, tweezer, makeup tool</b></li>
                                        <li>Main Markets: <b>America, Europe, WorldWide</b></li>
                                        <li>Established year: <b>2010</b></li>
                                        <li>Total Annual Revenue: <b>N/A</b></li>

                                        <li>Export Percentage: <b>71% - 80%</b></li>

                                        <li>Location: <b> Shenzhen</b></li>

                                        <li>Address: <b>Building A, Lianrongda Estate, No. A Dashuitian industrial Estate ,Guanlan town, Longhua District</b></li>
                                        <li>Phone Number :
                                            <b> <span data-text-blur="">
                                                <a data-text-blur="" title="#">Membership Required</a>
                                                </span>
                                            </b>
                                        </li>

                                        <li>Country: <b>China</b></li>
                                        <li>Key Products: <b>makeup accessories, makeup brush, tweezer, makeup tool</b></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="videoview">
                                <div class="company-about-listing-result-row">
                                    <h2>Company Overview Video At a Glance</h2>
                                    <div class="">
                                        <video width="720" height="500" controls>
                                            <source src="movie.mp4" type="video/mp4">
                                            <source src="movie.ogg" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="brouchers">
                                <div class="company-about-listing-result-row">
                                    <h2>Brouchers</h2>
                                    <div class="">
                                        <ul class="row">
                                            <li class="col-sm-4 col-6 mb-3 brochure-listing">
                                                <a class="company-brochure-download-icon" href="name.pdf" download="brochure-key-18975-0-1501222448.pdf"><img src="img/pdfdownloadicon.png" alt="brochure-key-18975-0-1501222448.pdf" class="company-brochure"></a>
                                                <span>Shenzhen Karina Makeup Tools Ltd Broucher-1  </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="certificate">
                                <div class="company-about-listing-result-row">
                                    <h2>Certificate.</h2>
                                    <div class="prd-showcase-listing-result-row">
                                        <ul>
                                            <li>
                                                <img src="https://static.eworldtrade.com/v7/_eu_/uploads/company/certificate/certificate-19502-1511520858.jpg" alt="ISO14001:2004" class="company-certificate">
                                                <span>ISO14001:2004</span>
                                            </li>
                                            <li>
                                                <img src="https://static.eworldtrade.com/v7/_eu_/uploads/company/certificate/certificate-19502-1511521081.jpg" alt="ISO9001:2008" class="company-certificate">
                                                <span>ISO9001:2008</span>
                                            </li>
                                            <li>
                                                <img src="https://static.eworldtrade.com/v7/_eu_/uploads/company/certificate/certificate-19502-1511521099.jpg" alt="ISO9001:2008" class="company-certificate">
                                                <span>ISO9001:2008</span>
                                            </li>
                                            <li>
                                                <img src="https://static.eworldtrade.com/v7/_eu_/uploads/company/certificate/certificate-19502-1511521239.pdf" alt="Sedex" class="company-certificate">
                                                <span>Sedex</span>
                                            </li>
                                            <li>
                                                <img src="https://static.eworldtrade.com/v7/_eu_/uploads/company/certificate/certificate-19502-1511521344.pdf" alt="BSCI" class="company-certificate">
                                                <span>BSCI</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="coc">
                                <div class="company-about-listing-result-row">
                                    <h2>Code of Conduct</h2>
                                    <p>

                                        1, The principle of trust is that the trustee should do his
                                        duty, be careful and try his best to safeguard and strive for the interests of
                                        the company.

                                        2, The principle of property rights is the core of
                                        individual and social welfare, and is the ultimate standard to test any moral
                                        system.

                                        3, The principle of reliability, which means to be cautious
                                        when making commitments, not committed beyond their ability to do things, at
                                        the same time to earnestly fulfill the voluntary contract and voluntary
                                        commitments of other obligations.

                                        4, The principle of transparency, which is the core concept
                                        of honesty and respect for the truth, which has been regarded as the most basic
                                        moral integrity since ancient times.

                                        5, Respect for human dignity principle may be the starting
                                        point of all ethical thinking, its basic content includes the protection of
                                        health, safety, emotion and privacy, prohibition of humiliation, coercion and
                                        other violations of basic human rights behavior.

                                        6, Fairness principle is always the core of moral thought,
                                        its importance is to promote cooperation, guarantee legitimacy and ensure the
                                        survival of the group, and equal treatment is one of its core ideas.

                                        7, The most basic civic responsibility of the principle of
                                        civic responsibility is law abiding, in addition to the maintenance of
                                        "public goods", that is, common and indivisible goods, such as
                                        natural environment, public space and legitimate government.

                                        8, The response principle is willing to communicate with
                                        other parties that may be affected by the company's activities or have
                                        legitimate reasons for concern (even without such rights).</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="fac-tour">
                                <div class="company-about-listing-result-row">
                                    <h2>Factory Tour.</h2>
                                    <div class="prd-showcase-listing-result-row">
                                        <ul>
                                            <li>
                                                <img data-org="https://static.eworldtrade.com/v7/_eu_/uploads/company_images/information/factory/7/4/image-18975-t-1511439819.png" src="https://static.eworldtrade.com/v7/_eu_/uploads/company_images/information/factory/7/4/image-18975-t-1511439819.png" alt="Our Factory" class="company-factory-tour">
                                                <span>Our Factory</span>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="newsroom">
                                <div class="company-about-listing-result-row">
                                    <h2>Newsroom</h2>
                                    <div class="prd-showcase-listing-result-row">
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="quality-control">
                                <div class="company-about-listing-result-row">
                                    <h2>Quality Control</h2>
                                    <ul>
                                        <li>Technical Support: <b>Quality Control and Certificates</b></li>
                                        <li>Staff: <b class="text-truncate"></b></li>
                                        <li>Staff: <b>10 well-trained workers for QC, Owing to our outstanding high quality service and products. BSCI, Sedex 4P, ISO9001 (certification No.07614Q12035ROM), ISO14001 (07614E10647ROM) and Ethical Audit certificated supplier.</b></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="researchdevelopment">
                                <div class="company-about-listing-result-row">
                                    <h2>Research And Development</h2>
                                    <ul>
                                        <li> Total Staff :
                                            <b>15</b>
                                        </li>
                                        <li> Machinery Equipment :
                                            <b></b>
                                        </li>
                                        <li> Patent Copyrights :
                                            <b></b>
                                        </li>
                                        <li> Location :
                                            <b>Shenzhen</b>
                                        </li>
                                        <li> Awards :
                                            <b></b>
                                        </li>
                                        <li> Profile :
                                            <b></b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection