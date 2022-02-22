<?php

namespace App\Http\Controllers;

use App\Http\Resources\LinkResource;
use App\Models\Link;
use App\Models\Query;
use Illuminate\Http\Request;
use OpenGraph;

class LinkController extends Controller
{
    public function show(Request $request)
    {
        $url = $request->input('link');

        $parsedUrl = parse_url($url);

        $domainName =  $parsedUrl['host'];

        $website = Link::query()->where('domain', 'like', "%{$domainName}%")->first();

        if (!$website) {
            $websiteMetaData = OpenGraph::fetch($domainName, true);

            $website = Link::create([
                'domain' => $domainName,
                'title' => $websiteMetaData['title'] ?? null,
                'description' => $websiteMetaData['description'] ?? null,
            ]);
        }

        $query = Query::create(['link_id' => $website->id]);

        return LinkResource::make($website);
    }
}
