<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Suppliers</title>
</head>

<body>
    <h1>Suppliers</h1>
    <table>
        <thead>
            <tr>
                <td>Company Name</td>
                <td>Contact Person</td>
                <td>Phone</td>
                <td>Country</td>
                <td>City</td>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "../bll/suppliers-logic.php";
            $suppliers = getAllSuppliers();
            foreach ($suppliers as $s) {
                echo "<tr>" .
                    "<td>$s->companyName</td>" .
                    "<td>$s->contactName</td>" .
                    "<td>$s->phone</td>" .
                    "<td>$s->country</td>" .
                    "<td>$s->city</td>" .
                    "</tr>";
            } ?>
        </tbody>
    </table>
    <br />

    <hr />

    <h2>Add Supplier</h2>
    <form action="../controllers/suppliers-controller.php" method="POST">

        <label>Company Name :</label>
        <input type="text" name="companyName" />

        <label>Contact Name :</label>
        <input type="text" name="contactName" />

        <label>Phone Number :</label>
        <input type="text" name="phone" />

        <label>Country :</label>
        <input type="text" name="country" />

        <label>City :</label>
        <input type="text" name="city" />

        <input type="hidden" name="command" value="add" />

        <button>Add</button>

    </form>

    <hr />

    <h2>Update Supplier</h2>
    <form action="../controllers/suppliers-controller.php" method="POST">

        <label>Supplier</label>
        <select name="id">
            <option selected disabled> Choose Supplier ... </option>
            <?php
            require_once "../bll/suppliers-logic.php";
            $suppliers = getAllSuppliers();
            foreach ($suppliers as $s) {
                echo "<option value='$s->id' > $s->companyName </option>";
            } ?>
        </select>

        <label>Company Name :</label>
        <input type="text" name="companyName" />

        <label>Contact Name :</label>
        <input type="text" name="contactName" />

        <label>Phone Number :</label>
        <input type="text" name="phone" />

        <label>Country :</label>
        <input type="text" name="country" />

        <label>City :</label>
        <input type="text" name="city" />

        <input type="hidden" name="command" value="update" />

        <button>Update</button>

    </form>

    <hr />

    <h2>Delete Supplier</h2>
    <form action="../controllers/suppliers-controller.php" method="POST">

        <label>Supplier</label>
        <select name="id">
            <option selected disabled> Choose Supplier ... </option>
            <?php
            require_once "../bll/suppliers-logic.php";
            $suppliers = getAllSuppliers();
            foreach ($suppliers as $s) {
                echo "<option value='$s->id' > $s->companyName </option>";
            }?>
        </select>

        <input type="hidden" name="command" value="delete" />

        <button>Delete</button>

    </form>
</body>

</html>