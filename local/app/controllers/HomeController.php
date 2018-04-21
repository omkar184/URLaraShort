<?php

class HomeController extends BaseController {    
    protected $layout = "layouts.default";
    public function home() {
        $this->layout->content = View::make('home/home');
    }

}
