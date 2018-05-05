
<?php
  $Ctime = date("Y-m-d h:i:sa");
  $time= date("h:i:sa");
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php echo $user->name; ?> Hng Intern</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" id="css" href="http://www.oracle.com/webfolder/technetwork/jet/css/libs/oj/v5.0.0/alta/oj-alta-min.css">
      <link rel="stylesheet" href="../css/demo.css"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <link href="https://fonts.googleapis.com/css?family=Josefin%20Sans:400,500,600,700" rel='stylesheet' type='text/css'/>
      <link id="css" rel="stylesheet" href="https://static.oracle.com/cdn/jet/v5.0.0/default/css/alta/oj-alta-min.css" type="text/css"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>    
      <link href='https://fonts.googleapis.com/css?family=Alegreya|Allura|Almendra SC|Romanesco|Source+Sans+Pro:400,700' rel='stylesheet'>
      <link href="https://static.oracle.com/cdn/jet/v4.0.0/default/css/alta/oj-alta-min.css" rel="stylesheet" type="text/css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

      <style type="text/css">
        span {
            display: inline-block;
            vertical-align: middle;
            line-height: normal;
        }
        
        .chat-output {
            flex: 1;
            padding: 20px;
            display: flex;
            background: white;
            flex-direction: column;
            overflow-y: scroll;
            max-height: 500px;
        }
        .chat-output > div {
            margin: 0 0 20px 0;
        }
        .chat-output .user-message .message {
            background: #0fb0df;
            color: white;
        }
        .chat-output .bot-message {
            text-align: right;
        }
        .chat-output .bot-message .message {
            background: #eee;
        }
        .chat-output .message {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 10px;
        }
        .chat-input {
            padding: 20px;
            background: #eee;
            border: 1px solid #ccc;
            border-bottom: 0;
        }
        .chat-input .user-input {
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
        }


