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
        <div class="card-body" id="education-wrapper"></div>
    </div>

    <!-- EXPERIENCE -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Experience</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-experience">+ Add</button>
        </div>
        <div class="card-body" id="experience-wrapper"></div>
    </div>

    <!-- SKILLS -->

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Skills</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-skills">+ Add</button>
        </div>
        <div class="card-body" id="skills-wrapper"></div>
    </div>

    <!-- certificate -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Certificates</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-certificate">+ Add</button>
        </div>
        <div class="card-body" id="certificate-wrapper"></div>
    </div>
    

    <!-- LANGUAGES -->

    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Languages</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-langug">+ Add</button>
        </div>
        <div class="card-body" id="langug-wrapper"></div>
    </div>

    <!-- INTERESTS -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span class="fw-bold">Interests / Hobbies</span>
            <button type="button" class="btn btn-sm btn-primary" id="add-interest">+ Add</button>
        </div>
        <div class="card-body" id="interest-wrapper"></div>
    </div>

    <button class="btn btn-success">Save CV</button>

</form>
@endsection