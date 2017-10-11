<div class="content-wrapper settingPage">
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">PDF Status </h3>
            </div>
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="edit">Edit Status</label>
                        <select name="user_status" class="form-control" id="" required="required">
                            <option value="">Select Status</option>
                            <option value="1">Urgent</option>
                            <option value="2">Normal</option>
                            <option value="3">Pause</option>
                            <option value="5">Cancel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit">Notes for Admin</label>
                        <input type="text" maxlength="150" name="user_notes" class="form-control">
                    </div>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --