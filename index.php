<!DOCTYPE html>
<html>
<head>
    <title>ContactForm</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <h3>Connect With Us!</h3>
    <form action="data.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="form-group">
            <label>Mobile:</label>
            <input type="tel" name="mobile" class="form-control" pattern="^\d{4}-\d{3}-\d{3}$" placeholder="1111-111-111" required >
        </div>
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="message" placeholder="Your Descrption" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
</div>


</body>
</html>