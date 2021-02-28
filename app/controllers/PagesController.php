<?php


class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        require 'public/views/home.view.php';
    }

    /**
     * Show the users page.
     */
    public function users()
    {
        $users = App::get('database')->getAllUser();

        //die(var_dump($users)); //debug

        require 'public/views/users.view.php';
    }

    /**
     * Show the ads page.
     */
    public function ads()
    {
        $ads = App::get('database')->getAllAd();

        //die(var_dump($ads)); //debug

        require 'public/views/ads.view.php';
    }
}