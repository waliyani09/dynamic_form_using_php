<!DOCTYPE html>

<html lang="en">
    
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta ./charset="UTF-8" >
        <title>Azim Waliyani's dynamic form project using PHP</title>
    <link rel="stylesheet" type="text/css"
 media="screen" href="style.php">
  
  </head>
  <body>
  <!--This is the php code-->
  <?php
    
    if(file_exists("style.php")){
      //Opening the CSS document in the read/write mode
      $myFile = fopen("style.php","r+");
      $toFind = array("#help_form{display:inline;}","#feedback_form{display:inline;}");
  $toReplace = array("#help_form{display:none;}","#feedback_form{display:none;}");
      //Testing command
      //echo "<p>Success!</p>";
      $FileHandler=file_get_contents('style.php');
//replace something in the file string - this is a VERY simple example
$str=str_replace($toFind, $toReplace,$FileHandler);

//write the entire string
file_put_contents('style.php', $str);
      //Testing command
      //echo "<p>File found</p>";
    }else{
      echo "<p>Error 404: File not found</p>";
    }
    
    if($_GET["reason"]=="feedback")
    {
      $toFind = array("#feedback_form{display:none;}","#help_form{display:inline;}");
      $toReplace=array("#feedback_form{display:inline;}","#help_form{display:none;}");
      //This is the set of functions to be executed when user selects feedback form.
      //Testing command
      //echo "<p>Success!</p>";
      $FileHandler=file_get_contents('style.php');
//replace something in the file string - this is a VERY simple example
$str=str_replace($toFind,$toReplace,$FileHandler);

//write the entire string
file_put_contents('style.php', $str);
}
if($_GET["reason"]=="help"){
  $toFind = array("#help_form{display:none;}","#feedback_form{display:inline;}");
  $toReplace = array("#help_form{display:inline;}","#feedback_form{display:none;}");
      //Testing command
      //echo "<p>Success!</p>";
      $FileHandler=file_get_contents('style.php');
//replace something in the file string - this is a VERY simple example
$str=str_replace($toFind, $toReplace,$FileHandler);

//write the entire string
file_put_contents('style.php', $str);
  
}
//Default option:
if($_GET["reason"]=="default"){
  $toFind = array("#help_form{display:inline;}","#feedback_form{display:inline;}");
  $toReplace = array("#help_form{display:none;}","#feedback_form{display:none;}");
      //Testing command
      //echo "<p>Success!</p>";
      $FileHandler=file_get_contents('style.php');
//replace something in the file string - this is a VERY simple example
$str=str_replace($toFind, $toReplace,$FileHandler);

//write the entire string
file_put_contents('style.php', $str);
  
}
    fclose($myFile);
  ?>
  <!--This is the initial form on the homepage-->
    <div>
      <h1>You have reached the contact us page:</h1>
      <p>Please tell us what brings you here today.</p>
    <form method="get" action="index.php">
  <label for="reason">I am here to</label><br>
  <select name="reason" id="reason">
    <option value="default">--Reset this option--</option>
    <option value="feedback">Provide a feedback</option>
    <option value="help">Request a help</option>
  </select>
  <br><br>
      <input type="submit" value="Submit">
  </form>
  </div>
    <!--End of the initial form on the homepage-->
    <!--This is where the feedback form exists-->
    <div id="feedback_form">
      <h1 class="h1">This is an example of using form in html</h1>
    
    <form action="form-to-email.php" method="POST"
    class="full_form">
