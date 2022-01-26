
<?php

// =============
$leaderboard = array();
foreach ($users as $user) {
    $leaderboard[$user["user_name"]] = $user["pixels_placed"];
}
arsort($leaderboard);
// =============

?>

<div class="leaderboard">
    <h2>Classements des joueurs les plus actifs</h2>
    <ul class="leaderboard-list">
        <?php
$i = 0;
foreach ($leaderboard as $user => $pixels) {
    if ($i <= 8) {
        $c = $i + 1;
        $e = 40 - $c;
        $k = 25 - $c;
        ?>
                <li class="leaderboard-element" style="font-size: <?=$k . "px"?>">
                    <span class="leaderboard-element-position" style="font-size: <?=$e . "px"?>"><?=$c?></span>
                    <?=$user?> - <?=$pixels?> pixels
                </li>
                <?php
$i++;
    }
}

?>
    </ul>
</div>

