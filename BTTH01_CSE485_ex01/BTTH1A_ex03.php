
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <style>
    table,th,td{
         border-collapse: collapse;
         border: 1px solid black;
    }
 </style>
 <body>
    <table>
        <tr>
        <th>Nội dung</th>
        </tr>
        <?php
                $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
                for ($i = 0; $i < count($arrs); $i++) {?>
        <tr>
            <td>
                
                    <?php echo  $arrs[$i] . '</br>'; ?>
            </td>
        </tr>
        <?php } ?>


    </table>
 </body>
 </html>