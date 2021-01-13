<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <title><?php echo "Welcome to {$_SERVER['SERVER_NAME']}" ?></title>
    </head>
    <body>



    <div class="card text-center w-50">
        <div class="card-header">
            <h1>
                PHP Info
            </h1>
        </div>

    <div class="card-body">
        <iframe class="card-text" src="/info.php" ></iframe>
        </div>
        </div>
    




    <div class="card text-center w-50">
        <div class="card-header">
           <h1> Database Info </h1>
        </div>
    <div class="card-body">
        <iframe class="card-text" src="/db.php"></iframe>
    </div>
    </div>


    
        <script src="/js/jquery-3.5.1.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
