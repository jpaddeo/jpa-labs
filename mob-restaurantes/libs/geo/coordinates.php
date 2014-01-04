<?php
function distanceTwoBetweenCoordinates($lat1, $lng1, $lat2, $lng2, $miles = false) {
    // Retorna la distancia entre dos pares (lat y long) en KM o MILLAS.
    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lng1 *= $pi80;
    $lat2 *= $pi80;
    $lng2 *= $pi80;

    $r = 6372.797; // Radio de la Tierra en KM
    $dlat = $lat2 - $lat1;
    $dlng = $lng2 - $lng1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $km = $r * $c;

    return ($miles ? ($km * 0.621371192) : $km);
}

function getCoordinatesCURL($address) {
    $address = urlencode($address);
    // $url = "https://maps.google.com/maps/geo?q=" . $address . "&key=".GOOGLEMAP_KEY."&output=csv&key=" . $key;
    $url = "https://maps.google.com/maps/geo?q=" . $address . "&key=" . GOOGLEMAP_KEY . "&output=csv";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0); //Change this to a 1 to return headers
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    if (defined("PROXY_URL")) {
        curl_setopt($ch, CURLOPT_PROXY, PROXY_URL);
        curl_setopt($ch, CURLOPT_PROXYPORT, PROXY_PORT);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, PROXY_USER_PASSWORD);
        error_log("Google via proxy. " . $url);
    }

    $data = curl_exec($ch);
    curl_close($ch);

    error_log("Data: " . $data);

    $coordinates = "0,0";

    if (substr($data, 0, 3) == "200") {
        $data = explode(",", $data);
        $precision = $data[1];
        $latitude = $data[2];
        $longitude = $data[3];
        $coordinates = $longitude . "," . $latitude;
    } else {
        error_log("Error in geocoding! Http error " . substr($data, 0, 3));
    }
    return $coordinates;
}

function getCoordinatesXML($direccion) {
    $direccion = urlencode($direccion);
    $request_url = "http://maps.google.com/maps/geo?q=" . $direccion . "&key=" . GOOGLEMAP_KEY . "&output=xml";
    $delay = 0;
    $res_coordenadas = "0,0";

    $geocode_pending = true;
    while ($geocode_pending) {
        $xml = simplexml_load_file($request_url);
        $status = $xml->Response->Status->code;
        if (strcmp($status, "200") == 0) {
            $geocode_pending = false;
            // Proceso las coordenadas.
            $coordinates = $xml->Response->Placemark->Point->coordinates;
            $coordinatesSplit = explode(",", $coordinates);
            // Formato: Longitud, Latitud, Altitud
            $latitud = $coordinatesSplit[1];
            $longitud = $coordinatesSplit[0];

            $res_coordenadas = $longitud . "," . $latitud;
        } else if (strcmp($status, "620") == 0) {
            // Retraso el pedido
            $delay += 100000;
        } else {
            // Error de GeoCoding
            $geocode_pending = false;
        }
        usleep($delay);
    }

    return $res_coordenadas;
}

?>
