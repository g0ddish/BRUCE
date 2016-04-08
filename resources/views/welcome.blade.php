<!DOCTYPE html>
<html>
<head>
    <title>BRUCE</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        body {
            font-weight: 100;
            font-family: 'Lato';
        }

        .title {
            text-align: center;
            font-size: 96px;
        }
    </style>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-md-4 col-md-offset-4">
    <div class="container-fluid">
        <div class="title">Bruce</div>
        <form method="post">
            <textarea class="form-control" name="say" cols="30" rows="10"></textarea>
            <input class="btn btn-primary" type="submit" style="margin-top:10px;"/>
        </form>
    </div>
</div>
<div class="col-md-12">
    <div class="container">
        <form method="post">
            <div class="page-header">
                <h1>Bruceisms</h1>
            </div>
            <div class="btn-group inline pull-left" data-toggle="buttons-checkbox">
                <button class="btn btn-primary" name="say" value="He who controls the spice controls the universe"
                        type="submit" style="margin-top:10px;">He who controls the spice
                </button>
                <button class="btn btn-info" name="say" value="Put that coffee down! Coffee's for closers only. You think I'm fucking with you? I am not fucking with you. I'm here from downtown. I'm here from Mitch and Murray. And I'm here on a mission of mercy. Your name's Levene?"
                        type="submit" style="margin-top:10px;">Put that coffee down
                </button>
                <button class="btn btn-info" name="say" value="If my answers frighten you then you should cease asking scary questions."
                        type="submit" style="margin-top:10px;">Scary questions
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
