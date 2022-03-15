@section('content')
<div class="container">
    <header class="header-logo">
        <a href="index.html" class="logo" title="TradeValy"><img width="240" src="{{asset("assets/frontend/img/logo.png")}}" alt="TradeValy"></a>
    </header>
    <div class="row">
        <div class="main-container">
            <h2 class="c-heading main-heading multi-heading">Tell suppliers <span>what you need</span></h2>

            <div class="col-xs-12 col-sm-12 col-md-8 left-container fleft">
                <h4 class="c-heading heading-rfq">Complete Your RFQ</h4>
                <h6 class="sub-heading">The more specific information, the more accurately we can match your request to the right supplier.</h6>
                <div class="form-container">
                    <form method="POST" action="https://www.tradevaly.com.bd/user/rfq/submit/" accept-charset="UTF-8" id="rfq-form" class="uploader" enctype="multipart/form-data"><input name="_token" type="hidden" value="WTcr4TSnU6pBvlvRfA1cGiSPwVKJgg1drEYp7iKS">
                        <div class="form-group">


                            <input type="text" name="industry_name" id="industry_name" class="search_industry form-control p-track" placeholder="Please Select Industry *" autocomplete="off">
                            <input type="hidden" name="industry_id" id="industry_id" value="">
                            <div id="search_suggestions" class="searcharea" style="display: none">
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="form-control p-track" placeholder="Tell us what you want to buy *" id="buyoffer_name" name="name" type="text">
                        </div>

                        <div class="form-group">
                            <input class="form-control p-track" placeholder="Keywords" id="keywords" name="keywords" type="text">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control rfq-txt p-track" id="buyoffer_description" name="description" cols="50" rows="10"></textarea>
                        </div>

                        <div class="form-group l-r-forms">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-8 fleft">
                                <input class="form-control p-track" placeholder="Enter Quantity Required *" id="quantity" name="quantity" type="text">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 fleft">
                                <select class="form-control p-track" id="quantity_unit" name="quantity_unit">
                                    <option value="" selected="selected">Select Unit *</option>
                                    <option value="Acre">Acre</option><option value="Ampere">Ampere</option>
                                    <option value="Bag">Bag</option>
                                    <option value="Barrel">Barrel</option>
                                    <option value="Box">Box</option>
                                    <option value="Bushel">Bushel</option>
                                    <option value="Carton">Carton</option>
                                    <option value="Case">Case</option>
                                    <option value="Centimeter">Centimeter</option>
                                    <option value="Chain">Chain</option>
                                    <option value="Cubic Centimeter">Cubic Centimeter</option>
                                    <option value="Cubic Foot">Cubic Foot</option>
                                    <option value="Cubic Inch">Cubic Inch</option>
                                    <option value="Cubic Meter">Cubic Meter</option>
                                    <option value="Cubic Yard">Cubic Yard</option>
                                    <option value="DEGREES Celsius">DEGREES Celsius</option>
                                    <option value="Degrees Fahrenheit">Degrees Fahrenheit</option>
                                    <option value="Dozen">Dozen</option>
                                    <option value="Dram">Dram</option>
                                    <option value="Fluid Ounce">Fluid Ounce</option>
                                    <option value="Foot">Foot</option>
                                    <option value="Forty-Foot Container ">Forty-Foot Container </option>
                                    <option value="Furlong">Furlong</option>
                                    <option value="Gallon">Gallon</option>
                                    <option value="Gill">Gill</option>
                                    <option value="Grain">Grain</option>
                                    <option value="Gram">Gram</option>
                                    <option value="Gross">Gross</option>
                                    <option value="Hectare">Hectare</option>
                                    <option value="Hertz">Hertz</option>
                                    <option value="Inch">Inch</option>
                                    <option value="Kiloampere">Kiloampere</option>
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Kilohertz">Kilohertz</option>
                                    <option value="Kilometer">Kilometer</option>
                                    <option value="Kiloohm">Kiloohm</option>
                                    <option value="Kilovolt">Kilovolt</option>
                                    <option value="Kilowatt">Kilowatt</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Long Ton">Long Ton</option>
                                    <option value="Megahertz">Megahertz</option>
                                    <option value="Meter">Meter</option>
                                    <option value="Metric Ton">Metric Ton</option>
                                    <option value="Mile">Mile</option>
                                    <option value="Milliampere">Milliampere</option>
                                    <option value="Milligram">Milligram</option>
                                    <option value="Millihertz">Millihertz</option>
                                    <option value="Milliliter">Milliliter</option>
                                    <option value="Millimeter">Millimeter</option>
                                    <option value="Milliohm">Milliohm</option>
                                    <option value="Millivolt">Millivolt</option>
                                    <option value="Milliwatt">Milliwatt</option>
                                    <option value="Nautical Mile">Nautical Mile</option>
                                    <option value="Ohm">Ohm</option>
                                    <option value="Ounce">Ounce</option>
                                    <option value="Pack">Pack</option>
                                    <option value="Pallet">Pallet</option>
                                    <option value="Pair">Pair</option>
                                    <option value="Parcel">Parcel</option>
                                    <option value="Perch">Perch</option>
                                    <option value="Piece">Piece</option>
                                    <option value="Pint">Pint</option>
                                    <option value="Plant">Plant</option>
                                    <option value="Pole">Pole</option>
                                    <option value="Pound">Pound</option>
                                    <option value="Quart">Quart</option>
                                    <option value="Quarter">Quarter</option>
                                    <option value="Rod">Rod</option>
                                    <option value="Roll">Roll</option>
                                    <option value="Set">Set</option>
                                    <option value="Sheet">Sheet</option>
                                    <option value="Short Ton">Short Ton</option>
                                    <option value="Square Centimeter">Square Centimeter</option>
                                    <option value="Square Foot">Square Foot</option>
                                    <option value="Square Inch">Square Inch</option>
                                    <option value="Square Meter">Square Meter</option>
                                    <option value="Square Mile">Square Mile</option>
                                    <option value="Square Yard">Square Yard</option>
                                    <option value="Stone">Stone</option>
                                    <option value="Strand">Strand</option>
                                    <option value="Ton">Ton</option>
                                    <option value="Tonne">Tonne</option>
                                    <option value="Tray">Tray</option>
                                    <option value="Twenty-Foot Container">Twenty-Foot Container</option>
                                    <option value="Unit">Unit</option>
                                    <option value="Volt">Volt</option>
                                    <option value="Watt">Watt</option>
                                    <option value="Wp">Wp</option>
                                    <option value="Yard">Yard</option>
                                </select>
                            </div>
                        </div>                                    
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <select class="form-control p-track" id="frequency" name="frequency">
                                <option value="0">Select Buying Frequency *</option>
                                <option value="One time">One time</option>
                                <option value="Daily">Daily</option>
                                <option value="Weekly">Weekly</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Quarterly">Quarterly</option>
                                <option value="Semi Annually">Semi Annually</option>
                                <option value="Annually">Annually</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="file-upload-container" style="max-width: 230px;">
                                <input id="file-upload" class="p-track" type="file" name="fileUpload">
                                <label for="file-upload" id="file-drag">
                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div>Select a file or drag here</div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <p id="file-upload-btn" class="btn btn-primary btn-file-upload-p">
                                            <span class="upload-btn-icon">+</span>
                                            <span class="upload-btn-text">Upload Attachment</span></p>
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
                                <input class="form-control p-track" placeholder="Enter Name *" id="full_name" name="full_name" type="text">
                            </div>
                            <div class="col-xs-12 col-sm-4 fleft">
                                <input class="form-control p-track" placeholder="Enter Email *" id="user_email" name="email" type="email">
                            </div>
                            <div class="col-xs-12 col-sm-4 fleft">
                                <input class="form-control p-track" placeholder="Enter Phone Number *" id="user_phone" required="" name="phone_number" type="text">               
                            </div>
                        </div>


                        <h4 class="c-heading heading-rfq">Other Requirements</h4>

                        <div class="form-group">
                            <label>Preffered Payment Methods:</label>
                            <div class="control-group">

                                <label for="pm1" class="control control--checkbox pm-checkbox">T/T
                                    <input class="form-control field p-track" id="pm1" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="T/T">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm2" class="control control--checkbox pm-checkbox">L/C
                                    <input class="form-control field p-track" id="pm2" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="L/C">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm3" class="control control--checkbox pm-checkbox">D/A
                                    <input class="form-control field p-track" id="pm3" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="D/A">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm4" class="control control--checkbox pm-checkbox">D/P
                                    <input class="form-control field p-track" id="pm4" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="D/P">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm5" class="control control--checkbox pm-checkbox">Western Union
                                    <input class="form-control field p-track" id="pm5" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="Western Union">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm6" class="control control--checkbox pm-checkbox">Money Gram
                                    <input class="form-control field p-track" id="pm6" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="Money Gram">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm7" class="control control--checkbox pm-checkbox">PayPal
                                    <input class="form-control field p-track" id="pm7" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="PayPal">
                                    <div class="control__indicator"></div>
                                </label>

                                <label for="pm10" class="control control--checkbox pm-checkbox">Other
                                    <input class="form-control field p-track" id="pm10" data-parent="payment_id" name="payment_ids[]" type="checkbox" value="Other">
                                    <div class="control__indicator"></div>
                                </label>

                            </div>
                        </div>

                        <div class="form-group l-r-forms">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fleft">
                                <input class="form-control p-track" placeholder="Enter destination port" id="port" name="port" type="text">    
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 fleft">
                                <select class="form-control p-track" id="validit" name="validity">
                                    <option value="0">Select Time of Validity</option>
                                    <option value="1-w">1 Week</option>
                                    <option value="2-w">2 Weeks</option>
                                    <option value="3-w">3 Weeks</option>
                                    <option value="1-m">1 Month</option>
                                    <option value="2-m">2 Months</option>
                                    <option value="3-m">3 Months</option>
                                    <option value="4-m">4 Months</option>
                                    <option value="5-m">5 Months</option>
                                    <option value="6-m">6 Months</option>
                                    <option value="1-y">1 Year</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="form-group">
                            <div class="control-group">
                                <label for="terms-condition" class="control control--checkbox">I have read, agreed to abide by <span class="terms-condition-label">Terms and Conditions of RFQ</span>
                                    <input class="form-control field " id="terms-condition" name="agree_terms" type="checkbox" value="yes">
                                    <div class="control__indicator"></div>
                                </label>

                                <p class="error hidden" id="terms_condition_label" style="color: #cf0015;">Please accept our terms and conditions</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Le7mqwZAAAAABUcYfWI4kz6BKS4SztfyeQ6LkyE&amp;co=aHR0cHM6Ly93d3cuZXdvcmxkdHJhZGUuY29tOjQ0Mw..&amp;hl=en&amp;v=BycHQdSIhzR_1EcOLw2mOzYQ&amp;size=normal&amp;cb=kc7gss6xzc5h" width="304" height="78" role="presentation" name="a-e63l805keyd2" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            <input type="hidden" name="csfkfacaptchposted" value="1">
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
@endsection

@push('script')
    
@endpush