<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Введение в PHP</title>
    <style type="text/css" media="screen">
        * {
            font-family: Arial, sans-serif;
        }
        th {
            width: 5em; 
        }
        table {
            text-align: left;
        }
    </style>
</head>
<body>
    <?php 
        $name = 'Денис';
        $patronymic = 'Александрович';
        $surname = 'Бондаренко';
        $mail = 'danbond85@mail.ru';
        $location = 'Московская область, Томилино';
        $info = 'Методист Городского методического центра Департамента образования города Москвы, разрабатываю и поддерживаю cайт';
        $website = 'https://spo.mosmetod.ru';
        $websiteName = 'Среднее профессиональное образвование москвы'
    ?>    

    <h2><?php echo $surname.' '.$name.' '.$patronymic; ?></h2>
    <table>
        <tbody>
            <tr>
                <th>E-mail:</th>
                <td><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></td>
            </tr>
            <tr>
               <th>Город:</th>
               <td><?php echo $location; ?></td>
           </tr>               
            <tr>
                <th>О себе:</th>
                <td><?php echo $info ?> 
                    <a href="<?php echo $website ?>" title="<?php echo $websiteName ?>"><?php echo $website ?></a>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>

