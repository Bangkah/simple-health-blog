<?php
$slug = $_GET['slug'] ?? '';
$posts = [
    'minum-air-putih' => [
        'title' => 'Minum Air Putih 2 Liter Sehari',
        'date'  => '2025-06-15',
        'body'  => '<p>Air putih membantu metabolisme tubuh...</p><p><b>Tips:</b> bawa tumbler ke mana-mana.</p>',
    ],
    'olahraga-pagi' => [
        'title' => 'Olahraga 15 Menit di Pagi Hari',
        'date'  => '2025-06-10',
        'body'  => '<p>Stretching ringan, skipping, atau joging di tempat...</p>',
    ],
];

if (!isset($posts[$slug])) {
    http_response_code(404);
    echo 'Artikel tidak ditemukan';
    exit;
}
$post = $posts[$slug];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($post['title']) ?> - Hidup Sehat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50">
  <header class="bg-green-600 text-white p-6 text-2xl font-bold">
    <a href="index.php" class="hover:underline">← Hidup Sehat</a>
  </header>

  <main class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow mt-8">
    <h1 class="text-3xl font-bold mb-3"><?= htmlspecialchars($post['title']) ?></h1>
    <p class="text-sm text-gray-500 mb-6"><?= $post['date'] ?></p>
    <div class="prose max-w-none">
      <?= $post['body'] ?>
    </div>
  </main>

  <footer class="text-center text-sm text-gray-500 py-6">
    © 2025
  </footer>
</body>
</html>