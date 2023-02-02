@extends('admin_vieworder')
@section('admin_content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
      <div class="card material-card">
        <div class="card-body">
          <div class="table-responsive">
            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="zero_config_length"><label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-select form-select-sm mb-2"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control mb-2 form-control-sm" placeholder="" aria-controls="zero_config"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table product-overview dataTable no-footer" id="zero_config" role="grid" aria-describedby="zero_config_info">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Customer: activate to sort column descending" style="width: 0px;">Customer</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 0px;">Order ID</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 0px;">Photo</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 0px;">Product</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 0px;">Quantity</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 0px;">Date</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">Status</th><th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 0px;">Actions</th></tr>
              </thead>
              <tbody>
                
                
                
                
                
                
                
                
              <tr role="row" class="odd">
                  <td class="sorting_1">Genelia Jobs</td>
                  <td>#65257898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair.jpg" alt="iMac" width="80">
                  </td>
                  <td>Globe Rounded Chair</td>
                  <td>25</td>
                  <td>08-7-2021</td>
                  <td>
                    <span class="badge bg-success font-weight-100">Paid</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Hrithik</td>
                  <td>#45457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80">
                  </td>
                  <td>Pure Wooden chair</td>
                  <td>18</td>
                  <td>02-7-2021</td>
                  <td>
                    <span class="badge bg-danger font-weight-100">Failed</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Pawan Trivedi</td>
                  <td>#56457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair3.jpg" alt="apple_watch" width="80">
                  </td>
                  <td>Still Gray Chair</td>
                  <td>11</td>
                  <td>05-7-2021</td>
                  <td>
                    <span class="badge bg-success font-weight-100">Paid</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Ranbir kapoor</td>
                  <td>#35457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair4.jpg" alt="mac_mouse" width="80">
                  </td>
                  <td>Comfirtable chair</td>
                  <td>28</td>
                  <td>01-7-2021</td>
                  <td>
                    <span class="badge bg-danger font-weight-100">Failed</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Ritesh Desh</td>
                  <td>#68457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair3.jpg" alt="apple_watch" width="80">
                  </td>
                  <td>Gray Chair</td>
                  <td>12</td>
                  <td>08-7-2021</td>
                  <td>
                    <span class="badge bg-success font-weight-100">Paid</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Sonu Nigam</td>
                  <td>#15457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair2.jpg" alt="iPhone" width="80">
                  </td>
                  <td>Gold Wooden Chair</td>
                  <td>15</td>
                  <td>06-7-2021</td>
                  <td>
                    <span class="badge bg-warning font-weight-100">Pending</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Steave Jobs</td>
                  <td>#85457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair.jpg" alt="iMac" width="80">
                  </td>
                  <td>Rounded Chair</td>
                  <td>20</td>
                  <td>10-7-2021</td>
                  <td>
                    <span class="badge bg-success font-weight-100">Paid</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Varun Dhavan</td>
                  <td>#95457898</td>
                  <td>
                    <img src="../../assets/images/gallery/chair2.jpg" alt="iPhone" width="80">
                  </td>
                  <td>Wooden Chair</td>
                  <td>25</td>
                  <td>09-7-2021</td>
                  <td>
                    <span class="badge bg-warning font-weight-100">Pending</span>
                  </td>
                  <td>
                    <a href="javascript:void(0)" class="text-dark pe-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 feather-sm fill-white"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                    </a>
                    <a href="javascript:void(0)" class="text-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </a>
                  </td>
                </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
  @endsection