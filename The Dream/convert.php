<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur $$$</title>
</head>
<body>
    <h1>$$$</h1>
    <form method="get">
    <?php

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://currency-converter5.p.rapidapi.com/currency/convert?format=json&from=AUD&to=CAD&amount=1&language=en",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: currency-converter5.p.rapidapi.com",
                "x-rapidapi-key: ee58902371mshe8f9997b87947b4p1313c2jsna8cd6d6a1286"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
    ?>
    </form>
    
</body>
</html>