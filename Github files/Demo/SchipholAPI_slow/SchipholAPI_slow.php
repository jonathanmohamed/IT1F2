<html>
    <head>
        <title>Public flight</title>      
    </head>
    <body>
        <?php
        include 'IataCodes.php';
        $ic = new IataCodes('31ccadbe-77d7-408c-9209-0af61f3dbc00', '6');
       

        
        echo '<h1>Public flight API</h1>';
        $app_id = '38068e1e';
        $app_key = '046f60fa7ad7c6734ec44ea691e3af12';
        $hour = date('h');
        $minute = date('i');
        $hhmm = $hour.'%3A'.$minute;
        
        $curl = curl_init('https://api.schiphol.nl/public-flights/flights?app_id=38068e1e&app_key=046f60fa7ad7c6734ec44ea691e3af12&scheduletime='.$hhmm.'&includedelays=false&page=0&sort=%2Bscheduletime');
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'resourceversion: v3'
            )
        ));


        $response = curl_exec($curl);

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($http_code != 200) {
            echo $http_code . ' Error when calling the public flight api: ' . $response;
        } else {
            $array = json_decode($response, true);
            echo '<table>';
                echo '<tr>';
                    echo '<th>Flight number</th>';
                    echo '<th>Flight date</th>';
                    echo '<th>Depature time</th>';
                    echo '<th>Destination</th>';
                echo '</tr>';
                foreach ($array['flights'] as $flight) {
                    echo '<tr>';
                        echo '<td>' . $flight['flightName'] . '</td>';
                        echo '<td>' . (string) $flight['scheduleDate'] . '</td>';
                        echo '<td>' . (string) $flight['scheduleTime'] . '</td>';
                        foreach ($flight['route'] as $destination){
//                            echo '<td>' . $destination[0] . '</td>';
                            $code = $destination[0];
                            $city = $ic->api('airports', array('code' =>$code));
                            foreach($city['response'] as $city_name){
                                 print_r('<td>'.$city_name['name'].'</td>');
                            }
                        }
                    echo '</tr>';
                }
            echo '</table>';
            
            }
        ?>
    </body>
</html>  
    
