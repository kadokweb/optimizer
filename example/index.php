<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php
    require __DIR__ . "/../vendor/autoload.php";

    $op = new \KadokWeb\Optimizer\Optimizer();
    echo $op
        ->optimize(
            "Optimizer Happy and @KadokWeb",
            "Is a compact and easy-to-use tag creator to optimize your site",
            "https://www.kadok.com.br/kadokweb/optimizer/example/",
            "https://www.kadok.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
        )
        ->publisher(
            "kadokweb",
            "kadokweb",
            "107305124529882639842",
            "103958419356641225872"
        )
        ->twitterCard(
            "@kadokweb",
            "@kadokweb",
            "kadok.com.br",
            "summary_large_image"
        )
        ->openGraph(
            "kadokweb",
            "pt_BR",
            "article"
        )
        ->facebook(null, ["626590459695980", "626590456695981"]) //->facebook(null, [59912837192372, 73642734735])
        ->render();
    ?>
</head>

<body>

    <h1><?= $op->title; ?></h1>
    <p><?= $op->description; ?></p>

    <?php
    echo "<pre>", print_r($op->data(), true), "</pre>";
    echo "<pre>", print_r(array_map("htmlspecialchars", $op->debug()), true), "</pre>";
    ?>

</body>

</html>