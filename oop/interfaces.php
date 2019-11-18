<?php

class Task
{

}

interface TaskStorageInterface
{
    public function get($id);
    public function store(Task $task);
}

class DatabaseStorage implements TaskStorageInterface
{
    public function get($id)
    {

    }

    public function store(Task $task)
    {

    }
}

class FileStorage implements TaskStorageInterface
{
    public function get($id)
    {

    }

    public function store(Task $task)
    {

    }
}

$storage = new DatabaseStorage;
$file = new FileStorage;