<?php

class AppController extends BaseController {    
    protected $layout = "layouts.default";

    public function getTopUrls(){    	
    	$data = Input::get();    
    	$url_obj = new Url();
    	$urls = $url_obj->lists('short_url');
    	return $urls;
    }

    public function shortUrl() {
    	$data = Input::get();    	
    	$long_url = $data["long_url"];
		$random = $this->generateRandomString(5);	
		$url_obj = new Url();
		if($url_obj->saveShortUrl($long_url,$random)){
			return $random;
		}
    }

    public function redirect($string){
    	$url_obj = new Url();
    	$url = $url_obj->where("short_url",$string)->first();
    	return Redirect::to($url->long_url);
    }

    public function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

    // public function shortUrl(){
    // 	// $data = Input::get();
    // }
}
