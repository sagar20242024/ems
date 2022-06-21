<?php require_once 'include/header.php'; ?>
    <div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="emp_name" id="" class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="number" name="emp_age" id="" class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Department</label>
            <input type="text" name="emp_department" id="" class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Salary</label>
            <input type="number" name="emp_salary" id="" class='form-control'>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="emp_address" id="" class='form-control'>
        </div>


    </form>
    </div>
    <input type="submit" name="add_employee" id="" value="Add" class='btn btn-info'>
<?php require_once 'include/footer.php'; ?>