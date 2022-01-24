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
$thisPage = "Update";
include_once "includes/navigation.inc.php";
?>


<body>
    <h1>Bletchley Park Soldier Update</h1>

    <h2>Update a Soldier:</h2>

    <form method="post" action="includes/UpdateSoldier.inc.php" class="mt-3">
        <div class="input-group mt-3 mb-3">
            <label for="Column">Select Column to Update: </label>
            <select class="form-select" name="Column" id="Location">
                <option selected>Choose Column</option>
                <option value="FirstName">First Name</option>
                <option value="LastName">Last Name</option>
                <option value="Rank">Rank</option>
                <option value="LocationID">Location ID</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Value" class="form-label">Value: - (Please add '' around value) </label>
            <input type="text" class="form-control" name="Value" id="Value">
        </div>
        <div class="mb-3">
            <label for="SoldierID" class="form-label">SoldierID: </label>
            <input type="text" class="form-control" name="SoldierID" id="SoldierID">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>