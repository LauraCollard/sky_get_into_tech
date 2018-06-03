<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP POST</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <body>
        <style>
            .container{
                margin-bottom: 30px;
            }
            .welcome{
                margin-top: 50px;
            }
            .input-field{
                padding: 10px 0 10px 0;
            }
            input {
                width: 400px;
            }
            button {
                margin-top: 20px;
            }
        </style>
        <div class="container welcome">
            <h1>Welcome!</h1>
            <hr>
        </div>
        <div class="container">
                <form action="" method="POST">
                    <div class="input-field">
                    Username*:<br><input type="text" name="username" placeholder="Name" autofocus="True" required/>
                    </div>
                    <div class="input-field">
                    Email*:<br><input type="email" name="email" placeholder="example@example.com" required/>
                    </div>
                    <div class="input-field">
                    Date of Birth:<br><input type="date" name="birthdate" placeholder="01/01/1980"/>
                    <!-- input type date doesn't work the same in Safari-->
                    </div>
                    <div class="input-field">
                    Country:<br><input type="text" name="country" placeholder="United Kingdom"/>
                    </div>
                    <button type="submit" class="btn btn-primary">OK</button>
                </form>
        </div>

        <?php
        if (!empty($_POST)) {
            echo "<div class='container'>";
            echo "<h3>Welcome $_POST[username]</h3>"; 
            echo "<h3>You live in $_POST[country]</h3>";
            echo "<h3>Your email is: $_POST[email]</h3>";
            echo "<h3>Your date of birth is: $_POST[birthdate]</h3>";
            echo "</div";
        }
        else{
        echo "<div class='container'><h4>You have not submitted any data to the server</h4></div>";
        }
        ?>
         
    </body>
</html>
