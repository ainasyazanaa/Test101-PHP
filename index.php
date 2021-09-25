<?php
    $datas = json_decode(file_get_contents('data.json'));


    sort($datas);
       
    foreach($datas as $data){
        $newdate = date('l jS \of F g:i a.', strtotime($data->pubDate));

            
        echo '<div> 
                <ul>
                    <li> 
                        <h2>' .$data->title. '</h2>
                        <p><i>' .$newdate. '</i></p>
                        <p>'
                            .$data->description. '<br><br>'
                            .implode("<br>", $data->link).
                        '</p>
                    </li>
                </ul>
            </div>';
    }