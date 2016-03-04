<!-- start: PAGE CONTENT -->

<div class="row">
     <div class="col-md-12">
          <!-- start: DYNAMIC TABLE PANEL -->
          <div class="panel panel-white">
               <div class="panel-heading">
                    <h4 class="panel-title">Products <span class="text-bold">Listing</span></h4>
               </div>
               <div class="panel-body">
                <?php if ($this->session->flashdata('product_data')) { ?>
                    <div class="errorHandler alert alert-success no-display" style="display: block;">
                        <i class="fa fa-remove-sign"></i> Product <?php echo $this->session->flashdata('product_data'); ?> Successfully.
                    </div>
                <?php } ?>
                <a style="top: 7px;" class="btn btn-primary list_page_btn" href="<?php echo base_url(); ?>products/add/"><i class="fa fa-plus"></i> Add Product</a>
               
                    <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                         <thead>
                              <tr>
                                   <th>#</th>
                                   <th>Name</th>
                                   <th>No. of attendees</th>
                                   <th>No. of speakers</th>
                                   <th>Created Date</th>
                                   <th>Action</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php $i=0;
                             
                              foreach($product as $key => $pack)
                               {?>
                                  
                                    <tr>
                                        <td><?php $i++; echo $i; ?></td>
                                        <td><?php echo $pack['name'] ?></td>
                                        <td><?php echo $pack['no_attendee'] ?></td>
                                        <td><?php echo $pack['no_speaker'] ?></td>
                                        <td><?php echo $pack['created_at'] ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>products/edit/<?php echo $pack['id'];?>" class="label btn-blue tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="javascript:;" onclick="delete_package(<?php echo $pack['id']; ?>)" class="btn btn-xs btn-red tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                        </td>
                                    </tr>
                              <?php  } ?>                             
                         </tbody>
                    </table>
               </div>
          </div>
          <!-- end: DYNAMIC TABLE PANEL -->
     </div>
</div>
