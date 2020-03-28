<?php

namespace Application\Controllers;

class PagesController {

    public function about() {
        return view('about');
    }

    public function aboutCulture() {
        $company = "Acme Inc.";

        return view('about-culture', ['company'=>$company]);
    }

    public function contact() {
        return view('contact');
    }

}