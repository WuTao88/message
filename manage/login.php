<?php
/**
*
*
*/

$css="<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' integrity='sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4' crossorigin='anonymous'>";
$js="<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js' integrity='sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js' integrity='sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm' crossorigin='anonymous'></script>";

echo $css;
echo $js;

echo  "<form>
  <div action='' method='post' class='form-group'>
    <label for='exampleInputEmail1'>Email address</label>
    <input name='name' type='text' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter user'>
  </div>
  <div class='form-group'>
    <label for='exampleInputPassword1'>Password</label>
    <input name='pass' type='password' class='form-control' id='exampleInputPassword1' placeholder='Password'>
  </div>
  <button type='submit' class='btn btn-primary'>Submit</button>
</form>";
