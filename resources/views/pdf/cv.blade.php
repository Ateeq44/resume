<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $resume->full_name }}</title>
</head>
<body style="margin:0; padding:0; font-family:Arial, Helvetica, sans-serif;">

    <div style="padding:50px 40px;border:2px solid #b34cff;background:#0a2f7a;color:#ffffff;">
        <div style="font-size:36px;text-align:center;font-weight:700;">
            {{ $resume->full_name }}
        </div>

        <table width="100%" style="margin-top:25px;font-size:14px;">
            <tr>
                <td align="center">{{ $resume->phone }}</td>
                <td align="center">{{ $resume->email }}</td>
                <td align="center">{{ $resume->address }}</td>
            </tr>
        </table>
    </div>

    @if($resume->objective)
    <div style="margin:25px 30px;">
        <strong>About Me</strong>
        <p>{{ $resume->objective }}</p>
    </div>
    @endif


    <!-- MAIN LAYOUT -->
    <!-- MAIN CONTENT WRAPPER -->
<div style="padding:0 30px;">

    <!-- LEFT COLUMN -->
    <div style="width:65%; float:left; padding-right:30px; box-sizing:border-box;">

        <!-- EXPERIENCE -->
        @if($resume->experiences->count())
        <div style="margin-bottom:30px;">
            <h3>Experience</h3>

            @foreach($resume->experiences as $exp)
                <strong>{{ $exp->title }}</strong>
                <span style="float:right;">
                    {{ date('Y', strtotime($exp->start_date)) }} –
                    {{ date('Y', strtotime($exp->end_date)) }}
                </span>
                <div style="clear:both;"></div>

                <div>{{ $exp->company }}</div>

                @if($exp->description)
                    <p>{{ $exp->description }}</p>
                @endif
            @endforeach
        </div>
        @endif

        <!-- EDUCATION -->
        @if($resume->educations->count())
        <div>
            <h3>Education</h3>

            @foreach($resume->educations as $edu)
                <strong>{{ $edu->degree }}</strong>
                <span style="float:right;">
                    {{ date('Y', strtotime($edu->start_date)) }} –
                    {{ date('Y', strtotime($edu->end_date)) }}
                </span>
                <div style="clear:both;"></div>

                <div>{{ $edu->institute }}</div>
            @endforeach
        </div>
        @endif
    </div>

    <!-- RIGHT COLUMN -->
    <div style="width:35%; float:right; box-sizing:border-box;">

        @if($resume->skills->count())
        <h3>Skills</h3>
        <ul>
            @foreach($resume->skills as $skill)
                <li>{{ $skill->name }}</li>
            @endforeach
        </ul>
        @endif

        @if($resume->language->count())
        <h3>Languages</h3>
        <ul>
            @foreach($resume->language as $lang)
                <li>{{ $lang->name }}</li>
            @endforeach
        </ul>
        @endif

        <h3>Reference</h3>
        <p>Reference will be provided on demand</p>
    </div>

    <div style="clear:both;"></div>
</div>


</body>
</html>
