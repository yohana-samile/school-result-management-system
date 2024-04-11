<!-- Modal -->
<div class="modal fade" id="new_subject" tabindex="-1" aria-labelledby="new_subjectLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="new_subjectLabel">Register New Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="register_subject">
                    @csrf
                    <div class="mb-3">
                        <label for="subject_name">Enter Subject Name</label>
                        <input type="text" class="form-control" name="name" id="subject_name" required>
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
