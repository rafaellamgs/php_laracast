<!-- <?php
//Step 3 
$greeting = 'Hello Worlds';

echo  'Hello, ' . $greeting;

//or
echo "Hello, $greeting";

?> when is only php is good practice to leave the closing out -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <style>
        header {
            background: #3e3e3e;
            padding: 2em;
            text-align: center;
        }

    </style>
</head>

<body>

    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>

                <strike><?= $task->description; ?></strike>

            <?php else: ?>

                <?= $task->description; ?>

            <?php endif; ?>
        </li>

    <?php endforeach; ?>
</body>

</html>