<?php
$error_email = "";
if (isset($_POST["submit"])) {
    if (empty($_POST["email"])) {
        $error_email = "Enter email";
    } else {
        $email = $_POST["email"];
        $subject = "Zupercoin newsletter";
        $message = "Thank you we will contact you soon.";
        $header = "mythostest@petbooqtesting.com";
        mail($email, $subject, $message, $header);
        require_once 'dnconnection.php';
        $insert_email = "insert into tbl_email(email) values('$email')";
        mysqli_query($conn, $insert_email);
    }
}
?>
<form method="post" action="#">
    <input type="text" name="email" placeholder="Email">
<?php if (!isset($email)) {
    echo $error_email;
} ?>
    <input type="submit" name="submit" value="Submit">
</form>