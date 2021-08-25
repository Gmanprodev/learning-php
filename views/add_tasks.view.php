<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require('../templates/head.php'); ?>

<body>
    
<?php require('../templates/nav.php'); ?>

    <div class="row">
                <form class="col s12 m8 offset-m2" method="POST" action="">
                    <div class="card-panel">
                        <div class="input-field">
                            <i class="fas fa-folder-open prefix teal-text"></i>
                            <label for="category_name" class="responsive">Task Category</label>
                            <select id="category_name" name="category_name" class="validate" required>
                                <option value="" disabled selected></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-pencil-alt prefix teal-text"></i>
                                <input id="task_name" name="task_name" minlength="5" maxlength="30" type="text" class="validate" required>
                                <label for="task_name" class="validate">Task Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-align-left prefix teal-text"></i>
                                <textarea id="task_description" name="task_description" minlength="5" maxlength="500" class="materialize-textarea validate" required></textarea>
                                <label for="task_description" class="responsive">Task Description</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="fas fa-calendar-alt prefix teal-text"></i>
                                <input id="due_date" name="due_date" type="text" class="datepicker validate" required>
                                <label for="due_date" class="responsive">Due Date</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <div class="switch">
                                    <i class="fas fa-exclamation-circle prefix teal-text"></i>
                                    <label for="is_urgent">
                                        <input type="checkbox" id="is_urgent" name="is_urgent">
                                        <span class="lever"></span>
                                        Is Urgent
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 center-align">
                                <button type="submit" class="btn-large teal text-shadow">
                                    Add Task <i class="fas fa-plus-square right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

<?php require('../templates/footer.php'); ?>

</body>
</html>
