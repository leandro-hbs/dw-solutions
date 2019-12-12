<?php
function interfaces_encode($result)
{
    $processes = [];
    $regex = "/(\d*): (\S+):.*mtu (\d+).*state (\S+).*\s+link\/(\S+) (\S+) brd (\S+).*\s+/";
    preg_match_all($regex, $result, $matches);
    foreach ($matches[1] as $index => $user) {
        $processes[$matches[1][$index]] = [
            "id"        => $matches[1][$index],
            "name"      => $matches[2][$index],
            "mtu"       => $matches[3][$index],
            "state"     => $matches[4][$index],
            "link"      => $matches[5][$index],
            "mac"       => $matches[6][$index],
            "macbdr"    => $matches[7][$index],
        ];
    }
    $regex = "/(\d*).*\s+.*\s+inet (\d*.\d*.\d*.\d*)\/(\d)/";
    preg_match_all($regex, $result, $matches);
    foreach ($matches[1] as $index => $user) {
        $processes[$matches[1][$index]]["ip"]=$matches[2][$index];
        $processes[$matches[1][$index]]["mask"]=$matches[3][$index];
    }
    return array_values($processes);
}

function dados_encode($result,$name)
{
    $processes = ["name" => $name];
    $processes["stats"] = [];
    $regex = "/(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)\s+(\d+)/";
    preg_match_all($regex, $result, $matches);
    // var_dump($matches);
    foreach ($matches[1] as $index => $user) {
        $processes["stats"]["rx"] = [
            "bytes"     => $matches[1][$index],
            "packets"   => $matches[2][$index],
            "errors"    => $matches[3][$index],
            "dropped"   => $matches[4][$index],
            "overrun"   => $matches[5][$index],
            "mcast"     => $matches[6][$index],
        ];
        $processes["stats"]["tx"] = [
            "bytes"     => $matches[1][$index],
            "packets"   => $matches[2][$index],
            "errors"    => $matches[3][$index],
            "dropped"   => $matches[4][$index],
            "overrun"   => $matches[5][$index],
            "mcast"     => $matches[6][$index],
        ];
    }
    return $processes;
}