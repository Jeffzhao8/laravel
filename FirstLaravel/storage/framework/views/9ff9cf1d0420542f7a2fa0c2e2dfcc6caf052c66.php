<!DOCTYPE html>
<html>
<body>





</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;

            }

            .content {
                text-align: center;
                display: inline-block;
            }
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
					<form action="store" method="POST">
					  Username:<br>
					  <input type="text" name="username" value="" />
					  <br>
					  Email :<br>
					  <input type="text" name="email" value=" " />
					  <br><br>
					  Password :<br>
					  <input type="password" name="password" value="" />
					  <br><br>

					  <input type="submit" value="Submit">
					  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
					</form> 
            </div>
        </div>
    </body>
</html>
