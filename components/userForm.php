<div class="card" id="userFormCard">
    <div class="card-header">
        Add / Edit user
    </div>
    <div class="card-body">
        <div class="card-text">
            <form>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="userFormFirstname">First name</label>
                        <input type="text" class="form-control" id="userFormFirstname">
                    </div>
                    <div class="col">
                        <label for="userFormLastname">Last name</label>
                        <input type="text" class="form-control" id="userFormLastname">
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="userFormEmail">E-Mail</label>
                        <input type="text" class="form-control" id="userFormEmail">
                    </div>
                    <div class="col">
                        <label for="userFormPhone">Phone</label>
                        <input type="text" class="form-control" id="userFormPhone">
                    </div>
                </div>

                <div class="form-row mb-1">
                    <div class="col-md-6">
                        <label for="userFormRole">Role</label>
                        <select class="form-control" id="userFormRole">
                            <option value="CUSTOMER">Customer User</option>
                            <option value="VENDOR">Vendor User</option>
                            <option value="KEY_ACCOUNT_MANAGER">Key Account Manager</option>
                            <option value="CAMPAIGN_MANAGER">Campaign Manager</option>
                            <option value="SUPER_ADMIN">Super Admin</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div id="userFormVendorSelectorContainer" class="toggleSelector">
                            <label for="userFormVendorSelector">Vendor</label>
                            <select class="form-control" id="userFormVendorSelector">
                                <option value="v1">Vendor 1</option>
                                <option value="v2">Vendor 2</option>
                                <option value="v3">Vendor 3</option>
                            </select>
                        </div>
                        <div id="userFormCustomerSelectorContainer" class="toggleSelector">
                            <label for="userFormCustomerSelector">Customer</label>
                            <select class="form-control" id="userFormCustomerSelector">
                                <option value="c1">Customer 1</option>
                                <option value="c2">Customer 2</option>
                                <option value="c3">Customer 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col-md-6">
                        <label for="userFormLanguage">Language</label>
                        <select class="form-control" id="userFormLanguage">
                            <option value="EN">English</option>
                            <option value="DE">German</option>
                        </select>
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