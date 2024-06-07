<?php include 'includes/header.php'; ?>
<?php require 'db.php'; ?>
<?php include 'includes/auth.php'; // Ensure only logged-in users can access ?>

<h2>Manage Books</h2>
<a href="add-book.php">Add New Book</a>

<?php
$stmt = $pdo->query('SELECT * FROM books');
while ($row = $stmt->fetch()):
?>
    <div class="book">
        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
        <a href="edit-book.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete-book.php?id=<?php echo $row['id']; ?>">Delete</a>
    </div>
<?php endwhile; ?>

<style>
    

/* Book styling */
.book {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.book h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #333;
}

.book p {
    margin-bottom: 10px;
    color: #666;
}

.book a {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.book a:hover {
    background-color: #0056b3;
}
</style>

<?php include 'includes/footer.php'; ?>
