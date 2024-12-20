<pre>
    <?php
    include_once 'libs/includes/mic.class.php';
    include 'libs/load.php';

    // if( signup('vignesh2','password1','email@em.in1@','9999990992',)){
    //     echo "you are successful inserted data";
    // } else {
    //     echo "failed ";
    // }

    $mic1 = new Mic();  // constructing an object 
    $mic2 = new mic();

    $mic1->brand = "roda";

    // this working same as mic1 so I can create n number of mic1 
    $mic1->song = "bad ass maaaaa";
    $mic2->brand = "apple";

    // printf($mic1->brand);
    // printf($mic1->song);

    $mic1->light = "rgb";
    $mic1->setLight("white");

    $mic1->setModel("hyper cast");
    printf("the model of first mic is " . $mic1->getModel());

    red::car();
    red::car();
    ?>
</pre>
