@extends('frontend.layouts.app')
@push('style')
    
@endpush
@section('content')
    
@endsection
 <!--/*********************Banner *********************************************** -->

 <section class="contact-us-page contact-us-banner">
    <div class="container">
        <img src="{{asset("assets/frontend/img/contact_banner.jpg")}}" class="width-100 lazy" alt="Contact Us" style="">
    </div>
</section>


<!-- ******************** Contact From and Bannder *********************************-->

<section class="bg-white services-contact contact-bg mb-4 mt-md-5">
    <div class="container">
        <div class="row">
            <figure class="col-md-5 mb-0 d-md-block d-none mt-5">
                <img src="{{asset("assets/frontend/img/contactbg.png ")}}" alt="Get In Touch Banner" class="lazy mt-4" style="">
            </figure>
            <div class="col-md-7">
                <h5>Get In Touch!</h5>
                <div class="separator">
                    <span></span>
                </div>
                <p>Email us with any question or inquiries. We would be happy to answer your questions and setup a meeting with you. Let us know your feedback so that we can do our best to serve you.</p>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <ul>
                            <li><strong>Call</strong></li>
                            <li><a href="tel:+123456789" class="text-danger">+123 456 789</a></li>
                            <li><a href="tel:+123456789" class="text-danger">+123 456 789</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4 mt-3 mt-md-0 mt-lg-0 mt-xl-0">
                        <ul>
                            <li><strong>Email</strong></li>
                            <li><a href="mailto:care@tradevaly.com.bd" class="text-danger">care@tradevaly.com.bd</a></li>
                            <li><a href="mailto:support@tradevaly.com.bd" class="text-danger">support@tradevaly.com.bd</a></li>

                        </ul>
                    </div>
                </div>

                <div class="alert alert-success alert-dismissible fade d-none" role="alert" id="contactResponse">
                    <strong>Enquiry Submitted!</strong> Our team will contact you shortly!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="contact-form">
                    <div class="form-wrapper">
                        <form method="POST" action="https://www.tradevaly.com.bd/contact-us/" accept-charset="UTF-8" name="contactform" class="validate-form" id="contactForm" novalidate="novalidate"><input name="_token" type="hidden" value="WTcr4TSnU6pBvlvRfA1cGiSPwVKJgg1drEYp7iKS">
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <label for="First Name">First Name</label>
                                    <input class="head-field form-control" required="" placeholder="Please enter your first name" autocomplete="fname" name="first_name" type="text" aria-required="true">
                                </div>
                                <div class="col-sm-6">
                                    <label for="Last Name">Last Name</label>
                                    <input class="head-field form-control" required="" placeholder="Please enter your last name" autocomplete="lname" name="last_name" type="text" aria-required="true">
                                </div>
                                <div class="col-sm-6">
                                    <label for="E-mail">E-mail</label>
                                    <input class="head-field form-control" required="" placeholder="Please enter your email address" autocomplete="email" name="email" type="email" aria-required="true">
                                </div>
                                <div class="col-sm-6">
                                    <label for="IM (SKYPE /QQ)">IM (SKYPE / QQ / WeChat / Whatsapp)</label>
                                    <input class="head-field" required="" placeholder="Please enter your username" autocomplete="username" name="messenger_id" type="text" aria-required="true">
                                </div>
                                <div class="col-sm-6">
                                    <label for="Company Name / Website">Company Name / Website</label>
                                    <input class="head-field" required="" placeholder="Please enter your company name or website" autocomplete="organization" name="company_name" type="text" aria-required="true">
                                </div>
                                <div class="col-sm-6">
                                    <label for="Phone">Phone</label>
                                    <div class="iti iti--allow-dropdown">
                                        <div class="iti__flag-container">
                                            <div class="iti__selected-flag" role="combobox" aria-owns="country-listbox" tabindex="0" title="Curaçao: +599">
                                                <div class="iti__flag iti__cw"></div>
                                                <div class="iti__arrow"></div>
                                            </div>
                                        </div>
                                        <input class="head-field error" required="" placeholder="Please enter your phone or mobile number" id="phoneNumber" autocomplete="off" name="phone" type="tel" data-intl-tel-input-id="0" aria-required="true" title="" data-original-title="Please enter at least 6 characters." aria-invalid="true">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="Message">Message</label>
                                    <textarea class="head-field" required="" placeholder="Please enter your Enquiry" rows="3" name="message" cols="50" aria-required="true"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <div class="g-recaptcha" data-sitekey="">
                                        <div style="width: 304px; height: 78px;">
                                            <div>
                                                <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE&amp;co=aHR0cHM6Ly93d3cuZXdvcmxkdHJhZGUuY29tOjQ0Mw..&amp;hl=en&amp;v=BycHQdSIhzR_1EcOLw2mOzYQ&amp;size=normal&amp;cb=3fmdv4htz8k2" width="304" height="78" role="presentation" name="a-jgrz607ar6h2" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div>
                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div>
                                        <iframe style="display: none;"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center mt-3 ">
                                    <input type="submit" value="Submit" class="submit mt-0">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')
    
@endpush