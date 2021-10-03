<?php
include_once('./classes/user.php');
include_once('./classes/database.php');
$db = new Database;
$user = new User($db->getConnection());
echo "<ul class='pagination'>";
$page = 2;
// button for first page
if ($page > 1) {
    echo "<li class='page-item' ><a href=' " . htmlspecialchars($_SERVER['PHP_SELF']) . " ' title='Go to the first page.' class='page-link' >";
    echo " << First ";
    echo "</a></li>";
}

// count all rows in the database
$total_rows = $user->countAll();

// Returns the next highest integer value by rounding up value if necessary. 18/5=3,6 ~ 4
$total_pages = ceil($total_rows / $records_per_page); //ceil � Round fractions up

// range of num of links to show
$range = 2;

// display number of link to 'range of pages' and wrap around 'current page'
$initial_num = $page - $range;
$condition_limit_num = ($page + $range) + 1;


for ($x = $initial_num; $x < $condition_limit_num; $x++) {

    // setting the current page
    if (($x > 0) && ($x <= $total_pages)) {

        // display current page
        if ($x == $page) {
            //echo "<li class='page-item active' ><a href=\"#\">$ <span class=\"sr-only\" class='page-link' >(current)</span></a></li>";
            echo '<li class="page-item active"><a class="page-link" href="#">' . $x . '</a></li>';
        }

        // not current page
        else {
            echo "<li class='page-item ' ><a href='" . htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$x' class='page-link' >$x</a></li>";
        }
    }
}

// button for last page
if ($page < $total_pages) {
    echo "<li class='page-item '  ><a href='" . htmlspecialchars($_SERVER['PHP_SELF']) . "?page={$total_pages}' title='Last page is {$total_pages}.' class='page-link' >";
    echo "Last >> ";
    echo "</a></li>";
}

echo "</ul>";
