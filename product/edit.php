<!-- start: PAGE CONTENT -->

<div class="row">
    <div class="col-sm-12">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h4 class="panel-title">Edit <span class="text-bold">Product</span></h4>
                <div class="panel-tools">
                    <a class="btn btn-xs btn-link panel-close" href="#">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <form role="form" method="post" id="form" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label"for="form-field-1">
                                    Product Name <span class="symbol required"></span>
                                </label>
                                <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" class="form-control name_group required">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Max Storage(MB) <span class="symbol required"></span>
                                </label>
                                <input type="text" id="max_storage" value="<?php echo $product['max_storage']; ?>" name="max_storage" class="form-control name_group required">
                            </div>
                        </div>                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Total Events <span class="symbol required"></span>
                                </label>
                                <input type="text" id="max_events" value="<?php echo $product['max_events']; ?>" name="max_events" class="form-control name_group required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Total Active Events <span class="symbol required"></span>
                                </label>
                                <input type="text" id="max_active_events" value="<?php echo $product['max_active_events']; ?>" name="max_active_events" class="form-control name_group required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Total Attendees <span class="symbol required"></span>
                                </label>
                                <input type="text" id="attendee" value="<?php echo $product['no_attendee']; ?>" name="attendee" class="form-control name_group required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Total Speakers  <span class="symbol required"></span>
                                </label>
                                <input type="text" id="speaker" value="<?php echo $product['no_speaker']; ?>" name="speaker" class="form-control name_group required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Total Admins <span class="symbol required"></span>
                                </label>
                                <input type="text" id="total_admins" value="<?php echo $product['no_admins']; ?>" name="total_admins" class="form-control name_group required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="form-field-1">
                                    Module Allow <span class="symbol required"></span>
                                </label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="purple radio-callback-module" value="1" name="module_allow" <?php if($product['module_allow'] == '1'){ ?> checked="checked" <?php } ?> >
                                        Active
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="purple radio-callback-module" value="0" name="module_allow" <?php if($product['module_allow'] == '0'){ ?> checked="checked" <?php } ?> >
                                        Inactive
                                    </label>    
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                    <div class="row module_list" <?php if($product['module_allow'] == '0'){ ?>style="display: none"<?php } ?>>
                        <div class="form-group">
                            <label class="control-label col-md-12">
                                    Module List <em>(select at least one)</em> <span class="symbol required"></span>
                            </label>
                        <?php $module_list = json_decode($product['module_list']); ?>
                        <?php foreach ($menu as $key => $val){ 
                            //if($val['menuname'] != 'Fundraising'){
                            if($val['id']!="22" && $val['id']!="23" && $val['id']!="24" && $val['id']!="25" && $val['id']!="29" && $val['id']!="18" && $val['id']!="14")
                            {
                        ?>
                        <div class="col-md-3">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="module_list[]" <?php if(in_array($val['id'],$module_list)){ ?> checked="checked" <?php } ?> value="<?php echo $val['id']; ?>" class="grey module_checkbox"><?php echo $val['menuname'] ?>
                            </label>
                        </div>
                        <?php 
                            }
                        } 

                        ?>
                        </div>
                    </div>
                    
                    <div class="row fundraising_module_list" style="display: none">
                        <div class="col-md-2">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="1" class="grey fundraising-sub-module">Silent Auction
                            </label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="silent_auction_amt" id="silent_auction_amt">
                        </div>
                        <div class="col-md-2">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="2" class="grey fundraising-sub-module">Live Auction
                            </label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="live_auction_amt" id="live_auction_amt">
                        </div>
                        <div class="col-md-2">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="3" class="grey fundraising-sub-module">Buy Now
                            </label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="buy_now_amt" id="buy_now_amt">
                        </div>
                        <div class="col-md-2">
                            <label class="checkbox-inline">
                                <input type="checkbox" value="4" class="grey fundraising-sub-module">Pledge
                            </label>
                        </div>
                        <div class="col-md-1">
                            <input type="text" class="form-control" name="pledge_amt" id="pledge_amt">
                        </div>
                    </div>
                    
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-4">
                            <div class="form-group">
                                    <button class="btn btn-green btn-block" type="submit">
                                        Update <i class="fa fa-arrow-circle-right"></i>
                                    </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>
</div>

<!-- end: PAGE CONTENT-->
