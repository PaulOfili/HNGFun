<?php 
		
		if(!defined('DB_USER')){
			require "../../config.php";		
			try {
			    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
			} catch (PDOException $pe) {
			    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
			}
		}

    try {
        $q = 'SELECT * FROM secret_word';
        $sql = $conn->query($q);
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $data = $sql->fetch();
        $secret_word = $data["secret_word"];
    } catch (PDOException $err) {

        throw $err;
    }?>
	
<?php

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		
		require "../answers.php";

		date_default_timezone_set("Africa/Lagos");

		// header('Content-Type: application/json');

		if(!isset($_POST['question'])){
			echo json_encode([
				'status' => 1,
				'answer' => "What is your question"
			]);
			return;
		}

		$question = $_POST['question']; //get the entry into the chatbot text field

		//check if in training mode
		$index_of_train = stripos($question, "train:");
		if($index_of_train === false){//then in question mode
			$question = preg_replace('([\s]+)', ' ', trim($question)); //remove extra white space from question
			$question = preg_replace("([?.])", "", $question); //remove ? and .

			$question = "%$question%";
			$sql = "select * from chatbot where question like :question";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':question', $question);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$rows = $stmt->fetchAll();
			if(count($rows)>0){
				$index = rand(0, count($rows)-1);
				$row = $rows[$index];
				$answer = $row['answer'];	
				$index_of_parentheses = stripos($answer, "((");
				if($index_of_parentheses === false){ 
					echo json_encode([
						'status' => 1,
						'answer' => $answer
					]);
				}else{//otherwise call a function. but get the function name first
					$index_of_parentheses_closing = stripos($answer, "))");
					if($index_of_parentheses_closing !== false){
						$function_name = substr($answer, $index_of_parentheses+2, $index_of_parentheses_closing-$index_of_parentheses-2);
						$function_name = trim($function_name);
						if(stripos($function_name, ' ') !== false){ //if method name contains spaces, do not invoke method
							echo json_encode([
								'status' => 0,
								'answer' => "No whitespaces allowed"
							]);
							return;
						}
						if(!function_exists($function_name)){
							echo json_encode([
								'status' => 0,
								'answer' => "Function 404"
							]);
						}else{
							echo json_encode([
								'status' => 1,
								'answer' => str_replace("(($function_name))", $function_name(), $answer)
							]);
						}
						return;
					}
				}
			}else{
				echo json_encode([
					'status' => 0,
					'answer' => "Train me. The training data format is  <b>train: question # answer # password</b>"
				]);
			}		
			return;
		}else{
			//in training mode
			//get the question and answer
			$question_and_answer_string = substr($question, 6);
			//remove excess white space in $question_and_answer_string
			$question_and_answer_string = preg_replace('([\s]+)', ' ', trim($question_and_answer_string));
			
			$question_and_answer_string = preg_replace("([?.])", "", $question_and_answer_string); //remove ? and . so that questions missing ? (and maybe .) can be recognized
			$split_string = explode("#", $question_and_answer_string);
			if(count($split_string) == 1){
				echo json_encode([
					'status' => 0,
					'answer' => "Invalid training format. <br> Type  <b>train: question # answer # password</b>"
				]);
				return;
			}
			$que = trim($split_string[0]);
			$ans = trim($split_string[1]);

			if(count($split_string) < 3){
				echo json_encode([
					'status' => 0,
					'answer' => "Please enter the training password."
				]);
				return;
			}

			$password = trim($split_string[2]);
			//verify if training password is correct
			define('TRAINING_PASSWORD', 'password');
			if($password !== TRAINING_PASSWORD){
				echo json_encode([
					'status' => 0,
					'answer' => "Sorry you do not have access train me."
				]);
				return;
			}
			$sql = "insert into chatbot (question, answer) values (:question, :answer)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':question', $que);
			$stmt->bindParam(':answer', $ans);
			$stmt->execute();
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			echo json_encode([
				'status' => 1,
				'answer' => "I have been trained"
			]);
			return;
		}

		echo json_encode([
			'status' => 0,
			'answer' => "Please train me"
		]);
		
	}
	else{
?>

<!DOCTYPE html>
<!--
 Copyright (c) 2014, 2018, Oracle and/or its affiliates.
 The Universal Permissive License (UPL), Version 1.0
 -->

<!-- ************************ IMPORTANT INFORMATION ************************************
  This web navigation drawer template is provided as an example of how to configure
  a JET web application with a navigation drawer as a single page application
  using ojRouter and oj-module.  It contains the Oracle JET framework and a default
  requireJS configuration file to show how JET can be setup in a common application.
  This project template can be used in conjunction with demo code from the JET
  website to test JET component behavior and interactions.

  Any CSS styling with the prefix "demo-" is for demonstration only and is not
  provided as part of the JET framework.

  Please see the demos under Cookbook/Patterns/App Shell: Web and the CSS documentation
  under Support/API Docs/Non-Component Styling on the JET website for more information on how to use 
  the best practice patterns shown in this template.

  Aria Landmark role attributes are added to the different sections of the application
  for accessibility compliance. If you change the type of content for a specific
  section from what is defined, you should also change the role value for that
  section to represent the appropriate content type.
  ***************************** IMPORTANT INFORMATION ************************************ -->
<html lang="en-us">
  <head>
    <title>Oracle JET Starter Template - Web Nav Drawer</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1">
    <link rel="icon" href="profiles/dennisotugo/css/images/favicon.ico" type="image/x-icon" />

    <!-- This is the main css file for the default Alta theme -->
<!-- injector:theme -->
<link rel="stylesheet" href="profiles/dennisotugo/css/alta/5.0.0/web/alta.css" id="css" />
<!-- endinjector -->
    
    <!-- This contains icon fonts used by the starter template -->
    <link rel="stylesheet" href="profiles/dennisotugo/css/demo-alta-site-min.css" type="text/css"/>

    <!-- This is where you would add any app specific styling -->
    <link rel="stylesheet" href="profiles/dennisotugo/css/app.css" type="text/css"/>
<style>
	header {
		display: none;
	}
	footer {
		display: none;
	}
	</style>
  </head>
  <body class="oj-web-applayout-body">
    <!-- Template for rendering navigation items shared between nav bar and nav list -->
    <script type="text/html" id="navTemplate">
      <li><a href="#">
        <span :class="[[$data['iconClass']]]"></span>
        <oj-bind-text value="[[$data['name']]]"></oj-bind-text>
      </a></li>
    </script>

    <div id="globalBody" class="oj-offcanvas-outer-wrapper oj-offcanvas-page">
      <!--
         ** Oracle JET V5.0.0 web application navigation drawer pattern.
         ** Please see the demos under Cookbook/Patterns/App Shell: Web
         ** and the CSS documentation under Support/API Docs/Non-Component Styling
         ** on the JET website for more information on how to use this pattern. 
         ** The off-canvas section is used when the browser is resized to a smaller media
         ** query size for a phone format and hidden until a user clicks on
         ** the header hamburger icon.
      -->
      <div id="navDrawer" role="navigation" class="oj-contrast-marker oj-web-applayout-offcanvas oj-offcanvas-start">
        <oj-navigation-list data="[[navDataSource]]"
                            edge="start"
                            item.renderer="[[oj.KnockoutTemplateUtils.getRenderer('navTemplate', true)]]"
                            on-click="[[toggleDrawer]]"
                            selection="{{router.stateId}}">
        </oj-navigation-list>
      </div>
      <div id="pageContent" class="oj-web-applayout-page">
        <!--
           ** Oracle JET V5.0.0 web application header pattern.
           ** Please see the demos under Cookbook/Patterns/App Shell: Web
           ** and the CSS documentation under Support/API Docs/Non-Component Styling
           ** on the JET website for more information on how to use this pattern.
        -->
        <header role="banner" class="oj-web-applayout-header">
          <div class="oj-web-applayout-max-width oj-flex-bar oj-sm-align-items-center">
            <!-- Offcanvas toggle button -->
            <div class="oj-flex-bar-start oj-md-hide">
              <oj-button id="drawerToggleButton" class="oj-button-lg" on-oj-action="[[toggleDrawer]]" chroming="half" display="icons">
                <span slot="startIcon" class="oj-web-applayout-offcanvas-icon"></span>
                <span>Application Navigation</span>
              </oj-button>
            </div>

          </div>
          <div role="navigation" class="oj-web-applayout-max-width oj-web-applayout-navbar">
            <oj-navigation-list class="oj-sm-only-hide oj-md-condense oj-md-justify-content-flex-end"
                                data="[[navDataSource]]"
                                edge="top"
                                item.renderer="[[oj.KnockoutTemplateUtils.getRenderer('navTemplate', true)]]"
                                selection="{{router.stateId}}">
            </oj-navigation-list>
          </div>
        </header>
        <oj-module role="main" class="oj-web-applayout-max-width oj-web-applayout-content" config="[[moduleConfig]]">
        </oj-module>
      </div>
    </div>
    
    <script type="text/javascript" src="profiles/dennisotugo/js/libs/require/require.js"></script>
    <script type="text/javascript" src="profiles/dennisotugo/profiles/dennisotugo/js/main.js"></script>

	
</body>
</html>
<?php } ?>
