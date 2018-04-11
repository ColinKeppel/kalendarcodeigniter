<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-sm-6">

        <form action="verjaardag_toevoegen" method="post">

            <div class="form-group">
                <label for="person">person</label>
                <input type="text" name="person" class="form-control">
            </div>

            <div class="form-group">
                <label for="day">day</label>
                <input type="text" name="day" class="form-control">
            </div>

            <div class="form-group">
                <label for="month">month</label>
                <input type="text" name="month" class="form-control">
            </div>

            <div class="form-group">
                <label for="year">year</label>
                <input type="text" name="year" class="form-control">
            </div>


            <input type="submit" class="btn btn-primary" name="submit" value="submit">

        </form>

    </div>
</div>

</body>
</html>