<?php

class Job {
    private $position;
    private $company;
    private $description;
    private $years;

    function __construct($new_position, $new_company, $new_description, $new_years)
    {
        $this->position = $new_position;
        $this->company = $new_company;
        $this->description = $new_description;
        $this->years = $new_years;
    }

    function setPosition($new_position)
    {
        $this->position = $new_position;
    }

    function getPosition()
    {
        return $this->position;
    }

    function setCompany($new_company)
    {
        $this->company = $new_company;
    }

    function getCompany()
    {
        return $this->company;
    }

    function setDescription($new_description)
    {
        $this->description = $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setYears($new_years)
    {
        $this->years = $new_years;
    }

    function getYears()
    {
        return $this->years;
    }
}

?>
