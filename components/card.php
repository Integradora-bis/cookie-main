<?php

echo '
<br><br> 
<div class = "container col-15">';

for($y = 0; $y < 4; $y++){

echo '<div class="row">';    

    for($x = 0; $x < 4; $x++){

        echo '        
        <div class="col-md">
            <div id ="foods">
                <a href="https://www.thispersondoesnotexist.com">
                    <img src="https://3.bp.blogspot.com/-K4aLEzZ4CQU/Ujef__jBXKI/AAAAAAAAB-Q/xgSKIxsvjo8/s1600/perrito-triste.jpg" class="card-img-top" alt="Foods" style="width:100% height:auto">              
                        <button type="button" class="btn btn-outline-dark col mb-4">Perrito</button>                                 
                </a>  
            </div>
        </div>
                ';
    }

echo '</div>';

}

echo '</div>';
 
?>
