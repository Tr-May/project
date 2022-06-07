<html>
    <head>
        <title>Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css
">
    </head>
    <body class="container mt-5 bg-secondary">
        <h2>Registration Form</h2>
        <?php if(isset($_GET['form_submitted'])){?>
            <p class="text-primary">
                Welcome <?php echo $_GET['firstname']." ".$_GET['lastname'] ?> <br>
                <a class="nav-link text-warning" href="<?php echo $_SERVER['PHP_SELF']; ?>">Go Back</a>
            </p>
        <?php }else{?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">  
                <input type="text" name="firstname" class="form-control w-25" placeholder="First Name"> <br> 
                <input type="text" name="lastname" class="form-control w-25" placeholder="Last Name">
                <input type="hidden" name="form_submitted" value="1" /> <br>
                <input type="submit" value="Submit" class="btn btn-warning">
        </form> 
        <?php  } ?>      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>  
    </body>
</html>