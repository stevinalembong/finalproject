

<?php include 'includes/header.php'; ?>
<?php require 'db.php'; ?>
<?php include 'includes/auth.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    $rating = $_POST['rating'];

    $stmt = $pdo->prepare('UPDATE books SET title = ?, description = ?, genre = ?, rating = ? WHERE id = ?');
    $stmt->execute([$title, $description, $genre, $rating, $id]);

    echo '<p>Book updated successfully.</p>';
} elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
    $stmt->execute([$id]);
    $book = $stmt->fetch();
}
?>

<h2>Edit Book</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
    <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
    <textarea name="description" required><?php echo $book['description']; ?></textarea>
    <input type="text" name="genre" value="<?php echo $book['genre']; ?>" required>
    <input type="number" name="rating" value="<?php echo $book['rating']; ?>" min="0" max="10" step="0.1" required>
    <button type="submit">Update Book</button>
</form>

<?php include 'includes/footer.php'; ?>
