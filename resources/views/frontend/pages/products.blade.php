@extends('frontend.layouts.app')

@section('content')
div class="bread">
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Manufacturers and Suppliers Directory</li>
    </ol>
</div>
</div>


<!------------------ Banner Area -------------------------------------->

<section class="inner-banner representative-banner" style="background-image: url('{{asset("assets/frontend/product-banner-2.jpg")}}'); background-position: top center;background-size: cover;">
<div class="container">
    <h1>Manufacturers &amp; Suppliers Directory</h1>
    <p class="top_banner_content">eWorldTrade welcomes buyers from all over the world to its comprehensive marketplace, a wholesale center for buyers to connect with suppliers, manufacturers, and wholesalers from around the globe.</p>
</div>
</section>



<!--------------------------------- All Category----------------------------------->
<section class="mt-4">
<div class="container">
    <div class="prod-content-des mb-4 cont-box all-categ">
        <h4 class="hd-rd-brdr">All Categories</h4>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Minerals &amp; Metallurgy" href="https://tradevaly.com.bd/minerals-metallurgy/"><img src="{{asset("assets/frontend/img/minerals-metallurgy.png")}}" class="lazy" alt="Minerals &amp; Metallurgy" title="Minerals &amp; Metallurgy" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Minerals &amp; Metallurgy" href="https://tradevaly.com.bd/minerals-metallurgy/">Minerals</a></h5>
                        <h6><a href="https://tradevaly.com.bd/minerals-metallurgy/wire-mesh/" title="Wire Mesh">Wire Mesh</a></h6>
                        <h6><a href="https://tradevaly.com.bd/minerals-metallurgy/aluminum/" title="Aluminum">Aluminum</a></h6>
                        <h6><a href="https://tradevaly.com.bd/minerals-metallurgy/titanium/" title="Titanium">Titanium</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Chemicals" href="https://tradevaly.com.bd/chemicals/"><img src="{{asset("assets/frontend/img/chemicals.png")}}" class="lazy" alt="Chemicals" title="Chemicals" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Chemicals" href="https://tradevaly.com.bd/chemicals/">Chemicals</a></h5>
                        <h6><a href="https://tradevaly.com.bd/chemicals/paints-coatings/" title="Paints Coatings">Paints Coatings</a></h6>
                        <h6><a href="https://tradevaly.com.bd/chemicals/fertilizer/" title="Fertilizer">Fertilizer</a></h6>
                        <h6><a href="https://tradevaly.com.bd/chemicals/basic-organic-chemicals/" title="Basic Organic Chemicals">Basic Organic</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Beauty &amp; Personal Care" href="https://tradevaly.com.bd/beauty-personal-care/"><img src="{{asset("assets/frontend/img/beauty-personal-care.png")}}" class="lazy" alt="Beauty &amp; Personal Care" title="Beauty &amp; Personal Care" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Beauty &amp; Personal Care" href="https://tradevaly.com.bd/beauty-personal-care/">Beauty &amp; Personal</a></h5>
                        <h6><a href="https://tradevaly.com.bd/beauty-personal-care/baby-care/" title="Baby Care">Baby Care</a></h6>
                        <h6><a href="https://tradevaly.com.bd/beauty-personal-care/hair-extensions-wigs/" title="Hair Extensions Wigs">Hair Extensions</a></h6>
                        <h6><a href="https://tradevaly.com.bd/beauty-personal-care/makeup-tools/" title="Makeup Tools">Makeup Tools</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Security &amp; Protection" href="https://tradevaly.com.bd/security-protection/"><img src="{{asset("assets/frontend/img/security-protection.png")}}" class="lazy" alt="Security &amp; Protection" title="Security &amp; Protection" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Security &amp; Protection" href="https://tradevaly.com.bd/security-protection/">Security</a></h5>
                        <h6><a href="https://tradevaly.com.bd/security-protection/police-military-supplies/" title="Police Military Supplies">Police Military</a></h6>
                        <h6><a href="https://tradevaly.com.bd/security-protection/cctv-products/" title="CCTV Products">CCTV Products</a></h6>
                        <h6><a href="https://tradevaly.com.bd/security-protection/workplace-safety-supplies/" title="Workplace Safety Supplies">Workplace Safety</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Luggage, Bags &amp; Cases" href="https://tradevaly.com.bd/luggage-bags-cases/"><img src="{{asset("assets/frontend/img/luggage-bags-cases.png")}}" class="lazy" alt="Luggage, Bags &amp; Cases" title="Luggage, Bags &amp; Cases" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Luggage, Bags &amp; Cases" href="https://tradevaly.com.bd/luggage-bags-cases/">Luggage, Bags</a></h5>
                        <h6><a href="https://tradevaly.com.bd/luggage-bags-cases/bag-luggage-making-materials/" title="Bag Luggage Making Materials">Bag Luggage Making</a></h6>
                        <h6><a href="https://tradevaly.com.bd/luggage-bags-cases/bag-parts-accessories/" title="Bag Parts Accessories">Bag Parts</a></h6>
                        <h6><a href="https://tradevaly.com.bd/luggage-bags-cases/business-bags-cases/" title="Business Bags Cases">Business Bags Cases</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Machinery" href="https://tradevaly.com.bd/machinery/"><img src="{{asset("assets/frontend/img/machinery.png")}}" class="lazy" alt="Machinery" title="Machinery" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Machinery" href="https://tradevaly.com.bd/machinery/">Machinery</a></h5>
                        <h6><a href="https://tradevaly.com.bd/machinery/energy-mineral-equipment/" title="Energy Mineral Equipment">Energy Mineral</a></h6>
                        <h6><a href="https://tradevaly.com.bd/machinery/engineering-construction-machinery/" title="Engineering Construction Machinery">Engineering</a></h6>
                        <h6><a href="https://tradevaly.com.bd/machinery/food-beverage-machinery/" title="Food Beverage Machinery">Food Beverage</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Toys &amp; Hobbies" href="https://tradevaly.com.bd/toys-hobbies/"><img src="{{asset("assets/frontend/img/toys-hobbies.png")}}" class="lazy" alt="Toys &amp; Hobbies" title="Toys &amp; Hobbies" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Toys &amp; Hobbies" href="https://tradevaly.com.bd/toys-hobbies/">Toys &amp; Hobbies</a></h5>
                        <h6><a href="https://tradevaly.com.bd/toys-hobbies/drones/" title="Drone">Drone</a></h6>
                        <h6><a href="https://tradevaly.com.bd/toys-hobbies/action-figure/" title="Action Figure">Action Figure</a></h6>
                        <h6><a href="https://tradevaly.com.bd/toys-hobbies/baby-toys/" title="Baby Toys">Baby Toys</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Furniture" href="https://tradevaly.com.bd/furniture/"><img src="{{asset("assets/frontend/img/furniture.png")}}" class="lazy" alt="Furniture" title="Furniture" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Furniture" href="https://tradevaly.com.bd/furniture/">Furniture</a></h5>
                        <h6><a href="https://tradevaly.com.bd/furniture/antique-furniture/" title="Antique Furniture">Antique Furniture</a></h6>
                        <h6><a href="https://tradevaly.com.bd/furniture/baby-furniture/" title="Baby Furniture">Baby Furniture</a></h6>
                        <h6><a href="https://tradevaly.com.bd/furniture/bamboo-furniture/" title="Bamboo Furniture">Bamboo Furniture</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Food &amp; Beverage" href="https://tradevaly.com.bd/food-beverage/"><img src="{{asset("assets/frontend/img/food-beverage.png")}}" class="lazy" alt="Food &amp; Beverage" title="Food &amp; Beverage" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Food &amp; Beverage" href="https://tradevaly.com.bd/food-beverage/">Food &amp; Beverage</a></h5>
                        <h6><a href="https://tradevaly.com.bd/food-beverage/canned-food/" title="Canned Food">Canned Food</a></h6>
                        <h6><a href="https://tradevaly.com.bd/food-beverage/honey-products/" title="Honey Products">Honey Products</a></h6>
                        <h6><a href="https://tradevaly.com.bd/food-beverage/other-food-beverage/" title="Other Food Beverage">Other Food Beverage</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Packaging &amp; Printing" href="https://tradevaly.com.bd/packaging-printing/"><img src="{{asset("assets/frontend/img/packaging-printing.png")}}" class="lazy" alt="Packaging &amp; Printing" title="Packaging &amp; Printing" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Packaging &amp; Printing" href="https://tradevaly.com.bd/packaging-printing/">Packaging</a></h5>
                        <h6><a href="https://tradevaly.com.bd/packaging-printing/adhesive-tape/" title="Adhesive Tape">Adhesive Tape</a></h6>
                        <h6><a href="https://tradevaly.com.bd/packaging-printing/agricultural-packaging/" title="Agricultural Packaging">Agricultural</a></h6>
                        <h6><a href="https://tradevaly.com.bd/packaging-printing/aluminum-foil/" title="Aluminum Foil">Aluminum Foil</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Rubber &amp; Plastics" href="https://tradevaly.com.bd/rubber-plastics/"><img src="{{asset("assets/frontend/img/rubber-plastics.png")}}" class="lazy" alt="Rubber &amp; Plastics" title="Rubber &amp; Plastics" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Rubber &amp; Plastics" href="https://tradevaly.com.bd/rubber-plastics/">Rubber &amp; Plastics</a></h5>
                        <h6><a href="https://tradevaly.com.bd/rubber-plastics/plastic-processing-service/" title="Plastic Processing Service">Plastic Processing</a></h6>
                        <h6><a href="https://tradevaly.com.bd/rubber-plastics/plastic-products/" title="Plastic Products">Plastic Products</a></h6>
                        <h6><a href="https://tradevaly.com.bd/rubber-plastics/plastic-projects/" title="Plastic Projects">Plastic Projects</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Home Appliances" href="https://tradevaly.com.bd/home-appliance/"><img src="{{asset("assets/frontend/img/home-appliance.png")}}" class="lazy" alt="Home Appliances" title="Home Appliances" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Home Appliances" href="https://tradevaly.com.bd/home-appliance/">Home Appliances</a></h5>
                        <h6><a href="https://tradevaly.com.bd/home-appliance/vacuum-cleaners/" title="Vacuum Cleaners">Vacuum Cleaners</a></h6>
                        <h6><a href="https://tradevaly.com.bd/home-appliance/solar-water-heaters/" title="Solar Water Heaters">Solar Water Heaters</a></h6>
                        <h6><a href="https://tradevaly.com.bd/home-appliance/cooking-appliances/" title="Cooking Appliances">Cooking Appliances</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Home &amp; Garden" href="https://tradevaly.com.bd/home-garden/"><img src="{{asset("assets/frontend/img/home-garden.png")}}" class="lazy" alt="Home &amp; Garden" title="Home &amp; Garden" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Home &amp; Garden" href="https://tradevaly.com.bd/home-garden/">Home &amp; Garden</a></h5>
                        <h6><a href="https://tradevaly.com.bd/home-garden/cooking-tools/" title="Cooking Tools">Cooking Tools</a></h6>
                        <h6><a href="https://tradevaly.com.bd/home-garden/garden-supplies/" title="Garden Supplies">Garden Supplies</a></h6>
                        <h6><a href="https://tradevaly.com.bd/home-garden/household-chemicals/" title="Household Chemicals">Household Chemicals</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Agriculture" href="https://tradevaly.com.bd/agriculture/"><img src="{{asset("assets/frontend/img/agriculture.png")}}" class="lazy" alt="Agriculture" title="Agriculture" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Agriculture" href="https://tradevaly.com.bd/agriculture/">Agriculture</a></h5>
                        <h6><a href="https://tradevaly.com.bd/agriculture/agricultural-growing-media/" title="Agricultural Growing Media">Agricultural Media</a></h6>
                        <h6><a href="https://tradevaly.com.bd/agriculture/agricultural-waste/" title="Agricultural Waste">Agricultural Waste</a></h6>
                        <h6><a href="https://tradevaly.com.bd/agriculture/animal-products/" title="Animal Products">Animal Products</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Measurement &amp; Analysis Instruments" href="https://tradevaly.com.bd/measurement-analysis-instruments/"><img src="{{asset("assets/frontend/img/measurement-analysis-instruments.png")}}" class="lazy" alt="Measurement &amp; Analysis Instruments" title="Measurement &amp; Analysis Instruments" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Measurement &amp; Analysis Instruments" href="https://tradevaly.com.bd/measurement-analysis-instruments/">Measurement</a></h5>
                        <h6><a href="https://tradevaly.com.bd/measurement-analysis-instruments/analyzers/" title="Analyzers">Analyzers</a></h6>
                        <h6><a href="https://tradevaly.com.bd/measurement-analysis-instruments/counters/" title="Counters">Counters</a></h6>
                        <h6><a href="https://tradevaly.com.bd/measurement-analysis-instruments/electrical-instruments/" title="Electrical Instruments">Electrical</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Construction &amp; Real Estate" href="https://tradevaly.com.bd/construction-real-estate/"><img src="{{asset("assets/frontend/img/construction-real-estate.png")}}" class="lazy" alt="Construction &amp; Real Estate" title="Construction &amp; Real Estate" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Construction &amp; Real Estate" href="https://tradevaly.com.bd/construction-real-estate/">Construction &amp; Real</a></h5>
                        <h6><a href="https://tradevaly.com.bd/construction-real-estate/aluminum-composite-panels/" title="Aluminum Composite Panels">Aluminum Composite</a></h6>
                        <h6><a href="https://tradevaly.com.bd/construction-real-estate/balustrades-handrails/" title="Balustrades Handrails">Balustrades</a></h6>
                        <h6><a href="https://tradevaly.com.bd/construction-real-estate/bathroom/" title="Bathroom">Bathroom</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Environment" href="https://tradevaly.com.bd/environment/"><img src="{{asset("assets/frontend/img/environment.png")}}" class="lazy" alt="Environment" title="Environment" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Environment" href="https://tradevaly.com.bd/environment/">Environment</a></h5>
                        <h6><a href="https://tradevaly.com.bd/environment/gas-disposal/" title="Gas Disposal">Gas Disposal</a></h6>
                        <h6><a href="https://tradevaly.com.bd/environment/noise-reduction-device/" title="Noise Reduction Device">Noise Reduction</a></h6>
                        <h6><a href="https://tradevaly.com.bd/environment/other-environmental-products/" title="Other Environmental Products">Other Environmental</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Gifts &amp; Crafts" href="https://tradevaly.com.bd/gifts-crafts/"><img src="{{asset("assets/frontend/img/gifts-crafts.png")}}" class="lazy" alt="Gifts &amp; Crafts" title="Gifts &amp; Crafts" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Gifts &amp; Crafts" href="https://tradevaly.com.bd/gifts-crafts/">Gifts &amp; Crafts</a></h5>
                        <h6><a href="https://tradevaly.com.bd/gifts-crafts/antique-imitation-crafts/" title="Antique Imitation Crafts">Antique Imitation</a></h6>
                        <h6><a href="https://tradevaly.com.bd/gifts-crafts/art-collectible/" title="Art Collectible">Art Collectible</a></h6>
                        <h6><a href="https://tradevaly.com.bd/gifts-crafts/artificial-crafts/" title="Artificial Crafts">Artificial Crafts</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Consumer Electronic" href="https://tradevaly.com.bd/consumer-electronic/"><img src="{{asset("assets/frontend/img/consumer-electronic.png")}}" class="lazy" alt="Consumer Electronic" title="Consumer Electronic" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Consumer Electronic" href="https://tradevaly.com.bd/consumer-electronic/">Consumer Electronic</a></h5>
                        <h6><a href="https://tradevaly.com.bd/consumer-electronic/accessories-parts/" title="Accessories Parts">Accessories Parts</a></h6>
                        <h6><a href="https://tradevaly.com.bd/consumer-electronic/camera-photo-accessories/" title="Camera Photo Accessories">Camera Photo</a></h6>
                        <h6><a href="https://tradevaly.com.bd/consumer-electronic/electronic-publications/" title="Electronic Publications">Electronic</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Textile &amp; Leather Product" href="https://tradevaly.com.bd/textile-leather-product/"><img src="{{asset("assets/frontend/img/textile-leather-product.png")}}" class="lazy" alt="Textile &amp; Leather Product" title="Textile &amp; Leather Product" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Textile &amp; Leather Product" href="https://tradevaly.com.bd/textile-leather-product/">Textile &amp; Leather</a></h5>
                        <h6><a href="https://tradevaly.com.bd/textile-leather-product/down-feather/" title="Down Feather">Down Feather</a></h6>
                        <h6><a href="https://tradevaly.com.bd/textile-leather-product/fabric/" title="Fabric">Fabric</a></h6>
                        <h6><a href="https://tradevaly.com.bd/textile-leather-product/fiber/" title="Fiber">Fiber</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Business Services" href="https://tradevaly.com.bd/business-services/"><img src="{{asset("assets/frontend/img/business-services.png")}}" class="lazy" alt="Business Services" title="Business Services" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Business Services" href="https://tradevaly.com.bd/business-services/">Business Services</a></h5>
                        <h6><a href="https://tradevaly.com.bd/business-services/advertising/" title="Advertising">Advertising</a></h6>
                        <h6><a href="https://tradevaly.com.bd/business-services/agency-services/" title="Agency Services">Agency Services</a></h6>
                        <h6><a href="https://tradevaly.com.bd/business-services/assurance-services/" title="Assurance Services">Assurance Services</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Timepieces, Jewelry &amp; Eyewear" href="https://tradevaly.com.bd/timepieces-jewelry-eyewear/"><img src="{{asset("assets/frontend/img/timepieces-jewelry-eyewear.png")}}" class="lazy" alt="Timepieces, Jewelry &amp; Eyewear" title="Timepieces, Jewelry &amp; Eyewear" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Timepieces, Jewelry &amp; Eyewear" href="https://tradevaly.com.bd/timepieces-jewelry-eyewear/">Timepieces, Jewelry</a></h5>
                        <h6><a href="https://tradevaly.com.bd/timepieces-jewelry-eyewear/eyewear/" title="Eyewear">Eyewear</a></h6>
                        <h6><a href="https://tradevaly.com.bd/timepieces-jewelry-eyewear/jewelry/" title="Jewelry">Jewelry</a></h6>
                        <h6><a href="https://tradevaly.com.bd/timepieces-jewelry-eyewear/watches/" title="Watches">Watches</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Transportation" href="https://tradevaly.com.bd/transportation/"><img src="{{asset("assets/frontend/img/transportation.png")}}" class="lazy" alt="Transportation" title="Transportation" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Transportation" href="https://tradevaly.com.bd/transportation/">Transportation</a></h5>
                        <h6><a href="https://tradevaly.com.bd/transportation/aircraft/" title="Aircraft">Aircraft</a></h6>
                        <h6><a href="https://tradevaly.com.bd/transportation/aviation-accessories/" title="Aviation Accessories">Aviation</a></h6>
                        <h6><a href="https://tradevaly.com.bd/transportation/aviation-parts/" title="Aviation Parts">Aviation Parts</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Service Equipment" href="https://tradevaly.com.bd/service-equipment/"><img src="{{asset("assets/frontend/img/service-equipment.png")}}" class="lazy" alt="Service Equipment" title="Service Equipment" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Service Equipment" href="https://tradevaly.com.bd/service-equipment/">Service Equipment</a></h5>
                        <h6><a href="https://tradevaly.com.bd/service-equipment/advertising-equipment/" title="Advertising Equipment">Advertising</a></h6>
                        <h6><a href="https://tradevaly.com.bd/service-equipment/cargo-storage-equipment/" title="Cargo Storage Equipment">Cargo Storage</a></h6>
                        <h6><a href="https://tradevaly.com.bd/service-equipment/commercial-laundry-equipment/" title="Commercial Laundry Equipment">Commercial Laundry</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Telecommunication" href="https://tradevaly.com.bd/telecommunication/"><img src="{{asset("assets/frontend/img/telecommunication.png")}}" class="lazy" alt="Telecommunication" title="Telecommunication" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Telecommunication" href="https://tradevaly.com.bd/telecommunication/">Telecommunication</a></h5>
                        <h6><a href="https://tradevaly.com.bd/telecommunication/antennas-for-communications/" title="Antennas for Communications">Antennas for</a></h6>
                        <h6><a href="https://tradevaly.com.bd/telecommunication/communication-equipment/" title="Communication Equipment">Communication</a></h6>
                        <h6><a href="https://tradevaly.com.bd/telecommunication/telephones-accessories/" title="Telephones Accessories">Telephones</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Computer Hardware &amp; Software" href="https://tradevaly.com.bd/computer-hardware-software/"><img src="{{asset("assets/frontend/img/computer-hardware-software.png")}}" class="lazy" alt="Computer Hardware &amp; Software" title="Computer Hardware &amp; Software" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Computer Hardware &amp; Software" href="https://tradevaly.com.bd/computer-hardware-software/">Computer Hardware</a></h5>
                        <h6><a href="https://tradevaly.com.bd/computer-hardware-software/all-in-one-pc/" title="All-In-One PC">All-In-One PC</a></h6>
                        <h6><a href="https://tradevaly.com.bd/computer-hardware-software/barebone-system/" title="Barebone System">Barebone System</a></h6>
                        <h6><a href="https://tradevaly.com.bd/computer-hardware-software/blank-media/" title="Blank Media">Blank Media</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Apparel" href="https://tradevaly.com.bd/apparel/"><img src="{{asset("assets/frontend/img/apparel.png")}}" class="lazy" alt="Apparel" title="Apparel" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Apparel" href="https://tradevaly.com.bd/apparel/">Apparel</a></h5>
                        <h6><a href="https://tradevaly.com.bd/apparel/stage-dance-wear/" title="Stage Dance Wear">Stage Dance Wear</a></h6>
                        <h6><a href="https://tradevaly.com.bd/apparel/suits-tuxedo/" title="Suits Tuxedo">Suits Tuxedo</a></h6>
                        <h6><a href="https://tradevaly.com.bd/apparel/sweaters/" title="Sweaters">Sweaters</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Sports &amp; Entertainment" href="https://tradevaly.com.bd/sports-entertainment/"><img src="{{asset("assets/frontend/img/sports-entertainment.png")}}" class="lazy" alt="Sports &amp; Entertainment" title="Sports &amp; Entertainment" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Sports &amp; Entertainment" href="https://tradevaly.com.bd/sports-entertainment/">Sports</a></h5>
                        <h6><a href="https://tradevaly.com.bd/sports-entertainment/gym-equipment/" title="Gym Equipment">Gym Equipment</a></h6>
                        <h6><a href="https://tradevaly.com.bd/sports-entertainment/swimming-diving/" title="Swimming Diving">Swimming Diving</a></h6>
                        <h6><a href="https://tradevaly.com.bd/sports-entertainment/amusement-park/" title="Amusement Park">Amusement Park</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Automobiles &nbsp;&amp; Motorcycles" href="https://tradevaly.com.bd/automobiles-motorcycles/"><img src="{{asset("assets/frontend/img/automobiles-motorcycles.png")}}" class="lazy" alt="Automobiles &nbsp;&amp; Motorcycles" title="Automobiles &nbsp;&amp; Motorcycles" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Automobiles &nbsp;&amp; Motorcycles" href="https://tradevaly.com.bd/automobiles-motorcycles/">Automobiles &nbsp;</a></h5>
                        <h6><a href="https://tradevaly.com.bd/automobiles-motorcycles/motorcycle-parts/" title="Motorcycle Parts">Motorcycle Parts</a></h6>
                        <h6><a href="https://tradevaly.com.bd/automobiles-motorcycles/motorcycles/" title="Motorcycles">Motorcycles</a></h6>
                        <h6><a href="https://tradevaly.com.bd/automobiles-motorcycles/other-auto-parts/" title="Other Auto Parts">Other Auto Parts</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Tools" href="https://tradevaly.com.bd/tools/"><img src="{{asset("assets/frontend/img/tools.png")}}" class="lazy" alt="Tools" title="Tools" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Tools" href="https://tradevaly.com.bd/tools/">Tools</a></h5>
                        <h6><a href="https://tradevaly.com.bd/tools/construction-tools/" title="Construction Tools">Construction Tools</a></h6>
                        <h6><a href="https://tradevaly.com.bd/tools/garden-tools/" title="Garden Tools">Garden Tools</a></h6>
                        <h6><a href="https://tradevaly.com.bd/tools/hand-tools/" title="Hand Tools">Hand Tools</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Lights &amp; Lighting" href="https://tradevaly.com.bd/lights-lighting/"><img src="{{asset("assets/frontend/img/lights-lighting.png")}}" class="lazy" alt="Lights &amp; Lighting" title="Lights &amp; Lighting" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Lights &amp; Lighting" href="https://tradevaly.com.bd/lights-lighting/">Lights &amp; Lighting</a></h5>
                        <h6><a href="https://tradevaly.com.bd/lights-lighting/led-outdoor-lighting/" title="LED Outdoor Lighting">LED Outdoor</a></h6>
                        <h6><a href="https://tradevaly.com.bd/lights-lighting/chandeliers-pendant-lights/" title="Chandeliers Pendant Lights">Chandeliers Pendant</a></h6>
                        <h6><a href="https://tradevaly.com.bd/lights-lighting/ceiling-lights/" title="Ceiling Lights">Ceiling Lights</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Office &amp; School Supplies" href="https://tradevaly.com.bd/office-school-supplies/"><img src="{{asset("assets/frontend/img/office-school-supplies.png")}}" class="lazy" alt="Office &amp; School Supplies" title="Office &amp; School Supplies" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Office &amp; School Supplies" href="https://tradevaly.com.bd/office-school-supplies/">Office &amp; School</a></h5>
                        <h6><a href="https://tradevaly.com.bd/office-school-supplies/office-binding-supplies/" title="Office Binding Supplies">Office Binding</a></h6>
                        <h6><a href="https://tradevaly.com.bd/office-school-supplies/office-cutting-supplies/" title="Office Cutting Supplies">Office Cutting</a></h6>
                        <h6><a href="https://tradevaly.com.bd/office-school-supplies/office-equipment/" title="Office Equipment">Office Equipment</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Health &amp; Medical" href="https://tradevaly.com.bd/health-medical/"><img src="{{asset("assets/frontend/img/health-medical.png")}}" class="lazy" alt="Health &amp; Medical" title="Health &amp; Medical" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Health &amp; Medical" href="https://tradevaly.com.bd/health-medical/">Health &amp; Medical</a></h5>
                        <h6><a href="https://tradevaly.com.bd/health-medical/equipments-of-traditional-chinese-medicine/" title="Equipments of Traditional Chinese Medicine">Equipments of</a></h6>
                        <h6><a href="https://tradevaly.com.bd/health-medical/general-assay-diagnostic-apparatuses/" title="General Assay Diagnostic Apparatuses">General Assay</a></h6>
                        <h6><a href="https://tradevaly.com.bd/health-medical/implants-interventional-materials/" title="Implants Interventional Materials">Implants Materials</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Industrial Parts &amp; Fabrication Services" href="https://tradevaly.com.bd/industrial-parts-fabrication-services/"><img src="{{asset("assets/frontend/img/industrial-parts-fabrication-services.png")}}" class="lazy" alt="Industrial Parts &amp; Fabrication Services" title="Industrial Parts &amp; Fabrication Services" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Industrial Parts &amp; Fabrication Services" href="https://tradevaly.com.bd/industrial-parts-fabrication-services/">Industrial Parts</a></h5>
                        <h6><a href="https://tradevaly.com.bd/industrial-parts-fabrication-services/industrial-brake/" title="Industrial Brake">Industrial Brake</a></h6>
                        <h6><a href="https://tradevaly.com.bd/industrial-parts-fabrication-services/linear-motion/" title="Linear Motion">Linear Motion</a></h6>
                        <h6><a href="https://tradevaly.com.bd/industrial-parts-fabrication-services/machine-tools-accessory/" title="Machine Tools Accessory">Machine Tools</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Electrical Equipment&nbsp;Supplies" href="https://tradevaly.com.bd/electrical-equipment-supplies/"><img src="{{asset("assets/frontend/img/electrical-equipment-supplies.png")}}" class="lazy" alt="Electrical Equipment&nbsp;Supplies" title="Electrical Equipment&nbsp;Supplies" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Electrical Equipment&nbsp;Supplies" href="https://tradevaly.com.bd/electrical-equipment-supplies/">Electrical</a></h5>
                        <h6><a href="https://tradevaly.com.bd/electrical-equipment-supplies/transformers/" title="Transformers">Transformers</a></h6>
                        <h6><a href="https://tradevaly.com.bd/electrical-equipment-supplies/wires-cables-cable-assemblies/" title="Wires Cables Cable Assemblies">Wires Cables Cable</a></h6>
                        <h6><a href="https://tradevaly.com.bd/electrical-equipment-supplies/wiring-accessories/" title="Wiring Accessories">Wiring Accessories</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Fashion Accessories" href="https://tradevaly.com.bd/fashion-accessories/"><img src="{{asset("assets/frontend/img/fashion-accessories.png")}}" class="lazy" alt="Fashion Accessories" title="Fashion Accessories" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Fashion Accessories" href="https://tradevaly.com.bd/fashion-accessories/">Fashion Accessories</a></h5>
                        <h6><a href="https://tradevaly.com.bd/fashion-accessories/scarves-shawls/" title="Scarves Shawls">Scarves Shawls</a></h6>
                        <h6><a href="https://tradevaly.com.bd/fashion-accessories/hair-accessories/" title="Hair Accessories">Hair Accessories</a></h6>
                        <h6><a href="https://tradevaly.com.bd/fashion-accessories/genuine-leather-belts/" title="Genuine Leather Belts">Genuine Leather</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Hardware" href="https://tradevaly.com.bd/hardware/"><img src="{{asset("assets/frontend/img/hardware.png")}}" class="lazy" alt="Hardware" title="Hardware" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Hardware" href="https://tradevaly.com.bd/hardware/">Hardware</a></h5>
                        <h6><a href="https://tradevaly.com.bd/hardware/rivets/" title="Rivets">Rivets</a></h6>
                        <h6><a href="https://tradevaly.com.bd/hardware/washers/" title="Washers">Washers</a></h6>
                        <h6><a href="https://tradevaly.com.bd/hardware/other-fasteners/" title="Other Fasteners">Other Fasteners</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Energy" href="https://tradevaly.com.bd/energy/"><img src="{{asset("assets/frontend/img/energy.png")}}" class="lazy" alt="Energy" title="Energy" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Energy" href="https://tradevaly.com.bd/energy/">Energy</a></h5>
                        <h6><a href="https://tradevaly.com.bd/energy/natural-gas/" title="Natural Gas">Natural Gas</a></h6>
                        <h6><a href="https://tradevaly.com.bd/energy/other-energy-related-products/" title="Other Energy Related Products">Other Energy</a></h6>
                        <h6><a href="https://tradevaly.com.bd/energy/wood-pellets/" title="Wood Pellets">Wood Pellets</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="all-categ-box">
                    <div class="all-categ-left">
                        <a title="Shoes &amp; Footwear Accessories" href="https://tradevaly.com.bd/shoes-accessories/"><img src="{{asset("assets/frontend/img/shoes-accessories.png")}}" class="lazy" alt="Shoes &amp; Footwear Accessories" title="Shoes &amp; Footwear Accessories" style=""></a>
                    </div>
                    <div class="all-categ-right">
                        <h5><a title="Shoes &amp; Footwear Accessories" href="https://tradevaly.com.bd/shoes-accessories/">Shoes &amp; Footwear</a></h5>
                        <h6><a href="https://tradevaly.com.bd/shoes-accessories/casual-shoes/" title="Casual Shoes">Casual Shoes</a></h6>
                        <h6><a href="https://tradevaly.com.bd/shoes-accessories/childrenos-shoes/" title="Childrens Shoes">Childrens Shoes</a></h6>
                        <h6><a href="https://tradevaly.com.bd/shoes-accessories/clogs/" title="Clogs">Clogs</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!--------------------- Can't Find a buyer ------------------------------------>

