<?php

class SupplierModel {

    public $id;
    public $companyName;
    public $contactName;
    public $phone;
    public $country;
    public $city;

    public function __construct($id, $companyName, $contactName, $phone, $country, $city) {
        $this->id = $id;
        $this->companyName = $companyName;
        $this->contactName = $contactName;
        $this->phone = $phone;
        $this->country = $country;
        $this->city = $city;
    }

}