<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutTitle;
use App\Models\Achievement;
use App\Models\AchievementTitle;
use App\Models\Address;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Client;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Content;
use App\Models\Copyright;
use App\Models\Favicon;
use App\Models\Feature;
use App\Models\FeatureTitle;
use App\Models\Feedback;
use App\Models\Head;
use App\Models\Header;
use App\Models\Heading;
use App\Models\Home;
use App\Models\Link;
use App\Models\Logo;
use App\Models\Option;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Top;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $home = Home::all()->first();
        $logo = Logo::all()->first();
        $feature_title = FeatureTitle::all()->first();
        $feature = Feature::all()->first();
        $achievement = Achievement::all()->first();
        $achievement_title = AchievementTitle::all()->first();
        $about = About::all()->first();
        $about_title = AboutTitle::all()->first();
        $company = Company::all()->first();
        $video = Video::all()->first();
        $category = Category::all()->first();
        $content = Content::all()->first();
        $project = Project::all()->first();
        $client = Client::all()->first();
        $feedback = Feedback::all()->first();
        $header = Header::all()->first();
        $blog = Blog::all()->first();
        $head = Head::all()->first();
        $top = Top::all()->first();
        $address = Address::all()->first();
        $heading = Heading::all()->first();
        $pricing = Pricing::all()->first();
        $option = Option::all()->first();
        $link = Link::all()->first();
        $favicon = Favicon::all()->first();
        $copyright = Copyright::all()->first();

        return view('front.home.index',
            compact(
                'home',
                'logo',
                'feature_title',
                'feature',
                'achievement',
                'achievement_title',
                'about',
                'about_title',
                'company',
                'video',
                'category',
                'content',
                'project',
                'client',
                'feedback',
                'header',
                'blog',
                'head',
                'top',
                'address',
                'heading',
                'pricing',
                'option',
                'link',
                'favicon',
                'copyright'
                ),

            [
            'brands'        => Brand::all(),
            'categories'    => Category::all(),
            'projects'      => Project::all(),
            'feedbacks'     => Feedback::all(),
            'blogs'         => Blog::all(),
            'pricings'      => Pricing::all(),
            'options'       => Option::all(),
            'links'         => Link::all(),
            'features'      => Feature::all(),
            'achievements'  => Achievement::all(),
            'abouts'        => About::all(),
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.home.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::createContact($request);
        return back()->with('message','Contact send successfully.');
    }

}
