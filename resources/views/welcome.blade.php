@extends('layouts.user')
@section('content')

<div class="bg-gradients-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="text-light">A Smarter Way to Build Your Resume Online</h1>
                <p  class="text-light">Build your perfect resume with Resume Maker App — quick, smart, and easy.</p>
                <a href="{{ url('login') }}" class="btn btn-success">Build My Resume Now</a>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>
<div class="container p-60">
    <div class="row">
        <div class="col-md-6 px-4">

        </div>
        <div class="col-md-6 px-4">
            <h1 class="text-dark">Build Your Resume Anywhere with Our Mobile-Friendly Builder</h1>
            <p  class="text-dark">Create a professional resume in minutes with Resume Maker App, a fully responsive tool. Simply enter your work experience, skills, and career goals from any smartphone, tablet, or desktop browser, and instantly generate a polished, ATS-friendly resume ready to send.</p>
            <a href="{{ url('login') }}" class="btn btn-success">Build My Resume Now</a>
        </div>
    </div>
</div>
<div class="container p-60">
    <div class="row">
        <div class="col-md-12 px-4">
            <h2>What’s Included in Resume Maker App’s Free Plan</h2>
            <p>Our free plan is one of the most generous among resume builders. Here’s what you get:</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col px-4">
            <div class="card">
                <div class="card-body">
                <img style="width: 50px;" src="{{asset('images/g.png')}}" class="card-img-top mb-3" alt="{{asset('images/g.png')}}">
                    <h5 class="card-title">Your First Resume Is Free Forever</h5>
                    <p class="card-text">Create, edit, and save one resume for free, for life. No trial period, no credit card, no auto-upgrade.</p>
                </div>
            </div>
        </div>
        <div class="col px-4">
            <div class="card">
                <div class="card-body">
                <img style="width: 50px;" src="{{asset('images/3.png')}}" class="card-img-top mb-3" alt="{{asset('images/3.png')}}">
                    <h5 class="card-title">Unlimited PDF Downloads</h5>
                    <p class="card-text">Edit, update, and download your free resume as often as you like. There are no limits on downloads</p>
                </div>
            </div>
        </div>
        <div class="col px-4">
            <div class="card">
                <div class="card-body">
                <img style="width: 50px;" src="{{asset('images/2.png')}}" class="card-img-top mb-3" alt="{{asset('images/2.png')}}">
                    <h5 class="card-title">Your Resume, Your Style</h5>
                    <p class="card-text">We never brand your resume. No logos, no watermarks — your resume is entirely yours.</p>
                </div>
            </div>
        </div>
        <div class="col px-4">
            <div class="card">
                <div class="card-body">
                <img style="width: 50px;" src="{{asset('images/4.png')}}" class="card-img-top mb-3" alt="{{asset('images/4.png')}}">
                    <h5 class="card-title">We Respect Your Privacy</h5>
                    <p class="card-text">Resume Maker App is privacy-first and GDPR-compliant. Your data is never shared, and you can delete it anytime.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-4 bg-orange">
    <div class="container text-center">
        <span class="text-light" style="font-size: 20px;">&copy; {{ date('Y') }} <a style="color: #004aad; font-weight: bold;" href="{{url('/')}}">Resume Maker.</a> All rights reserved.</span>
    </div>
</footer>
@endsection