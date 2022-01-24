<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bletchley Park Home Page</title>
</head>

<body>
  <?php
  $thisPage = "Home";
  include_once "includes/navigation.inc.php";
  ?>
  <h1 class='mt-3'>Bletchley Park Home Page</h1>
  <h2>Welcome to the Bletchley Park Web Application</h2>

<div class='d-flex justify-content-evenly mt-3' >
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">How to use?</h5>
      <h6 class="card-subtitle mb-2 text-muted">Instructions</h6>
      <p class="card-text">To navigate the web application please use the drop down icon at the top of the page. </p>
      <p class="card-text">To Get data from the table, select the get option and then select what data you would like to see. </p>
      <p class="card-text">To Insert data into the table, select the Insert option and then select what Table you would like to insert into. </p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">What was Bletchley Park?</h5>
      <h6 class="card-subtitle mb-2 text-muted">Information</h6>
      <p class="card-text">Bletchley Park is a heritage site in Milton Keynes, Buckinghamshire which attracts visitors from all over the world. During the Second World War, it was the home for many codebreakers who managed successfully to decipher the communications of the Nazi powers, most famously the Enigma machine and the Lorenz cipher, which were used for the administration of the German submarines known as U-Boats. The most famous of Bletchley Park's codebreakers was the mathematician Alan Turing, the founder of Informatics  </p>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">How to use?</h5>
      <h6 class="card-subtitle mb-2 text-muted">Instructions</h6>
      <p class="card-text">To navigate the web application please use the drop down icon at the top of the page. </p>
    </div>
  </div>
</div>
  
</body>

</html>