<?php

namespace App\Http\Controllers;

use App\Mail\becomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller {
    public function index() {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement) {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', __('ui.congratulationsYouHaveAcceptedTheAdvertisement'));
    }

    public function rejectAnnouncement(Announcement $announcement) {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', __('ui.congratulationsYouHaveRejectedTheAdvertisement'));
    }

    public function becomeRevisor() {
        Mail::to('admin@presto.it')->send(new becomeRevisor(Auth::user()));
        return redirect()->back()->with('message', __('ui.congratulationsYouHaveSuccessfullyRequestedToBecomeaReviewer'));
    }

    public function makeRevisor(User $user) {
        Artisan::call('app:make-user-revisor', ["email" => $user->email]);
        return redirect('/')->with('message', __('ui.congratulationsTheUserHasBecomeaReviewer'));
    }
}
