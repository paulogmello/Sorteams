<?php
$players = $_POST['players'];
$osPlayers = explode(',', $players);
$quantidadeDeTimes = $_POST['qnt'];


if (count($_POST) > 0) {
    $erros = [];
    if (!$players) {
        $erros["noplayers"] = '<i class="fa-solid fa-circle-exclamation"></i> Need more players';
    }
    if ($quantidadeDeTimes === "1") {
        $erros["numtime"] = '<i class="fa-solid fa-circle-exclamation"></i> You need specify how many teams';
    }
    if (!count($erros)) {
        $calculo = ceil(count($osPlayers) / $quantidadeDeTimes);
        if ($calculo % 2) {
            $osPlayers[] = "";
        }
        shuffle($osPlayers);
        $times = array_chunk($osPlayers, $calculo);
    }
}
