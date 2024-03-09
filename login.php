<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <title>Login | Complaint Booking</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Login</h2>
            </div>
            <div class="card-body">
                <form method="post" action="post_login.php">
                    <input type="text" name="email" placeholder="Email Address" class="input" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>" required>
                    <input type="password" name="password" placeholder="Password" class="input" required>
                    <button class="submit-btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>