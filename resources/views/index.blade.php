@extends('layouts.base')

@section('title', 'Home page')

@section('content')
        <x-slider></x-slider>

        <!--HOME ABOUT START--->
        <div class="item-background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="home-about">
                            <h5>Oasis Agro Enterprise</h5>
                            <h2>About Us</h2>
                            <p>Oasis Agro Enterprise is a rapidly expanding Agro business and farm in Nigeria that specializes in cultivating nutritious food crops, manufacturing and packing food products in the most sanitary conditions, and storing and supplying them to consumers, clients, and business owners for consumption.</p>
                            <p>Oasis Agro Enterprise has been offering exceptional agricultural services for the past two years, without sacrificing the quality of our services or products. We intend to expand and increase production while also investing in the most cutting-edge agricultural technologies.</p>
                            <div class="btn-more-box"><a class="btn-hover-corner" href="{{ url('about-us') }}">LEARN MORE</a></div>
                        </div>
                    </div>
{{--                    <div class="col-lg-6 space-break">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="home-icon-box">--}}
{{--                                    <figure class="icon-pic"><img src="img/master/seeding.png" alt=""></figure>--}}
{{--                                    <h3>Agro Investments</h3>--}}
{{--                                    <p>We discover gold mines in agriculture and use the initiative to benefit our investors.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="home-icon-box">--}}
{{--                                    <figure class="icon-pic"><img src="img/master/cow.png" alt=""></figure>--}}
{{--                                    <h3>Livestocks</h3>--}}
{{--                                    <p>We offer complete lifestock production, processing, and distribution to consumers.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="home-icon-box">--}}
{{--                                    <figure class="icon-pic"><img src="img/master/wheat.png" alt=""></figure>--}}
{{--                                    <h3>Crop Production & Exportation</h3>--}}
{{--                                    <p>We specialize in growing healthy crops, process, package and export to consumers and businesses</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="home-icon-box">--}}
{{--                                    <figure class="icon-pic"><img src="img/master/truck.png" alt=""></figure>--}}
{{--                                    <h3>Sustainable Development</h3>--}}
{{--                                    <p>Provide sustainable employment for nigerians.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!--HOME ABOUT END-->

        <!--SERVICES START-->
        <div class="container">
            <div class="section-title">
                <h2>We <span>Grow</span></h2>
                <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box-services">
                        <figure class="service-icon"><img src="img/master/seeding.png" alt=""></figure>
                        <div class="caption">
                            <h3>Cassava</h3>
                            <p>Cassava is the third-largest source of food carbohydrates. its a major staple food in the developing world, providing a basic diet for over half a billion people. It is a drought-tolerant crop, capable of growing on marginal soils. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-services">
                        <figure class="service-icon"><img src="img/master/wheat.png" alt=""></figure>
                        <div class="caption">
                            <h3>Maize</h3>
                            <p>Maize is the most important cereal grain in the world, providing nutrients for humans and animals and serving as a basic raw material for the production of starch, alcoholic beverages, food sweeteners and, more recently, fuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-services">
                        <figure class="service-icon"><img src="img/master/cow.png" alt=""></figure>
                        <div class="caption">
                            <h3>Palm Fruits</h3>
                            <p>Palm oil is a common cooking ingredient in the tropical belt of Africa, Southeast Asia and parts of Brazil. Its use in the commercial food industry is widespread because of its lower cost and the high oxidative stability. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--SERVICES END-->

        <!--PRODUCTS START-->
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Products</span></h2>
                <p>For the past 2 years, Oasis Agro Enterprise has been providing excellent agricultural services, without compromising on the quality of our services or products.</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="post-list">
                        <a href="#">
                            <figure class="post-preview">
                                <img src="img/images/garri.jpg" alt="">
                                <div class="post-overlay"></div>
                            </figure>
                        </a>
                        <div class="post-caption">
                            <h3>GARRI</h3>
                            <p>Currently in stock</p>
                            <br>
                            <h5><a href="{{url('contact-us')}}">PLACE ORDER NOW</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="post-list">
                        <a href="#">
                            <figure class="post-preview">
                                <img src="img/images/cassava-flour.jpg" alt="">
                                <div class="post-overlay"></div>
                            </figure>
                        </a>
                        <div class="post-caption">
                            <h3>CASSAVA FLOUR</h3>
                            <p>Currently in stock</p>
                            <br>
                            <h5><a href="{{url('contact-us')}}">PLACE ORDER NOW</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="post-list">
                        <a href="#">
                            <figure class="post-preview">
                                <img src="img/images/maize-cobs.jpg" alt="">
                                <div class="post-overlay"></div>
                            </figure>
                        </a>
                        <div class="post-caption">
                            <h3>MAIZE COB</h3>
                            <p>Currently in stock</p>
                            <br>
                            <h5><a href="{{url('contact-us')}}">PLACE ORDER NOW</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="post-list">
                        <a href="#">
                            <figure class="post-preview">
                                <img src="img/images/palm-oil.jpg" alt="">
                                <div class="post-overlay"></div>
                            </figure>
                        </a>
                        <div class="post-caption">
                            <h3>PALM OIL</h3>
                            <p>Currently in stock</p>
                            <br>
                            <h5><a href="{{url('contact-us')}}">PLACE ORDER NOW</a></h5>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row justify-content-center">--}}
{{--                <div class="btn-more-box">--}}
{{--                    <a class="btn-hover-corner" href="{{ url('our-products') }}">LEARN MORE</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!--PRODUCTS END-->

        <!--INVESTMENTS START-->
        <div class="container">
            <div class="section-title">
                <h2>Our <span>Investments</span></h2>
                <p>We are committed to ensuring that our clients and partners are satisfied with our services, and we are passionate about our mission statement</p>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="order-last order-md-4 col-lg-4 space-break">
                            <div class="product-box-img">
                                <figure class="product-media"><img src="img/images/cassava-investment.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="order-first order-md-8 col-lg-8">
                            <div class="product-info">
                                <h2>CASSAVA INVESTMENT</h2>
                                <p>Cassava is the third-largest source of food carbohydrates in the tropics, after rice and maize. </p>
                                <p>With our Cassava investment package, we relieve you of the labour that comes with managing, marketing, selling and distribution of your cassava crops, and ensure efficient farming practices that will guarantee maximum returns.</p>
                                <div class="btn-more-box"><a class="btn-hover-corner" href="{{ url('our-products/cassava') }}">FIND OUT HOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="order-last order-md-4 col-lg-4 space-break">
                            <div class="product-box-img">
                                <figure class="product-media"><img src="img/images/palm-oil.jpg" alt=""></figure>
                            </div>
                        </div>
                        <div class="order-first order-md-8 col-lg-8">
                            <div class="product-info">
                                <h2>PALM OIL INVESTMENT</h2>
                                <p>Palm oil is a common cooking ingredient in the tropical belt of Africa, Southeast Asia and parts of Brazil.</p>
                                <p>With our Palm Oil investment package, you will be taking advantage of market trends and fluctuations, while we assist you with the necessary management and storage procedures for your products to ensure that we deliver maximum returns to you.</p>
                                <div class="btn-more-box"><a class="btn-hover-corner" href="{{ url('our-products/palm-oil') }}">FIND OUT HOW</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--INVESTMENTS END-->


        <!--WHY US START-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-company">
{{--                        <h5>Why Choose Us</h5>--}}
                        <h2>Why Choose Us</h2>
                        <p>For over two years, we have been investigating, identifying, controlling, and implementing appropriate farming practices to enhance agro development and sustain food production. </p>
                        <p>Choosing us means partnering with a group of highly devoted and experienced specialists whose primary goal is to grow, produce, and supply healthy food crops for human consumption. </p>
                        <p>We are completely committed to raising your level of living through our products and providing enormous value to you through our investment packages. We are committed to ensuring that our clients and partners are satisfied with our services, and we are passionate about our mission statement.</p>

                    </div>
                </div>
                <div class="col-lg-4 space-break">
                    <div class="about-col">
                        <figure class="mission-thumb"><img src="img/images/img2.jpg" alt=""></figure>
                        <div class="caption">
                            <h3>Our Mission</h3>
                            <p>Our mission is to actively contribute to the sustainable development of food production in Nigeria by reducing food imports and increasing food exports.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 space-break">
                    <div class="about-col">
                        <figure class="vision-thumb"><img src="img/images/img3.jpg" alt=""></figure>
                        <div class="caption">
                            <h3>Our Vision</h3>
                            <p>Our vision is to actively actively engage Nigerian youths in embracing agriculture as a golden opportunity in the fight against poverty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WHY US END-->

        <!--CLIENTS START-->
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>Our <span>Partners</span></h2>--}}
{{--                <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow business.</p>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2 tablet-view">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-1.png" alt=""></figure>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2 tablet-view">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-5.png" alt=""></figure>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2 tablet-view">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-3.png" alt=""></figure>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-7.png" alt=""></figure>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-2.png" alt=""></figure>--}}
{{--                </div>--}}
{{--                <div class="col-6 col-sm-6 col-md-4 col-lg-2">--}}
{{--                    <figure class="partners-logo"><img src="img/images/client-6.png" alt=""></figure>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--CLIENTS END-->
        <!--COUNTER START-->
        <div class="container-fluid inner-color-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="inner-counter">
                            <div class="counter-statistics">
                                <div class="counter">36</div>
                                <h5>STAFF STRENGTH</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="inner-counter">
                            <div class="counter-statistics">
                                <div class="counter">105</div>
                                <h5>PLOTS OF FARMLAND</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="inner-counter">
                            <div class="counter-statistics">
                                <div class="counter">117</div>
                                <h5>REGISTERED INVESTORS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="inner-counter last-box-counter">
                            <div class="counter-statistics">
                                <div class="counter">450</div>
                                <h5>HEALTHY PALM STANDS</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wheat-bg"><img src="img/master/wheat.svg" alt=""></div>
        </div>
        <!--COUNTER END-->

        <!--CONTACT US START-->
        <div class="container-fluid home-contact">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-info">
                        <p>Get In Touch</p>
                        <h2>Contact Us</h2>
                        <div class="block-address">
                            <figure class="address-icon"><img src="img/master/map.png" alt=""></figure>
                            <div class="inner-info">
                                <h4>ADDRESS</h4>
                                <p>{!! config('app.address') !!}</p>
                            </div>
                        </div>
                        <div class="block-phone d-flex">
                            <figure class="phone-icon"><img src="img/master/phone.png" alt=""></figure>
                            <div class="inner-info">
                                <h4>OFFICE PHONE</h4>
                                <p>{!! config('app.phone1') !!}</p>
                                <p>{!! config('app.phone2') !!}</p>
                            </div>
                        </div>
                        <div class="block-email">
                            <figure class="phone-icon"><img src="img/master/mail.png" alt=""></figure>
                            <div class="inner-info">
                                <h4>EMAIL</h4>
                                <p>{!! config('app.email') !!}</p>
                            </div>
                        </div>
                        <div class="social-networks">
                            <div class="networks-list"><a href="{!! config('app.socials_fb') !!}"><i class="fab fa-facebook-f"></i></a></div>
                            <div class="networks-list"><a href="{!! config('app.socials_tw') !!}"><i class="fab fa-twitter"></i></a></div>
                            <div class="networks-list"><a href="{!! config('app.socials_ig') !!}"><i class="fab fa-instagram"></i></a></div>
                            <div class="networks-list"><a href="{!! config('app.socials_li') !!}"><i class="fab fa-linkedin-in"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 custom-map" data-aos="fade-left">
                    <iframe src="{!! config('app.map_url') !!}" class="map-iframe"></iframe>
                </div>
            </div>
            <div class="form-box">
                <form id="dope-contact-form" method="post">
                    @csrf
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control customize" placeholder="Name" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control customize" placeholder="Email address" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone_number" class="form-control customize" placeholder="Please enter your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control customize" placeholder="Your message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p><button type="submit" class="btn btn-custom" id="submit-btn">Send message</button></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--CONTACT US END-->

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).on('submit', '#dope-contact-form', function(e){
            e.preventDefault();

            let form = $(this);
            let data = form.serialize();
            let submitBtn = $('#submit-btn');
            let oldVal = submitBtn.html();

            submitBtn.html("<span class='fa fa-spin fa-spinner'></span> Sending Message...").prop('disabled', true);
            $.ajax({
                url:'{{route('submit-contact-us')}}',
                data:data,
                type: 'POST',
                success: function(data){
                    if (data.success)
                    {
                        toastr.success('Thank you for writing to us we will get back to you as soon as possible');
                        document.getElementById("dope-contact-form").reset();
                    }else{
                        toastr.error(data.message);
                    }

                    submitBtn.html(oldVal).prop('disabled', false);
                },
                error: function(err)
                {
                    let response = JSON.parse(err.responseText);
                    toastr.error(response.message);
                    submitBtn.html(oldVal).prop('disabled', false);
                }
            })
        });
    </script>
@endsection

