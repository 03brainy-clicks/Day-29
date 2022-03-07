<?PHP

$username =$_POST['name'];
$date =$_POST['date'];
$profession =$_POST['profession'];
$gender =$_POST['gender'];
$email =$_POST['email'];
$password =$_POST['password'];
$Cpassword =$_POST['Cpassword'];


echo "Name : ".$username;
echo "<br>";
echo "DOB : ".$date;
echo "<br>";
echo "Profession : ".$profession;
echo "<br>";
echo "Gender : ".$gender;
echo "<br>";
echo "Email : ".$email;
echo "<br>";
echo "Password : ".$password;
echo "<br>";
echo "Confirm Password : ".$Cpassword;

?>