<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Contact;
use App\Photography;
use App\Projecten;
use App\ProjectenSingle;
use App\team;
use App\webdesign;
use Mail;
use Session;

class PagesController extends Controller
{
  public function home() {
    return view('pages.home');
  }

  public function webdesign() {
    $webdesign = Webdesign::firstorFail();
    return view('pages.webdesign', compact('webdesign'));
  }

  public function fotografie() {
    $photography = Photography::firstorFail();
    return view('pages.fotografie', compact('photography'));
  }

  public function projecten() {
    $projects = Projecten::all();
    return view('pages.projecten', compact('projects'));
  }

  public function projecten_view($project_name) {
    $project_view = ProjectenSingle::find($project_name);
    $project_id = ProjectenSingle::find($project_name)->pluck('project_id');
    $project = Projecten::find($project_id);

    return view('pages.project-single', compact('project_view','project'));
  }

  public function team() {
    $teams = Team::all();
    return view('pages.team', compact('teams'));
  }

  public function contact() {
    $contact = Contact::firstorFail();
    return view('pages.contact', compact('contact'));
  }

  public function getcontact(Request $request) {
    $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'telephone' => 'required',
         'textmessage' => 'min:10']);

     $data = array(
         'email' => $request->email,
         'name' => $request->name,
         'telephone' => $request->telephone,
         'textmessage' => $request->textmessage
         );

     Mail::send('emails.contact', $data, function($message) use ($data){
         $message->from($data['email']);
         $message->to('merphoweb@gmail.com');
         $message->subject($data['name']);
     });

     Session::flash('success', 'Je email is gestuurd!');

     return redirect('/contact');
  }

}
