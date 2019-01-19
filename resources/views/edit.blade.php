<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="#" method="post" id="product_form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="product" class="control-label">Product Name: </label>
                        <input type="text" autofocus="" required="" name="product" id="product" class="form-control" title="Please enter product name" value="" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="control-label">Quantity in stock: </label>

                        <input type="text" autofocus="" required="" name="quantity" id="quantity" class="form-control" title="Please enter Quantity in stock" value="" placeholder="Enter Quantity in stock">
                    </div>
                    <div class="form-group">
                        <label for="price" class="control-label">Price per item: </label>
                        <input type="text" autofocus="" required="" name="price" id="price" class="form-control" title="Please enter Price per item" value="" placeholder="Enter Price per item">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" id="save_data" type="button">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>