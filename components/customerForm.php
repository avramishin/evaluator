<div class="card">
    <div class="card-header">
        Add / Edit customer
    </div>
    <div class="card-body">
        <div class="card-text">
            <form>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="customerFormCompany">Company Name</label>
                        <input type="text" class="form-control" id="customerFormCompany">
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col">
                        <label for="customerFormSubCompany">Sub Company</label>
                        <input type="text" class="form-control" id="customerFormSubCompany">
                    </div>
                    <div class="col-md-6">
                        <label for="customerFormAccess">Access</label>
                        <select class="easyui-combobox" id="customerFormAccess" style="width: 100%">
                            <option value="PREMIUM">Premium</option>
                            <option value="PRO">Pro</option>
                            <option value="BASIC">Basic</option>
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