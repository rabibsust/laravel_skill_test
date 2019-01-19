@extends('layouts.main')
@section('content')
        <form class="form-horizontal" action="#" method="post" id="product_form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="td_space" class="control-label">Product Name: </label>
                <input type="text" autofocus="" required="" name="product" id="product" class="form-control" title="Please enter product name" value="" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="td_space" class="control-label">Quantity in stock: </label>

                <input type="text" autofocus="" required="" name="quantity" id="quantity" class="form-control" title="Please enter Quantity in stock" value="" placeholder="Enter Quantity in stock">
            </div>
            <div class="form-group">
                <label for="td_space" class="control-label">Price per item: </label>
                <input type="text" autofocus="" required="" name="price" id="price" class="form-control" title="Please enter Price per item" value="" placeholder="Enter Price per item">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" id="save_data" type="button">Save</button>
            </div>
        </form>

        <div class="content">
            <div class="row column-order">
                <legend>Product info</legend>
                <div style="border-bottom: 1px solid">
                    <div style="overflow:hidden;margin-right:16px" id="headerdiv">
                        <table style="min-width:900px;border-bottom:1px solid;border-top: 1px solid">
                            <thead><tr>
                                <th>Product Name</th>
                                <th>Quantity in stock</th>
                                <th>Price per item</th>
                                <th>Total value number</th>
                                <th>Datetime submitted</th>
                                {{--<th>Action</th>--}}
                            </tr></thead>
                            <tbody id="product_data_list"></tbody>
                        </table>
                        <div class="text-right">sum total of all of the Total Value numbers: <i id="total_sum"></i></div>
                    </div>
                </div>
            </div>
        </div>
@endsection