/* MAIN STLES */
          .chatbot-menu-header {
                    background-color: #4ae1aa;
                    padding: 7px 20px;
                    margin: 0px 0 0 0px;
                    color: #FFF;
        }
        .my-name {
                    position: relative;
                    line-height: normal;
                    font-size: 32px;
                    text-align: center;
                    color: #000830;
        }
        .time{
            padding-top: 2px;
              opacity: 0.5;
              font-style: "Arial","sans-serif";
         }
         .col-sm-6 {
            padding-top: 10px;
            background-color: transparent;
         }
         i {
            padding-left: 5px;
         }
        img {
            margin: auto;
            display: block;
            max-height: 250px;
            max-width: 250px;
            border-radius: 50%;
            box-shadow: 0px 0px 2px 1px grey;
          
        }
         body{
            padding-top: 50px;
            margin: 0px;
            height: 100%;
            background-color: #87ceeb;
            background: linear-gradient(to bottom right, #DDA0DD,  #87ceeb);
            color: #4A4646;
            overflow-x: hidden;
            font-family: "Segoe UI","Arial","sans-serif";
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    global $conn;

    try {
        $sql2 = 'SELECT * FROM interns_data WHERE username="foluwa"';
        $q2 = $conn->query($sql2);
        $q2->setFetchMode(PDO::FETCH_ASSOC);
        $my_data = $q2->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    ?>

    <nav class="oj-web-applayout-header" role="banner" class="oj-web-applayout-header bg-dark" role="banner">
        <div class="oj-web-applayout-max-width oj-flex-bar oj-sm-align-items-center">
          <div class="oj-flex-bar-middle oj-sm-align-items-baseline">
            <span class="oj-icon" alt="My Logo"> </span> 
            <h4 class="oj-sm-only-hide oj-web-applayout-header-title" title="Application Name">Made with Oracle JET</h4>
          </div>
          <div class="push-right"><h3><?php echo $Ctime ?></h3></div>
        </div>
   </nav>

    <div class="row">
     
     <div class="col-sm-6" style="position:relative;background-color:white;" height="100%;">
            <div class="oj-sm-12 oj-md-6 oj-flex-item">
                <div class="oj-flex oj-sm-align-items-center oj-sm-margin-2x">
                    <div role="img" class="oj-flex-item oj-sm-align-items-center alignCenter">
                        <img class="img-fluid " src="http://res.cloudinary.com/dv7xj0ovh/image/upload/v1523625641/foludp_ryerff.jpg" alt="Akintola Moronfoluwa's picture" height="250" >
                    </div>
                </div>
                    <div class="my-name">
                            <span><?php echo $user->name; ?></span>
                    </div>

                    <div class="oj-flex">
                      <div class="text-center social-links" style="font-size:45px;">
                        <a href="https://facebook.com/akintola.moronfoluwar"><i class="fab fa-facebook"></i></a>
                        <a href="https://instagram.com/fantastic_foluwa"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/fantasticfoluwa"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/foluwa"><i class="fab fa-github"></i></a>
                      </div>
                    </div>
            </div>
            <button data-toggle="collapse" data-target="#aboutme">About Me<i class="fa fa-caret-down"></i></button>
              <div id="aboutme" class="collapse"> Am Foluwa, majored in Computer Science.Check out my github portfolio at <a href="https://foluwa.github.io">portfolio</a>
             </div> 
             <div style="text-align:center;"><strong>Foluwa 2018 @ </strong><a href="https://hotels.ng">Hotels.ng</a></div>
        </div>

        <div class="col-sm-6">
        <div class="oj-sm-12 oj-flex-item">
            <div class='chatbot-menu-header'>
                    <span>ChatBot Interface</span>
            </div>
            <div class="chat-output" id="chat-output" data-spy="scroll" height="70%;">
                    <div class="user-message">
                        <div class="message">Hi there! I'm Zoe!</br>To train me, use this format - 'train: question # answer # password'. </br>To learn more about me, simply type - 'aboutbot'.
                        </div>
                    </div>
            </div>
      </div>
                <div class="chat-input">
                    <form action="" method="post" id="user-input-form" style="position:absolute;bottom:0;background-color:#896bad;">
                        <input type="text" name="user-input" id="user-input" class="user-input" placeholder="Say something here">
                        <button>Send</button>
                    </form>
                </div>
      </div>

    <?php

    try {
        $sql = 'SELECT * FROM secret_word';
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetch();
    } catch (PDOException $e) {
        throw $e;
    }
    $secret_word = $data['secret_word'];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = $_POST['user-input'];
      //  $data = preg_replace('/\s+/', '', $data);
        $temp = explode(':', $data);
        $temp2 = preg_replace('/\s+/', '', $temp[0]);
        
        if($temp2 === 'train'){
            train($temp[1]);
        }elseif($temp2 === 'aboutbot') {
            aboutbot();
        }else{
            getAnswer($temp[0]);
        }
    }

    function aboutbot() {
        echo "<div id='result'>Hi am ZOE version 1.0</div>";
    }
    function train($input) {
        $input = explode('#', $input);
        $question = trim($input[0]);
        $answer = trim($input[1]);
        $password = trim($input[2]);
        if($password == 'password') {
            $sql = 'SELECT * FROM chatbot WHERE question = "'. $question .'" and answer = "'. $answer .'" LIMIT 1';
            $q = $GLOBALS['conn']->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            $data = $q->fetch();

            if(empty($data)) {
                $training_data = array(':question' => $question,
                    ':answer' => $answer);

                $sql = 'INSERT INTO chatbot ( question, answer)
              VALUES (
                  :question,
                  :answer
              );';

                try {
                    $q = $GLOBALS['conn']->prepare($sql);
                    if ($q->execute($training_data) == true) {
                        echo "<div id='result'>Training Successful!</div>";
                    };
                } catch (PDOException $e) {
                    throw $e;
                }
            }else{
                echo "<div id='result'>I already understand this. Teach me something new!<span class='time'><?php echo $time ?></span></div>";
            }
        }else {
            echo "<div id='result'>Invalid Password, Try Again!<span class='time'><?php echo $time ?></span></div>";

        }
    }

    function getAnswer($input) {
        $question = $input;
        $sql = 'SELECT * FROM chatbot WHERE question = "'. $question . '"';
        $q = $GLOBALS['conn']->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $data = $q->fetchAll();
        if(empty($data)){
            echo "<div id='result'>Sorry, I do not know that command. You can train me simply by using the format - 'train: question # answer # password'<span class='time'><?php echo $time ?></span></div>";
        }else {
            $rand_keys = array_rand($data);
            echo "<div id='result'>". $data[$rand_keys]['answer'] ."<span class='time'><?php echo $time ?></span></div>";
        }
    }*/
    ?>

</body>

<script>
    var outputArea = $("#chat-output");

    $("#user-input-form").on("submit", function(e) {

        e.preventDefault();

        var message = $("#user-input").val();

        outputArea.append(`<div class='bot-message'><div class='message'>${message}<p class='time'><?php echo $time ?></p></div></div>`);


        $.ajax({
            url: 'profile.php?id=foluwa',
            type: 'POST',
            data:  'user-input=' + message,
            success: function(response) {
                var result = $($.parseHTML(response)).find("#result").text();
                setTimeout(function() {
                    outputArea.append("<div class='user-message'><div class='message'>" + result + "<p class='time'><?php echo $time ?></p></div></div>");
                    $('#chat-output').animate({
                        scrollTop: $('#chat-output').get(0).scrollHeight
                    }, 1500);
                }, 250);
            }
        });
        $("#user-input").val("");
    });
</script>
</html>