<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aanpassen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
foreach($id as $result):

?>

<div class="container">
    <div class="col-sm-6">

        <form action="update" method="post">

<!--            hiden input field met id value erin zetten-->
            <input type="hidden" name="update" value="<?php $result ?>">

            <div class="form-group">
                <label for="person">person</label>
                <input type="text" name="person" class="form-control" value="<?php echo $result['person']; ?>">
            </div>

            <div class="form-group">
                <label for="day">day</label>
                <input type="text" name="day" class="form-control" value="<?php echo $result['day']; ?>">
            </div>

            <div class="form-group">
                <label for="month">month</label>
                <input type="text" name="month" class="form-control" value="<?php echo $result['month']; ?>">
            </div>

            <div class="form-group">
                <label for="year">year</label>
                <input type="text" name="year" class="form-control" value="<?php echo $result['year']; ?>">
            </div>


            <input type="submit" class="btn btn-primary" name="update" value="update">

        </form>

    </div>
</div>
<?php endforeach; ?>
</body>
</html>