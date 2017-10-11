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
                        <select name="admin_status" class="form-control" id="edit">
                            <option value="">Select Status</option>
                            <option value="1">working</option>
                            <option value="2">Pending</option>
                            <option value="3">Pause</option>
                            <option value="5">Cancel</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment</label>
                        <select name="payment" class="form-control" id="payment">
                            <option value="">Select Status</option>
                            <option value="1">Paid</option>
                            <option value="2">UnPaid</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit1">Notes From Admin</label>
                        <input type="text" maxlength="150" id="edit1" name="admin_notes" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edit2">Tracking Code</label>
                        <input type="text" name="tracking" id="edit2" class="form-control">
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