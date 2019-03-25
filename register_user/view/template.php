
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/icon.css">
</head>
<body>
    
    <div class="container mt-5">
        <h1>Quiz MVC</h1>
        <hr>
        <?php if($data['page'] !== "login" && $data['page'] !== "register"): ?>
            <div class="text-right">
                <a href="index.php?action=login" class="btn btn-danger">Logout</a>
            </div>
        <?php endif; ?>

        <?php include_once "pages/" . $data['page'] . ".php" ;?>
    </div>

</body>
</html>

