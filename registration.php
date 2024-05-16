<!DOCTYPE html>
<html>

<head>
    <title>jQuery Form Example</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="form.js"></script>
</head>

<body>
    <div class="col-sm-6 col-sm-offset-3">
        <h1>Processing an AJAX Form</h1>

        <form action="process.php" method="POST">
            <div id="name-group" class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" />
            </div>
            <div id="name-group" class="form-group">
                <label for="name">userName</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="userName" />
            </div>

            <div id="email-group" class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" />
            </div>

            <div id="name-group" class="form-group">
                <label for="name">password</label>
                <input type="text" password="form-control" id="password" name="password" placeholder="password" />
            </div>
            <div id="name-group" class="form-group">
                <label for="name">confirmPassword</label>
                <input type="text" confirmPassword="form-control" id="confirmPassword" name="confirmPassword"
                    placeholder="confirmPassword" />
            </div>

            <button type="submit" class="btn btn-success">
                Submit
            </button>
        </form>
    </div>
</body>

</html>