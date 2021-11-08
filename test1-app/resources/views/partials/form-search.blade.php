<div class="container-fluid">
    <h2 class="text-center display-4">Enhanced Search</h2>
    <form action="{{ $action }}" method="GET">

    @if ($method == 'PUT')
      @method('PUT')
    @endif
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>Sort Order:</label>
                            <select class="select2" style="width: 100%;">
                                <option name="ASC" selected>ASC</option>
                                <option name="DESC">DESC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label>Order By:</label>
                            <select class="select2" style="width: 100%;">
                                <option value="" name="price_sale" selected>Price_sale</option>
                                <option value="" name="quantity">Quantity</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group ">
                        <input type="search" name="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="">
                        <div class="input-group-append">
                            <button type="submit" value="Submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>