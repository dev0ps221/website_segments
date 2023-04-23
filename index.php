<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/master.css">
    <title>Website Sections</title>
</head>
<body>

    <?php   
    
        function showtitle($title){
            echo "<h1 style='text-align:center;padding:2rem;font-size:250%;'>$title</h1>";
        }

        //item description
        showtitle('ITEM DESCRIPTION');
        include('segments/item_description/item_description.php');

        //overlay section
        showtitle('OVERLAY SECTION');
        include('segments/overlay_section/overlay_section.php');

        //overlay section
        showtitle('PICTURE PORTFOLIO');
        include('segments/picture_portfolio/picture_portfolio.php');
        
    ?>
</body>
</html>