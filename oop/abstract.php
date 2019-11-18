<?php

abstract class Service
{
    abstract function getRedirectUri();
}

class FacebookService extends Service
{
    public function getRedirectUri() {
        return 'url';
    }

}

class TwitterService extends Service
{
    public function getRedirectUri() {
        return 'url';
    }
}

// $service = new Service; // Ininteresting
$facebook = new FacebookService;
echo $facebook->getRedirectUri();