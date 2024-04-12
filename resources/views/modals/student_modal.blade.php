<!-- Modal -->
<div class="modal fade" id="new_student" tabindex="-1" aria-labelledby="new_student" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register New Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;"></div>
                <form id="registerStudent">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Enter Student Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="subject_name">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option disabled selected hidden>Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="dob">DoB</label>
                                <input type="date" class="form-control" name="dob" id="dob" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address">Enter address</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="password">Enter Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="12345678" required>
                                <small>default is 12345678</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
