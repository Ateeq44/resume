@extends('layouts.app')
@section('content')

<a href="{{ url('/generate-pdf', $resume->id) }}" class="btn btn-success">Download</a>
<div style="width: 768px;">
    
<div style="background:#0a2f7a; color:#fff; padding:35px 30px; margin-top: 50px;">

    <div style="font-size:30px; font-weight:bold; text-align:center; letter-spacing:1px;">
        {{ $resume->full_name }}
    </div>

    <div style="margin-top:15px; text-align:center; font-size:13px;">
        {{ $resume->phone }} &nbsp; | &nbsp;
        {{ $resume->email }} &nbsp; | &nbsp;
        {{ $resume->address }}
    </div>

</div>

<!-- ================= ABOUT ================= -->
@if($resume->objective)
<div style="padding:25px 30px; border-bottom:1px solid #ddd;">
    <div style="font-size:16px; font-weight:bold; margin-bottom:8px; color:#0a2f7a;">
        ABOUT ME
    </div>
    <div style="line-height:1.7; color:#555;">
        {{ $resume->objective }}
    </div>
</div>
@endif


<!-- ================= CONTENT ================= -->
<div style="padding:30px;">

    <!-- LEFT COLUMN -->
    <div style="width:65%; float:left; padding-right:25px; box-sizing:border-box;">

        <!-- EXPERIENCE -->
        @if($resume->experiences->count())
        <div style="margin-bottom:28px;">
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:12px;">
                EXPERIENCE
            </div>

            @foreach($resume->experiences as $exp)
                <div style="margin-bottom:16px;">
                    <div style="font-weight:bold;">
                        {{ $exp->title }}
                        <span style="float:right; color:#777;">
                            {{ date('Y', strtotime($exp->start_date)) }} –
                            {{ date('Y', strtotime($exp->end_date)) }}
                        </span>
                    </div>
                    <div style="clear:both;"></div>

                    <div style="color:#555; font-weight:600; margin-top:2px;">
                        {{ $exp->company }}
                    </div>

                    @if($exp->description)
                    <div style="margin-top:6px; line-height:1.6; color:#666;">
                        {{ $exp->description }}
                    </div>
                    @endif
                </div>
            @endforeach
        </div>
        @endif


        <!-- EDUCATION -->
        @if($resume->educations->count())
        <div style="margin-bottom:28px;">
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:12px;">
                EDUCATION
            </div>

            @foreach($resume->educations as $edu)
                <div style="margin-bottom:14px;">
                    <div style="font-weight:bold;">
                        {{ $edu->degree }}
                        <span style="float:right; color:#777;">
                            {{ date('Y', strtotime($edu->start_date)) }} –
                            {{ date('Y', strtotime($edu->end_date)) }}
                        </span>
                    </div>
                    <div style="clear:both;"></div>

                    <div style="color:#555;">
                        {{ $edu->institute }}
                    </div>
                </div>
            @endforeach
        </div>
        @endif


        <!-- CERTIFICATES -->
        @if($resume->certificate->count())
        <div>
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:12px;">
                CERTIFICATIONS
            </div>

            @foreach($resume->certificate as $cert)
                <div style="margin-bottom:12px;">
                    <strong>{{ $cert->title }}</strong>
                    <span style="float:right; color:#777;font-weight:bold;">
                        {{ date('Y', strtotime($cert->start_date)) }} –
                        {{ date('Y', strtotime($cert->end_date)) }}
                    </span>
                    <div style="clear:both;"></div>
                    <div style="color:#555;">{{ $cert->institute }}</div>
                </div>
            @endforeach
        </div>
        @endif

    </div>


    <!-- RIGHT COLUMN -->
    <div style="width:35%; float:right; box-sizing:border-box;">

        <!-- SKILLS -->
        @if($resume->skills->count())
        <div style="margin-bottom:24px;">
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:10px;">
                SKILLS
            </div>
            <ul style="padding-left:18px; margin:0; line-height:1.8;">
                @foreach($resume->skills as $skill)
                    <li>{{ $skill->name }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <!-- LANGUAGES -->
        @if($resume->language->count())
        <div style="margin-bottom:24px;">
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:10px;">
                LANGUAGES
            </div>
            <ul style="padding-left:18px; margin:0; line-height:1.8;">
                @foreach($resume->language as $lang)
                    <li>{{ $lang->name }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <!-- INTERESTS -->
        @if($resume->interests->count())
        <div style="margin-bottom:24px;">
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:10px;">
                INTERESTS
            </div>
            <ul style="padding-left:18px; margin:0; line-height:1.8;">
                @foreach($resume->interests as $interest)
                    <li>{{ $interest->name }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <!-- REFERENCE -->
        <div>
            <div style="font-size:16px; font-weight:bold; color:#0a2f7a; margin-bottom:6px;">
                REFERENCE
            </div>
            <div style="color:#555;">
                Reference will be provided on demand
            </div>
        </div>

    </div>

    <div style="clear:both;"></div>
</div>

</div>

@endsection