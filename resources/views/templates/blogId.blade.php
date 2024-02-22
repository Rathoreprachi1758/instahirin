<!-- blogs section  -->
@php
    $blogId = request('blogId');
    $blog = \App\Models\Blogs::where('url_slug',$blogId)->first();
@endphp

<div class="blogsSection" style="background-color:#e6e6e6">
    <div class="auto_container">
        <div class="blogsSection_detail">

            <div class="blogs_list blogPost_detail">
                <div class="row">
                    <div class="col-lg-12 blogCol">
                        <div class="blogs_list_col">
                            <span class="blogAvatar"><img src="{{ asset('storage/' .$blog->image) }}" alt="#" /></span>

                            <div class="blogPost_info">
                                <h2>
                                    {{-- <a href="#">
                                        Unleashing the Power of AI
                                        Marketing with Bizionic
                                        Technologies.
                                    </a> --}}
                                    {{ $blog->title }}
                                </h2>

                                {!! $blog->content !!}



                                <div class="blogSponsor">
                                    <span><img src="{{ asset('storage/' .$blog->author_avatar) }}" alt="#" /></span>

                                    <strong>
                                        {{ $blog->author_name }}
                                        {{-- <small>{{ $blog->published_date }}</small>
                                        --}}
                                        <small class="d-block"><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> {{
                                            \Carbon\Carbon::parse($blog->published_date)->diffForHumans()
                                            }}
                                            <b class="d-block"><i class="fa fa-calendar mr-2" aria-hidden="true"></i> {{
                                                $blog->published_date->format('Y-m-d') }} </b>
                                        </small>
                                    </strong>

                                </div>
                                <div class="">
                                    <strong>

                                    </strong>
                                </div>
                            </div>

                        </div>
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
        <div class="servicesProvided_section_detail aos-init aos-animate" data-aos="fade-in" data-aos-duration="1000"
            data-aos-easing="ease-in">

            <div class="servicesProvided_info">
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
                    <li><a href="#">Food Ordering Solutions</a></li> |
                    <li><a href="#">Train Ticket Booking Solutions</a></li> |
                </ul>
            </div>


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


            <div class="servicesProvided_info  p-0">
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


        </div>
    </div>
</div>