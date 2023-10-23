<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use App\About;
use App\Product;
use App\HomeTitle;
use App\Client;
use App\Mission;
use App\Project;
use App\Contact;
use App\HomeSlider;
use App\Settings;
use App\Service;
use App\SeoPage;
use SEO;
use App\Vision;

class PageController extends Controller
{
    public function __construct()
    {
        app()->singleton('contact', function () {
            return Settings::findOrFail(1);
        });
    }
    public function setSeo($page_data)
    {
        $url = url()->current();
        SEO::setTitle($page_data->meta_title, false);
        SEO::setDescription($page_data->meta_description, false);
        SEOMeta::setKeywords($page_data->meta_keywords, false);
        SEOTools::opengraph()->setUrl($url);
        SEOTools::opengraph()->addProperty('type', 'article');
        if ($page_data->image != NULL) {
            SEO::addImages(asset('assets/seo/' . $page_data->image));
        }
    }

    public function home()
    {
        

        // $url = url()->current();

        // SEOTools::setTitle('Tracking and Monitoring | Tam', false);
        // SEOTools::setDescription('Tracking and monitoring technology enterprise is an established company in Nigeria. We are your trusted partner for automation, digital solutions GIS, and IoT.');
        // SEOMeta::setKeywords('Tracking and monitoring, Automation technology, Digital solutions company, GIS services, IoT solutions provider, Technology automation experts, TAM, Innovative technology solutions, IoT implementation services, tam in nigeria');
        // SEOTools::opengraph()->setUrl($url);
        // SEOTools::setCanonical($url);
        // SEOTools::opengraph()->addProperty('type', 'article');
        // SEOTools::addImages('/assets/images/tam-logo.png');

        $page_data = SeoPage::find(1);
        $this->setSeo($page_data);

        $about_section = About::where('id',1)->get();
        $products = Product::all();
        $product_title = HomeTitle::where('id',1)->get();
        $client_title = HomeTitle::where('id',3)->get();
        $clients = Client::all();
        $missions = Mission::where('id',1)->get();
        $projects = Project::all();
        $project_title = HomeTitle::where('id',2)->get();
        $contact_section = Contact::where('id',1)->get();
        $sliders = HomeSlider::all();
        $service_section = Service::where('id',1)->get();
        $vision_section = Vision::where('id',1)->get();


        return view('pages.home',compact('page_data','about_section','products','product_title','client_title','clients','missions','projects',
        'project_title','contact_section','sliders','service_section','vision_section'));
    }


}


