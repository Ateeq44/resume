<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #preview {
  display: flex !important;
  width: 100%;
  background: #fff;
  margin-top: 20px;
}
ul{
  padding-left: 20px;
}
.left-col {
  width: 35%;
  background: #2c3e50;
  color: #fff;
  padding: 20px;
}
.left-col h4 {
  border-bottom: 1px solid #888;
  padding-bottom: 5px;
  margin-top: 20px;
}
.left-col p {
  margin: 5px 0;
  font-size: 14px;
}
.right-col {
  width: 65%;
  padding: 20px;
}
.right-col h2 {
  margin-top: 0;
  color: #2c3e50;
}
.section {
  margin-top: 20px;
}
.section h4 {
  margin-bottom: 5px;
  color: #2c3e50;
  border-bottom: 1px solid #ccc;
}
.section p {
  white-space: pre-wrap;
}
    </style>
</head>
<body>
    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Page Heading -->

    <!-- Page Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Bootstrap 5 JS Bundle (with Popper) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JS -->
<script>
$(document).ready(function(){

// EDUCATION
$('#add-education').click(function(){
$('#education-wrapper').append(`
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
    <div class="col-12 text-end">
        <button type="button" class="btn btn-sm btn-danger remove">Remove</button>
    </div>
</div>
</div>
`);
});

// EXPERIENCE
$('#add-experience').click(function(){
$('#experience-wrapper').append(`
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
    </div>
    <div class="col-12">
        <textarea name="experience_description[]" class="form-control" placeholder="Job Description"></textarea>
    </div>
    <div class="col-12 text-end">
        <button type="button" class="btn btn-sm btn-danger remove">Remove</button>
    </div>
</div>
</div>
`);
});

// INTEREST
$('#add-interest').click(function(){
$('#interest-wrapper').append(`
<div class="input-group mb-2">
    <input type="text" name="interests[]" class="form-control" placeholder="Interest / Hobby">
    <button type="button" class="btn btn-danger remove">X</button>
</div>
`);
});

// Skills
$('#add-skills').click(function(){
$('#skills-wrapper').append(`
<div class="input-group mb-2">
    <input type="text" name="skills[]" class="form-control" placeholder="">
    <button type="button" class="btn btn-danger remove">X</button>
</div>
`);
});

// EXPERIENCE
$('#add-certificate').click(function(){
$('#certificate-wrapper').append(`
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
    <div class="col-12 text-end">
        <button type="button" class="btn btn-sm btn-danger remove">Remove</button>
    </div>
</div>
</div>
`);
});

// Languages
$('#add-langug').click(function(){
$('#langug-wrapper').append(`
<div class="input-group mb-2">
    <input type="text" name="languages[]" class="form-control" placeholder="English ,Urdu">
    <button type="button" class="btn btn-danger remove">X</button>
</div>
`);
});




// REMOVE
$(document).on('click','.remove',function(){
$(this).closest('.border, .input-group').remove();
});

});
</script>
</body>
</html>

