<?php
class Event
{
    // Properties
    public $event_id, $date, $time, $title, $lat, $lng;


    function __construct($event_id, $date, $time, $title, $lat, $lng)
    {
        $this->event_id = $event_id;
        $this->date = $date;
        $this->time = $time;
        $this->title = $title;
        $this->lat = $lat;
        $this->lng = $lng;
    }

    function get_eventid()
    {
        return $this->event_id;
    }

    function get_date()
    {
        return $this->date;
    }

    function get_time()
    {
        return $this->time;
    }


    function get_lat()
    {
        return $this->lat;
    }

    function get_lng()
    {
        return $this->lat;
    }

    function get_title()
    {
        return $this->title;
    }
}

?>