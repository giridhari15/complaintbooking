<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css" type="text/css">
    <title>Registration | Complaint Booking</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Registeration</h2>
            </div>
            <div class="card-body">
                <form method="post" action="post_registeration.php">
                    <input type="text" name="name" placeholder="Full Name" class="input" required>
                    <input type="text" name="email" placeholder="Email Address" class="input" required>
                    <input type="password" name="password" placeholder="Password" class="input" required>
                    <input type="text" name="phone" placeholder="Phone Number" class="input" required>
                    <input type="text" name="block_no" placeholder="Block Number" class="input" required>
                    <input type="text" name="apartment_no" placeholder="Apartment Number" class="input" required>
                    <button class="submit-btn" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>