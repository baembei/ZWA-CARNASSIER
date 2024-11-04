<?php
$page = basename($_SERVER['PHP_SELF']);

$headerSettings = [
    'home-no-login.php' => [
        'headerClass' => 'transparent-header',
        'h1Class' => 'non-transparent-header-h1',
        'imgClass' => 'transparent-header-img'
    ],
//    'create-account.php' => [
//        'headerClass' => 'test-header',
//        'h1Class' => 'test-header-h1',
//        'imgClass' => 'test-header-img'
//    ],
    'home-user-logged.php' => [
        'headerClass' => 'transparent-header-black',
        'h1Class' => 'transparent-header-black-h1',
        'imgClass' => 'transparent-header-img'
    ]
];

$defaultSettings = [
    'headerClass' => 'non-transparent-header',
    'h1Class' => 'non-transparent-header-h1',
    'imgClass' => 'non-transparent-header-img'
];

$currentSettings = isset($headerSettings[$page]) ? $headerSettings[$page] : $defaultSettings;
?>

<header class="<?php echo $currentSettings['headerClass']; ?>">
    <nav class="nav-left">
        <ul>
            <li class="dropdown">
                <p>Highlights</p>
                <div class="dropdown-content">
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Women winter 2024</>
                        <a href="#">Handbags</a>
                        <a href="#">Shoes</a>
                        <a href="#">Accessories</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Women fall 2024</>
                        <a href="#">Handbags</a>
                        <a href="#">Shoes</a>
                        <a href="#">Accessories</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Men winter 2024</>
                        <a href="#">Bags</a>
                        <a href="#">Shoes</a>
                        <a href="#">Accessories</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Men fall 2024</>
                        <a href="#">Bags</a>
                        <a href="#">Shoes</a>
                        <a href="#">Accessories</a>
                        <a href="#">View All</a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <p>Women</p>
                <div class="dropdown-content">
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Ready to Wear</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Jackets and Pants</a>
                        <a href="#">Dresses and Skirts</a>
                        <a href="#">Shirts and Tops</a>
                        <a href="#">Denim</a>
                        <a href="#">Jersey</a>
                        <a href="#">Knitwear</a>
                        <a href="#">Leather and Coats</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Shoes</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Loafers</a>
                        <a href="#">Heels</a>
                        <a href="#">Sneakers</a>
                        <a href="#">Boots</a>
                        <a href="#">Sandals</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Handbags</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Shoulder Bags</a>
                        <a href="#">Crossbody Bags</a>
                        <a href="#">Clutches and Evening</a>
                        <a href="#">Totes</a>
                        <a href="#">Backpacks</a>
                        <a href="#">Minibags</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Small Leather Goods</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Wallets</a>
                        <a href="#">Card Cases</a>
                        <a href="#">Cases and Holders</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Accessories</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Belts</a>
                        <a href="#">Hats and Gloves</a>
                        <a href="#">Scarves and Silk</a>
                        <a href="#">Sunglasses</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Jewelry</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Bracelets</a>
                        <a href="#">Brooches and Rings</a>
                        <a href="#">Earrings and Necklaces</a>
                        <a href="#">View All</a>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <p>Men</p>
                <div class="dropdown-content">
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Ready to Wear</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Jackets and Pants</a>
                        <a href="#">Shirts</a>
                        <a href="#">Denim</a>
                        <a href="#">Jersey</a>
                        <a href="#">Knitwear</a>
                        <a href="#">Leather and Coats</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Shoes</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Formal</a>
                        <a href="#">Sneakers</a>
                        <a href="#">Boots</a>
                        <a href="#">Sandals</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Bags</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Backpacks</a>
                        <a href="#">Crossbody</a>
                        <a href="#">Travel bags</a>
                        <a href="#">Briefcases</a>
                        <a href="#">Totes</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Small Leather Goods</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Card Cases</a>
                        <a href="#">Wallets</a>
                        <a href="#">Cases and Holders</a>
                        <a href="#">View All</a>
                    </div>
                    <div class="menu-column">
                        <a class="dropdown-categories" href="#">Accessories</a>
                        <a class="dropdown-new-arrivals" href="#">New Arrivals</a>
                        <a href="#">Belts</a>
                        <a href="#">Jewelry</a>
                        <a href="#">Sunglasses</a>
                        <a href="#">View All</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <div class="carnassier-header">
        <h1 class="<?php echo $currentSettings['h1Class']; ?>">Carnassier</h1>
    </div>

    <nav class="nav-right">
        <ul>
            <li><a>La Maison</a></li>
            <li><a href="https://maps.app.goo.gl/LJuiNbEob8MS3yYu7">Stores</a></li>
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']): ?>
                <li class="profile-container">
                    <a href="#" id="profileBtn">Account</a>
                    <div class="dropdown-menu" id="profileMenu">
                        <a href="#">My Account</a>
                        <a href="#">My Orders</a>
                        <a href="#">Saved Items</a>
                        <a href="#">Settings</a>
                        <a href="#">Log Out</a>
                    </div>
                </li>
            <?php else: ?>
                <li><a href="sign-in.php">Log In</a></li>
            <?php endif; ?>
            <li>
                <img src="/references/loupe.png" alt="Search" class="search-image <?php echo $currentSettings['imgClass']; ?>" id="search-icon">
            </li>
            <li><img src="/references/parcel.png" alt="Cart Image" class="cart-image cart-icon" /></li>
        </ul>
    </nav>
</header>

<div id="search-overlay" class="search-overlay"></div>
<div id="search-menu" class="search-menu">
    <button id="close-button" class="close-button">&times;</button>
    <label for="search-input" class="search-menu-label">What are you looking for?</label>
    <div class="search-container">
        <input type="text" placeholder="Search" id="search-input">
        <button id="clear-button" class="clear-button" style="display: none;">CLEAR</button>
    </div>
</div>

<div id="cart-overlay" class="cart-overlay"></div>
<div id="cart-menu" class="cart-menu">
    <button id="cart-close-button" class="close-button">&times;</button>
    <div id="cart-content" class="cart-content">

    </div>
</div>