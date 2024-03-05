<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
<!-- aos animation  -->
<link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
<!-- font awesome-->
<link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
<div class="container">
    <div class="row mt-5">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Post Leave Request
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">My Request
                </button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                 tabindex="0">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Company Name</label>
                        <select id="inputName" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputDepartment" class="form-label">Department</label>
                        <select id="inputDepartment" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputCode" class="form-label">Employee Code</label>
                        <input type="text" class="form-control" id="inputCode" placeholder="000">
                    </div>
                    <div class="col-12">
                        <div class="col-md-6">
                            <label for="inputType" class="form-label">Leave Type</label>
                            <select id="inputType" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-12">
                            <label for="birthday">Start Date(from)</label>
                        </div>
                        <input type="date" id="from" name="From">
                    </div>
                    <div class="col-md-6">
                        <div class="col-12">
                            <label for="birthday">End Date(to)</label>
                        </div>
                        <input type="date" id="to" name="To">
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail" class="form-label">Reason For Leave</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Type" id="floatingTextarea"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputDays" class="form-label">Total Number Of days</label>
                        <input type="text" class="form-control" id="inputDays">
                    </div>
                    <div class="col-md-6">
                        <label for="inputBalance" class="form-label">Balance Leave</label>
                        <input type="text" class="form-control" id="inputBalance" disabled>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Contact Email During Leave</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputNumber" class="form-label">Contact Number During Leave</label>
                        <input type="number" class="form-control" id="inputNumber">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                ...
            </div>
        </div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
