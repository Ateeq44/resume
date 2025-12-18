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
    <table width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <td colspan="2">
                <!-- HEADER -->
                <div style="padding:50px 40px;border:2px solid #b34cff;background:#0a2f7a;color:#ffffff;box-sizing:border-box;">
                    <div style="font-size:36px;text-align:center;font-weight:700;letter-spacing:2px;">
                        {{ $resume->full_name }}
                    </div>

                    <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:25px;font-size:14px;">
                        <tr>
                            <td align="center">{{ $resume->phone }}</td>
                            <td align="center">{{ $resume->email }}</td>
                            <td align="center">{{ $resume->address }}</td>
                        </tr>
                    </table>
                </div>
                <!-- ABOUT / OBJECTIVE --> 
                @if($resume->objective) 
                <div style="margin:35px 0px;"> <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:15px;"> About Me </div> <div style="font-size:14px;line-height:1.7;color:#888;"> {{ $resume->objective }} </div> </div> 
                @endif
            </td>
        </tr>
    </table>
    <table width="100%" cellspacing="0" cellpadding="0">


        <tr>

            <!-- LEFT COLUMN -->
            <td width="65%" valign="top" style="padding-right:30px;">

                <!-- EXPERIENCE -->
                @if($resume->experiences->count())
                <div style="margin-bottom:40px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:20px;">
                        Experience
                    </div>

                    @foreach($resume->experiences as $exp)
                    <table width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td style="font-weight:700;color:#333;">{{ $exp->title }}</td>
                            <td align="right" style="color:#777;">
                                {{ date('Y', strtotime($exp->start_date)) }} –
                                {{ date('Y', strtotime($exp->end_date)) }}
                            </td>
                        </tr>
                    </table>
                    <div style="font-weight:600;margin:5px 0;">{{ $exp->company }}</div>

                    @if($exp->description)
                    <div style="font-size:14px;color:#888;line-height:1.6;margin-bottom:20px;">
                        {{ $exp->description }}
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif

                <!-- EDUCATION -->
                @if($resume->educations->count())
                <div style="margin-bottom:40px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:20px;">
                        Education
                    </div>

                    @foreach($resume->educations as $edu)
                    <table width="100%" style="margin-bottom:10px;">
                        <tr>
                            <td>
                                <div style="font-weight:700;">{{ $edu->degree }}</div>
                                <div style="color:#888;">{{ $edu->institute }}</div>
                            </td>
                            <td align="right" style="color:#777;">
                                {{ date('Y', strtotime($edu->start_date)) }} –
                                {{ date('Y', strtotime($edu->end_date)) }}
                            </td>
                        </tr>
                    </table>
                    @endforeach
                </div>
                @endif

                <!-- CERTIFICATES -->
                @if($resume->certificate->count())
                <div style="margin-bottom:40px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:20px;">
                        Certificates
                    </div>

                    @foreach($resume->certificate as $cert)
                    <table width="100%" style="margin-bottom:10px;">
                        <tr>
                            <td>
                                <div style="font-weight:700;">{{ $cert->title }}</div>
                                <div style="color:#888;">{{ $cert->institute }}</div>
                            </td>
                            <td align="right" style="color:#777;">
                                {{ date('Y', strtotime($cert->start_date)) }} –
                                {{ date('Y', strtotime($cert->end_date)) }}
                            </td>
                        </tr>
                    </table>
                    @endforeach
                </div>
                @endif

            </td>

            <!-- RIGHT COLUMN -->
            <td width="35%" valign="top">

                <!-- SKILLS -->
                @if($resume->skills->count())
                <div style="margin-bottom:35px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:15px;">
                        Skills
                    </div>
                    <ul style="padding-left:18px;font-size:14px;color:#777;line-height:1.9;">
                        @foreach($resume->skills as $skill)
                        <li>{{ $skill->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- LANGUAGES -->
                @if($resume->language->count())
                <div style="margin-bottom:35px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:15px;">
                        Language
                    </div>
                    <ul style="padding-left:18px;font-size:14px;color:#777;line-height:1.9;">
                        @foreach($resume->language as $lang)
                        <li>{{ $lang->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- HOBBIES -->
                @if($resume->interests->count())
                <div style="margin-bottom:35px;">
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:15px;">
                        Hobbies / Interest
                    </div>
                    <ul style="padding-left:18px;font-size:14px;color:#777;line-height:1.9;">
                        @foreach($resume->interests as $interest)
                        <li>{{ $interest->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- REFERENCE -->
                <div>
                    <div style="font-size:20px;font-weight:700;letter-spacing:2px;color:#333;margin-bottom:12px;">
                        Reference
                    </div>
                    <div style="font-size:14px;">
                       <p>
                           Reference will be provided on demand     
                       </p> 
                   </div>
               </div>

           </td>
       </tr>
   </table>

</body>
</html>
