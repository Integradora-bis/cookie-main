<?php

echo '
<br>
<div class = "container col-30">
<h3 style="text-align:center">What do you want to eat today?</h3><br>
';

for($y = 0; $y < 4; $y++){

echo '<div class="row">';    

    for($x = 0; $x < 4; $x++){

        echo '        
        <div class="col-md">
            <div id ="foods">
                <a href="https://www.thispersondoesnotexist.com">
                    <img src="https://cdn-img.health.com/sites/default/files/styles/large_16_9/public/1518546298/twelve-week-spaghetti-meatball-salad.jpg?itok=pTN-uFgV" class="card-img-top" alt="Foods" style="width:100% height:auto">              
                        <button type="button" class="btn btn-outline-dark col mb-4">Spaguetti and Meatballs</button>                                 
                </a>  
            </div>
        </div>
                ';
    }

echo '</div>';

}

echo '</div>';
 
?>
