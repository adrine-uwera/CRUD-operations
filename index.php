<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Sample website</title>
</head>
<body>
    <div class="container">
        <form action="php/create.php" method="post">
            <h4 class="display-4 text-center">Create User</h4><hr><br>
            <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];?>
            </div>
            <?php }?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input 
                    type="name" 
                    class="form-control" 
                    id="name" 
                    name="name" 
                    value="<?php if(isset($_GET['name'])) echo($_GET['name']); ?>"
                    placeholder="Enter your name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input 
                    type="email" 
                    class="form-control" 
                    id="email"
                    name="email" 
                    value="<?php if(isset($_GET['email'])) echo($_GET['email']); ?>"
                    placeholder="Enter your email">
            </div>
        
            <button 
                type="submit" 
                class="btn btn-primary" 
                name="create">Create</button>
            <a href="read.php" class='link-primary'>View</a>
        </form>
    </div>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>
</html>