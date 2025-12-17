@extends('layouts.app')
@section('content')

<div id="preview" class="row">

    <!-- LEFT COLUMN -->
    <div class="left-col col-md-6">
        <h3>Contact</h3>
        <p id="p_phone">{{ $resume->phone }}</p>
        <p id="p_email">{{ $resume->email }}</p>
        <p id="p_address">{{ $resume->address }}</p>

        <h4>Skills</h4>
        <ul id="p_skills">
            @foreach(explode(',', $resume->skills ?? '') as $skill)
                @if(trim($skill) != '')
                    <li>{{ trim($skill) }}</li>
                @endif
            @endforeach
        </ul>

        <h4>Languages</h4>
        <ul id="p_languages">
            @foreach(explode(',', $resume->languages ?? '') as $lang)
                @if(trim($lang) != '')
                    <li>{{ trim($lang) }}</li>
                @endif
            @endforeach
        </ul>

        <h4>Hobbies</h4>
        <ul id="p_interests">
            @foreach($resume->interests as $interest)
                <li>{{ $interest->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="right-col col-md-6">

        <h2 class="fw-bold" id="p_name">{{ $resume->full_name }}</h2>
        <h5 class="fw-bold" id="p_job_title">{{ $resume->job_title ?? '' }}</h5>

        <!-- OBJECTIVE -->
        @if($resume->objective)
        <div class="section" id="sec_objective">
            <h4>Objective</h4>
            <p id="p_objective">{{ $resume->objective }}</p>
        </div>
        @endif

        <!-- EXPERIENCE -->
        @if($resume->experiences->count())
        <div class="section" id="sec_experience">
            <h4>Work Experience</h4>
            <div id="p_experience">
                @foreach($resume->experiences as $exp)
                    <div class="mb-3">
                        <div style="display:flex; justify-content:space-between;">
                            <strong>{{ $exp->title }}</strong>
                            <span>
                                {{ date('d-m-Y', strtotime($exp->start_date)) }} |
                                {{ date('d-m-Y', strtotime($exp->end_date)) }} 
                            </span>
                        </div>
                        <div><em>{{ $exp->company }}</em></div>

                        @if($exp->description)
                        <ul>
                            <li>{{ $exp->description }}</li>
                        </ul>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- EDUCATION -->
        @if($resume->educations->count())
        <div class="section" id="sec_education">
            <h4>Education</h4>
            <div id="p_education">
                @foreach($resume->educations as $edu)
                    <div class="mb-3">
                        <div style="display:flex; justify-content:space-between;">
                            <strong>{{ $edu->degree }}</strong>
                            <span>
                                {{ date('d-m-Y', strtotime($edu->start_date)) }} |
                                {{ date('d-m-Y', strtotime($edu->end_date)) }} 
                            </span>
                        </div>
                        <div><em>{{ $edu->institute }}</em></div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- PROJECTS -->
        @if($resume->projects)
        <div class="section" id="sec_projects">
            <h4>Projects</h4>
            <p id="p_projects">{{ $resume->projects }}</p>
        </div>
        @endif

    </div>
</div>


@endsection