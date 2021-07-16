<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" 
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" type="text/css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" type="text/css" />

    <link rel="stylesheet" href="style.css" type="text/css">

    <title>To Do Application</title>
</head>
<body>
    <header>
        <div class="navbar-fixed">
            <nav class="nav-extended text-shadow teal lighten-2">
                <div class="nav-wrapper">
                    <a href="#" class="logo left-align">Task Manager</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="fas fa-bars"></i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="">Profile</a></li>
                        <li><a href="">Tasks</a></li>
                        <li><a href="">Add Tasks</a></li>
                        <li><a href="">Log Out</a></li>
                        <li><a href="">Home</a></li>
                        <li><a href="">Log In</a></li>
                        <li><a href="">Sign Up</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul class="sidenav teal lighten-2" id="mobile-demo">
            <li><h4 class="center-align white-text text-darken-4 sidenav-header">Task Manager</h4></li>
            <li><a href="" class="white-text">Profile</a></li>
            <li><a href="" class="white-text">Tasks</a></li>
            <li><a href="" class="white-text">Add Tasks</a></li>
            <li><a href="" class="white-text">Log Out</a></li>
            <li><a href="" class="white-text">Home</a></li>
            <li><a href="" class="white-text">Log In</a></li>
            <li><a href="" class="white-text">Sign Up</a></li>
        </ul>
    </header>

    <ul class="collapsible">
        <li>
            <div class="collapsible-header white-text teal darken-4 text-shadow">
                <div class="col s3">
                    <i class="fas fa-caret-down"></i>
                        <a href="#" class="btn-small green accent-4">Done</a>
                        <a href="#" class="btn-small light-blue lighten-1">Edit</a>
                        <strong class="block">task name :</strong>
                        <i class="fas fa-exclamation-circle light-blue-text text-lighten-2 tooltipped"
                            data-position="right" data-tooltip="URGENT!">
                        </i>
                </div>
            </div>
            <div class="collapsible-body">
                <strong>category name</strong>
                <p>task description</p>
                <p><em>by: task created by</em></p>
            </div>
        </li>
    </ul>
    






    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="script.js"></script>

</body>
</html>

