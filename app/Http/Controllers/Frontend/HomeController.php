<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectCategories;
use App\Models\Tallents;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categories = ProjectCategories::all();

        $mobileRequest = $request->header('sec-ch-ua-mobile');
        // dd($mobileRequest);

        $xml=simplexml_load_file("http://fetchrss.com/rss/6163bb4465c6a34d4a4a1b536163bc498abc1b7e6a0d97d2.xml") or die("Error: Cannot create object");

        $fb_news = [];

        foreach ($xml->channel->item as $key => $itemr)
        {
        array_push($fb_news,$itemr);
        }

        $last_fb_news = $fb_news[0];
        // dd($last_fb_news);

        $doc = new \DOMDocument();
        $doc->loadHTML($last_fb_news->description);
        $xpath = new \DOMXPath($doc);
        $src = $xpath->evaluate("string(//img/@src)");

        $last_fb_news->image = $src;


        $mobileRequest = $request->header('sec-ch-ua-mobile');
        // dd($mobileRequest);

        $xml=simplexml_load_file("https://rss.app/feeds/LFinv3T4E3n1dzHx.xml") or die("Error: Cannot create object");
            
        $twitter_news = [];

        foreach ($xml->channel->item as $key => $itemr)
        {
        array_push($twitter_news,$itemr);
        }

        // dd($twitter_news);
        
        $last_twitter_news = $twitter_news[0];
        // dd($last_twitter_news->description);

        $mobileRequest = $request->header('sec-ch-ua-mobile');

        return view('frontend.index',[
            'categories' => $categories,
            'last_fb_news' => $last_fb_news,
            'last_twitter_news' =>$last_twitter_news
        ]);
    }
}
