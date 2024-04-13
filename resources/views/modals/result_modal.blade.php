<!-- Modal -->
<div class="modal fade" id="add_result" tabindex="-1" aria-labelledby="add_result" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">You Can Add Student Result</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="add_result">
                <div class="alert alert-success" style="display: none;"></div>
                <form id="add_student_result">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="semester_id" id="semester_id" value="{{ $semester->id }}" required>
                    </div>
                    <div class="mb-3">
                        <select name="subject_id" id="subject_id" class="form-control">
                            <option selected disabled hidden>Choose Subject</option>
                            @if (!empty($subjects))
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="user_id" id="user_id" class="form-control">
                            <option selected disabled hidden>Choose Students</option>
                            @if (!empty($students))
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="marks">Enter marks</label>
                        <input type="number" class="form-control" name="marks" id="marks" min="0" max="100" required>
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
