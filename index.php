<?php
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="styles.css"></link>
  <title>form</title>
  </head>
  <body>
    <!-- sec 1 -->
    <!-- Product name, price , order ID, date -->
      <h1> Order Summary</h1>
      
      <!DOCTYPE html>
      <html lang="en">
          <head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->
    
<!-- <div class="bg__image">

    </div> -->
    
    <div class="container">
 <div>
    <article>
  Product name : Queen size bed
  <br>
  Rent : 500 INR
  <br>
  Order Id : 2350078AWB
  <br>
  Date : 23/02/2023
  <br>
</article>
 </div>
 <br>

<button class= "btn" onclick="myFunction()">
<a href="/sec_two.php">
  Next
</button>

</div>
  </div>
  <script>
function myFunction() {
  location.replace("/rental_form/sec_two.php")
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>