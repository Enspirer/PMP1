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
        
        // dd($xml);

        $fb_news = [];

        foreach ($xml->channel->item as $key => $itemr)
        {
        array_push($fb_news,$itemr);
        }

        // dd($fb_news);

        $last_fb_news = $fb_news[0];

        // dd($last_fb_news);

        $doc = new \DOMDocument();
        $doc->loadHTML($last_fb_news->description);
        $xpath = new \DOMXPath($doc);
        $src = $xpath->evaluate("string(//img/@src)");

        // dd($src);

        $last_fb_news->image = $src;

        // dd($last_fb_news);   

        $mobileRequest = $request->header('sec-ch-ua-mobile');

        return view('frontend.index',[
            'categories' => $categories,
            'last_fb_news' => $last_fb_news
        ]);
    }
}
