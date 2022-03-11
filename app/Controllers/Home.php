<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $release_version = getenv('RELEASE_VERSION');
        if ($release_version == "") {
            $release_version = "default";
        };

        $data['release_version'] = $release_version;
        
        return view('welcome_message', $data);
    }
}
