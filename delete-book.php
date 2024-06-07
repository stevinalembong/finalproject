<?php
include 'includes/auth.php'; // Pastikan pengguna telah terotentikasi
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM books WHERE id = ?');
    
    // Eksekusi kueri dengan penanganan kesalahan
    try {
        $stmt->execute([$id]);
        // Pastikan bahwa baris dihapus
        if ($stmt->rowCount() > 0) {
            echo '<p>Book deleted successfully.</p>';
        } else {
            echo '<p>Book not found or could not be deleted.</p>';
        }
    } catch (PDOException $e) {
        echo '<p>Error: ' . $e->getMessage() . '</p>';
    }

    // Setelah menghapus buku, arahkan pengguna kembali ke halaman "Manage Books"
    header('Location: manage-books.php');
    exit; // Pastikan tidak ada kode yang dieksekusi setelah melakukan pengalihan
}
?>
