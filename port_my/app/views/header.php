<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial=scale1.0">
    <title><?=$data['page_title']?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?=ASSETS?>css/style.css">
        <link rel="stylesheet" 
        href="//use.fontawesome.com/releases/v5.2.0/css/all.css">
</head>
<body>
<header>
    <div class="logo-header">
        <a href="index.php">
            <img src="<?=ASSETS?>img\logo.jpg" alt="Portfolio Logo" title="Portfolio Logo">
        </a></div>
    <nav class="top-menu">
        <ul>
            <li>
                <a href="<?=ROOT?>index">Home</a>
            </li>
            <li>
                <a href="<?=ROOT?>index.php#bio">About me</a>
            </li>
            <li>
                <a href="<?=ROOT?>apps">My apps</a>
            </li>
            <li>
                <a href="<?=ROOT?>contacts">Contacts</a>
            </li>
        </ul>
    </nav>
</header>