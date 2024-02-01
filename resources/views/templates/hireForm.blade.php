<div class="hireForm_banner">
    <div class="auto_container">
        <div class="hireForm_banner_detail">
            <div class="custom_tittle">
                <h2>Thank you for choosing Bizionic's "Hire Talent Across Borders”</h2>
                <p>Qualified, Trustworthy Talent, Authenticated Excellence, <strong>HIRE WITH CONFIDENCE</strong> <br>
                    Zero Cost to Meet Talent, Hire Top Talent In Minutes, and Unlock Cost Savings through Smart Hiring.
                </p>
                {{-- <strong style="color:black">{{ auth()->user()->id }}</strong> --}}
            </div>
        </div>
    </div>
</div>



<div class="aboutProject_section hireFormSetting">
    <div class="auto_container">

        <div class="contactUs_detail">

            <div class="row ">
                <div class="col-lg-4 col-md-5  aos-init " data-aos="fade-right" data-aos-duration="800"
                    data-aos-easing="ease-out-cubic">
                    <div class="biz_brief">

                        <div class="hiringInfo">

                            <div class="hireFormTittle">
                                <h4>Hire Talent</h4>
                            </div>

                            <div class="meetProfile">
                                <span><img src="/storage/{{$expert->avatar}}" alt=""></span>
                                <div class="meetProfile_tittle">
                                    <strong>{{$expert->title}}</strong>
                                    <p>{{$expert->sub_title}}</p>
                                </div>
                            </div>

                            <div class="descriptionText" style="color: #fff;">
                                {!! $expert->description !!}
                            </div>


                            <div class="employee_data">
                                <strong>EXPERT IN:</strong>
                                <p>
                                    @foreach($expert->experties as $experty)
                                    {{$experty->title}},
                                    @endforeach
                                </p>
                            </div>

                            <div class="employee_data">
                                <strong>ALSO WORK WITH:</strong>
                                <p>
                                    @foreach($expert->skills as $skill)
                                    {{$skill->title}},
                                    @endforeach
                                </p>
                            </div>

                            <div class="employee_data">
                                <strong>EXPERIENCE:</strong>
                                <p>{{$expert->experience}}</p>
                            </div>

                            <div class="employee_data">
                                <strong>AVAILABILITY:</strong>
                                <p>{{$expert->availability}}</p>
                            </div>




                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-7   aos-init " data-aos="fade-left" data-aos-duration="800"
                    data-aos-easing="ease-out-cubic">
                    <div class="contactForm_page">
                        <div class="custom_tittle text-left">
                            <h3 class="p_color pb-5">For Employers, Hiring For </h3>
                            <p class="p-0">Please fill the form and our representative will get back to you.</p>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="hire_success"> Thank you for the
                            message. We will contact you shortly. </div>
                        <div class="alert alert-danger text-center" role="alert" id="hire_failure"> Sorry! There is some
                            problem sending your query at the moment, Please try again. </div>
                        {{-- <form enctype="multipart/form-data" id="hire_developer">
                            @csrf
                            <input type='hidden' value='{{$expert->id}}' name='expert'>
                            <hire-talent-component :countries='{{$countries}}' :timezones='{{ $timezones }}'>
                            </hire-talent-component>

                        </form> --}}
                        {{-- <hire-talent-component :countries='{{$countries}}' :timezones='{{ $timezones }}'
                            :expert-id='{{ $expert->id }}' :userId='{{auth()->user()->id}}'>
                        </hire-talent-component> --}}
                        <hire-talent-component :countries='{{$countries}}' :timezones='{{ $timezones }}'
                        :expert-id='{{ $expert->id }}'>
                    </hire-talent-component>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>




<!-- our client Bizionic section -->


<client-component></client-component>





<!-- Services provided section -->


