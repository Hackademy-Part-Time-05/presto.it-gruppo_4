<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {

    public function create() {
        return view('announcements.create');
    }

    public function showAnnouncement(Announcement $announcement) {
        return view('announcements.show', compact('announcement'));
    }

    public function indexAnnouncement() {
        $announcements = Announcement::where('is_accepted', true)->get();
        return view('announcements.index', compact('announcements'));
    }
}
