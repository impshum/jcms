<?php
spl_autoload_register(function ($class) {
    require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});
use \Michelf\Markdown;

# CMS PARTIALS

$fetch = "file_get_contents";
$mangle = "defaultTransform";

$title0 = $fetch('cms/front/1-title.md');
$title = Markdown::$mangle($title0);

$subtitle0 = $fetch('cms/front/2-subtitle.md');
$subtitle = Markdown::$mangle($subtitle0);

$block1title0 = $fetch('cms/front/block-1-title.md');
$block1title = Markdown::$mangle($block1title0);

$block10 = $fetch('cms/front/block-1.md');
$block1 = Markdown::$mangle($block10);

$block2title0 = $fetch('cms/front/block-2-title.md');
$block2title = Markdown::$mangle($block2title0);

$block20 = $fetch('cms/front/block-2.md');
$block2 = Markdown::$mangle($block20);

$block3title0 = $fetch('cms/front/block-3-title.md');
$block3title = Markdown::$mangle($block3title0);

$block30 = $fetch('cms/front/block-3.md');
$block3 = Markdown::$mangle($block30);

$block4title0 = $fetch('cms/front/block-4-title.md');
$block4title = Markdown::$mangle($block4title0);

$block40 = $fetch('cms/front/block-4.md');
$block4 = Markdown::$mangle($block40);

$block5title0 = $fetch('cms/front/block-5-title.md');
$block5title = Markdown::$mangle($block5title0);

$block50 = $fetch('cms/front/block-5.md');
$block5 = Markdown::$mangle($block50);

$block6title0 = $fetch('cms/front/block-6-title.md');
$block6title = Markdown::$mangle($block6title0);

$block60 = $fetch('cms/front/block-6.md');
$block6 = Markdown::$mangle($block60);

$main0 = $fetch('cms/front/main.md');
$main = Markdown::$mangle($main0);

$about0 = $fetch('cms/pages/about.md');
$about = Markdown::$mangle($about0);

$donate0 = $fetch('cms/pages/donate.md');
$donate = Markdown::$mangle($donate0);

$helpfile0 = $fetch('assets/help/helpfile.md');
$helpfile = Markdown::$mangle($helpfile0);

$test0 = $fetch('cms/pages/test.md');
$test = Markdown::$mangle($test0);

# TO ADD A NEW PAGE CHANGE 1 THROUGH TO 4 TO YOUR PAGE NAME - MAKE SURE YOU KEEP THE SAME FORMAT
#
#   1                          2
#   |                          |
# $test0 = $fetch('cms/pages/test.md');
# $test = Markdown::$mangle($test0);
#   |                          |
#   3                          4

# END CMS PARTIALS


# DO NOT EDIT BELOW HERE UNLESS YOU KNOW WHAT YOU'RE DOING

date_default_timezone_set("Europe/London");

function campaigns()
{
    $base_dir = __DIR__;
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $domain = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $url = "${protocol}://${domain}${disp_port}";
    $directory = "cms/campaigns/";
    $pages = glob($directory . "*.md");
    usort($pages, function ($a, $b) {
        return filemtime($a) < filemtime($b);
    });
    foreach ($pages as $page) {
        $posted =  date('F d Y', filemtime($page));
        $link = pathinfo($page, PATHINFO_FILENAME);
        $campaign = file_get_contents("cms/campaigns/$link.md");
        $hostname = getenv('HTTP_HOST');
        $post = Markdown::defaultTransform($campaign);
        echo "<div class='spaced'><div id='$link' class='closed' data-aos='zoom-out' data-aos-once='true'>".$post."<i class='flippy icon-asterisk' data-aos='zoom-in'></i><div class='posted'><i class='icon-clock-o lefto'></i>".$posted."</div><br><br><br><div class='shareit'><i class='icon-share sharey'></i> <a href='https://www.facebook.com/sharer/sharer.php?u=$url/campaigns.php?#$link'><i class='icon-facebook share'></i></a> <a href='https://twitter.com/home?status=$url/campaigns.php?#$link'><i class='icon-twitter share'></i></a></div><div class='fadeout'>&nbsp;</div><button class='read button hoverme'>read more</button>";
        echo "</div></div><br><hr><br>";
    }
}

