<?php
$posts = [
    [
        'title'   => 'Minum Air Putih 2 Liter Sehari',
        'slug'    => 'minum-air-putih',
        'summary' => 'Kenapa air putih penting, dan tips agar konsisten.',
        'date'    => '2025-06-15',
    ],
    [
        'title'   => 'Olahraga 15 Menit di Pagi Hari',
        'slug'    => 'olahraga-pagi',
        'summary' => 'Rangkaian gerakan ringan untuk memulai hari.',
        'date'    => '2025-06-10',
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hidup Sehat - Blog Sederhana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 text-gray-800">
  <header class="bg-green-600 text-white p-6 text-3xl font-bold">
    Hidup Sehat
  </header>

  <main class="max-w-2xl mx-auto p-6 space-y-8">
    <?php foreach ($posts as $post): ?>
      <article class="bg-white rounded-xl shadow p-6">
        <h2 class="text-2xl font-semibold mb-2">
          <a href="post.php?slug=<?= $post['slug'] ?>" class="hover:text-green-600">
            <?= htmlspecialchars($post['title']) ?>
          </a>
        </h2>
        <p class="text-sm text-gray-500 mb-3"><?= $post['date'] ?></p>
        <p><?= htmlspecialchars($post['summary']) ?></p>
      </article>
    <?php endforeach; ?>
  </main>

  <footer class="text-center text-sm text-gray-500 py-6">
    © 2025 - Dibuat dengan ❤️ untuk kesehatan
  </footer>
</body>
</html>