<!DOCTYPE html>
<html>
    <head>
    <title>Just a php Demo with JSON</title>
    </head>
    <body>
    <div>
       <p>-----------------------------For TMDB API using normal---------------------------------------------</p>
        <?php
            $url = 'https://api.themoviedb.org/3/genre/movie/list?api_key=8fdbbf7a3e6840a7637905e3ac8c976a&language=en-US'; // path to your JSON file
            $data = file_get_contents($url); // put the contents of the file into a variable
            $characters = json_decode($data); // decode the JSON feed
            foreach($characters->genres as $character){
                echo $character->id."&nbsp";               
                echo $character->name . "<br>";               
            }
        ?>
        <p>--------------------------------------For TMDB API using curl-----------------------------</p>
        <?php
            $ch = curl_init();
        
            curl_setopt_array($ch, array(
                CURLOPT_URL => "https://api.themoviedb.org/3/genre/movie/list?api_key=8fdbbf7a3e6840a7637905e3ac8c976a&language=en-US",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => "{}",
            ));

            $response = curl_exec($ch);
            $err = curl_error($ch);
            curl_close($ch);  
            $characters = json_decode($response);
            foreach($characters->genres as $character){
                echo $character->id."&nbsp";               
                echo $character->name . "<br>";              
            }            
        ?>
    </div>
    </body>
</html>

<!--
-------------------API KEY------------------------
API Key (v3 auth)
8fdbbf7a3e6840a7637905e3ac8c976a

Example API Request
https://api.themoviedb.org/3/movie/550?api_key=8fdbbf7a3e6840a7637905e3ac8c976a

For Images
https://image.tmdb.org/t/p/w500/'result';
https://image.tmdb.org/t/p/w150/kqjL17yufvn9OVLyXYpvtyrFfak.jpg
Sizes 
1) 150x225
2) 200x300
-->



