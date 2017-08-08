<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function indexAction() {
        return view('irunerrands.index', ['home_active' =>'active']);
    }
    public function aboutAction() {
        return view('irunerrands.about', ['about_active' =>'active']);
    }
    public function servicesAction() {
        return view('irunerrands.services', ['services_active' =>'active']);
    }
    public function ratesAction($rate = null) {
        return view('irunerrands.rates', ['rates_active' =>'active', 'rate' => $rate]);
    }
    public function contactsAction() {
        return view('irunerrands.contacts', ['contact_active' =>'active']);
    }
}

