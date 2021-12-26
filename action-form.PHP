
 <?php

if(isset($_POST['submit']))  {

$mailto = "factorywebsite1@gmail.com";  //entering the adress where the email is sent (the company email)

$from = $_POST['email']; // where the informations are taken from

$name = $_POST['name']; // inf line no.1

$subject = $_POST['subject']; // inf line no.2

$subject2 = "Your message submited successufully!"; // what the costumers see

$message = "Client name: ". $name. "Wrote the following message". "\n\n". $_POST['message']; // informations that you get 

$message2 = "Dear". $name. "\n\n". "Thank you for contacting us! We'll get back to you shortly"; // inf line no.3

$headers = "From:". $from; // the email of the costumer

$headers2 = "From:". $mailto; // company email

$result = mail($mailto, $subject, $message, $headers); // sintetization for the costumer

$result2 = mail($from, $subject2, $message2, $headers2); // sintetization for me

if($result)  {

echo 'Message sent successfully. We will contact you shortly!';  // the affirmative response

} else {

echo 'Submission failed! Try again Later'; // the fail case
    
};

};




?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action form</title>
    <link href="php.css" rel="stylesheet">
</head>
<body>


<div>
<form action="" method="post">
<div>
<div>
<input type="text" placeholder="Full Name" required name="name">
</div>
<br>
<br>
<div>

<input type="email" placeholder="Email" required name="email">
<br>
<br>
</div>
</div>


<input type="text" placeholder="Subject" required name="subject">
<br>
<br>
<input type="text" placeholder="Write you message" required name="message">
<br>
<br>
<button type="submit" name="submit" class="btn btn-success"> SEND </button>
<br>
<br>
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

</form>
</div>
<br>
<br>
<br>
<br>

</body>
</html>

