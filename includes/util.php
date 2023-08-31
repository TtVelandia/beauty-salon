<?php

function moneda($num) {
    $num = trim($num);
    if (preg_match("/[a-zA-Z]/i", $num)) {
        return -1;
    }
    $parts = explode(".", $num);
    $entero = $parts[0];
    $decimal = null;
    if (count($parts) > 1) {
        $decimal = $parts[1];
    }
    $valores = str_split($entero);
    $ret = "";
    $aux = 1;
    if (count($valores) > 0) {
        if ($valores[0] !== "0") {
            for ($i = count($valores) - 1; $i >= 0; $i--) {
                if ($aux % 3 === 0 && $aux < count($valores)) {
                    $ret = "." . $valores[$i] . $ret;
                } else {
                    $ret = $valores[$i] . $ret;
                }
                $aux++;
            }
        } else {
            $ret = "0";
        }
    } else if ($decimal !== null) {
        $ret = "0";
    }
    if ($decimal !== null) {
        $ret .= "," . $decimal;
    } else {
        $ret .= ",00";
    }
    return $ret;
}

function asMoneda($value, $decimal = 0) {
    return '$' . number_format($value, $decimal);
} 

function camelCase($str) {
    return ucwords(mb_strtolower($str, 'UTF-8'));
}

function mayuscula($str) {
    return mb_strtoupper($str, 'UTF-8');
}