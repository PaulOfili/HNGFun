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
  <script src="http://www.oracle.com/webfolder/technetwork/jet/js/libs/require/require.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Josefin%20Sans:400,500,600,700" rel='stylesheet' type='text/css'/>
  <link id="css" rel="stylesheet" href="https://static.oracle.com/cdn/jet/v5.0.0/default/css/alta/oj-alta-min.css" type="text/css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <style type="text/css">
     @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);
      body {
          height: 100%;
          background-color: #87ceeb;
          background: linear-gradient(to bottom right, #DDA0DD,  #87ceeb);
          color: #4A4646;
          overflow-x: hidden;
          font-family: "Segoe UI","Arial","sans-serif";
      }
      img{
          border-radius: 50%;
          max-height: 250px;
          max-width: 250px;
      }
      input[type=text] {
          width: 70%;
          padding: 12px 20px;
          margin: 8px 0;
          border: 2px;
          border-radius: 4px;
          background-color: #4ae1aa;
          color: white;
        }
      button{
            border: 0px;
            background-color: grey;
         }
    
       .chatbox {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 16px;
            display: flex;
            flex-direction: column;
            max-width: 600px;
            height: 400px;
            border-radius: 5px;
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        }

        .oj-flex-item .oj-panel .demo-mypanel{
            padding: 40px;
        }

       .oj-flex-item .oj-panel .demo-mypanel {
            padding-right: 0;
            background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            height: auto;
            width: 600px;
            margin: 0px;
        }
       
        .image img {
            margin: auto;
            display: block;
            width: 220px;
            height:300px;
            border-radius: 50%;
            box-shadow: 0px 0px 2px 1px grey;
        }
        .myname {
            font-size: 25px;
            font-weight: 600;
            margin-top: 20px;
            color:#191970;
        }
        .social-links a {
            margin-right: 20px;
        }
        
  
  .chatbot-menu-header {
            background-color: #4ae1aa;
            padding: 7px 20px;
            margin: 0px 0 0 0px;
            color: #FFF;
        }

    .oj-panel{
          margin-left: 30px;
    }
    .oj-flex{
    background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
        padding: 0px;
    }   
    .human-message {
      width: auto;
      background-color: grey;
      right:0%;
      margin-top: 5px;
      display: inline-block;
      padding: 5px 5px;
      margin: 5px;
      border-radius: 10px;
      margin-top: 55px;
    }
    .bot-message {
      max-width: auto;
      background-color: skyblue;
      left:2%;
      margin-top: 5px;
      display: inline-block;
      padding: 5px 5px;
      margin: 5px;
      border-radius: 10px;
    }
    .conversation {
      display: column;
    }
    #time{
      font-weight: 5px;
      font-style: "Arial","sans-serif";
    }
  </style>
</head>

<body class="oj-web-applayout-body">
  <nav class="oj-web-applayout-header" role="banner" class="oj-web-applayout-header bg-dark" role="banner">
        <div class="oj-web-applayout-max-width oj-flex-bar oj-sm-align-items-center">
          <div class="oj-flex-bar-middle oj-sm-align-items-baseline">
            <span class="oj-icon" alt="My Logo"> </span> 
            <h4 class="oj-sm-only-hide oj-web-applayout-header-title" title="Application Name">Made with Oracle JET</h4>
          </div>
          <div class="push-right"><h3><?php echo $dt ?></h3></div>
        </div>
   </nav>

   <div class="row" style="padding-top:5px;">
   <div class="col-sm-6" style="padding-left:0px;">
            <div class="oj-flex-item oj-panel demo-mypanel" style='float:left;width:97%;'>
                <div class="image">
                    <img src="http://res.cloudinary.com/dv7xj0ovh/image/upload/v1523625641/foludp_ryerff.jpg" alt="Akintola Moronfoluwa's picture">
                </div>
                <p class="text-center myname">
                   <span style="font-size:37px;"><?php echo $user->name; ?></span>
                </p>
                <div class="oj-flex">
                <div class="text-center social-links" style="font-size:45px;">
                  <a href="https://facebook.com/akintola.moronfoluwar"><i class="fab fa-facebook"></i></a>
                  <a href="https://instagram.com/fantastic_foluwa"><i class="fab fa-instagram"></i></a>
                  <a href="https://twitter.com/fantasticfoluwa"><i class="fab fa-twitter"></i></a>
                  <a href="https://github.com/foluwa"><i class="fab fa-github"></i></a>
                  <a href="https://slack.com/foluwa"><i class="fab fa-slack"></i></a>
                </div>
              </div>
                 <button data-toggle="collapse" data-target="#aboutme">About Me<i class="fa fa-caret-down"></i></button>
                    <div id="aboutme" class="collapse">
                        Am Foluwa a Computer Science student. Check out my github portfolio at <a href="https://foluwa.github.io">portfolio</a>
                    </div> 
            </div>
            <div style="color:red;text-align:center;"><strong>Foluwa @ </strong><a href="https://hotels.ng">Hotels.ng</a></div>
          </div>
      
      <div class="col-sm-6" style="position:relative;">
        <div class="oj-flex-item oj-panel demo-mypanel" style='float:right;width:97%;' >
            <div class="chatbox">
               <div class='chatbot-menu-header'>
                    <span>ChatBot Interface</span>
                </div>
                <div class="" id="" style="border:5px solid green;">
                    <div id="conversation" class="conversation">
                      <div class="bot-message">Hello! I'm ZOE!  
                          <p class="time"><?php echo $time ?></p>
                      </div>
                      <div class="human-message pull-right">Hi Zoe, Am Foluwa
                          <p class="time"><?php echo $time ?></p>
                      </div>
                    </div>
                </div>
                <div>
                    <form id="chat" method="post" style="position:absolute;bottom:0;" >
                        <input type="text" name="userInput" id="user-input" class="user-input" placeholder="Enter your text....">
                        <button id="send" type="button" class="btn btn-primary btn-sm" style="background-color:#79af9c;">
                          <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
          </div>
          </div>
        </div>
          </div>
       </div>
       </div>
  
</body>
</html>