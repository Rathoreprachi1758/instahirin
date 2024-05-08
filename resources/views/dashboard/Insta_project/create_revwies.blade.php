<x-header data="insta_project create_review component" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<style>
    .p_userInfo_tittle h5 {
        font-size: 15px;
        padding: 0px;
        font-family: "avenirmedium";
    }
</style>
@include('sweetalert::alert')
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail ">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Insta Project</h4>
                    <p><strong>Description:</strong>To manage and track all agency/contractor specifications and
                        services render.Review of a agencies
                        render of agencies render it simpler to get in communication with the agency and seek out the
                        latest information upon
                        payments.
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{url('InstaProject')}}">Create Project</a></li>
                        <li><a href="{{url('InstaProject/My-Projects')}}">My Project</a></li>
                        <li><a href="{{url('InstaProject/My-Project-Bid')}}">My Project Bids</a></li>
                        <li><a href="{{url('InstaProject/Post-Review')}}" class="active">Post Review</a></li>
                        <li><a href="{{url('InstaProject/My-Review')}}">My Review</a></li>
                    </ul>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success" style="margin-top: 12px;" id="success-message">
                        <span style="margin-left:330px">{{ Session::get('message') }}</span>
                        <script>
                            setTimeout(function() {
                                document.getElementById('success-message').style.display = 'none';
                            }, 2000);
                        </script>
                    </div>
                @endif
                {{-- /////////// --}}
            </div>
        </div>
    </div>
</div>