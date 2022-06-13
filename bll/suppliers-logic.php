<?php

require_once "../dal/dal.php";

function getAllSuppliers() {
    $sql = "SELECT SupplierID AS id, CompanyName AS companyName, ContactName AS contactName, Phone AS phone, Country AS country, City AS city FROM Suppliers";

    $suppliers = select($sql);

    return $suppliers;

}

function addSupplier($supplier) {

    $sql = "INSERT INTO Suppliers(CompanyName, ContactName, Phone, Country, City) " . 
    "VALUES('$supplier->companyName', '$supplier->contactName', '$supplier->phone', '$supplier->country', '$supplier->city')";

    $id = execute($sql);

    $supplier->id = $id;

    return $supplier;

}

function updateSupplier($supplier) {

    $sql = "UPDATE Suppliers " . 
    "SET CompanyName = '$supplier->companyName', ContactName = '$supplier->contactName', Phone = '$supplier->phone', Country = '$supplier->country', City = '$supplier->city' " .
    "WHERE SupplierID = $supplier->id";

    execute($sql);

    return $supplier;
}

function deleteSupplier($id) {

    $sql = "DELETE FROM Suppliers WHERE SupplierID = $id";

    execute($sql);
}

