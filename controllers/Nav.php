<?php

class Nav {

    public function header() {
        $header = [
            'links' => [
                ['url'=>'/', 'name'=>'Home'],
                ['url'=>'/about', 'name'=>'About'],
                ['url'=>'/contact', 'name'=>'Contact'],
            ]
        ];
        return $header;
    }

    public function footer() {
        $footer = [
            'links' => [
                ['url'=>'/about', 'name'=>'About'],
                ['url'=>'/contact', 'name'=>'Contact'],
            ]
        ];
        return $footer;
    }
}