<div class="card" id="evaluationForm1Card">
    <div class="card-header">
        Add / Edit evaluation
    </div>
    <div class="card-body">
        <div class="card-text">
            <form>
                <div class="form-row mb-1">
                    <div class="col-md-4 text-right">
                        <label for="evaluationForm1Vendor">Media name / Vendor</label>
                    </div>
                    <div class="col">
                        <select class="form-control" id="evaluationForm1Vendor">
                            <option value="v1">Vendor 1</option>
                            <option value="v2">Vendor 2</option>
                            <option value="v3">Vendor 3</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-1">
                    <div class="col-md-4 text-right">
                        <label for="evaluationForm1Vendor">Category</label>
                    </div>
                    <div class="col">
                        <select class="form-control" id="evaluationForm1Category1">
                            <option value="">-- Select Category --</option>
                            <option value="c1">Category 1</option>
                            <option value="c2">Category 2</option>
                            <option value="c3">Category 3</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="evaluationForm1Category2">
                            <option value="">-- Select Category --</option>
                            <option value="c1">Category 1</option>
                            <option value="c2">Category 2</option>
                            <option value="c3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col-md-4 mr-auto ml-auto">
                        <select class="form-control" id="evaluationForm1Category3">
                            <option value="">-- Select Category --</option>
                            <option value="c1">Category 1</option>
                            <option value="c2">Category 2</option>
                            <option value="c3">Category 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col-md-4 text-right">
                        <label for="evaluationForm1Costs">Costs</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="evaluationForm1CostsFrom" placeholder="from">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="evaluationForm1CostsFrom" placeholder="to">
                    </div>
                </div>
                <div class="form-row mb-1">
                    <div class="col-md-4 text-right">
                        <label for="evaluationForm1VendorDescription">Vendor description</label>
                    </div>
                    <div class="col">
                        <textarea id="evaluationForm1VendorDescription" class="form-control" rows="5"></textarea>
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