<div class="servicesProvided_section">
    <div class="auto_container">
        <div class="servicesProvided_section_detail">
            <div class="servicesProvided_info">
                <h3 class="text-center">SERVICES</h3>
                <ul>
                    <li><a href="#">Progressive Web App Development</a></li> |
                    <li><a href="#">Mobile App Development</a></li> |
                    <li><a href="#">Hybrid App Development</a></li> |
                    <li><a href="#">PHP Development Services</a></li> |
                    <li><a href="#">Web Development</a></li> |

                    <li><a href="#">Game Development</a></li> |
                    <li><a href="#">2D Art</a></li> |
                    <li><a href="#">3D Art</a></li> |
                    <li><a href="#">CRM Solutions</a></li> |
                    <li><a href="#">e-Commerce Development</a></li> |

                    <li><a href="#">Azure Services</a></li> |
                    <li><a href="#">Amazon Web Services</a></li> |
                    <li><a href="#">Managed Server Support Services</a></li> |
                    <li><a href="#">Search Engine Optimization</a></li> |
                    <li><a href="#">Pay Per Click Services</a></li> |

                    <li><a href="#">Keyword Research</a></li> |
                    <li><a href="#">Link Building</a></li> |
                    <li><a href="#">Enterprise Mobility Solutions</a></li> |
                    <li><a href="#">Social Media Optimization</a></li> |
                    <li><a href="#">Internet Of Things I Digital Marketing</a></li> |

                    <li><a href="#">Enterprise Portal Solution</a></li> |
                    <li><a href="#">Magenta Enterprise Solution</a></li> |
                    <li><a href="#">Cloud Computing</a></li> |
                    <li><a href="#">Conversion Rate Optimisation</a></li> |
                </ul>
            </div>



            <div class="servicesProvided_info">
                <h3 class="text-center">TECHNOLOGIES</h3>
                <ul>
                    <li><a href="#">ASP.NET</a></li> |
                    <li><a href="#">C#</a></li> |
                    <li><a href="#">DNN</a></li> |
                    <li><a href="#">Xamarin</a></li> |
                    <li><a href="#">PHP</a></li> |
                    <li><a href="#">cakePHP</a></li> |
                    <li><a href="#">Laravel</a></li> |
                    <li><a href="#">Yll</a></li> |
                    <li><a href="#">Zend</a></li> |
                    <li><a href="#">Symfony</a></li> |

                    <li><a href="#">ROR</a></li> |
                    <li><a href="#">Java</a></li> |
                    <li><a href="#">Angular JS</a></li> |
                    <li><a href="#">Node JS</a></li> |
                    <li><a href="#">React Native</a></li> |
                    <li><a href="#">MEAN Stack</a></li> |
                    <li><a href="#">Drupal</a></li> |
                    <li><a href="#">MS Dynamics CRM</a></li> |
                    <li><a href="#">Salesforce</a></li> |
                    <li><a href="#">Sugar CRM</a></li> |

                    <li><a href="#">Codeigniter</a></li> |
                    <li><a href="#">Shopify</a></li> |
                    <li><a href="#">SharePoint</a></li> |
                    <li><a href="#">Android</a></li> |
                    <li><a href="#">iOS</a></li> |
                    <li><a href="#">SEO Experts</a></li> |
                    <li><a href="#">Sugar CRM</a></li> |
                    <li><a href="#">Website Designer</a></li> |
                    <li><a href="#">Database Developer</a></li> |
                    <li><a href="#">Umbraco</a></li> |

                    <li><a href="#">WordPress</a></li> |
                    <li><a href="#">Craft</a></li> |
                    <li><a href="#">Magento</a></li> |
                    <li><a href="#">Magento 2</a></li> |
                    <li><a href="#">Quality Analyst</a></li> |
                    <li><a href="#">Unity 3D</a></li> |
                    <li><a href="#">Joomla</a></li> |
                    <li><a href="#">MongoDB</a></li> |
                    <li><a href="#">Opencart</a></li> |
                    <li><a href="#">Python</a></li> |

                    <li><a href="#">WooCommerce</a></li> |
                    <li><a href="#">BigCommerce</a></li> |
                    <li><a href="#">NopCommerce</a></li> |
                    <li><a href="#">VirtueMart</a></li> |
                    <li><a href="#">Zencart</a></li> |
                </ul>
            </div>



            <div class="servicesProvided_info p-0">
                <h3 class="text-center">INDUSTRIES</h3>
                <ul>
                    <li><a href="#">Real Estate</a></li> |
                    <li><a href="#">Travel & Hospitality</a></li> |
                    <li><a href="#">B2B Solutions</a></li> |
                    <li><a href="#">B2C Solutions</a></li> |
                    <li><a href="#">Healthcare</a></li> |
                    <li><a href="#">Education & e-Learning</a></li> |
                    <li><a href="#">Banking & Finance</a></li> |
                    <li><a href="#">Startup Solutions</a></li> |
                    <li><a href="#">Media & Publishing</a></li> |
                    <li><a href="#">Food & FMCG</a></li> |
                    <li><a href="#">E-Commerce</a></li> |
                </ul>
            </div>
        </div>
    </div>
</div>