<section class="container mb-2 mt-5"> 
<div class="box-shadow"> 
    <div class="row"> 
        <div class="col-md-7"> 
            <h3 class="top-heading text-uppercase">Can't find the <span>products</span> that meets your requirement exactly?</h3> 
            <div class="row"> 
                <div class="col-md-6 pr-md-2"> 
                    <div class="connect-buyer text-center"> 
                        <img src="{{asset("assets/frontend/img/trade-with-confidence.svg")}}" alt="Trade with Confidence" class="lazy" width="80" height="80" style=""> 
                        <h6 class="text-uppercase">Trade with <br><span>Confidence</span></h6> 
                    </div> 
                </div> 
                <div class="col-md-6 pl-md-2"> 
                    <div class="connect-buyer text-center"> 
                        <img src="{{asset("assets/frontend/img/free-quotes-from-sellers.svg")}}" alt="Free quotes from Sellers" class="lazy" width="80" height="80" style=""> 
                        <h6 class="text-uppercase">Free quotes from <br><span>Sellers</span></h6> 
                    </div> 
                </div> 
                <div class="col-md-6 pr-md-2"> 
                    <div class="connect-buyer text-center"> 
                        <img src="{{asset("assets/frontend/img/verified-connected-buyers.svg")}}" alt="Verified Connected Buyers" class="lazy" width="80" height="80" style=""> 
                        <h6 class="text-uppercase">Verified Connected <br><span>Buyers</span></h6> 
                    </div> 
                </div> 
                <div class="col-md-6 pl-md-2"> 
                    <div class="connect-buyer text-center"> 
                        <img src="{{asset("assets/frontend/img/24-7-help-center.svg")}}" alt="24/7 Help Center" class="lazy" width="80" height="80" style=""> 
                        <h6 class="text-uppercase">24/7 <br><span>Help Center</span></h6> 
                    </div> 
                </div> 
            </div> 
        </div>  

        <div class="col-md-5"> 
            <section class="quote-now productQuoteRegister mt-2"> 
                <h6> Tell Us What You <span>NEED</span> </h6> 

                <form method="POST" name="quoteForm" action="#" novalidate="novalidate"> 
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
                        <div class="col-lg-6 col-md-12 col-sm-6"> <label>Company</label> <input type="text" name="company_name" class="form-control" placeholder="Company Name" title="Please enter your Company Name here" autocomplete="organization" required="" aria-required="true"> 
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6"> 
                            <label>Phone</label> 
                            <input type="text" name="company_name" class="form-control" placeholder="Phone" title="Please enter your Company Name here" autocomplete="organization" required="" aria-required="true"> 
                        </div>
                        <div class="col-md-12"> 
                            <label>I am a</label> 
                            <select class="form-control valid" name="type" required="" aria-required="true" aria-invalid="false"> <option value="seller" selected="">Seller</option> <option value="buyer">Buyer</option> </select> 
                        </div>

                        <div class="col-12 form-p-0 text-center"> <button type="submit" class="btn btn-outline-danger">Submit</button> </div>
                        <p class="text-center"><span>*</span> To achieve our mission we provide all the necessary functionalities to buyers and sellers that help them in developing the voice of their business and to expand worldwide.</p>
                    </div>
                </form>
            </section> 
        </div>
    </div>
</div>
</section>

@endsection