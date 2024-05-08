<x-header data="Instaproject ShowMore" />
<link rel="stylesheet" href="{{ asset('css/css/master_tab.css') }}">
<style>
    .project-overview ul {
        list-style-type: none;
        padding-left: 0;
    }

    .project-overview ul li {
        margin-bottom: 10px;
    }

    .project-overview ul li:first-child {
        font-weight: bold;
    }

    .project-details-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .project-details {
        flex-grow: 1;
        margin-right: 10px;
    }
</style>
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
                        <li><a href="{{ url('InstaProject') }}">Create Project</a></li>
                        <li><a href="{{ url('InstaProject/My-Projects') }}" class="active">My Project</a></li>
                        <li><a href="{{ url('InstaProject/My-Project-Bid') }}">My Project Bids</a></li>
                        <li><a href="{{ url('InstaProject/Post-Review') }}">Post Review</a></li>
                        <li><a href="{{ url('InstaProject/My-Review') }}">My Reviews</a></li>
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
                @include('sweetalert::alert')
                <br>
                @forelse ($ProjectId as $project)
                    <div class="edit_class" style="font-size:24px;display:flex;justify-content:right;margin-right:10px">
                        <button class="edit_company edit_btn" data-toggle="modal" data-target="#edit_department"
                            data-dept-id="edit_department_{{ $project->id }}">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </div>
                    <h6>Project Title : {{ $project->project_title }}</h6>
                    <h6>Project Category : {{ $project->expertCategories->title }}</h6>
                    <h6>Industry : {{ $project->Industry }}</h6>
                    <h6><strong>Project Overview : </strong></h6>
                    <div class="project-overview">
                        {!! $project->project_overview !!}
                    </div><br>
                    <h6>Industry : {{ $project->Industry }}</h6>
                    <h6>Location : {{ $project->location }}</h6>
                    <h6>Reference URL : {{ $project->reference_url }}</h6>
                    {{-- //model --}}
                    <div class="modal fade" id="edit_department_{{ $project->id }}" tabindex="-1" role="dialog"
                        aria-hidden="true" style="top: 101px;left: -186px ">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="width: 173%;">
                                <div class="modal-header" style="background-color: #BCBCBC;">
                                    <h6 style="padding-bottom: 0px;margin-left: 321px;">
                                        Edit Project Overview</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="skills"
                                        action="{{ route('updateOverview', $project->id) }}">
                                        @csrf
                                        @method('patch')
                                        <div class="project-overview" style="width: 100%;">
                                            <textarea name="over_view" style="width: 100%; height: 200px; border: 1px solid; padding: 10px;">
                                                {!! $project->project_overview !!}
                                            </textarea>
                                        </div>
                                        <br>
                                        <div class="table_actions">
                                            <div class="row align-items-center">
                                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 m-auto">
                                                    <div class="table_actionsBtns justify-content-center">
                                                        <button class="tb_actionBtn">Save</button>
                                                        <button class="tb_actionBtn" data-dismiss="modal">Exit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    @empty
        <p style="color:red">Oops ! Something Went Wrong
            <?xml version="1.0" standalone="no"?>
            <!DOCTYPE svg
                PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="40.000000pt" height="40.000000pt"
                viewBox="0 0 240.000000 240.000000" preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,240.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path d="M920 1969 c-119 -11 -322 -45 -418 -69 -70 -17 -73 -17 -82 0 -13 24
                    -50 16 -43 -10 4 -14 -2 -21 -21 -26 -14 -3 -26 -12 -26 -18 0 -7 27 -104 59
                    -217 32 -112 64 -223 70 -246 11 -40 12 -41 42 -33 36 11 26 33 109 -251 56
                    -196 64 -216 82 -211 12 3 18 11 15 21 -2 9 -32 114 -67 234 -52 178 -61 220
                    -50 227 17 11 203 46 325 61 50 6 178 12 285 12 107 0 236 -6 285 -12 122 -15
                    308 -50 325 -61 11 -7 2 -49 -50 -227 -35 -120 -65 -226 -68 -235 -3 -13 2
                    -18 16 -18 23 0 17 -16 98 260 31 107 58 198 60 202 3 3 18 3 34 -2 29 -8 30
                    -7 41 33 6 23 38 134 70 246 32 113 59 210 59 217 0 6 -12 15 -26 18 -19 5
                    -25 12 -21 26 7 26 -30 34 -43 10 -9 -17 -12 -17 -82 0 -101 26 -301 57 -438
                    70 -134 12 -404 11 -540 -1z m171 -128 c22 -17 24 -29 27 -116 2 -52 1 -107
                    -2 -120 -14 -56 -119 -70 -151 -21 -23 34 -41 199 -27 231 21 46 110 61 153
                    26z m227 3 c18 -12 22 -25 22 -70 0 -61 -22 -94 -64 -94 -26 0 -36 -21 -36
                    -82 0 -37 -1 -38 -35 -35 l-35 2 0 101 c0 56 -3 122 -6 148 l-7 46 69 0 c47 0
                    77 -5 92 -16z m201 -9 c30 -15 41 -33 41 -65 0 -25 -15 -33 -50 -25 -23 5 -30
                    12 -30 31 0 13 -4 24 -10 24 -5 0 -10 -2 -10 -4 0 -2 -2 -11 -5 -18 -3 -8 14
                    -34 41 -61 45 -46 46 -49 41 -94 -7 -62 -36 -87 -90 -80 -53 7 -77 31 -77 79
                    0 37 1 38 35 38 33 0 35 -2 35 -36 0 -21 4 -33 10 -29 23 14 9 55 -31 93 -37
                    34 -41 44 -41 83 1 32 6 48 23 61 26 22 80 23 118 3z m-664 -27 c21 -19 27
                    -38 39 -118 8 -57 11 -103 5 -117 -12 -32 -64 -56 -104 -49 -42 8 -58 33 -78
                    121 -28 120 -26 140 16 165 43 27 90 26 122 -2z m839 -8 c4 -5 -5 -52 -20
                    -107 -25 -84 -32 -98 -52 -101 -13 -2 -25 3 -28 12 -5 14 11 172 21 203 4 13
                    62 8 79 -7z m-56 -249 c-2 -22 -8 -26 -33 -26 -21 0 -31 5 -33 18 -7 33 4 44
                    38 39 27 -4 31 -8 28 -31z" />
                    <path d="M1015 1733 c8 -94 15 -136 23 -129 6 7 4 128 -4 174 -4 17 -11 32
                    -16 32 -6 0 -7 -29 -3 -77z" />
                    <path d="M1250 1776 c0 -20 5 -36 10 -36 6 0 10 13 10 29 0 17 -4 33 -10 36
                    -6 4 -10 -8 -10 -29z" />
                    <path d="M780 1756 c0 -28 28 -167 35 -175 15 -14 15 17 0 98 -16 88 -35 129
                    -35 77z" />
                    <path d="M1050 1057 c-63 -33 -62 -51 2 -22 29 14 61 25 71 25 9 0 17 5 17 10
                    0 17 -45 11 -90 -13z" />
                    <path d="M1260 1071 c0 -6 8 -11 18 -11 9 0 41 -11 70 -25 59 -27 70 -18 17
                    15 -40 25 -105 38 -105 21z" />
                    <path d="M1061 994 c-40 -50 -17 -138 29 -114 27 14 40 42 40 82 0 60 -35 75
                    -69 32z" />
                    <path d="M1282 1008 c-15 -15 -16 -72 -2 -98 6 -11 19 -24 30 -30 46 -24 69
                    64 29 114 -22 28 -39 32 -57 14z" />
                    <path d="M1135 706 c-16 -7 -39 -23 -49 -35 l-19 -21 34 17 c46 24 152 24 198
                    0 l34 -17 -19 21 c-40 46 -120 61 -179 35z" />
                </g>
            </svg>
        </p>
        @endforelse
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('.edit_company').click(function() {
            var companyId = $(this).data('dept-id');
            let id_companyId = "#" + companyId;
            console.log('companyId==', id_companyId);
            $(id_companyId).modal('show');
        });
    });
</script>
