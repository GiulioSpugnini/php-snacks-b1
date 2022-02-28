<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>

<body>
    <?php
    foreach ($db as $role => $people) { ?>
        <div class="<?php $role === 'pm' ? 'green' : 'gray' ?>">

            <ul>
                <?php foreach ($people as $person) { ?>
                    <li><?php $person['name'] . ' ' . $person['lastname'] ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</body>

</html>