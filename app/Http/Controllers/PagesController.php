<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function posters()
    {
        return view('pages/posters');
    }


    public function pages($page = 'main') {
        return view('pages/musicians/' . $page);
    }

    public function musicians($musician = 'curt') {
        return view('pages/musicians/' . $musician)
            ->with('title', 'All About ' . ucfirst($musician))
            ->with('blurb', '');
    }

    public function racewalking($page = 'main')
    {
        return view('pages/racewalking/'.$page)
            ->with('title', 'Racewalking')
            ->with('blurb', 'Racewalking is a long-distance discipline within the sport of athletics. Although it is a foot race, it is different from running in that one foot must appear to be in contact with the ground at all times. This is assessed by race judges, making it the most subjective of the disciplines in athletics. Typically held on either roads or on running tracks, common distances vary from 3000 metres (1.8 mi) up to 100 kilometres (62.1 mi).');
    }

    //
    //  Testing
    public function test() { return view('pages/test'); }

}
