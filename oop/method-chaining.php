<?php

class SearchRequest
{
    protected $query;
    protected $limit;

    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    public function setLimit($limit = 100)
    {
        $this->limit = $limit;
        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getLimit()
    {
        return $this->limit;
    }
}

class SearchService
{
    public function search(SearchRequest $request)
    {
        print_r($request);
    }
}

$service = new SearchService;
$request = new SearchRequest;

/*
$request->setQuery('oop');
$request->setLimit(50);
*/
$request->setQuery('oop')->setLimit(50);

$service->search($request);

/*
$request = new SearchRequest;
$request->setQuery('oop');
$request->setLimit(10);
$request->setPerPage(10);
$request->setQuery('oop')->setLimit(10)->setPerPage(10);
*/
