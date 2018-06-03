<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="upload.css">
        <title>File upload</title>
    </head>
    <body>
        <div class="container-fluid">
            <form action="UploadPage.php" method="post" enctype="multipart/form-data">Pick a file to upload:
                <!--<input type="hidden" name="MAX_FILE_SIZE" value="10000000">-->
                <input type="file" name="fileToUpload">
                <br>
                <input class="btn btn-primary" type="submit" value="Upload my file!">
            </form>
        </div>
        
    </body>
</html>
