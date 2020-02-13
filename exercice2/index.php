<?php
   /**** $fruits = ['favorite' => 'pomme',
        'second'=>'poire',
        'almost-a-fruit'=>'scoubidou'];
    echo $fruits['second'];
    foreach($fruits as $fruit){
        echo $fruit;
} ***/

    $pays = [   'belgique' =>   [
                                    'capitale' => 'bruxelles',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/1038px-Flag_of_Belgium.svg.png'
                                ],
                'france' =>     [
                                    'capitale' => 'paris',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c3/Flag_of_France.svg/1280px-Flag_of_France.svg.png'
                                ],
                'pays-bas' =>   [
                                    'capitale' => 'amsterdam',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1280px-Flag_of_the_Netherlands.svg.png'
                                ],
                'hongrie' =>   [
                                    'capitale' => 'budapest',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Flag_of_Hungary.svg'
                ],
                'japon' =>      [
                                    'capitale' => 'tokyo',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1200px-Flag_of_Japan.svg.png'
                                ],
                'portgual' =>   [
                                    'capitale' => 'lisbonne',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/1280px-Flag_of_Portugal.svg.png'
                                ],
                'italie' =>     [
                                    'capitale' => 'rome',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/en/thumb/0/03/Flag_of_Italy.svg/1200px-Flag_of_Italy.svg.png'
                                ],
                'angleterre' => [
                                    'capitale' => 'londres',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Flag_of_England.svg/1200px-Flag_of_England.svg.png'
                                ],
                'allemagne' =>  [
                                    'capitale' => 'berlin',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Flag_of_Germany.svg/1920px-Flag_of_Germany.svg.png'
                                ],
                'algérie' =>    [
                                    'capitale' => 'alger',
                                    'drapeaux' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Flag_of_Algeria.svg/1280px-Flag_of_Algeria.svg.png'
                                ],
                'corée du nord' => [
                                    'capitale'=> 'yongyang',
                                    'drapeaux' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Flag_of_North_Korea.svg/langfr-225px-Flag_of_North_Korea.svg.png'
                                ]
    ];
    $answer="";
    $messageError="";
    if(isset($_GET['pays'])){
        $answer = $_GET['pays'];
    }
    if (!in_array($answer,array_keys($pays))){
        $messageError = "Pays non existant";
    }

    ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <div>
        <form action="index.php" method="get">
            <select name="pays" id="pays">
                <?php foreach ($pays as $key => $item): ?>
                <option value="<?= $key ?>" ><?= mb_strtoupper($key )?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit">
        </form>

        <?php if ($messageError): ?>
        <p> Pays pas dans la liste </p>
        <?php else: ?>
        <p>
            La capital de <?= $answer; ?> est <?= $pays[$answer]['capitale'] ?>
        </p>
        <img src= "<?= $pays[$answer]['drapeaux'] ?>" width="500px" height=auto>
        <?php endif; ?>
    </div>
    </body>
</html>