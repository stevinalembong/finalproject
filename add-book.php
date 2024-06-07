<?php include 'includes/header.php'; ?>
<?php require 'db.php'; ?>
<?php include 'includes/auth.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];

    $stmt = $pdo->prepare('INSERT INTO books (title, description, genre, rating) VALUES (?, ?, ?, ?)');
$stmt->execute([$title, $description, $genre, $rating]);

echo '<p>Book added successfully.</p>';

}
?>

   <h2>Add New Book</h2>
   <form method="post" action="">
       <input type="text" name="title" placeholder="Title" required>
       <textarea name="description" placeholder="Description" required></textarea>
       <input type="text" name="genre" placeholder="Genre" required>
       <input type="number" name="rating" placeholder="Rating" min="0" max="10" step="0.1" required>
       <button type="submit">Add Book</button>
   </form>
   <?php include 'includes/footer.php'; ?>