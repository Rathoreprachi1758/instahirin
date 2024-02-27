<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- custom css -->
<link rel="stylesheet" href="{{ asset('css/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}">
<!-- aos animation  -->
<link rel="stylesheet" href="{{ asset('css/css/aos.css') }}">
<!-- font awesome-->
<link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}">
<div class="container">
    <div class="row">
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Department</th>
                <th scope="col">Emp Code</th>
                <th scope="col">Calendar</th>
                <th colspan="2" scope="colgroup">Time Recorder</th>
                <th scope="col">Total Hours</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <form action="{{route('workLogCompany')}}" method="POST">
                        @csrf
                        <select name="workLogCompany">
                            @isset($companies)
                                @foreach($companies as $company)
                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                @endforeach
                            @endisset
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('workLogDepartment')}}" method="POST">
                        @csrf
                        <select name="department">
                            @isset($departments)
                                @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            @endisset()
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </td>
                @isset($employees)
                @foreach($employees as $employee)
                    <td>{{$employee->id}}</td>
                    <td>Calendar Data</td>
                    <td colspan="2">Time In Data / Time Out Data</td>
                    <td>Total Hours Data</td>
                    <td>Actions Data</td>
                @endforeach
                @endisset
            </tr>
            </tbody>
        </table>

    </div>
</div>
