<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/button.css">
    <title>REGISTER</title>
</head>
<body>
    <div class="container">
        <form action="register-submit.php" method="POST">
                <h1>CREAT AN ACCOUNT</h1>
                <div class="form-group">
                    <label for="">Fullname:</label>
                    <input type="text" class="form-control" placeholder="Enter fullname" name="fullname">
                </div>
                <div class="form-group">
                    <label for="">Phonenumber:</label>
                    <input type="number" class="form-control" placeholder="Enter phonenumber" name="phonenumber">
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <input type="number" class="form-control" placeholder="Enter address" name="address">
                </div>
                <div class="form-group">
                    <label for="">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                </div>
                <div class="form-group">
                    <label for="">Re-Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="pwd">
                </div>
                <div class='button'>
                    <a href="index.php">
                        <button type="button" class="btn btn-secondary">BACK</button>
                    </a> 
                    <button type="submit" class="btn btn-primary" name='submit'>REGISTER</button>
                    <button type="reset" class="btn btn-warning">RESET</button>
                </div>
        </form>
    </div>             
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>