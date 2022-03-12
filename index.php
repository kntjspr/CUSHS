

<!DOCTYPE html>
 <html lang="en">
 <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body>  
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
  
       <div class="col-sm">
        <h2> CUSHS Exam Code Proof of Concept </h2>
             <div class="alert alert-danger" role="alert">
  For demonstration purposes only. <a href="https://github.com/kntjspr/">My profile</a>

  </div>
       <form NAME="myform" ACTION="" METHOD="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">Google Form Address</label>
    <input type="Google Form Address" class="form-control" name="input_value" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Google Form URL">
  
  

  <button type="submit" onClick="testResults(this.form)" class="btn btn-success" >Submit </button>
</form>
</div>

 </div>
  </div>
</body>
 </html>
 <?php
if (isset($_POST['submit']))
  {
  // Execute this code if the submit button is pressed.
  $formvalue = $_POST['input_value'];
 
  }
?>


<?php
error_reporting(E_ALL & ~E_NOTICE);
$query = htmlspecialchars($_GET['input_value']);
if (empty($query)) {
    die();
  } else {
    $query = htmlspecialchars($_GET['input_value']);
        $url = $query;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$response = preg_replace('/\s+/', '', $response);
$re = '/data-params="%\.@\.\[\d*\,\&quot;ExamCode.*/';
preg_match_all($re, $response, $response, PREG_SET_ORDER, 0);
$filtered = $response[0][0];

$re = ('/\\[\"(\\w*)\"\\]\\]\\]/');
preg_match_all($re, $filtered, $response, PREG_SET_ORDER, 0);

$code = ($response[0][1]);

echo "<div class=\"col-sm\"><div class=\"alert alert-success\" role=\"alert\">
The code is: $code
</div></div>";
}
?>