function news()
{
    $base_dir = __DIR__;
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $domain = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $url = "${protocol}://${domain}${disp_port}";
    $directory = "cms/news/";
    $pages = glob($directory . "*.md");
    usort($pages, function ($a, $b) {
        return filemtime($a) < filemtime($b);
    });
    foreach ($pages as $page) {
        $posted =  date('F d Y', filemtime($page));
        $link = pathinfo($page, PATHINFO_FILENAME);
        $campaign = file_get_contents("cms/news/$link.md");
        $hostname = getenv('HTTP_HOST');
        $post = Markdown::defaultTransform($campaign);
        echo "<div class='spaced'><div id='$link' class='closed' data-aos='zoom-out' data-aos-once='true'>".$post."<i class='flippy icon-exclamation' data-aos='zoom-in'></i><div class='posted'><i class='icon-clock-o lefto'></i>".$posted."</div><br><br><br><div class='shareit'><i class='icon-share sharey'></i> <a href='https://www.facebook.com/sharer/sharer.php?u=$url/campaigns.php?#$link'><i class='icon-facebook share'></i></a> <a href='https://twitter.com/home?status=$url/campaigns.php?#$link'><i class='icon-twitter share'></i></a></div><div class='fadeout'>&nbsp;</div><button class='read button hoverme'>read more</button>";
        echo "</div></div><br><hr><br>";
    }
}

function legal()
{
    $directory = "cms/pages/legal/";
    $pages = glob($directory . "*.md");
    foreach ($pages as $page) {
        $link = pathinfo($page, PATHINFO_FILENAME);
        $legal = file_get_contents("cms/pages/legal/$link.md");
        $post = Markdown::defaultTransform($legal);
        echo "<div class='closed'>".$post."<div class='fadeout'>&nbsp;</div><br><br><br><button class='read button'>read more</button></div><br><hr><br>";
    }
}

function team()
{
    $directory = "cms/team/";
    $pages = glob($directory . "*.md");
    $i=0;
    foreach ($pages as $page) {
        $link = pathinfo($page, PATHINFO_FILENAME);
        $team = file_get_contents("cms/team/$link.md");
        $post = Markdown::defaultTransform($team);
        ++$i;
        if ($i==1) {
            echo "<div class='row'>";
            echo "<div class='one-third column team' data-aos='zoom-out' data-aos-offset='0' data-aos-once='true'>".$post."</div>";
        }
        if ($i==2) {
            echo "<div class='one-third column team' data-aos='zoom-out' data-aos-offset='50' data-aos-once='true'>".$post."</div>";
        }
        if ($i==3) {
            echo "<div class='one-third column team' data-aos='zoom-out' data-aos-offset='100' data-aos-once='true'>".$post."</div>";
            echo "</div>";
            $i=0;
        }
    }
}

function gallery()
{
    $directory = "cms/images/gallery/";
    $pages = glob($directory . "*.jpg");
    echo "<div class='grid' data-colcade='columns: .grid-col, items: .grid-item'><div class='grid-col grid-col--1'></div><div class='grid-col grid-col--2'></div><div class='grid-col grid-col--3'></div><div class='grid-col grid-col--4'></div>";
    foreach ($pages as $page) {
        $link = pathinfo($page, PATHINFO_FILENAME);
        echo "<div class='grid-item'><img class='fullme' src='cms/images/gallery/".$link.".jpg'></div>";
    }
    echo "</div>";
}


# DO NOT EDIT ABOVE HERE UNLESS YOU KNOW WHAT YOU'RE DOING
