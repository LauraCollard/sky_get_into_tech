<html>
    <head></head>
    <body>
        <p>Howdy - Let's get a JSON list</p>
        <p>Have a look in the console for objects</p>
        <script type="text/javascript" src="../Chat_app/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.getJSON("getjson.php", function(data){
                    for (var i=0; i<data.length; i++){ 
                        window.console && console.log(data[i]);
                    }
                })
            });
        </script>
    </body>
</html>