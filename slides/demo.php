<?php

interface Meetup {}

class Speaker
{
    private $speaker;

    public function __construct($speaker)
    {
        $this->speaker = $speaker;
    }
}

class PhpOxfordMeet extends stdClass implements Meetup
{
    private $date = "2018-08-29";

    public function speaker(): Speaker
    {
        return new Speaker("Gareth Ellis");
    }
}

$phpOxford = new PhpOxfordMeet();
$reflected = new ReflectionClass(PhpOxfordMeet::class);

var_dump();
