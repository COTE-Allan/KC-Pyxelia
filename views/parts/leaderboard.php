
<?php
$leaderboard = array();
foreach ($users as $user) {
    $leaderboard[$user["user_name"]] = $user["pixels_placed"];
}

arsort($leaderboard);
// =============
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
$date = utf8_encode(strftime('le %d/%m/%Y, %H:%M'));
?>

<div class="leaderboard">
    <h1>Classements des joueurs les plus actifs</h1>
    <p>Dernière mise à jour <?=$date?></p>
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

<script>
    let buttonDisplayLeaderboard = document.querySelector(".buttonDisplayLeaderboard");
    let leaderboard = document.querySelector(".leaderboard")
    buttonDisplayLeaderboard.addEventListener("click", function() {
        leaderboard.classList.toggle("leaderboardActive");
    });
    leaderboard.addEventListener("click", function(){
        leaderboard.classList.toggle("leaderboardActive");
    });
</script>
