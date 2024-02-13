<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\YlfUser;
use App\Notifications\ContactUs;
use BinshopsBlog\Models\BinshopsUploadedPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required|string',
            ]);

            $user = (new User)->forceFill([
                'name'
                => $request->name,
                'email' => config('app.email'),
            ]);
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ];


            $user->notify(new ContactUs($data));
            Session::flash('alert-class', 'alert-success');
            Session::flash('message', 'Message received, Thank you!!');
            return redirect()->back()->with('success');
        }
        return view('pages.contact');
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function forum()
    {
        return view('pages.forum');
    }

    public function gallery()
    {
        $images = BinshopsUploadedPhoto::where('source', 'ImageUpload')->orderBy('created_at', 'desc')->get();

        return view('pages.gallery', [
            'images' => $images
        ]);
    }

    public function registration(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'surname' => 'required|string',
                'other_name' => 'required|string',
                'madian_name' => 'required|string',
                'email' => 'required|email',
                'sex' => 'required|in:male,female',
                'marital_status' => 'required|in:single,married,divorced,widowed',
                'religion' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'home_town' => 'required|string|max:255',
                'lga' => 'required|string|max:255',
                'home_address' => 'required|string',
                'tel_no' => 'required|string|max:20',
                'education_qualification' => 'required|string|max:255',
                'why_join' => 'required|string',
                'next_of_kin_details' => 'required|string',
                'photo' => 'required|image|max:2048', // Assuming maximum file size is 2MB
            ]);

            // Handle image upload
            $imagePath = $request->file('photo')->storePublicly('images', 'public'); // Store the image in the 'images' directory
            $user = new YlfUser;
            $user->sex = $request->sex;
            $user->email = $request->email;
            $user->other_name = $request->other_name;
            $user->madian_name = $request->madian_name;
            $user->marital_status = $request->marital_status;
            $user->religion = $request->religion;
            $user->date_of_birth = $request->date_of_birth;
            $user->home_town = $request->home_town;
            $user->lga = $request->lga;
            $user->home_address = $request->home_address;
            $user->tel_no = $request->tel_no;
            $user->education_qualification = $request->education_qualification;
            $user->why_join = $request->why_join;
            $user->next_of_kin_details = $request->next_of_kin_details;
            $user->photo = $imagePath; // Save the image path
            $user->save();

            return redirect()->route('ylf-success');
        }


        return view('pages.ylf-registration');
    }

    public function ylf_success()
    {
        return view('pages.ylf-success');
    }
}
