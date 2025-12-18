@extends('layouts.app')
@section('content')
<form action="{{ route('resume.store') }}" method="POST" class="mt-5">
    <!-- PERSONAL INFO -->
    @csrf
    <div class="card mb-4">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <div class="card-header fw-bold">Personal Information</div>
        <div class="card-body row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" name="full_name" placeholder="Full Name">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="phone" placeholder="Phone">
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="col-12">
                <textarea class="form-control" name="objective" placeholder="Career Objective"></textarea>
            </div>
        </div>
    </div>

    <!-- EDUCATION -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Education</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-education">+ Add</button>
        </div>
        <div class="card-body" id="education-wrapper">
            <div class="border rounded p-3 mb-3">
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="text" name="education_degree[]" class="form-control" placeholder="Degree">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="education_institute[]" class="form-control" placeholder="Institute">
                    </div>
                    <div class="col-md-6">
                        <label class="small">Start Date</label>
                        <input type="date" name="education_start_date[]" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="small">End Date</label>
                        <input type="date" name="education_end_date[]" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXPERIENCE -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Experience</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-experience">+ Add</button>
        </div>
        <div class="card-body" id="experience-wrapper">
            <div class="border rounded p-3 mb-3">
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="text" name="experience_title[]" class="form-control" placeholder="Job Title">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="experience_company[]" class="form-control" placeholder="Company">
                    </div>
                    <div class="col-md-6">
                        <label class="small">Start Date</label>
                        <input type="date" name="experience_start_date[]" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="small">End Date</label>
                        <input type="date" name="experience_end_date[]" class="form-control">
                        <span style=" font-size: 12px; color: red; ">Leave empty if currently working.</span>
                    </div>
                    <div class="col-12">
                        <textarea name="experience_description[]" class="form-control" placeholder="Job Description"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SKILLS -->

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Skills</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-skills">+ Add</button>
        </div>
        <div class="card-body" id="skills-wrapper">
            <div class="input-group mb-2">
                <input type="text" name="skills[]" class="form-control" placeholder="">
            </div>
        </div>
    </div>

    <!-- certificate -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Certificates</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-certificate">+ Add</button>
        </div>
        <div class="card-body" id="certificate-wrapper">
            <div class="border rounded p-3 mb-3">
                <div class="row g-2">
                    <div class="col-md-6">
                        <input type="text" name="certificate_title[]" class="form-control" placeholder="Certificate Title">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="certificate_institute[]" class="form-control" placeholder="Certificate Institute">
                    </div>
                    <div class="col-md-6">
                        <label class="small">Start Date</label>
                        <input type="date" name="certificate_start_date[]" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="small">End Date</label>
                        <input type="date" name="certificate_end_date[]" class="form-control">
                    </div>
                    <div class="col-12">
                        <textarea name="certificate_description[]" class="form-control" placeholder="Certificate Description"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- LANGUAGES -->

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Languages</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-langug">+ Add</button>
        </div>
        <div class="card-body" id="langug-wrapper">
            <div class="input-group mb-2">
                <input type="text" name="languages[]" class="form-control" placeholder="English ,Urdu">
            </div>
        </div>
    </div>

    <!-- INTERESTS -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Interests / Hobbies</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-interest">+ Add</button>
        </div>
        <div class="card-body" id="interest-wrapper">
            <div class="input-group mb-2">
                <input type="text" name="interests[]" class="form-control" placeholder="Interest / Hobby">
            </div>
        </div>
    </div>

    <button class="btn btn-success">Save CV</button>

</form>
@endsection