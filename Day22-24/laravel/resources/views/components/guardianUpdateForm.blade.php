<form class="updateGuardianForm form mt-3" id="updateGuardianForm">
    @csrf
    <h2 style="color: #fff;">Update Guardian data</h2>

    <div class="form-group row">
        <label for="update-guardian-name" class="col-sm-3 col-form-label" style="color: #fff;">Enter guardian name:</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" id="update-guardian-name" placeholder="Enter Guardian name" required style="background-color: #333; color: #fff; border-color: #555;">
            <span id="guard-name-err" class="form-text text-danger hidden">Enter a valid name</span>
        </div>
    </div>

    <div class="form-group row">
        <label for="update-guardian-number" class="col-sm-3 col-form-label" style="color: #fff;">Enter guardian contact number:</label>
        <div class="col-sm-9">
            <input type="text" name="contact_number" class="form-control" id="update-guardian-number" placeholder="Enter Guardian number" required style="background-color: #333; color: #fff; border-color: #555;">
            <span id="guard-number-err" class="form-text text-danger hidden">Enter a valid contact number</span>
        </div>
    </div>

    <div class="form-group row">
        <label for="update-guardian-email" class="col-sm-3 col-form-label" style="color: #fff;">Enter guardian email:</label>
        <div class="col-sm-9">
            <input type="text" name="email" class="form-control" id="update-guardian-email" placeholder="Enter Guardian email" required style="background-color: #333; color: #fff; border-color: #555;">
            <span id="guard-email-err" class="form-text text-danger hidden">Enter a valid email</span>
        </div>
    </div>

    <div class="form-group row">
        <label for="update-guardian-status" class="col-sm-3 col-form-label" style="color: #fff;">Enter guardian status(Active or Inactive):</label>
        <div class="col-sm-9">
            <input type="text" name="status" class="form-control" id="update-guardian-status" placeholder="Enter Guardian status" required style="background-color: #333; color: #fff; border-color: #555;">
            <span id="guard-status-err" class="form-text text-danger hidden">Enter a valid status</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            <button type="submit" class="btn btn-success mt-2" id="update-guardian" style="background-color: #28a745; border-color: #28a745;">Update guardian</button>
            <a href="/"><button type="button" class="btn btn-danger mt-2" style="background-color: #dc3545; border-color: #dc3545;">Cancel</button></a>
        </div>
    </div>
</form>
