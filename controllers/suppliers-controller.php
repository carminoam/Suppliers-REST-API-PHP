<?php

require_once "../bll/suppliers-logic.php";
require_once "../models/supplier-model.php";

$command = $_REQUEST["command"];

switch ($command) {

    case "add":
        $companyName = $_POST["companyName"];
        $contactName = $_POST["contactName"];
        $phone = $_POST["phone"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $supplier = new SupplierModel(null, $companyName, $contactName, $phone, $country, $city);
        addSupplier($supplier);
        header("location: ../pages/complete.php");
        break;
    case "update":
        $id = $_POST["id"];
        $companyName = $_POST["companyName"];
        $contactName = $_POST["contactName"];
        $phone = $_POST["phone"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $supplier = new SupplierModel($id, $companyName, $contactName, $phone, $country, $city);
        updateSupplier($supplier);
        header("location: ../pages/complete.php");
        break;
    case "delete":
        $id = $_POST["id"];
        deleteSupplier($id);
        header("location: ../pages/complete.php");
        break;
}
