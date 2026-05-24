<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="form-container">
                    <form class="ibi-add-form" action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="First name" name="firstName" required>
                            <label for="firstName" class="form-label">First name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="middleName" placeholder="Middle name" name="middleName" required>
                            <label for="middleName" class="form-label">Middle name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="Last name" name="lastName" required>
                            <label for="lastName" class="form-label">Last name:</label>
                        </div>
                        <div class="mb-3">
                            <label for="branch" class="form-label">Branch:</label>
                            <select name="branch" id="branch" class="form-select" required>
                                <option value="">Select</option>
                                <option value="Main 1">Main 1</option>
                                <option value="Main 2">Main 2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" id="status" class="form-select" required>
                                <option value="">Select</option>
                                <option value="Active">Active</option>
                                <option value="Disapproved">Disapproved</option>
                            </select>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>