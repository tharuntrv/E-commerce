<?php
// Read book data from data.json
$books = json_decode(file_get_contents('data.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script and Imagination Bookstore - Catalog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Script and Imagination Bookstore</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="catalog.php">Catalog</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Book Catalog</h2>
        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <strong>Title:</strong> <?php echo $book['title']; ?> |
                    <strong>Author:</strong> <?php echo $book['author']; ?> |
                    <strong>Genre:</strong> <?php echo $book['genre']; ?> |
                    <strong>Language:</strong> <?php echo $book['language']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <footer>
        <p>&copy; 2023 Script and Imagination Bookstore</p>
    </footer>
</body>
</html>
