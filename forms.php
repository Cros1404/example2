<?php include "menu.php" ?>
<h2>Forms</h2>
<form class="" action="forms.php" method="post">
    <label for="country">Choose the country</label>
    <select id="country" name="country" onchange="showCountry()">
        <option value="">Choose</option>
        <option value="fin">Finland</option>
        <option value="rus">Russian</option>
        <option value="nep">Nepal</option>
        <option value="vie">Vietnam</option>
        <option value="lat">Latvian</option>
        <option value="ger">German</option>
    </select>
    <label for="">Chosen country</label>
    <input type="text" id="result" name="" value="">
    <br><br>
    <label for="gender">Choose you gender</label><br>
    <input type="radio" name="gender" value="female">Female<br />
    <input type="radio" name="gender" value="male">Male<br />
    <label for="status">Choose your status</label><br>
    <input type="radio" name="status" value="student">Student<br>
    <input type="radio" name="status" value="teacher">Teacher<br>
    <br>
    <label for="startDate">Choose the starting date</label>
    <input type="date" id="startDate" name="startDate" value="">
    <br><br>
    <input type="submit" name="btnSend" value="Send">
</form>
<?php
$btn=$_POST['btnSend'];
if(isset($btn))
{
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $stDate =  $_POST['startDate'];
    $status = $_POST['status'];
    echo 'Hello '.$gender.' '.$status.' from '.$country.' the chosen date is '.$stDate;
}
?>

<?php include "footer.php" ?>