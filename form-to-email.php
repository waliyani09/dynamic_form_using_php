<!DOCTYPE html>
<html lang="en">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta ./charset="UTF-8" >
        <title>Form to email</title>
    <link rel="stylesheet" type="text/css"
 media="screen" href="style.php">
  </head>
  <body>
    <?php
//Server side data filtering.
//The goal of these function is to prevent scripts in 
//the input. 
function filterString($input){
  //For addresses and descriptive issues.
  $input = filter_var($input,FILTER_SANITIZE_STRING);
  return $input;
}
function filterEmail($input){
  $input = filter_var($input,FILTER_SANITIZE_EMAIL);
  return $input;
}
function filterURL($input){
  $input = filter_var($input,FILTER_SANITIZE_URL);
  return $input;
}
function filterNumber($input){
  $input = filter_var($input,FILTER_SANITIZE_NUMBER_INT);
  return $input;
}
//Data filtering ends here.
//Validating the user inputs.
function validateEmail($input){
  return filter_var($input,FILTER_VALIDATE_EMAIL);  
}
function test_string($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//The feedback form variables.
$feedbackFirstName = test_string($_POST["firstName"]);
$feedbackLastName = test_string($_POST["lastName"]);
$aLine1 = filterString($_POST["aLine1"]);
$aLine2 =  filterString($_POST["aLine2"]);
$city =  test_string($_POST["city"]);
$state =  test_string($_POST["state"]);
$zipcode =  filterNumber($_POST["zipcode"]);
$feedbackq1 =  filterString($_POST["feedbackq1"]);//This is the text input asking user the feedback
$htmlSkill = $_POST["html_skill"];
$cssSkill = $_POST["css_skill"];
$javascriptSkill = $_POST["javascript_skill"];
$feedback = $_POST["feedback"];
$FromAddress = filterEmail($_POST["FromAddress"]);
//Feedback form variables end here.
//Help form variables 
$helpFirstName =  test_string($_POST["firstName"]);
$helpLastName =  test_string($_POST["lastName"]);
$message = filterString($_POST["message"]);
$helpCategory = $_POST["help_category"];
$tel1 = filterNumber($_POST["tel1"]);
$tel2 =  filterNumber($_POST["tel2"]);
$tel3 =  filterNumber($_POST["tel3"]);
$preferredContact = $_POST["preferredContact"];
$fromAddress =  filterEmail($_POST["fromAddress"]);
//Help form variables ends here.
//Testing begins here
//If the requested form is form number 1
if($_POST["formNumber"]==1){
  $exitCode = 0;
  if(empty($feedbackFirstName)){
    echo "<p>First name cannot be blank</p>";
    $exitCode=1;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$feedbackFirstName)){
    echo "<p>Only letters and whitespaces allowed in first name</p>";
    $exitCode=1;
  }
  if(empty($feedbackLastName)){
    echo "<p>Last name cannot be blank</p>";
    $exitCode=1;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$feedbackLastName)){
    echo "<p>Only letters and whitespaces allowed in last name</p>";
    $exitCode=1;
  }

  if(empty($aLine1)){
    echo "<p>Address Line 1 cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($city)){
    echo "<p>City cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($state)){
    echo "<p>State cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($zipcode)){
    echo "<p>Zipcode cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($feedbackq1)){
    echo "<p>Feedback cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($FromAddress)){
    echo "<p>Email address cannot be blank</p>";
    $exitCode=1;
  }
  
  if($exitCode!=0){
    echo "<a href='index.php'>Return to previous page</a>";
  }else //all inputs:OK email form.
  {
    $to = "veerawaliyani@gmail.com";
    $cc = "waliyani01@icloud.com";//professor email
    $subject =   "WSD: Assignment 5.2 - Web Form for Azim Waliyani";
    $from = $FromAddress;
    $message = "You have a new feedback:\r\n
First Name: ".$feedbackFirstName."\r\n
Last Name: ".$feedbackLastName."\r\n
Address:\r\n".$aLine1."\r\n".$aLine2."\r\n".$city." ".$state." ".$zipcode."\r\n"."Feedback about your site:\r\n".$feedbackq1."\r\nHTML skill: ".$htmlSkill."\r\nCSS skill: ".$cssSkill."\r\nJS skill: ".$javascriptSkill."\r\nSite rating overall: ".$feedback."\r\n";
  
  mail($to, $subject, $message, "From: $from \r\nCC: $cc");
  }
}
//If the requested form is form number 2
if($_POST["formNumber"]==2){
  $exitCode = 0;
  if(empty($helpFirstName)){
    echo "<p>First name cannot be blank</p>";
    $exitCode=1;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$helpFirstName)){
    echo "<p>Only letters and whitespaces allowed in first name</p>";
    $exitCode=1;
  }
  if(empty($helpLastName)){
    echo "<p>Last name cannot be blank</p>";
    $exitCode=1;
  }else if(!preg_match("/^[a-zA-Z-' ]*$/",$helpLastName)){
    echo "<p>Only letters and whitespaces allowed in last name</p>";
    $exitCode=1;
  }
  if(empty($message)){
    echo "<p>Message cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($tel1)){
    echo "<p>Telephone number cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($tel2)){
    echo "<p>Telephone number cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($tel3)){
    echo "<p>Telephone number cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($preferredContact)){
    echo "<p>Preferred contact cannot be blank</p>";
    $exitCode=1;
  }
  if(empty($fromAddress)){
    echo "<p>Email address cannot be blank</p>";
    $exitCode=1;
  }
  
  if($exitCode!=0){
    echo "<a href='index.php'>Return to previous page</a>";
  }else{
    $to = "veerawaliyani@gmail.com";
    $cc = "waliyani01@icloud.com";//professor email
    $subject =   "WSD: Assignment 5.2 - Web Form for Azim Waliyani";
    $from = $fromAddress;
    $message = "You have a new help request:\r\n
First Name: ".$helpFirstName." Last Name: ".$helpLastName."\r\n Message:\r\n".$message."\r\n
Help category: ".$helpCategory."\n Phone Number: ".$tel1." ".$tel2." ".$tel3."\r\nPreferred contact method: ".$preferredContact."\r\nEmail: ".$fromAddress.".";
    mail($to, $subject, $message, "From: $from \r\nCC: $cc");
  }
  }
}
?>

  </body>
</html>