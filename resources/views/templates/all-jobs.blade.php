<div class="bg_cfd1d2 ">



    <!-- main banner img -->

    <div class="mainBanner_layout">
        <span><img src="/bizionic/images/hire_main_banner.png" alt="#" /></span>
    </div>

 


    <!-- Curent position section  -->


    <div class="curentPosition_section bg_f2f2f2">
        <div class="">
            <div class="curentPosition_section_detail pb-0">
            <div class="buildTeam_section openPosition_sec">
                    <div class="auto_container">
                        <div class="careerPage_inner"> 

                            <div class="sponsorsSection">
                                <div class="">
                                    @foreach($jobs as $key=>$job)
                                    <div>
                                        
                                        <!-- <div class="col-lg-4 col-md-6 buildCol"> -->
                                            <div class="buildTeam_col">
                                                <strong>{{$key+1}}. {{$job->title}}:</strong>
                                                {!!$job->description!!}
                                                {{-- <a href="{{ route('apply-now-form', ['jobId' => $job->id]) }}"
                                                    target="_blank" class="btn_default">Show more</a> --}}
                                                <a href="/industries/industries-we-serve/industries/jobid?jobId={{ $job->id }}"
                                                    target="_blank" class="btn_default">Show more</a>

                                            </div>
                                        <!-- </div> -->
                                       
                                    </div>  
                                    @endforeach
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                {{-- <style>
                    .description {
                        height: 100px;
                        overflow: hidden;
                    }
                </style> --}}
            </div>
        </div>
    </div>
 

 



    <!-- our client Bizionic section -->


    <client-component></client-component>


    <!-- Services provided section -->


    @include('partials.services')

 
</div>

<script>
    $(document).ready(function () {
        // Set the number of words to show initially
        const initialWords = 50;

        $('.buildTeam_col').each(function () {
            const $container = $(this).find('.description-container');
            const $showMoreLink = $(this).find('.btn_show_more');

            const fullText = $container.text();
            const truncatedText = fullText.split(' ').slice(0, initialWords).join(' ');

            $container.text(truncatedText);

            $showMoreLink.on('click', function (e) {
                e.preventDefault();
                $container.text(fullText);
                $showMoreLink.hide();
            });
        });
    });
</script>
