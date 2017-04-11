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

					<label for="username">Username:</label>
					<input type="textbox" name="username" value=" "/>
					<label for="password">Password:</label>
					<input type="password" name="password" value="">
					<input type="submit" value="Login">
		
				</form>
            </div>
        </div>
    </body>
</html>
