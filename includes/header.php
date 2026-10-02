<?php
if (!isset($title)) {
    $title = 'Ódami del Norte';
}
if (!isset($pageDescription)) {
    $pageDescription = 'Sitio cultural sobre la historia, lengua y cosmovisión de los Ódami del Norte.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title); ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif']
          },
          colors: {
            terracota: '#C96A3D',
            maiz: '#D9A441',
            textil: '#A63D40',
            sierra: '#4F6F52',
            cielo: '#6FA3C8',
            tierra: '#F1E3C6',
            cafe: '#5B4636',
            arena: '#F7EFE1'
          },
          boxShadow: {
            suave: '0 10px 30px rgba(91, 70, 54, 0.12)'
          },
          backgroundImage: {
            'hero-odami': 'linear-gradient(135deg, rgba(166,61,64,0.95), rgba(201,106,61,0.92), rgba(217,164,65,0.88))',
            'patron-odami': 'radial-gradient(circle at 20% 20%, rgba(255,255,255,0.08) 0 2px, transparent 2px 100%), linear-gradient(45deg, rgba(255,255,255,0.05) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.05) 50%, rgba(255,255,255,0.05) 75%, transparent 75%, transparent)'
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-tierra text-cafe min-h-screen flex flex-col">
