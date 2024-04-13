<!-- Modal -->
<div class="modal fade" id="new_gradeLabel" tabindex="-1" aria-labelledby="new_gradeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register New Grades</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" style="display: none;"></div>
                <form id="register_grade">
                    @csrf
                    <div class="mb-3">
                        <label for="grade_name">Enter Grade Name</label>
                        <input type="text" class="form-control" name="name" id="grade_name" required>
                        <small>eg A</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="from">Grade From</label>
                                <input type="number" class="form-control" name="from" id="from" min="0" max="100" required>
                                <small>eg 20</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="to">Grade To</label>
                                <input type="number" class="form-control" name="to" id="to" min="0" max="100" required>
                                <small>eg 40</small>
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
