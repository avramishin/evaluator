<div class="card">
    <div class="card-header">
        Add / Edit vendor
    </div>
    <div class="card-body">
        <div class="card-text">
            <form>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="vendorFormCompany">Company Name</label>
                        <input type="text" class="form-control" id="vendorFormCompany">
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="vendorFormStreet">Street</label>
                        <input type="text" class="form-control" id="vendorFormStreet">
                    </div>
                    <div class="col-md-2">
                        <label for="vendorFormStreetNr">Nr.</label>
                        <input type="text" class="form-control" id="vendorFormStreetNr">
                    </div>
                    <div class="col">
                        <label for="vendorFormCity">City</label>
                        <input type="text" class="form-control" id="vendorFormCity">
                    </div>
                </div>

                <div class="form-row mb-1">
                    <div class="col-md-6">
                        <label for="vendorFormRating">Rating</label>
                        <select class="form-control" id="vendorFormRating">
                            <option value="GREEN">Green</option>
                            <option value="YELLOW">Yellow</option>
                            <option value="RED">Red</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-1">
                    <div class="col">
                        <label for="vendorFormNotes">Comments / Notes</label>
                        <textarea rows="5" class="form-control" id="vendorFormNotes"></textarea>
                    </div>
                </div>

                <div class="mt-2 text-right">
                    <button class="btn">Cancel</button>
                    <button class="btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>