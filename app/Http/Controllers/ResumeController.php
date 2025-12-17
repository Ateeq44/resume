<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Resume;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use App\Models\Skills;
use App\Models\Certificates;
use App\Models\Languages;


class ResumeController extends Controller
{
	public function index()
	{
		return view('resume.create');
	}

	public function store(Request $request)
	{
		$resume = Resume::create($request->only([
			'full_name','email','phone','address',
			'objective'
		]));

        // EDUCATION
		if ($request->education_degree) {
			foreach ($request->education_degree as $i => $degree) {
				Education::create([
					'resume_id' => $resume->id,
					'degree' => $degree,
					'institute' => $request->education_institute[$i],
					'start_date' => $request->education_start_date[$i],
					'end_date' => $request->education_end_date[$i],
				]);
			}
		}

        // EXPERIENCE
		if ($request->experience_title) {
			foreach ($request->experience_title as $i => $title) {
				Experience::create([
					'resume_id' => $resume->id,
					'title' => $title,
					'company' => $request->experience_company[$i],
					'start_date' => $request->experience_start_date[$i],
					'end_date' => $request->experience_end_date[$i],
					'description' => $request->experience_description[$i],
				]);
			}
		}
        
		// SKILLS
		if ($request->skills) {
			foreach ($request->skills as $skill) {
				Skills::create([
					'resume_id' => $resume->id,
					'name' => $skill
				]);
			}
		}

		// CERTIFICATES
		if ($request->certificate_title) {
			foreach ($request->certificate_title as $i => $title) {
				Certificates::create([
					'resume_id' => $resume->id,
					'title' => $title,
					'institute' => $request->certificate_institute[$i],
					'start_date' => $request->certificate_start_date[$i],
					'end_date' => $request->certificate_end_date[$i],
					'description' => $request->certificate_description[$i],
				]);
			}
		}

		// LANGUAGES
		if ($request->languages) {
			foreach ($request->languages as $language) {
				Languages::create([
					'resume_id' => $resume->id,
					'name' => $language
				]);
			}
		}

        // INTERESTS
		if ($request->interests) {
			foreach ($request->interests as $interest) {
				Interest::create([
					'resume_id' => $resume->id,
					'name' => $interest
				]);
			}
		}

		return redirect()->back()->with('success','CV Saved Successfully');
	}

	public function show($id)
	{
		$resume = Resume::with(['educations','experiences','interests'])->findOrFail($id);
		return view('resume.show', compact('resume'));
	}
}
