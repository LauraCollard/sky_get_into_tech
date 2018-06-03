<?php
session_start();
if (isset($_POST["reset"])){
    $_SESSION["chats"] = Array();
    header("Location: index.php");
    return;
}
if (isset($_POST["message"])){
    if (!isset($_SESSION["chats"])) $_SESSION["chats"]= Array();  //initialising the chat
    $_SESSION["chats"] [] = array($_POST["message"], date(DATE_RFC2822)); //or adding a new item
    header("Location: index.php");
    return;
}
?>

<html>
    <head></head>
    <body>
        <h1>Chat</h1>
        <form method="post" action="index.php">
            <p>
            <input type="text" name="message" size="60">
            <input type="submit" value="Chat">
            <input type="submit" name="reset" value="Reset">
            </p>
        </form>
        <div id="chatcontent">
            <img src="spinner.gif" alt="Loading...">
        </div>
        <script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript">

            function updateMsg(){
                window.console && console.log("Requesting JSON");
                $.getJSON("chatlist.php", function(rowz){
                    window.console && console.log("JSON received");
                    window.console && console.log(rowz);
                    $('#chatcontent').empty();
                    for (var i=0; i<rowz.length; i++){
                        entry= rowz[i];
                        $("#chatcontent").append("<p>"+entry[0]+"<br>&nbsp;&nbsp;"+entry[1]+"</p>\n");
                    }
                    setTimeout("updateMsg()", 4000); //JS: please run this code every 4 seconds
                });
            }
            
            $(document).ready(function (){
                $.ajaxSetup({cache:false}); //make sure JSON requests are not cached (we want to go to the server every time)
                updateMsg();
            });

        </script>
    </body>
</html>