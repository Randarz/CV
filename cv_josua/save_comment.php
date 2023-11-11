<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $comment = $_POST['comment'];

  include 'config.php'; 

  $cvId = 1; 
  $query = "INSERT INTO comments (cv_id, comment_text) VALUES (?, ?)";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "is", $cvId, $comment);

  if (mysqli_stmt_execute($stmt)) {
      echo 'Komentar berhasil disimpan';
  } else {
      echo 'Terjadi kesalahan saat menyimpan komentar';
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  echo 'Metode tidak diizinkan';
}
?>
