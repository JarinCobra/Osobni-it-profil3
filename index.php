<?php
// 1. Načtení dat ze souboru
$json_content = file_get_contents('profile.json');

// 2. Převod JSON na PHP pole (true zajistí asociativní pole)
$data = json_decode($json_content, true);

// 3. Uložení do proměnných pro snazší práci
$name = $data['name'];
$skills = $data['skills'];
$interests = $data['interests'];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>IT Profil | <?php echo htmlspecialchars($name); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($name); ?></h1>

        <section>
            <h2>Dovednosti</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo htmlspecialchars($skill); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Zájmy a projekty</h2>
            <ul>
                <?php foreach ($interests as $item): ?>
                    <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</body>
</html>