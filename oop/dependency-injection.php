<?php

class TwitterClient
{
    public function getTweets($handle)
    {
        return [
            'This is a tweet',
            'Another tweet'
        ];
    }
}

class TwitterManager
{
    protected $client;

    public function __construct(TwitterClient $client)
    {
        $this->client = $client;
    }

    public function getTweetsByUser($handle)
    {
        return $this->client->getTweets($handle);
    }
}

$twitterClient = new TwitterClient();
$twitterManager = new TwitterManager($twitterClient);


print_r($twitterManager->getTweetsByUser('clement'));