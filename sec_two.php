<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $showAlert = false;
    
    include '/rental_form/_dbconnect.php';
    $name = $_POST["name"];
    $number = $_POST["num"];
    $email = $_POST["email"];
    $address = $_POST["add"];
    $exists =false;
    if($exists == false){
        $sql = "INSERT INTO 'submissions1998' ('name','num','email', 'add')
        VALUES ('$name', '$number', '$email', '$address')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
        if($showAlert){

            echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Successful!</h4>
            <p>Your form is submitted successfully.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">x</span>
            </button>
          </div>'
           
           ;
        }
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Section 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h2>Please fill the form</h2>

<!-- sec 2 -->
<!-- Name, number, email, address -->
 <br>


<form action="/rental_form/sec_three.php" method="post">
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" >
    </div>

    <div class="mb-3">
    <label for="exampleInputNumber1" class="form-label">Number</label>
    <input type="tel" name="num" class="form-control" id="num">
        </div>
    
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputAddress1" class="form-label">Address</label>
    <input type="text" name="add" class="form-control" id="num">
        </div>

        <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
  <label class="form-check-label" for="flexCheckChecked">
    <a href="/rental_form/policy.html">Return/Exchange policy</a>
  </label>
</div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>