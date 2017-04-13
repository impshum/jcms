<?php
$directory = "cms/pages/";
$pages = glob($directory . "*.md");
echo "<a href='index.php' class='button list-btn hoverme wait'>Home</a><a href='campaigns.php' class='button list-btn hoverme wait'>Campaigns</a><a href='news.php' class='button list-btn hoverme wait'>News</a>";
foreach ($pages as $page) {
    $link = pathinfo($page, PATHINFO_FILENAME);
    $pretty = preg_replace('/_/', ' ', $link);
    echo "<a href='$link.php' class='button list-btn hoverme wait'>".ucfirst($pretty)."</a>";
}
echo "<a href='gallery.php' class='button list-btn hoverme wait'>Gallery</a><a href='terms_and_conditions.php' class='button list-btn hoverme wait'><small>Terms & Conditions</small></a>";
?>
