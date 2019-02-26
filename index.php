<?php 
    
    // noun array
    $nouns = array();
    $nouns[ 0 ] = 'man';
    $nouns[ 1 ] = 'fly';
    $nouns[ 2 ] = 'Chardonnay';
    $nouns[ 3 ] = 'death row pardon';
    $nouns[ 4 ] = 'lottery';
    $nouns[ 5 ] = 'rain';
    $nouns[ 6 ] = 'wedding day';
    $nouns[ 7 ] = 'ride';
    $nouns[ 8 ] = 'advice';
    $nouns[ 9 ] = 'suitcase';
    $nouns[ 10 ] = 'kids';
    $nouns[ 11 ] = 'flight';
    $nouns[ 12 ] = 'plane';

    // adjective array
    $adjectives = array();
    $adjectives [ 0 ] = 'old';
    $adjectives [ 1 ] = 'black';
    $adjectives [ 2 ] = 'ironic';
    $adjectives [ 3 ] = 'free';
    $adjectives [ 4 ] = 'nice';
    $adjectives [ 5 ] = 'ironic';

    // verb array
    $verbs = array();
    $verbs[ 0 ] = 'won'; 
    $verbs[ 1 ] = 'died'; 
    $verbs[ 2 ] = 'think'; 
    $verbs[ 3 ] = 'paid'; 
    $verbs[ 4 ] = 'take'; 
    $verbs[ 5 ] = 'figures'; 
    $verbs[ 6 ] = 'fly'; 
    $verbs[ 7 ] = 'packed'; 
    $verbs[ 8 ] = 'kissed';    
    $verbs[ 9 ] = 'waited'; 
    
    
    // shuffle function applied to each array
    shuffle( $nouns );
    shuffle( $adjectives );
    shuffle( $verbs );

 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <title>Ironic Mad-libs</title>
</head>

<body>

    <article>

        <h1> Ironic Mad-libs</h1>


        <p>A
            <?php echo $adjectives[ 0 ] ?>
            <?php echo $nouns[ 0 ] ?>
            <?php echo $verbs[ 0 ] ?> ninety-eight <br> He
            <?php echo $verbs[ 1 ] ?> the
            <?php echo $nouns[ 1 ] ?> and
            <?php echo $verbs[ 1 ] ?> the next day<br> It's a
            <?php echo $adjectives[ 1 ] ?>
            <?php echo $nouns[ 2 ] ?> in your
            <?php echo $nouns[ 3 ] ?><br> It's a
            <?php echo $nouns[ 4 ] ?> two minutes too late<br> And isn't it
            <?php echo $adjectives[ 2 ] ?>... don't you
            <?php echo $verbs[ 2 ] ?>
        </p>

        <p>It's like
            <?php echo $nouns[ 5 ] ?> on your
            <?php echo $nouns[ 6 ] ?> <br> It's a
            <?php echo $adjectives[ 3 ] ?>
            <?php echo $nouns[ 7 ] ?> when you've already
            <?php echo $verbs[ 3 ] ?><br> It's the good
            <?php echo $nouns[ 8 ] ?> that you just didn't
            <?php echo $verbs[ 4 ]  ?> <br> Who would've thought... it
            <?php echo $verbs[ 5 ]  ?>
        </p>

        <p>Mr. Play It Safe was afraid to
            <?php echo $verbs[ 6 ] ?><br> He
            <?php echo $verbs[ 7 ] ?> his
            <?php echo $nouns[ 9 ] ?> and
            <?php echo $verbs[ 8 ] ?> his
            <?php echo $nouns[ 10 ] ?> goodbye<br> He
            <?php echo $verbs[ 9 ] ?> his whole damn life to take that
            <?php echo $nouns[ 11 ] ?><br> And as the
            <?php echo $nouns[ 12 ] ?> crashed down he thought<br> "Well isn't this
            <?php echo $adjectives[ 4 ] ?> ..." <br> And isn't it
            <?php echo $adjectives[ 5 ] ?>... don't you think</p>
    </article>

    <img src="/images/alanis.jpeg" alt="alanis morissette" id="alanis">
    
</body>

</html>
