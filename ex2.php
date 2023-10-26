<?php 
    // Question 1
    $initial = 13;
    $random = rand(0, 20);
    $iterations = [];

    while ( $random != $initial )
    {
        $random = rand(0, 20);
        $iterations[] = $random;
    }

    $whileResult = 
        "<b>Loop: While</b>" .
        var_dump($iterations) .
        "<ul>
            <li>initial: $initial</li>
            <li>random: $random</li>
            <li>iterations: " . count($iterations) . "</li>
        </ul>";

    do
    {
        $random = rand(0, 20);
        $iterations[] = $random;
    }
    while ( $random != $initial );
    
    $doWhileResult = 
        "<b>Loop: Do While</b>" .
        var_dump($iterations) .
        "<ul>
            <li>initial: $initial</li>
            <li>random: $random</li>
            <li>iterations: " . count($iterations) . "</li>
        </ul>";

    echo "<div style=\"display: flex;\">
        <div>$whileResult</div>
        <div>$doWhileResult</div>
        </div>";

        
    // ##################### Suite #####################
    // Question 2

    $max = rand(0, 20);
    $result = [];
    
    for ( $i = 3; $i <= $max; $i += 3 )
    {
        if ( $i % 3 == 0 )
            $result[] = $i;
        else
            break;
    }
    
    echo "max: $max, result:";
    print_r($result);