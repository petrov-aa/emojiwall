<?php

namespace App;

$emojis = [
    "&#x1F601",
    "&#x1F602",
    "&#x1F603",
    "&#x1F604",
    "&#x1F605",
    "&#x1F606",
    "&#x1F609",
    "&#x1F60A",
    "&#x1F61C",
    "&#x1F638",
    "&#x1F639",
    "&#x1F63A",
    "&#x1F923",
    "&#x1F61D",
    "&#x1F643",
    "&#x1F642",
]

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Emoji Wall
    </title>
</head>
<body>
<div>
    <?php for ($i = 0; $i < 10000; $i++): ?>
        <?= $emojis[array_rand($emojis)] ?>
    <?php endfor; ?>
</div>
</body>
</html>
