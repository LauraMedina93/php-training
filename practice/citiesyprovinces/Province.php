<?php

namespace citiesyprovinces;

class Province
{
    public $name;
    public $cities;

    public function __construct($name)
    {
        $this->name = $name;
        $this->cities = array();
    }
    public function setName(City $city)
    {
        $this->cities[] = $city;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getCities()
    {
        return $this->cities;
    }
}
?>