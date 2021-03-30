<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div>
            <form method="post" id="userData" class="form-horizontal">  
                <div class="form-group">
                    <label class="control-label col-sm-2">Name: </label>
                    <div class="col-sm-10">
                        <input type="text" name="Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Email: </label>
                    <div class="col-sm-10">
                        <input type="email" name="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Password: </label>
                    <div class="col-sm-10">
                        <input type="password" name="Password" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="Submit" value="submit" class='btn btn-success'> 
                    </div>
                </div>
            </form>
        </div>
        <div>
            <table class='table '>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody id='records'>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js?v=1"></script>
    <script src="script.js"></script>
</body>
</html>