<?php
$to = 'hkgokul@gmail.com';
$subject = "Appointment Notification";

$feildContent='';
foreach ($_POST as $key => $value) {
    $feildContent=$feildContent.'<tr><td>'.htmlspecialchars($key).'</td><td>'.htmlspecialchars($value).'</td></tr>';
    };
    
    echo $to;
    
$htmlContent = '<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
 
  padding: 8px;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<h1>Appointment Details</h1>
<table id="customers">
  <tr>
    <th>Field</th>
    <th>Response</th>
  </tr>
 '.$feildContent.
 '</table>
</body>
</html>
';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: CarbIndia <hkgokul@gmail.com>' . "\r\n";

// Send email
if(mail($to,$subject,$htmlContent,$headers)):
    $successMsg = 'Response has been sent successfully.';
else:
    $errorMsg = 'There was an issue sending your repsonse. Please try again later.';
endif;
echo $successMsg;
?>