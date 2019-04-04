<html>
    <head>
        <title>Public flight</title>    
        <link href="timetable.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>

        <?php
        //Source: https://gist.github.com/ckimrie/4755385
        require_once("city_code_helper.php");
        echo '<h1>Public flight API</h1>';
        $app_id = '38068e1e';
        $app_key = '046f60fa7ad7c6734ec44ea691e3af12';
        //set the current time with 5 minute slow
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
            echo '<table class="timetable">';
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
                            $city_name = City::code($destination[0]);
                            if(isset($city_name)){
                                echo '<td>' .$city_name. '</td>';
                            } else{
                                echo '<td>' .$destination[0]. '</td>';
                            }
                            
                        }
                    echo '</tr>';
                }
            echo '</table>';
        }   
        ?>
    </body>
</html>  
