
<?php   
    include("Signup.php");

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    echo '<br>Nombre: '.$name.' '.$surname.
    '<br>User: '.$userName.
    '<br>Email '.$email.
    '<br>Password '.$pw.'<br>';
    
    $signup = new Signup();
    
    print_r($signup->addUser($name, $surname, $userName, $email, $pw));

?>