<input type="hidden" id="form1" name="formNumber" value="1">
        <!--This is where you input the form data-->
        <div class="name"><!--Name of the candidate-->
            <label for="firstName">First Name</label><br>
            <input type="text" id="firstName" name="firstName" required="required" tabindex="0"><br>
            <label for="lastName">Last Name</label><br>
            <input type="text" id="lastName" name="lastName" required="required"><br>
        </div>
        <div class="address"><!--Address-->
            <label for="aLine1">Address Line 1</label><br>
            <input type="text" id="aLine1" name="aLine1" required="required"><br>
            <label for="aLine2">Address Line 2</label><br>
            <input type="text" id="aLine2" name="aLine2" title="Leave blank if you dont have a line 2 address"><br>
            
            <label for="city">City</label><br>
            <input type="text" id="city" name="city" required="required"><br>
            <label for="state">State</label><br>
            <input type="text" id="state" name="state" required="required"><br>
            <label for="zipcode">Zip Code</label><br>
            <input type="number" id="zipcode" name="zipcode" required="required"><br>
        </div>
        <div class="question1"><!--Feedback-->
            <label for="feedbackq1">How do you feel about this form?</label><br>
            <input type="text" id="feedbackq1" name="feedbackq1" required="required">
        </div>
       <br>
       
       <fieldset>
           <legend>On the scale of 1 to 5, how do you rate your proficiency in the following languages:<br>
            <br>
               HTML</legend>
           <!--HTML rating-->
           <input type="radio" id="html_1" name="html_skill" value="1">
           <label for="html_1">1</label>
           <input type="radio" id="html_2" name="html_skill" value="2">
           <label for="html_2">2</label>
           <input type="radio" id="html_3" name="html_skill" value="3">
           <label for="html_3">3</label>
           <input type="radio" id="html_4" name="html_skill" value="4">
           <label for="html_4">4</label>
           <input type="radio" id="html_5" name="html_skill" value="5">
           <label for="html_5">5</label>
           <!--HTML rating ends here-->
       </fieldset>
       <fieldset>
           <legend>CSS</legend>
           <!--CSS rating-->
           <input type="radio" id="css_1" name="css_skill" value="1">
           <label for="css_1">1</label>
           <input type="radio" id="css_2" name="css_skill" value="2">
           <label for="css_2">2</label>
           <input type="radio" id="css_3" name="css_skill" value="3">
           <label for="css_3">3</label>
           <input type="radio" id="css_4" name="css_skill" value="4">
           <label for="css_4">4</label>
           <input type="radio" id="css_5" name="css_skill" value="5">
           <label for="css_5">5</label>
           <!--CSS rating ends here-->
       </fieldset>
       <fieldset>
           <legend>JavaScript</legend>
           <!--JavaScript rating-->
           <input type="radio" id="javascript_1" name="javascript_skill" value="1">
           <label for="javascript_1">1</label>
           <input type="radio" id="javascript_2" name="javascript_skill" value="2">
           <label for="javascript_2">2</label>
           <input type="radio" id="javascript_3" name="javascript_skill" value="3">
           <label for="javascript_3">3</label>
           <input type="radio" id="javascript_4" name="javascript_skill" value="4">
           <label for="javascript_4">4</label>
           <input type="radio" id="javascript_5" name="javascript_skill" value="5">
           <label for="javascript_5">5</label>
           <!--JavaScript rating ends here-->
       </fieldset>
        
        <fieldset>
            <legend>How do you rate this form on the scale of 1 to 5?</legend>
            <!--Feedback rating-->
            <input type="radio" id="feedback_1" name="feedback" value="1">
            <label for="feedback_1">1</label>
            <input type="radio" id="feedback_2" name="feedback" value="2">
            <label for="feedback_2">2</label>
            <input type="radio" id="feedback_3" name="feedback" value="3">
            <label for="feedback_3">3</label>
            <input type="radio" id="feedback_4" name="feedback" value="4">
            <label for="feedback_4">4</label>
            <input type="radio" id="feedback_5" name="feedback" value="5">
            <label for="feedback_5">5</label>
            <!--Feedback rating ends here-->
        </fieldset>
        <br>
        <!--Hidden buttons to make sure your html form is emailed-->
        <input type="hidden" name="ToAddress" value="waliyani09@gmail.com"/>
        <input type="hidden" name="CCAddress" value="todd.wolfe@esc.edu" />
        <!--Insert professor's email address above in value field-->
        <br>
        <label for="FromAddress">Enter your email</label><br>
        <input type="text" id="FromAddress" name="FromAddress" required="required" placeholder="e.g. username@email.com"><br>
        <input type="hidden" name="Subject" value="WSD:Assignment 2.2 - Web Form for Azim Waliyani" /><br>
        <div id="button"><!--Creating the buttons to submit and reset the form-->
            <input type="submit" value="Submit" title="This will submit the form">
            <input type="reset" value="Reset" title="This will clear the form">
        </div>
        
    </form>
    </div>
    <!--This is where the feedback form ends-->
    <!--This is where the help form begins-->
    <div id="help_form">
      <h1>You have selected to fill out help form</h1>
    <form action="form-to-email.php" method="POST"
    class="full_form"> 
<input type="hidden" id="form2" name="formNumber" value="2">
        <!--This is where you input the form data-->
        <div class="name"><!--Name of the candidate-->
            <label for="helpFirstName">First Name</label><br>
            <input type="text" id="helpFirstName" name="firstName" required="required"><br>
            <label for="helpLastName">Last Name</label><br>
            <input type="text" id="helpLastName" name="lastName" required="required"><br>
        </div>
        <div class="description">
            <label for="message">Briefly describe the issue:</label>
            <textarea name="message" id="message" rows="10" cols="30" required="required"></textarea>
            <br><br>
        </div>
        <div class="help_category">
            <p>Select the category that describes your issue:</p>
            <select name="help_category" id="help_category">
                <option value="empty">--Select one--</option>
                <option value="internet">Issues related to internet</option>
                <option value="power">No power in machine</option>
                <option value="damage">My cable/hardware is damaged</option>
                <option value="other">It is something else</option>
              </select>
        </div>
        <div class = "phoneNumber">
            <p>
                <label>Enter your phone number in the format (123) - 456 - 7890
                 (<input name="tel1" type="tel" pattern="[0-9]{3}" placeholder="###" aria-label="3-digit area code" size="2"/>) -
                  <input name="tel2" type="tel" pattern="[0-9]{3}" placeholder="###" aria-label="3-digit prefix" size="2"/> -
                  <input name="tel3" type="tel" pattern="[0-9]{4}" placeholder="####" aria-label="4-digit number" size="3"/>
                </label>
               </p>
               
        </div>
        <div class="availibility">
            <label name = "preferredContact">Select the best method to contact you:</label><br>
                <input type="checkbox" id="phone" name="preferredContact" value="phone">
                <label for="phone"> By phone</label><br>
                <input type="checkbox" id="email" name="preferredContact" value="email">
                <label for="email"> By Email</label><br>
                <input type="checkbox" id="onsite" name="preferredContact" value="onsite">
                <label for="onsite"> By visiting onsite</label><br>
                
        </div>
        
        <!--Hidden buttons to make sure your html form is emailed-->
        <input type="hidden" name="ToAddress" value="waliyani09@gmail.com"/>
        <input type="hidden" name="CCAddress" value="todd.wolfe@esc.edu" />
        <!--Insert professor's email address above in value field-->
        <br>
        <label for="fromAddress">Enter your email</label><br>
        <input type="text" id="fromAddress" name="fromAddress" required="required"><br>
        <input type="hidden" name="Subject" value="WSD:Assignment 3.1 - Web Form for Azim Waliyani" /><br>
        <div id="help_submit_button"><!--Creating the buttons to submit and reset the form-->
            <input type="submit" value="Submit" title="This will submit the form">
            <input type="reset" value="Reset" title="This will clear the form">
        </div>
        
    </form>
      
    </div>
    <!--This is where the help form ends-->
  </body>
</html>