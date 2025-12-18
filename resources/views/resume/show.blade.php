@extends('layouts.app')
@section('content')

<a href="{{ url('/generate-pdf', $resume->id) }}" class="btn btn-success">Download</a>

<div id="preview" class="row">
    <div class="col-md-12">
        <h2 class="fw-bold text-center" id="p_name">{{ $resume->full_name }}</h2>
        <!-- OBJECTIVE -->
        @if($resume->objective)
        <div class="section px-3 py-4" id="sec_objective">
            <p id="p_objective ">{{ $resume->objective }}</p>
        </div>
        @endif

    </div>
    <!-- LEFT COLUMN -->
    <div class="left-col col-md-6">
        <h3>Contact</h3>
        <p id="p_phone">{{ $resume->phone }}</p>
        <p id="p_email">{{ $resume->email }}</p>
        <p id="p_address">{{ $resume->address }}</p>

        <h4>Skills</h4>
        <ul id="p_skills">
            @foreach($resume->skills as $skill)
                    <li>{{ $skill->name }}</li>
            @endforeach
        </ul>

        <h4>Languages</h4>
        <ul id="p_languages">
            @foreach($resume->language as $lang)
                    <li>{{ $lang->name}}</li>
            @endforeach
        </ul>

        <h4>Hobbies</h4>
        <ul id="p_interests">
            @foreach($resume->interests as $interest)
                <li>{{ $interest->name }}</li>
            @endforeach
        </ul>
        <h4>Reference</h4>
        <p>
            Reference will be provided on demand
        </p>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="right-col col-md-6">

        
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
                                {{ date('Y', strtotime($edu->start_date)) }} |
                                {{ date('Y', strtotime($edu->end_date)) }} 
                            </span>
                        </div>
                        <div style="    font-weight: 500;">{{ $edu->institute }}</div>
                    </div>
                @endforeach
            </div>
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
                            <div>
                                {{ date('Y', strtotime($exp->start_date)) }}    
                                <span>|</span>    
                                @if($exp->end_date)
                                {{ date('Y', strtotime($exp->end_date)) }}
                                @else
                                present
                                @endif
                            </div>
                        </div>
                        <div style="font-weight: 500;">{{ $exp->company }}</div>

                        @if($exp->description)
                            <p>{{ $exp->description }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- EXPERIENCE -->
        @if($resume->experiences->count())
        <div class="section" id="sec_experience">
            <h4>Certificate</h4>
            <div id="p_experience">
                @foreach($resume->certificate as $certif)
                    <div class="mb-3">
                        <div style="display:flex; justify-content:space-between;">
                            <strong>{{ $certif->title }}</strong>
                            <div>
                                {{ date('Y', strtotime($certif->start_date)) }}    
                            <span>|</span>
                                {{ date('Y', strtotime($certif->end_date)) }}
                            </div>
                        </div>
                        <div style="font-weight: 500;">{{ $certif->institute }}</div>

                        @if($certif->description)
                            <p>{{ $certif->description }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>


@endsection