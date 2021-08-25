<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require('../templates/head.php'); ?>

<body class="overflow-hide">
    
<?php require('../templates/nav.php'); ?>

    <ul class="collapsible">
        <li>
            <div class="collapsible-header white-text blue-grey darken-1 text-shadow">
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
    

<?php require('../templates/footer.php'); ?>

</body>
</html>