<?php include 'includes/header.php'; ?>
<?php require 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = 'email';

    $stmt = $pdo->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
    $stmt->execute([$username, $password, $email]);

    echo '<p>Registration successful. <a href="login.php">Login here</a>.</p>';
}
?>

<style>
    /* Login form styling */
form {
    background-color: lightslategrey;
    padding: 50px;
    border-radius: 8px;
    max-width: 500px;
   
}

h2 {
    font-size: 2em;
    margin-bottom: 20px;
    text-align: center;
    color: white;

}

input[type="text"],
input[type="password"] {
    max-width: 50%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    max-width: 50%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: navy;
    color: white;
    justify-content: center;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

p {
    margin-top: 15px;
    text-align: center;
    color: white;
}
</style>

<h2>First Time Here? Please Register</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button>
</form>

<?php include 'includes/footer.php'; ?>
