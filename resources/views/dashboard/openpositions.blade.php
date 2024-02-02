<x-header data="open component" />
<div class="fr-section">
    <div class="fr-section_detail" style="margin-top:-100px">
        <div class="dashboardPage">
            <div class="row">
                <div class="mobileBtn">
                    <a id="menu-toggle" class="menu-toggle">
                        <span class="menu-toggle-bar menu-toggle-bar--top"></span>
                        <span class="menu-toggle-bar menu-toggle-bar--middle"></span>
                        <span class="menu-toggle-bar menu-toggle-bar--bottom"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="db_tittle">
                    <h3>Hi, User</h3>
                    <p>Welcome to your Bizionic Dashboard</p>
                    <strong>Bizionic ID: BIZ12860735</strong>
                </div>
            </div>
            <div class="row">
                @foreach ($job_component as $job)
                    <div class="col-12">
                        <div class="card mb-2">
                            <div class="db-blocksHead">
                                <div class="">
                                    <h4>{{ $job->title }}</h4>
                                    <div class="row pb-4">
                                        <p class="p-0 m-0 col ">Company: {{ $job->company }}</p>
                                        <p class="p-0 m-0 col ">Location: {{ $job->location }}</p>
                                        <p class="p-0 m-0 col ">Work Mode: {{ $job->work_mode }}</p>
                                        <p class="p-0 m-0 col ">Experience: {{ $job->experience }}</p>
                                        <p class="p-0 m-0 col ">CTC Range: {{ $job->ctc }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="db-blocksFooter " style="background-color: #000;">
                                <a href="/profile" class="gotoPage text-white">
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                    <strong>Go to profile</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</div>

<!-- dashboard footer  -->

<footer>
    <div class="footer db_footer">
        <div class="footer_detail">
            <p>Copyright &copy; <a href="https://www.bizionictech.com/" target="_blank">bizionictech.com</a> | All
                rights reserved, Bizionic Technologies and Marketing Solutions Private Limited</p>
        </div>
    </div>
</footer>


</div>
</div>





<script src="{{ asset('css/js/myscript.js') }}"></script>
<script src="{{ asset('css/js/merge_script.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('css/js/bootstrap.bundle.min.js') }}"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


</body>

</html>
