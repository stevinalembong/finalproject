<?php include 'includes/header.php'; ?>
<?php require 'db.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
    $stmt->execute([$id]);
    $book = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user'])) {
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user']['id'];

    $stmt = $pdo->prepare('INSERT INTO comments (book_id, user_id, comment) VALUES (?, ?, ?)');
    $stmt->execute([$id, $user_id, $comment]);
}
?>

<h2><?php echo htmlspecialchars($book['title']); ?></h2>
<p>Description: <?php echo htmlspecialchars($book['description']); ?></p>
<p>Genre: <?php echo htmlspecialchars($book['genre']); ?></p>
<p>Rating: <?php echo htmlspecialchars($book['rating']); ?></p>

<?php if (isset($_SESSION['user'])): ?>
    <h3>Add Comment</h3>
    <form method="post" action="">
        <textarea name="comment" placeholder="Your comment" required></textarea>
        <button type="submit">Add Comment</button>
    </form>
<?php endif; ?>

<h3>Comments</h3>
<?php
$stmt = $pdo->prepare('SELECT comments.*, users.username FROM comments JOIN users ON comments.user_id = users.id WHERE book_id = ?');
$stmt->execute([$id]);
$comments =    $stmt->fetchAll();

foreach ($comments as $comment):
?>
    <div class="comment">
        <p><strong><?php echo htmlspecialchars($comment['username']); ?>:</strong> <?php echo htmlspecialchars($comment['comment']); ?></p>
    </div>
<?php endforeach; ?>

<style>
    /* Main content styling */
main {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
}

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

