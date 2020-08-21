<?php
// $scoreList = [100, 90, 50];
$scoreList = Array(100, 50, 90, 95);
$viewModel = [];
foreach ($scoreList as $score) {
    $student = (object)["score" => $score, "style" => "pass"];
    if ($score < 60) {
        $student->style = "fail";
    }
    $viewModel[] = $student;
}

// $obj=(object)["firstName"]=>"aaa","lastName"=>"lin"];
//echo $obj->lastName;
//exit();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .fail {
            color: red;
        }

        .pass {

            color: black;
        }
    </style>
</head>

<body>
    <ul>
        <?php foreach ($viewModel as $key) { ?>
            <li class="<?= $key->style ?>"><?= $key->score ?></li>
        <?php } ?>
    </ul>
</body>

</html>