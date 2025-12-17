<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PDF Example</title>
    
</head>
<body>

<div id="preview" style="width:100%; font-family:DejaVu Sans, Arial, sans-serif; font-size:12px; color:#000;">

    <!-- ROW -->
    <div style="width:100%; clear:both;">

        <!-- LEFT COLUMN -->
        <div class="left-col" style="width:48%; float:left; padding:10px; box-sizing:border-box;">

            <h3 style="margin:0 0 6px 0; font-size:16px;">Contact</h3>
            <p id="p_phone" style="margin:2px 0;">{{ $resume->phone }}</p>
            <p id="p_email" style="margin:2px 0;">{{ $resume->email }}</p>
            <p id="p_address" style="margin:2px 0 10px 0;">{{ $resume->address }}</p>

            <h4 style="margin:10px 0 5px 0;">Skills</h4>
            <ul id="p_skills" style="margin:0; padding-left:15px;">
                @foreach($resume->skills as $skill)
                    <li>{{ $skill->name }}</li>
                @endforeach
            </ul>

            <h4 style="margin:10px 0 5px 0;">Languages</h4>
            <ul id="p_languages" style="margin:0; padding-left:15px;">
                @foreach($resume->language as $lang)
                    <li>{{ $lang->name }}</li>
                @endforeach
            </ul>

            <h4 style="margin:10px 0 5px 0;">Hobbies</h4>
            <ul id="p_interests" style="margin:0; padding-left:15px;">
                @foreach($resume->interests as $interest)
                    <li>{{ $interest->name }}</li>
                @endforeach
            </ul>

            <h4 style="margin:10px 0 5px 0;">Reference</h4>
            <p style="margin:0;">Reference will be provided on demand</p>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-col" style="width:48%; float:right; padding:10px; box-sizing:border-box;">

            <h2 id="p_name" style="margin:0; font-size:20px; font-weight:bold;">
                {{ $resume->full_name }}
            </h2>

            <h5 id="p_job_title" style="margin:4px 0 12px 0; font-size:14px; font-weight:bold;">
                {{ $resume->job_title ?? '' }}
            </h5>

            <!-- OBJECTIVE -->
            @if($resume->objective)
            <div class="section" id="sec_objective" style="margin-bottom:10px;">
                <h4 style="margin:0 0 5px 0;">Objective</h4>
                <p id="p_objective" style="margin:0;">{{ $resume->objective }}</p>
            </div>
            @endif

            <!-- EDUCATION -->
            @if($resume->educations->count())
            <div class="section" id="sec_education" style="margin-bottom:10px;">
                <h4 style="margin:0 0 5px 0;">Education</h4>

                <div id="p_education">
                    @foreach($resume->educations as $edu)
                        <div style="margin-bottom:8px;">
                            <div>
                                <strong>{{ $edu->degree }}</strong>
                                <span style="float:right;">
                                    {{ date('d-m-Y', strtotime($edu->start_date)) }} |
                                    {{ date('d-m-Y', strtotime($edu->end_date)) }}
                                </span>
                            </div>
                            <div style="clear:both; font-weight:500;">
                                {{ $edu->institute }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- EXPERIENCE -->
            @if($resume->experiences->count())
            <div class="section" id="sec_experience" style="margin-bottom:10px;">
                <h4 style="margin:0 0 5px 0;">Work Experience</h4>

                <div id="p_experience">
                    @foreach($resume->experiences as $exp)
                        <div style="margin-bottom:8px;">
                            <div>
                                <strong>{{ $exp->title }}</strong>
                                <span style="float:right;">
                                    {{ date('d-m-Y', strtotime($exp->start_date)) }} |
                                    {{ date('d-m-Y', strtotime($exp->end_date)) }}
                                </span>
                            </div>

                            <div style="clear:both; font-weight:500;">
                                {{ $exp->company }}
                            </div>

                            @if($exp->description)
                                <p style="margin:3px 0 0 0;">
                                    {{ $exp->description }}
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- CERTIFICATE -->
            @if($resume->certificate->count())
            <div class="section" style="margin-bottom:10px;">
                <h4 style="margin:0 0 5px 0;">Certificate</h4>

                <div>
                    @foreach($resume->certificate as $exp)
                        <div style="margin-bottom:8px;">
                            <div>
                                <strong>{{ $exp->title }}</strong>
                                <span style="float:right;">
                                    {{ date('d-m-Y', strtotime($exp->start_date)) }} |
                                    {{ date('d-m-Y', strtotime($exp->end_date)) }}
                                </span>
                            </div>

                            <div style="clear:both; font-weight:500;">
                                {{ $exp->institute }}
                            </div>

                            @if($exp->description)
                                <p style="margin:3px 0 0 0;">
                                    {{ $exp->description }}
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>

        <div style="clear:both;"></div>
    </div>
</div>



</body>
</html>
