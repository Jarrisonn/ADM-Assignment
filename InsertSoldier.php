<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include_once "includes/db.inc.php";
$thisPage = "InsertSoldier";
include_once "includes/navigation.inc.php";
?>

<body>
    <h2>Add a soldier to the Database!</h2>
    <form method="post" action="includes/InsertSoldier.inc.php" class='form'>
        <div class="mb-3">
            <label for="FirstName" class="form-label">First Name: </label>
            <input type="text" class="form-control" name="FirstName" id="FirstName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="LastName" class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="LastName" id="LastName">
        </div>
        <div class="mb-3">
            <label for="Rank" class="form-label">Rank: </label>
            <input type="text" class="form-control" name="Rank" id="Rank">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="Location">Location</label>
            <select class="form-select" name="Location" id="Location">
                <option selected>Choose Location</option>
                <option value="1">One - The Park Gate</option>
                <option value="2">Two - The Mansion</option>
                <option value="3">Three - The Storage</option>
                <option value="4">Four - The Hut</option>
                <option value="5">Five - Message Translation Service</option>
                <option value="6">Six - Secret Intelligence Service</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>