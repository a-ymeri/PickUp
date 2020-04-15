<?php
class Event {
  // Properties
  public $event_id,$date,$time,$title,$location;


  function __construct($event_id,$date,$time,$title,$location) {
    $this->event_id = $event_id;
    $this->date = $date;
    $this->time = $time;
    $this->title = $title;
    $this->location = $location;
  }

 
  function set_eventid($event_id)
  {
    $this->event_id = $event_id;
  }


  function get_eventid() {
    return $this->event_id;
  }

  function get_date() {
    return $this->date;
  }

  function get_time() {
    return $this->time;
  }


  function get_location() {
    return $this->location;
  }

  function get_title() {
    return $this->title;
  }

}

?>