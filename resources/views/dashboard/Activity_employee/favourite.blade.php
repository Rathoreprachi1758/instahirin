<x-header data="favourate component" />
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#favorites').DataTable();
    });
</script>


<style>
    .tracking-table li {
        list-style: none;
    }

    .tracking-table {
        position: relative;
    }

    .tracking-table .dropdown:hover .dropdown-menu {
        display: block;
        max-width: 100px !important;
        position: absolute;
        left: 0;
        top: 100%;
    }


    .table.dataTable thead td {
        border-bottom: 1px solid #dee2e6 !important;
    }


    /* .tracking-table .dropdown-menu {
        --bs-dropdown-min-width: 2rem !important;
        --bs-border-radius: 0 !important;
        padding: 0 !important;
        text-align: start
    } */

    .table> :not(:last-child)> :last-child>* {
        border-bottom-color: #dee2e6 !important;
    }

    .tracking-table .dropdown-menu .dropdown-item:hover {
        background-color: #eff5f9 !important;
        color: #000 !important;
    }

    .dropdown-menu {
        min-width: auto !important;
        border-radius: 0 !important;
        padding: 0 !important;
        border: 1px solid #dee2e6 !important;
    }

    .dropdown-item {
        padding: 5px 15px !important;
    }


    .tracking-table .dropdown-menu .dropdown-item:first-child {
        background-color: #000 !important;
        color: #fff !important;
    }

    .table-responsive {
        overflow-x: inherit !important;
    }

    @media (max-width:480px) {
        .table-responsive {
            overflow-x: auto !important;
        }
    }

    .tracking-table thead td {
        background-color: #eff5f9 !important;
        font-size: 12px !important;
    }


    /* .tracking-table tbody td:nth-child(1) {
        background-color: #eff5f9 !important;
    } */

    /* .tracking-table tbody td:nth-child(2) {
        background-color: #eff5f9 !important;
    } */

    table.dataTable.no-footer {
        border-bottom: none !important;
    }

    .activityTabs {
        background-color: transparent !important;
        padding: 0 !important;
    }

    /* .activityTable_data table thead th {

        background-color: #eff5f9 !important;
        ;

        padding: 0.8rem 0.6rem !important;
        border: 0.5px solid #dee2e6;

    } */

    /* .activityTable_data table thead td h6 {
        color: #333 !important;
    } */

    .custom_tabs ul li a.active {

        /* background-color: #dddddd; */
        background-color: transparent !important;
        color: #007bff !important;

        border-bottom: 3px solid #007bff !important;
    }

    .custom_tabs ul li a:hover {
        background-color: transparent !important;
        /* background-color: #425056; */
    }

    .custom_tabs ul li a {
        padding: 0 15px !important;
        font-weight: 500 !important;
        font-size: 15px !important;
        color: #555 !important;
    }


    .custom_tittle h4 {
        font-size: 24px;
        padding-bottom: 10px;
        font-family: "avenirmedium";
        color: #343A40;
    }

    .description_small_text {
        font-size: 13px;
        color: #777;
        line-height: 25px;

    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tittle descriptionTxt">
                    <h4>Employee / Talent</h4>

                    <p class="description_small_text">
                        <strong style="color:#343A40;">Description:</strong> Monitor talent profile
                        details including jobs applied, Offers, and favourites.
                        Eyeball on details of the interview scheduled under
                        the Interview Scheduled Calander,<br /> attributes of
                        all the job activities performed will be viewed under
                        the History tab..
                    </p>
                </div>
                <div class="custom_tabs">
                    <ul>
                        <li><a href="{{ url('Employee-activity') }}">My Resume</a></li>
                        <li><a href="{{ route('favorites') }}" class="active">Favourites</a></li>
                        <li><a href="{{ route('Applied.jobs') }}">Applied</a></li>
                        <li>
                            <a href="{{ route('Interview.schedule.calander') }}">Interview Scheduled Calendar</a>
                        </li>
                        <li><a href="{{ route('Applied.offers') }}">Offers</a></li>
                        <li><a href="{{ route('Applied.History') }}">History</a></li>
                    </ul>
                </div>
                <br>
                <div class="custom_tabs_data" style="display: block" id="tab2">
                    <div class="col-xl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="activityTable_data">
                            <table class="table table-bordered text-center tracking-table" id="favorites">
                                <thead>
                                    <tr>
                                        <td class="align-middle">
                                            Id
                                        </td>
                                        <td class="align-middle">
                                            Company Name
                                        </td>
                                        <td class="align-middle">
                                            Position Title
                                        </td>
                                        <td class="align-middle">
                                            Experience
                                        </td>
                                        <td class="align-middle">
                                            Key Skills
                                        </td>
                                        <td class="align-middle">
                                            Location
                                        </td>
                                        <td class="align-middle">
                                            Availability
                                        </td>
                                        <td class="align-middle">
                                            Salary
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($favorites as $data)
                                        <tr>
                                            <td>
                                                <div class="tabletext">
                                                    <p>1</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Bizionic Tech</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Python Developer</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Yrs</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Java, C, C+</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Hyderabad</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>Hyderabad</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="tabletext">
                                                    <p>5 Lakhs</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <p style="color:red">Oops ! No Favorites were Available
                                            <?xml version="1.0" standalone="no"?>
                                            <!DOCTYPE svg
                                                PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="40.000000pt"
                                                height="40.000000pt" viewBox="0 0 240.000000 240.000000"
                                                preserveAspectRatio="xMidYMid meet">

                                                <g transform="translate(0.000000,240.000000) scale(0.100000,-0.100000)"
                                                    fill="#000000" stroke="none">
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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
