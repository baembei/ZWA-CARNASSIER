<?php
$total_products = 16;
$products_per_page = 8;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_index = ($current_page - 1) * $products_per_page;

$products = [
    ["name" => "Wild Barocco Fitted Midi Dress", "price" => "1,790 €", "image" => "references/elordi1.jpeg"],
];

$products_on_page = array_slice($products, $start_index, $products_per_page);
$total_pages = ceil($total_products / $products_per_page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Pagination</title>
    <link rel="stylesheet" href="pagination-test.css">
</head>
<body>

<div class="product-list">
    <?php foreach ($products_on_page as $product): ?>
        <div class="product">
            <img src="<?php echo $product['image']; ?>" alt="Product Image" class="product-image">
            <div class="product-info">
                <h2 class="product-name"><?php echo $product['name']; ?></h2>
                <p class="product-price"><?php echo $product['price']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Пагинация -->
<div class="pagination">
    <?php if ($current_page > 1): ?>
        <a href="?page=<?php echo $current_page - 1; ?>">Previous</a>
    <?php endif; ?>

    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" <?php if ($i == $current_page) echo 'class="active"'; ?>>
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>

    <?php if ($current_page < $total_pages): ?>
        <a href="?page=<?php echo $current_page + 1; ?>">Next</a>
    <?php endif; ?>
</div>

</body>
</html>
