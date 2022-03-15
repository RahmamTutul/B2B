@extends('frontend.layouts.app')
@push('css')
    
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="main-container">
            <h2 class="c-heading main-heading multi-heading">Tell suppliers <span>what you need</span></h2>

            <div class="col-xs-12 col-sm-12 col-md-8 left-container fleft">
                <h4 class="c-heading heading-rfq">Complete Your RFQ</h4>
                <h6 class="sub-heading">The more specific information, the more accurately we can match your request to the right supplier.</h6>
                <div class="form-container">
                    <form method="POST" action="{{route('rfq')}}" accept-charset="UTF-8" id="rfq-form" class="uploader" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input class="form-control p-track" placeholder="Industry name *" id="buyoffer_name" name="industry_name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control p-track" placeholder="Tell us what you want to buy *" id="want_buy" name="want_buy" type="text">
                        </div>

                        <div class="form-group">
                            <input class="form-control p-track" placeholder="Keywords" id="keywords" name="keywords" type="text">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control rfq-txt p-track" id="buyoffer_description" name="details" cols="50" rows="10"></textarea>
                        </div>

                        <div class="form-group l-r-forms">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8 fleft">
                                <input class="form-control p-track" placeholder="Enter Quantity Required *" id="quantity" name="qty" type="text">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 fleft">
                                <select class="form-control p-track" id="quantity_unit" name="unit">
                                    <option value="" selected="selected">Select Unit *</option>
                                      @foreach ($units as $key=>$unit)
                                          {!! $unit !!}
                                      @endforeach
                                </select>
                            </div>
                        </div>                                    
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <select class="form-control p-track" id="frequency" name="frequency">
                                @foreach ($validities as $item)
                                    {!!$item!!}
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="file-upload-container" style="max-width: 230px;">
                                <input id="file-upload" class="p-track" type="file" name="image">
                                <label for="file-upload" id="file-drag">
                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div>Select a image or drag here</div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <p id="file-upload-btn" class="btn btn-primary btn-file-upload-p">
                                            <span class="upload-btn-icon">+</span>

                                            <span 
                                            class="upload-btn-text">Upload Attachment</span></p>
                                    </div>
                                    <div id="response" class="hidden">
                                        <div id="messages"></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                        <h4 class="c-heading heading-rfq" style="margin-bottom: 15px;">Provide your contact details</h4>
                        <div class="form-group l-r-l-forms" style="margin-bottom: 40px">
                            <div class="col-xs-12 col-sm-4 fleft">
                                <input class="form-control p-track" placeholder="Enter Name *" id="full_name" name="name" type="text">
                            </div>
                            <div class="col-xs-12 col-sm-4 fleft">
                                <input class="form-control p-track" placeholder="Enter Email *" id="user_email" name="email" type="email">
                            </div>
                            <div class="col-xs-12 col-sm-4 fleft">
                                <input class="form-control p-track" placeholder="Enter Phone Number *" id="user_phone" required="" name="number" type="text">               
                            </div>
                        </div>


                        <h4 class="c-heading heading-rfq">Other Requirements</h4>

                        <div class="form-group">
                            <label>Preffered Payment Methods:</label>
                            <div class="control-group">

                                <label for="pm1" class="control control--checkbox pm-checkbox">T/T
                                    <input class="form-control field p-track" id="pm1" data-parent="payment_id" name="p_methods[]" type="checkbox" value="T/T">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm2" class="control control--checkbox pm-checkbox">L/C
                                    <input class="form-control field p-track" id="pm2" data-parent="payment_id" name="p_methods[]" type="checkbox" value="L/C">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm3" class="control control--checkbox pm-checkbox">D/A
                                    <input class="form-control field p-track" id="pm3" data-parent="payment_id" name="p_methods[]" type="checkbox" value="D/A">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm4" class="control control--checkbox pm-checkbox">D/P
                                    <input class="form-control field p-track" id="pm4" data-parent="payment_id" name="p_methods[]" type="checkbox" value="D/P">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm5" class="control control--checkbox pm-checkbox">Western Union
                                    <input class="form-control field p-track" id="pm5" data-parent="payment_id" name="p_methods[]" type="checkbox" value="Western Union" >
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm6" class="control control--checkbox pm-checkbox">Money Gram
                                    <input class="form-control field p-track" id="pm6" data-parent="payment_id" name="p_methods[]" type="checkbox" value="Money Gram" >
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm7" class="control control--checkbox pm-checkbox">PayPal
                                    <input class="form-control field p-track" id="pm7" data-parent="payment_id" name="p_methods[]" type="checkbox" value="PayPal" >
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm10" class="control control--checkbox pm-checkbox">Other
                                    <input class="form-control field p-track" id="pm10" data-parent="payment_id" name="p_methods[]" type="checkbox" value="Other" >
                                    <div class="control__indicator"></div>
                                </label>

                            </div>
                        </div>

                        <div class="form-group l-r-forms">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fleft">
                                <input class="form-control p-track" placeholder="Enter destination port" id="port" name="port" type="text">    
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fleft">
                                <select class="form-control p-track" id="validit" name="validity" required>
                                    @foreach ($freqs as $freq)
                                        {!! $freq !!}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <div class="control-group">
                                <label for="terms-condition" class="control control--checkbox">I have read, agreed to abide by <span class="terms-condition-label">Terms and Conditions of RFQ</span>
                                    <input class="form-control field " id="terms-condition" name="t_c" type="checkbox" value="1" required>
                                    <div class="control__indicator"></div>
                                </label>

                                <p class="error hidden" id="terms_condition_label" style="color: #cf0015;">Please accept our terms and conditions</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE&amp;co=aHR0cHM6Ly93d3cuZXdvcmxkdHJhZGUuY29tOjQ0Mw..&amp;hl=en&amp;v=BycHQdSIhzR_1EcOLw2mOzYQ&amp;size=normal&amp;cb=kc7gss6xzc5h" width="304" height="78" role="presentation" name="a-e63l805keyd2" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            <input type="hidden" name="csfkfacaptchposted" value="1" required>
                        </div>   
                        <button type="submit" class="btn btn-post-rfq">Post RFQ</button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 right-container fleft">
                <nav class="progressbar_nav navbar affix-top" data-spy="affix" data-offset-top="197" style="border-radius:0">
                    <h2 class="c-heading main-heading multi-heading heading-progress">Quality of RFQ</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                    </div>
                </nav>

                <div class="form-group" style="margin-top: 20px;">
                    <label id="industry_id_label" class="label_notification">
                        Please select industry
                    </label>
                </div>

                <div class="form-group" style="margin-top: 25px;">
                    <label id="name_label" class="label_notification">
                        Please enter title of Buy Offer
                    </label>
                </div>

                <div class="form-group">
                    <label id="keywords_label" class="label_notification">
                        Please enter comma seperated keywords. <br> example: shoes,clothes,eyewear etc
                    </label>
                </div>

                <div class="form-group" style="margin-top: 90px;">
                    <label id="description_label" class="label_notification">
                        Please let suppliers know your detailed requirements. You may include: color, size, material, grade/standard, etc
                    </label>
                </div>



                <div class="form-group" style="margin-top: 104px;margin-bottom: 10px;">
                    <label id="quantity_label" class="label_notification">
                        Please enter required quantity and select proper unit
                    </label>
                </div>

                <div class="form-group">
                    <label id="frequency_label" class="label_notification">
                        Please enter buying frequency
                    </label>
                </div>

                <div class="form-group" style="margin-top: 115px;">
                    <label id="file_label" class="label_notification">
                        Attachment like product pictures/images would improve your RFQ
                    </label>
                </div>

            </div>

        </div>
    </div>
</div>
@stop

@push('script')
    
@endpush