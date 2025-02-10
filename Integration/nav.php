<!-- Barre de Navigation -->
<nav class="navHaut">
    <ul>
        <li><img src="Image/ZENOVATECH.png" style="width: 40px; height: 40px;"></li>
        <li class="logoNav"><a id="ZenovaTech" href="index.php">RÉPACLIC</a></li>
        <li class="link"><a href="index.php" <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'id="hoverLink"'; ?>>ACCUEIL</a></li>
        <li class="link"><a href="depannage.php" <?php if (basename($_SERVER['PHP_SELF']) == 'depannage.php') echo 'id="hoverLink"'; ?>>DÉPANNAGE</a></li>
        <li class="link"><a href="https://www.paypal.com/donate/?hosted_button_id=SWNZPPLR2U6X8">DOTATION</a></li>
        <li class="link"><a href="cybersecurite.php" <?php if (basename($_SERVER['PHP_SELF']) == 'cybersecurite.php') echo 'id="hoverLink"'; ?>>CYBERSÉCURITÉ</a></li>
        <li class="link"><a href="actualites.php" <?php if (basename($_SERVER['PHP_SELF']) == 'actualites.php') echo 'id="hoverLink"'; ?>>ACTUALITÉS</a></li>
    </ul>
    <hr class="separatorNav">
</nav>
