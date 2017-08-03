<?php
/**
 * Created by PhpStorm.
 * User: Andrei
 * Date: 02.08.2017
 * Time: 20:26
 */
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .news {
            margin: 12px;
            padding: 10px;
            border: 1px solid darkblue;
        }

        .news span.title {
            font-size: 22px;
            color: darkblue;
        }

        a button.delete {
            background-color: rgba(255, 56, 61, 100);
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>News:</h1>
<?php
foreach ($data as $article):
	
	?>
    <div class="news">
		<span class="title">
		<a class="link"
           href="<?php echo 'http://profit/PHP2/Admin.php?id=' . $article->id; ?>"><?php echo $article->title; ?></a>
			</span>
        <p> <?php echo $article->text; ?></p>
        <div class="button">
            <a class="link"
               href="<?php echo 'http://profit/PHP2/Admin.php?reason=edit&id=' . $article->id; ?>">
                <button title="edit">edit</button>
            </a>
            <a class="link"
               href="<?php echo 'http://profit/PHP2/Admin.php?reason=delete&id=' . $article->id; ?>">
                <button title="delete">delete</button>
            </a>
        </div>

    </div>
	
	
	<?php
endforeach;
?>
<div class="news">
    <a href="http://profit/PHP2/Admin.php?reason=add">
        <div class="button">
            <button title="add">ADD</button>
        </div>
    </a>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->
</body>
</html>