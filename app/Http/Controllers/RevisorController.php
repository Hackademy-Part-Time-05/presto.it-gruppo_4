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
        $announcements_checked = Announcement::whereNot('is_accepted', null)->where('revised_by', Auth::user()->id)->orderBy('created_at', 'asc')->get();
        return view('revisor.index', compact('announcement_to_check', 'announcements_checked'));
    }

    public function acceptAnnouncement(Announcement $announcement) {
        $announcement->setAccepted(true);
        $announcement->setRevisedBy(Auth::user()->id);
        return redirect()->back()->with('message', __('ui.congratulationsYouHaveAcceptedTheAdvertisement'));
    }

    public function rejectAnnouncement(Announcement $announcement) {
        $announcement->setAccepted(false);
        $announcement->setRevisedBy(Auth::user()->id);
        return redirect()->back()->with('message', __('ui.congratulationsYouHaveRejectedTheAdvertisement'));
    }

    public function resetAnnouncement(Announcement $announcement) {
        $announcement->setAccepted(null);
        return redirect()->back()->with('message', 'Hai rimesso in coda l\'annuncio per la revisione');
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
