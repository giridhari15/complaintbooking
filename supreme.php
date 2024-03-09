<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="supreme.css" type="text/css">
    <title>Login | Complaint Booking</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Admin Login</h2>
            </div>
            <div class="card-body">
                <form method="post" action="check_supreme.php">
                    <input type="password" name="userid" placeholder="User Id" class="input" required>
                    <input type="password" name="password" placeholder="Password" class="input" required>
                    <button class="submit-btn" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>