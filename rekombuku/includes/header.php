<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/books.ico" type="image/x-icon">
    <title>Bambi</title>
    <style type="text/css">
    /* Reset default styles */
body, h1, ul, li, a, p {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    background-color: lightslategray;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Header styling */
header {
    background-color: lightslategray;
    color: white;
    padding: 15px 0;
    text-align: left;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h1 {
    font-size: 2.5em;
    margin-left: 20px;
}

/* Toggle menu styling */
.menu-toggle {
    display: none;
    cursor: pointer;
    font-size: 1.5em;
    margin-right: 20px;
    color: white;
}

nav ul {
    list-style: none;
    display: flex;
    padding: 0;
    margin-top: 10px;
    font-size: 15px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-size: 1.2em;
    transition: color 0.3s, border-bottom 0.3s;
}

nav ul li a:hover {
    color: khaki;
    border-bottom: 2px solid khaki;
}

/* Main content styling */
main {
    flex: 1;
    padding: 20px;
    max-width: 800px;
    margin: 20px auto;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    animation: fadeIn 1s ease-in-out;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Footer styling */
footer {
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Button styling */
button {
    background: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background 0.3s, transform 0.3s;
}

button:hover {
    background: #45a049;
    transform: scale(1.05);
}

/* Form input styling */
input[type="text"], input[type="email"], input[type="password"], textarea {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s;
}

input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus, textarea:focus {
    border-color: #4CAF50;
}

/* Responsive design */
@media (max-width: 600px) {
    .menu-toggle {
        display: block;
    }
    
    nav ul {
        display: none;
        flex-direction: column;
        background-color: lightslategray;
        position: absolute;
        top: 60px;
        right: 0;
        width: 100%;
        text-align: center;
    }

    nav ul.show {
        display: flex;
    }

    nav ul li {
        margin: 10px 0;
    }
}

main h3 {
    font-size: 2.5em;
    color: #35424a;
    margin-bottom: 20px;
}

main p {
    font-size: 1.2em;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #666;
    text-align: left;
}


    </style>
</head>
<body>
    <header>
        <h1>Bambi Books Shelf</h1>
        <span class="menu-toggle">&#9776;</span>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <?php if (isset($_SESSION['user'])): ?>
                    <li><a href="manage-books.php">Manage Books</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <h3>Hello there... Welcome to Bambi Books Shelf!</h3>
        <p>Discover Your Next Great Read with Us!</p>
        <p>At Bambi Books Shelf, we celebrate the wonder of reading and the endless journeys it offers. Whether you’re a seasoned reader or just beginning to explore the literary universe, our curated selection will ignite your imagination and captivate your heart.</p>
    </main>
    <script>
    // JavaScript for toggle menu
    document.querySelector('.menu-toggle').addEventListener('click', function() {
        document.querySelector('nav ul').classList.toggle('show');
    });
    </script>
</body>
</html>
