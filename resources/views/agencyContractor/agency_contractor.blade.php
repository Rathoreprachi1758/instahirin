<x-header data="offers component"/>
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/Employer_activity_style.css') }}">
<style>
    .bordered-container {
        border: 1px solid #000; /* Border style */
        padding: 10px; /* Padding for inner content */
    }

    .row {
        display: flex;
    }

    .col-6 {
        flex: 1;
        padding: 10px;
    }

    #preview {
        max-width: 100%;
        max-height: 200px;
        margin-top: 10px;
    }

    .transition-screen {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    .form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 5px;
    }

    .btn {
        margin-right: 10px;
    }
</style>
<div class="fr-section" style="margin-top: -72px">
    <div class="fr-section_detail">
        <div class="dashboard_innerPages">
            <div class="custom_tabs_section">
                <div class="custom_tabs">
                </div>
                <br>
                <div class="container">
                    <div class="row mt-5">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home"
                                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Company
                                    Information
                                </button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile"
                                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    Messages
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab"
                                 tabindex="0">
                                <div class="custom_tabs_data" style="display: block" id="tab5">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-home" type="button" role="tab"
                                                    aria-controls="pills-home" aria-selected="true">Company Details
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-profile" type="button" role="tab"
                                                    aria-controls="pills-profile" aria-selected="false">Locations
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-portfolio-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-portfolio" type="button" role="tab"
                                                    aria-controls="pills-portfolio" aria-selected="false">Portfolio
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-contact" type="button" role="tab"
                                                    aria-controls="pills-contact" aria-selected="false">Compliance &
                                                Certifications
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-disabled" type="button" role="tab"
                                                    aria-controls="pills-disabled" aria-selected="false">Disabled
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                             aria-labelledby="pills-home-tab" tabindex="0">
                                            <div class="row">
                                                <form action="{{route('companyDetails')}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Company
                                                                Name</label>
                                                            <input type="text" class="form-control" name="company_name"
                                                                   placeholder="Company Name"
                                                                   aria-label="Company Name">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Tagline</label>
                                                            <input type="text" class="form-control"
                                                                   name="company_tagline" placeholder="Tagline"
                                                                   aria-label="Tagline">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1"
                                                                   class="form-label">Logo</label>
                                                            <div class="input-group mb-3">
                                                                <input type="file" class="form-control"
                                                                       name="company_logo"
                                                                       id="inputGroupFile01">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Establishment
                                                                Date</label>
                                                            <input type="date" class="form-control"
                                                                   placeholder="First name" name="company_establishment"
                                                                   aria-label="First name">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Company
                                                                Website</label>
                                                            <input type="text" class="form-control" placeholder="www"
                                                                   name="company_website"
                                                                   aria-label="Last name">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Sales
                                                                Email</label>
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                   name="company_email"
                                                                   aria-label="email">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Total
                                                                Employees</label>
                                                            <select class="form-select" name="company_total_employees"
                                                                    id="autoSizingSelect">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label">Descriptions</label>
                                                                <textarea class="form-control"
                                                                          id="exampleFormControlTextarea1"
                                                                          name="company_description"
                                                                          rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <label for="exampleFormControlTextarea1"
                                                                   class="form-label fa-2x">Project Information</label>
                                                            <div class="col">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label">Minimum Project Size</label>
                                                                <select class="form-select" name="company_projectSize"
                                                                        id="autoSizingSelect">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label">Average Hourly Rates</label>
                                                                <select class="form-select" name="company_hourly_rate"
                                                                        id="autoSizingSelect">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                             aria-labelledby="pills-profile-tab" tabindex="0">
                                            <div>
                                                <label for="exampleFormControlTextarea1" class="form-label fa-3x">Add
                                                    Locations</label>
                                                <div class="row col-12">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label fa-2x">Head Quarter</label>
                                                            </div>
                                                            <div id="formContainer">
                                                                <form class="row g-3 formTemplate">
                                                                    <div class="col-md-6">
                                                                        <label for="country"
                                                                               class="form-label">Country</label>
                                                                        <select id="country" class="form-select"
                                                                                onchange="fetchCities()">
                                                                            <option value="">Select a country</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="city"
                                                                               class="form-label">City</label>
                                                                        <select id="city" class="form-select">
                                                                            <option value="">Select a city</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="inputCity"
                                                                               class="form-label">Postal Code</label>
                                                                        <input type="text" class="form-control"
                                                                               id="inputCity">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="countryCode" class="form-label">Country
                                                                            Code</label>
                                                                        <input type="text" id="countryCode"
                                                                               class="form-control" readonly>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="inputZip" class="form-label">Phone
                                                                            Number</label>
                                                                        <input type="text" class="form-control"
                                                                               id="inputZip">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="inputAddress"
                                                                               class="form-label">Address</label>
                                                                        <input type="text" class="form-control"
                                                                               id="inputAddress"
                                                                               placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="inputState"
                                                                               class="form-label">Total Employees at
                                                                            this
                                                                            Location</label>
                                                                        <select id="inputState" class="form-select">
                                                                            <option selected>Choose...</option>
                                                                            <option value="0-49">0-49</option>
                                                                            <option value="50-249">50-249</option>
                                                                            <option value="250-999">250-999</option>
                                                                            <option value="1000-9999">1000-9999</option>
                                                                            <option value="10000+">10000+</option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <button type="button" onclick="addFormField()">Add
                                                                Another Location
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-portfolio" role="tabpanel"
                                             aria-labelledby="pills-portfolio-tab" tabindex="0">
                                            <div class="container">
                                                <div class="row">
                                                    @isset($agencyPortfolios)
                                                        @foreach($agencyPortfolios as $agencyPortfolio)
                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                <div class="card border-primary mb-3"
                                                                     style="max-width: 18rem;">
                                                                    <div class="card-body text-primary">
                                                                        <h5 class="card-title"></h5>
                                                                        <p class="card-text"></p>
                                                                    </div>
                                                                    <div class="card-footer text-center bg-transparent border-success">
                                                                        <a href="#" class="portfolio-link"
                                                                           data-toggle="modal"
                                                                           data-target="#portfolioModal{{$agencyPortfolio->id}}">{{$agencyPortfolio->portfolio_title}}</a>
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <a href="#" class="edit-portfolio"
                                                                           data-id="{{$agencyPortfolio->id}}"
                                                                           data-title="{{$agencyPortfolio->portfolio_title}}"
                                                                           data-description="{{$agencyPortfolio->portfolio_description}}"
                                                                           data-service-lines="{{$agencyPortfolio->portfolio_service_lines}}"
                                                                           data-project-size="{{$agencyPortfolio->portfolio_project_size}}"
                                                                           data-start-date="{{$agencyPortfolio->portfolio_start_date}}"
                                                                           data-end-date="{{$agencyPortfolio->portfolio_end_date}}"
                                                                           data-video-link="{{$agencyPortfolio->videoLink}}"
                                                                           data-image-upload="{{$agencyPortfolio->imageUpload}}"
                                                                           data-privacy="{{$agencyPortfolio->privacy}}">Edit</a>
                                                                        <a href="{{ route('portfolioDelete', ['id' => $agencyPortfolio->id]) }}">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Portfolio Modal -->
                                                            <div class="modal fade"
                                                                 id="portfolioModal{{$agencyPortfolio->id}}"
                                                                 tabindex="-1" role="dialog"
                                                                 aria-labelledby="portfolioModalLabel{{$agencyPortfolio->id}}"
                                                                 aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="portfolioModalLabel{{$agencyPortfolio->id}}">{{$agencyPortfolio->portfolio_title}}</h5>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{$agencyPortfolio->portfolio_description}}</p>
                                                                            <!-- You can include other details here -->
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <!-- Add buttons or additional content for the modal footer if needed -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade"
                                                                 id="editPortfolioModal{{$agencyPortfolio->id}}"
                                                                 tabindex="-1" role="dialog"
                                                                 aria-labelledby="editPortfolioModalLabel{{$agencyPortfolio->id}}"
                                                                 aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="editPortfolioModalLabel{{$agencyPortfolio->id}}">
                                                                                Edit Portfolio</h5>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="{{route('portfolioSubmit')}}"
                                                                                  method="post"
                                                                                  id="editPortfolioForm{{$agencyPortfolio->id}}"
                                                                                  enctype="multipart/form-data">
                                                                                @csrf
                                                                                <input type="hidden" name="id"
                                                                                       value="{{$agencyPortfolio->id}}">
                                                                                <div class="row mb-3">
                                                                                    <div class="col">
                                                                                        <label class="fw-bold">Client
                                                                                            Name</label>
                                                                                        <input type="text"
                                                                                               name="client_name"
                                                                                               class="form-control"
                                                                                               placeholder="Name"
                                                                                               aria-label="Name"
                                                                                               value="{{$agencyPortfolio->client_name}}">
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <label class="fw-bold">Client
                                                                                            Website</label>
                                                                                        <input type="text"
                                                                                               name="client_website"
                                                                                               class="form-control"
                                                                                               placeholder="https://www.example.com"
                                                                                               aria-label="Last name"
                                                                                               value="{{$agencyPortfolio->client_website}}">
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Portfolio Item Details -->
                                                                                <div>
                                                                                    <label class="fw-bold">Title</label>
                                                                                    <input type="text"
                                                                                           name="portfolio_title"
                                                                                           class="form-control"
                                                                                           placeholder="Enter a title for this portfolio item"
                                                                                           value="{{$agencyPortfolio->portfolio_title}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <label class="fw-bold mt-2">Service
                                                                                        Lines</label>
                                                                                    <input type="text"
                                                                                           name="portfolio_service_lines"
                                                                                           class="form-control"
                                                                                           placeholder="Search for Service"
                                                                                           value="{{$agencyPortfolio->portfolio_service_lines}}">
                                                                                </div>
                                                                                <div class="row mt-3">
                                                                                    <div class="col-md-6">
                                                                                        <label for="inputState"
                                                                                               class="form-label fw-bold">Estimate
                                                                                            Project Size</label>
                                                                                        <select id="inputState"
                                                                                                name="portfolio_project_size"
                                                                                                class="form-select">
                                                                                            <option selected>Select the
                                                                                                estimate project size
                                                                                            </option>
                                                                                            <option value="0-49" {{$agencyPortfolio->portfolio_project_size == '0-49' ? 'selected' : ''}}>
                                                                                                0-49
                                                                                            </option>
                                                                                            <option value="50-249" {{$agencyPortfolio->portfolio_project_size == '50-249' ? 'selected' : ''}}>
                                                                                                50-249
                                                                                            </option>
                                                                                            <option value="250-999" {{$agencyPortfolio->portfolio_project_size == '250-999' ? 'selected' : ''}}>
                                                                                                250-999
                                                                                            </option>
                                                                                            <option value="1000-9999" {{$agencyPortfolio->portfolio_project_size == '1000-9999' ? 'selected' : ''}}>
                                                                                                1000-9999
                                                                                            </option>
                                                                                            <option value="10000+" {{$agencyPortfolio->portfolio_project_size == '10000+' ? 'selected' : ''}}>
                                                                                                10000+
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label for="input-start-date"
                                                                                               class="form-label fw-bold">Start
                                                                                            Date (optional)</label>
                                                                                        <input type="date"
                                                                                               name="portfolio_start_date"
                                                                                               class="form-control"
                                                                                               id="start-date"
                                                                                               value="{{$agencyPortfolio->portfolio_start_date}}">
                                                                                    </div>
                                                                                    <div class="col-md-3">
                                                                                        <label for="input-end-date"
                                                                                               class="form-label fw-bold">End
                                                                                            Date (optional)</label>
                                                                                        <input type="date"
                                                                                               name="portfolio_end_date"
                                                                                               class="form-control"
                                                                                               id="end-date"
                                                                                               value="{{$agencyPortfolio->portfolio_end_date}}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="mb-3 mt-3">
                                                                                    <label for="exampleFormControlTextarea1"
                                                                                           class="form-label fw-bold">Descriptions</label>
                                                                                    <textarea class="form-control"
                                                                                              name="portfolio_description"
                                                                                              id="exampleFormControlTextarea1"
                                                                                              rows="3">{{$agencyPortfolio->portfolio_description}}</textarea>
                                                                                </div>
                                                                                <div class="mb-3 mt-3">
                                                                                    <label for="exampleFormControlTextarea1"
                                                                                           class="form-label fw-bold">Add
                                                                                        Video Link or Image
                                                                                        (Optional)</label><br>
                                                                                    <input type="radio" id="videoOption"
                                                                                           name="option"
                                                                                           onclick="showInput('video')" {{$agencyPortfolio->videoLink ? 'checked' : ''}}>
                                                                                    <label for="videoOption">Video
                                                                                        Link</label><br>
                                                                                    <input type="radio" id="imageOption"
                                                                                           name="option"
                                                                                           onclick="showInput('image')" {{$agencyPortfolio->imageUpload ? 'checked' : ''}}>
                                                                                    <label for="imageOption">Upload
                                                                                        Image</label><br><br>
                                                                                    <div id="videoInput"
                                                                                         style="{{$agencyPortfolio->videoLink ? '' : 'display:none;'}}">
                                                                                        <label for="videoLink">Video
                                                                                            Link:</label>
                                                                                        <input class="form-control"
                                                                                               type="text"
                                                                                               id="videoLink"
                                                                                               name="videoLink"
                                                                                               value="{{$agencyPortfolio->videoLink}}">
                                                                                    </div>
                                                                                    <div id="imageInput"
                                                                                         style="{{$agencyPortfolio->imageUpload ? '' : 'display:none;'}}">
                                                                                        <label for="imageUpload">Upload
                                                                                            Image:</label><br>
                                                                                        <input class="form-control"
                                                                                               type="file"
                                                                                               id="imageUpload"
                                                                                               name="imageUpload"><br><br>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <label class="fw-bold fa-2x mb-2">Privacy
                                                                                        Setting</label>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                               value="1" type="radio"
                                                                                               name="privacy"
                                                                                               id="flexRadioDefault1" {{$agencyPortfolio->privacy == 1 ? 'checked' : ''}}>
                                                                                        <label class="form-check-label fa-2x"
                                                                                               for="flexRadioDefault1">
                                                                                            Show All
                                                                                        </label>
                                                                                        <p>All of the above content will
                                                                                            be displayed on your
                                                                                            profile. Currently, we will
                                                                                            only show portfolio items
                                                                                            with images</p>
                                                                                    </div>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                               value="0" type="radio"
                                                                                               name="privacy"
                                                                                               id="flexRadioDefault2" {{$agencyPortfolio->privacy == 0 ? 'checked' : ''}}>
                                                                                        <label class="form-check-label fa-2x"
                                                                                               for="flexRadioDefault2">
                                                                                            Confidential
                                                                                        </label>
                                                                                        <p>Only the following details
                                                                                            for this portfolio item will
                                                                                            be displayed on your
                                                                                            profile: Title, Description,
                                                                                            Category, Image or Video
                                                                                            link. This is ideal for
                                                                                            projects where you are not
                                                                                            able to showcase client
                                                                                            details.</p>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="submit"
                                                                                        class="btn btn-primary">Update
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endisset
                                                </div>
                                            </div>
                                            <!-- Edit Portfolio Modal -->

                                            <div class="container">
                                                <div class="row">
                                                    <div class="card mb-3" style="max-width: 18rem;">
                                                        <div class="card-body">
                                                            <button id="addPortfolioBtn" class="btn">+ Add New
                                                                Portfolio
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="transitionScreen" class="transition-screen">
                                                <div class="form-container">
                                                    <div style="height: 600px; overflow-y: auto;">
                                                        <form action="{{route('portfolioSubmit')}}" method="post"
                                                              id="portfolioForm" enctype="multipart/form-data">
                                                            @csrf
                                                            <label class="fa-2x fw-bold">Add a New Portfolio</label><br>
                                                            <label class="fw-bold">Share Your Latest Existing
                                                                Work</label><br>
                                                            <label class="fw-bold mt-2">Client Details</label>
                                                            <hr>
                                                            <div class="row mt-3">
                                                                <div class="col">
                                                                    <label class="fw-bold mt-2">Client Name</label>
                                                                    <input type="text" name="client_name"
                                                                           class="form-control"
                                                                           placeholder="Name" aria-label="Name">
                                                                </div>
                                                                <div class="col">
                                                                    <label class="fw-bold mt-2">Client Website</label>
                                                                    <input type="text" name="client_website"
                                                                           class="form-control"
                                                                           placeholder="https://www.example.com"
                                                                           aria-label="Last name">
                                                                </div>
                                                            </div>
                                                            <label class="fa-2x mt-2">Portfolio Item Details</label>
                                                            <hr>
                                                            <div>
                                                                <label class="fw-bold">Title</label>
                                                                <input type="text" name="portfolio_title"
                                                                       class="form-control"
                                                                       id="formGroupExampleInput"
                                                                       placeholder="Enter a title for this portfolio item">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="fw-bold mt-2">Service Lines</label>
                                                                <input type="text" name="portfolio_service_lines"
                                                                       class="form-control"
                                                                       id="formGroupExampleInput2"
                                                                       placeholder="Search for Service">
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <label for="inputState" class="form-label fw-bold">Estimate
                                                                        Project Size</label>
                                                                    <select id="inputState"
                                                                            name="portfolio_project_size"
                                                                            class="form-select">
                                                                        <option selected>Select the estimate project
                                                                            size
                                                                        </option>
                                                                        <option value="0-49">0-49</option>
                                                                        <option value="50-249">50-249</option>
                                                                        <option value="250-999">250-999</option>
                                                                        <option value="1000-9999">1000-9999</option>
                                                                        <option value="10000+">10000+</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="input-start-date"
                                                                           class="form-label fw-bold">Start Date
                                                                        (optional)</label>
                                                                    <input type="date" name="portfolio_start_date"
                                                                           class="form-control"
                                                                           id="start-date">
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="input-end-date"
                                                                           class="form-label fw-bold">End Date
                                                                        (optional)</label>
                                                                    <input type="date" name="portfolio_end_date"
                                                                           class="form-control"
                                                                           id="end-date">
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label  fw-bold">Descriptions</label>
                                                                <textarea class="form-control"
                                                                          name="portfolio_description"
                                                                          id="exampleFormControlTextarea1"
                                                                          rows="3"></textarea>
                                                            </div>
                                                            <div class="mb-3 mt-3">
                                                                <label for="exampleFormControlTextarea1"
                                                                       class="form-label fw-bold">Add Video Link or
                                                                    Image (Optional)</label><br>
                                                                <input type="radio" id="videoOption" name="option"
                                                                       onclick="showInput('video')" checked>
                                                                <label for="videoOption">Video Link</label><br>
                                                                <input type="radio" id="imageOption" name="option"
                                                                       onclick="showInput('image')">
                                                                <label for="imageOption">Upload Image</label><br><br>
                                                                <div id="videoInput">
                                                                    <label for="videoLink">Video Link:</label>
                                                                    <input class="form-control" type="text"
                                                                           id="videoLink" name="videoLink">
                                                                </div>
                                                                <div id="imageInput" style="display:none;">
                                                                    <label for="imageUpload">Upload Image:</label><br>
                                                                    <input class="form-control" type="file"
                                                                           id="imageUpload" name="imageUpload"><br><br>
                                                                </div>
                                                                <hr>
                                                                <label class="fw-bold fa-2x mb-2">Privacy
                                                                    Setting</label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" value="1"
                                                                           type="radio" name="privacy"
                                                                           id="flexRadioDefault1">
                                                                    <label class="form-check-label fa-2x"
                                                                           for="flexRadioDefault1">
                                                                        Show All
                                                                    </label>
                                                                    <p>All of the above content will be displayed on
                                                                        your profile. Currently, we will only show
                                                                        portfolio items with images</p>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" value="0"
                                                                           type="radio" name="privacy"
                                                                           id="flexRadioDefault2">
                                                                    <label class="form-check-label fa-2x"
                                                                           for="flexRadioDefault2">
                                                                        Confidential
                                                                    </label>
                                                                    <p>Only the following details for this portfolio
                                                                        item will be item will be displayed on your
                                                                        profile: Title, Description, Category, Image or
                                                                        Video link. This is ideal for projects where you
                                                                        are not able to showcase client details.</p>
                                                                </div>
                                                            </div>
                                                            <button type="button" id="cancelBtn" class="btn">Cancel
                                                            </button>
                                                            <button type="submit" id="saveBtn" class="btn">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                             aria-labelledby="pills-contact-tab" tabindex="0">
                                            <div class="container">
                                                <div class="bordered-container">
                                                    <div class="row col-12">
                                                        <div class="col-6">
                                                            <label class="fa-2x">Compliance and certificate list</label>
                                                            <hr>
                                                            <form action="{{ route('editOrDeleteCertificates') }}"
                                                                  method="POST" id="certificateForm">
                                                                @csrf
                                                                @isset($certificateList)
                                                                    @foreach($certificateList as $certificate)
                                                                        <div>
                                                                            <input type="checkbox"
                                                                                   class="certificateCheckbox"
                                                                                   name="certificate_ids[]"
                                                                                   value="{{ $certificate->id }}">
                                                                            <a href="{{ route('fileDownload', $certificate->id) }}">{{ $certificate->certificate_title }}</a>
                                                                        </div>
                                                                    @endforeach
                                                                @endisset
                                                                <button type="submit" name="action" value="delete"
                                                                        id="deleteButton" disabled>Delete Selected
                                                                    Certificates
                                                                </button>
                                                            </form>
                                                            <button type="submit" name="action" value="edit"
                                                                    id="editButton" disabled>Edit Selected Certificates
                                                            </button>
                                                        </div>
                                                        <div class="col-6">
                                                            <label class="fa-2x">Certification Details</label>
                                                            <hr>
                                                            <form action="{{ route('certificationsForm') }}"
                                                                  method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Company
                                                                        Certificate Title</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                           id="name"
                                                                           placeholder="Enter Certificate Title">
                                                                    @error('name')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="url" class="form-label">Company
                                                                        URL</label>
                                                                    <input type="url" class="form-control" name="url"
                                                                           id="url"
                                                                           placeholder="https://www.example.com">
                                                                    @error('url')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="attachment" class="form-label">Upload
                                                                        Attachment</label>
                                                                    <input type="file" class="form-control"
                                                                           name="attachment" id="attachment">
                                                                    @error('attachment')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                </button>
                                                                <button type="button" class="btn btn-secondary">Cancel
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="editCertificateModal" tabindex="-1"
                                             aria-labelledby="editCertificateModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editCertificateModalLabel">Edit
                                                            Certificate</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Edit Certificate Form -->
                                                        <form id="editCertificateForm"
                                                              action="{{ route('certificationsForm') }}" method="post"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="certificate_id"
                                                                   id="certificateId">
                                                            <!-- Hidden input for certificate ID -->
                                                            <div class="mb-3">
                                                                <label for="name" class="form-label">Company Certificate
                                                                    Title</label>
                                                                <input type="text" class="form-control" name="name"
                                                                       id="name" placeholder="Enter Certificate Title">
                                                                @error('name')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="url" class="form-label">Company URL</label>
                                                                <input type="url" class="form-control" name="url"
                                                                       id="url" placeholder="https://www.example.com">
                                                                @error('url')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="attachment" class="form-label">Upload
                                                                    Attachment</label>
                                                                <input type="file" class="form-control"
                                                                       name="attachment" id="attachment">
                                                                @error('attachment')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3" id="filePreviewContainer"></div>
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab" tabindex="0">
                                    <div class="custom_tabs_data" style="display: block" id="tab5">
                                        <div class="col-xxl-9 col-xl-11 col-lg-11 col-md-12">
                                            <form action="{{ route('lateApprovalFilter') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="lateApprovalRequest"
                                                       name="lateApprovalRequest">
                                                <label for="company">Select Company:</label>
                                                <select id="company" name="company">
                                                    <option value="" selected disabled>Select Company</option>
                                                    @isset($companies)
                                                        @foreach($companies as $company)
                                                            <option
                                                                    value="{{ $company->id }}">{{ $company->company_name }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                                <label for="from">From:</label>
                                                <input type="date" id="from" name="from">
                                                <label for="to">To:</label>
                                                <input type="date" id="to" name="to">
                                                <select name="employee_code">
                                                    <option selected disabled>Choose Emp Code</option>
                                                    @isset($employees)
                                                        @foreach($employees as $employee)
                                                            <option
                                                                    value="{{ $employee->employee_code }}">{{ $employee->employee_code }}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                                <button type="submit">Filter</button>
                                            </form>
                                            <div class="activityTable_data">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            <h6>#</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Company</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Department</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Emp Code</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Date</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Expected time of arrival</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Reason</h6>
                                                        </th>
                                                        <th>
                                                            <h6>Actions</h6>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($increamentId = 1)
                                                    @isset($lateRequests)
                                                        @foreach($lateRequests as $lateRequest)
                                                            {{--                                                        @php(dd($leaveRequest))--}}
                                                            <tr>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{$increamentId}}</p>
                                                                    </div>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $lateRequest->company->company_name }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $lateRequest->department->name }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $lateRequest->employee_code }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        {{ $lateRequest->date }}
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ Carbon::parse($lateRequest->expected_time)->format('h:i A') }}</p>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="tabletext">
                                                                        <p>{{ $lateRequest->late_reason }}</p>
                                                                    </div>
                                                                </td>
                                                                <td width="90">
                                                                    <div class="tabletext">
                                                                        <div class="statusFiled">
                                                                            @if($lateRequest['late_status'] === null)
                                                                                <strong class="">Pending</strong>
                                                                            @elseif($lateRequest['late_status'] == true)
                                                                                <strong class="">Accepted</strong>
                                                                            @elseif($lateRequest['late_status'] == false)
                                                                                <strong class="">Rejected</strong>
                                                                            @endif
                                                                            <div class="statusFieldInfo">
                                                                                <div class="statusDrop">
                                                                <span><i class="fa fa-ellipsis-v"
                                                                         aria-hidden="true"></i></span>
                                                                                    <div class="statusDropdown">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <form
                                                                                                        action="{{ route('lateStatus') }}"
                                                                                                        method="post">
                                                                                                    @csrf
                                                                                                    <input
                                                                                                            type="hidden"
                                                                                                            value="1"
                                                                                                            name="status">
                                                                                                    <input
                                                                                                            type="hidden"
                                                                                                            value="{{ $lateRequest->id }}"
                                                                                                            name="requestId">
                                                                                                    <input
                                                                                                            type="submit"
                                                                                                            value="Accept"
                                                                                                            name="button">
                                                                                                </form>
                                                                                            </li>
                                                                                            <li>
                                                                                                <form
                                                                                                        action="{{ route('lateStatus') }}"
                                                                                                        method="post">
                                                                                                    @csrf
                                                                                                    <input
                                                                                                            type="hidden"
                                                                                                            value="0"
                                                                                                            name="status">
                                                                                                    <input
                                                                                                            type="hidden"
                                                                                                            value="{{ $lateRequest->id }}"
                                                                                                            name="requestId">
                                                                                                    <input
                                                                                                            type="submit"
                                                                                                            value="Reject"
                                                                                                            name="button">
                                                                                                </form>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @php($increamentId++)
                                                        @endforeach
                                                    @endisset
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                            crossorigin="anonymous">
                    </script>
                    <script>
                        async function fetchCountries() {
                            const response = await fetch('https://restcountries.com/v3.1/all');
                            const countries = await response.json();
                            const countryDropdown = document.getElementById('country');
                            countries.forEach(country => {
                                const option = document.createElement('option');
                                var countryCode = country.idd.root + country.idd.suffixes
                                option.value = country.name.common;
                                option.countryCode = countryCode
                                option.textContent = country.name.common;
                                countryDropdown.appendChild(option);
                            });
                        }

                        async function fetchCities() {
                            const countryDropdown = document.getElementById('country');
                            const countryName = countryDropdown.value;
                            const countryCodeInput = document.getElementById('countryCode');

                            if (!countryName) {
                                console.error("No country selected.");
                                return;
                            }

                            const selectedOption = countryDropdown.options[countryDropdown.selectedIndex];
                            const countryCode = selectedOption.countryCode;

                            countryCodeInput.value = countryCode; // Update country code input

                            try {
                                const response = await fetch('https://countriesnow.space/api/v0.1/countries/cities', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        country: countryName
                                    })
                                });

                                if (!response.ok) {
                                    throw new Error(`Failed to fetch cities for ${countryName}`);
                                }

                                const data = await response.json();
                                const cities = data.data.sort((a, b) => a - b);

                                const cityDropdown = document.getElementById('city');
                                cityDropdown.innerHTML = '<option value="">Select a city</option>';

                                cities.forEach(city => {
                                    const option = document.createElement('option');
                                    option.value = city;
                                    option.textContent = city;
                                    cityDropdown.appendChild(option);
                                });
                            } catch (error) {
                                console.error("Error fetching cities:", error);
                            }
                        }

                        fetchCountries();

                        function addFormField() {
                            console.log('this is dynamic')
                            // Clone the existing form template
                            var formTemplate = document.querySelector('.formTemplate');
                            var clonedForm = formTemplate.cloneNode(true);

                            // Clear input values in the cloned form
                            var inputs = clonedForm.querySelectorAll('input, select');
                            inputs.forEach(function (input) {
                                input.value = '';
                            });

                            // Update suffix of new field labels
                            var suffix = document.querySelectorAll('.formSuffix').length + 1;
                            var labels = clonedForm.querySelectorAll('label');
                            labels.forEach(function (label) {
                                label.innerHTML += ' ' + suffix;
                            });

                            // Add a "Delete Location" button
                            var deleteButton = document.createElement('button');
                            deleteButton.textContent = 'Delete Location';
                            deleteButton.type = 'button';
                            deleteButton.onclick = function () {
                                clonedForm.remove();
                            };
                            clonedForm.appendChild(deleteButton);

                            // Append the cloned form to the form container
                            var formContainer = document.getElementById('formContainer');
                            formContainer.appendChild(clonedForm);
                        }
                    </script>
                    <script>
                        function showEditPopup() {
                            const checkboxes = document.querySelectorAll('input[name="certificate_ids[]"]:checked');
                            const popup = document.getElementById('editPopup');
                            const formContainer = popup.querySelector('.form-container');

                            // Clear previous forms if any
                            formContainer.innerHTML = '';

                            checkboxes.forEach(checkbox => {
                                const certificateId = checkbox.value;

                                // Create a form for each selected certificate
                                const form = document.createElement('form');
                                form.action = "{{ route('certificationsForm') }}";
                                form.method = "post";
                                form.enctype = "multipart/form-data";

                                // Add CSRF token input
                                const csrfInput = document.createElement('input');
                                csrfInput.type = "hidden";
                                csrfInput.name = "_token";
                                csrfInput.value = "{{ csrf_token() }}";
                                form.appendChild(csrfInput);

                                // Add certificate ID input
                                const idInput = document.createElement('input');
                                idInput.type = "hidden";
                                idInput.name = "certificate_id";
                                idInput.value = certificateId;
                                form.appendChild(idInput);

                                // Add form fields
                                form.innerHTML += `
                <div class="mb-3">
                    <label for="name" class="form-label">Company Certificate Title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Certificate Title">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Company URL</label>
                    <input type="url" class="form-control" name="url" id="url" placeholder="https://www.example.com">
                </div>
                <div class="mb-3">
                    <label for="attachment" class="form-label">Upload Attachment</label>
                    <input type="file" class="form-control" name="attachment" id="attachment">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" onclick="hideEditPopup()">Cancel</button>
            `;

                                // Append form to form container
                                formContainer.appendChild(form);
                            });

                            // Show popup
                            popup.style.display = 'block';
                        }

                        function hideEditPopup() {
                            const popup = document.getElementById('editPopup');
                            popup.style.display = 'none';
                        }
                    </script>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const checkboxes = document.querySelectorAll('.certificateCheckbox');
                            const editButton = document.getElementById('editButton');
                            const deleteButton = document.getElementById('deleteButton');

                            function updateButtonState() {
                                const checkedCheckboxes = document.querySelectorAll('.certificateCheckbox:checked');
                                if (checkedCheckboxes.length === 1) {
                                    editButton.disabled = false;
                                    deleteButton.disabled = false;
                                } else if (checkedCheckboxes.length > 1) {
                                    editButton.disabled = true;
                                    deleteButton.disabled = false;
                                } else {
                                    editButton.disabled = true;
                                    deleteButton.disabled = true;
                                }
                            }

                            checkboxes.forEach(function (checkbox) {
                                checkbox.addEventListener('change', updateButtonState);
                            });

                            // Initial state check
                            updateButtonState();
                        });
                    </script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const checkboxes = document.querySelectorAll('.certificateCheckbox');
                            const editButton = document.getElementById('editButton');
                            const deleteButton = document.getElementById('deleteButton');
                            const editCertificateForm = document.getElementById('editCertificateForm');
                            const editCertificateModal = new bootstrap.Modal(document.getElementById('editCertificateModal'));

                            function updateButtonState() {
                                const checkedCheckboxes = document.querySelectorAll('.certificateCheckbox:checked');
                                if (checkedCheckboxes.length === 1) {
                                    editButton.disabled = false;
                                    deleteButton.disabled = false;
                                } else if (checkedCheckboxes.length > 1) {
                                    editButton.disabled = true;
                                    deleteButton.disabled = false;
                                } else {
                                    editButton.disabled = true;
                                    deleteButton.disabled = true;
                                }
                            }

                            checkboxes.forEach(function (checkbox) {
                                checkbox.addEventListener('change', updateButtonState);
                            });

                            editButton.addEventListener('click', function () {
                                const checkedCheckbox = document.querySelector('.certificateCheckbox:checked');
                                if (checkedCheckbox) {
                                    const certificateId = checkedCheckbox.value;
                                    // Send AJAX request to fetch certificate data
                                    fetch(`/getCertificateData/${certificateId}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Populate form fields with certificate data
                                            document.getElementById('certificateId').value = certificateId; // Set certificate ID
                                            editCertificateForm.querySelector('#name').value = data.certificate_title;
                                            editCertificateForm.querySelector('#url').value = data.company_url;
                                            // Optionally, you can populate attachment field if needed

                                            // Show the modal
                                            editCertificateModal.show();
                                        })
                                        .catch(error => console.error('Error:', error));
                                }
                            });

                            // Optional: Close the modal when Cancel button is clicked
                            editCertificateForm.querySelector('button[data-bs-dismiss="modal"]').addEventListener('click', function () {
                                editCertificateModal.hide();
                            });
                        });
                    </script>
                    <script>
                        function previewFile() {
                            const preview = document.getElementById('preview');
                            const file = document.querySelector('input[type=file]').files[0];
                            const reader = new FileReader();

                            reader.onloadend = function () {
                                const img = document.createElement('img');
                                img.src = reader.result;
                                preview.innerHTML = '';
                                preview.appendChild(img);
                            }

                            if (file) {
                                reader.readAsDataURL(file);
                            } else {
                                preview.innerHTML = "No file selected";
                            }
                        }

                        document.getElementById("addPortfolioBtn").addEventListener("click", function () {
                            document.getElementById("transitionScreen").style.display = "block";
                        });

                        document.getElementById("cancelBtn").addEventListener("click", function () {
                            document.getElementById("transitionScreen").style.display = "none";
                        });
                    </script>
                    <script>
                        // Function to show input fields based on the selected option
                        function showInput(option) {
                            var videoInput = document.getElementById("videoInput");
                            var imageInput = document.getElementById("imageInput");

                            if (option === 'video') {
                                videoInput.style.display = "block";
                                imageInput.style.display = "none";
                            } else if (option === 'image') {
                                imageInput.style.display = "block";
                                videoInput.style.display = "none";
                            }
                        }
                    </script>
                    <script>
                        $(document).ready(function () {
                            // Function to populate edit form with data
                            $('.edit-portfolio').click(function (e) {
                                e.preventDefault();
                                var id = $(this).data('id');
                                var title = $(this).data('title');
                                // Populate form fields with data
                                $('#editPortfolioTitle' + id).val(title);
                                // Open modal
                                $('#editPortfolioModal' + id).modal('show');
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
