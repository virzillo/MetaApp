@extends('backend.layouts.master')


@push('style')
   <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}app-assets/css/pages/app-contacts.min.css">
@endpush


@section('titolopagina')  @endsection

@section('content')
  

@push('breadcumbs')
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}"></a></li>
         <li class="breadcrumb-item active"><a href="{{url('/contacts')}}"></a></li>
      </ol>
@endpush

@push('iconsright')
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-bell"></i></button>
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-life-buoy"></i></button>
    <button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-settings"></i></button>
@endpush

 
<div class="content-detached content-right">
          <div class="content-body"><div class="content-overlay"></div>
<section class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="bug-list-search">
					<div class="bug-list-search-content">
    					<div class="sidebar-toggle d-block d-lg-none"><i class="ft-menu font-large-1"></i></div>
						<form action="#">
							<div class="position-relative">
								<input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
								<div class="form-control-position">
									<i class="fa fa-search text-size-base text-muted la-rotate-270"></i>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="row all-contacts">
	<div class="col-12">
		<div class="card">
			<div class="card-head">
				<div class="card-header">
					<h4 class="card-title">All Contacts</h4>
					<div class="heading-elements mt-0">
						<button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#AddContactModal"><i class="d-md-none d-block ft-plus white"></i>
							<span class="d-md-block d-none">Add Contacts</span></button>
						<div class="modal fade" id="AddContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
						 aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<section class="contact-form">
										<form id="form-add-contact" class="contact-input">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel1">Add New Contact</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<fieldset class="form-group col-12">
													<input type="text" id="contact-name" class="contact-name form-control" placeholder="Name">
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="text" id="contact-email" class="contact-email form-control" placeholder="Email">
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="text" id="contact-phone" class="contact-phone form-control" placeholder="Phone Number">
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="checkbox" id="favorite" class="contact-fav input-chk"> Favorite
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="file" class="form-control-file" id="user-image">
												</fieldset>
											</div>
											<div class="modal-footer">
												<fieldset class="form-group position-relative has-icon-left mb-0">
													<button type="button" id="add-contact-item" class="btn btn-info add-contact-item" data-dismiss="modal"><i
														 class="fa fa-paper-plane-o d-block d-lg-none"></i> <span class="d-none d-lg-block">Add New</span></button>
												</fieldset>
											</div>
										</form>
									</section>
								</div>
							</div>
						</div>
						<div class="modal fade" id="EditContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
						 aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<section class="contact-form">
										<form id="form-edit-contact" class="contact-input">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<fieldset class="form-group col-12">
													<input type="text" id="name" class="name form-control" placeholder="Name">
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="text" id="email" class="email form-control" placeholder="Email">
												</fieldset>
												<fieldset class="form-group col-12">
													<input type="text" id="phone" class="phone form-control" placeholder="Phone Number">
												</fieldset>
												<span id="fav" class="d-none"></span>
											</div>
											<div class="modal-footer">
												<fieldset class="form-group position-relative has-icon-left mb-0">
													<button type="button" id="edit-contact-item" class="btn btn-info edit-contact-item" data-dismiss="modal"><i
														 class="fa fa-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">Edit</span></button>
												</fieldset>
											</div>
										</form>
									</section>
								</div>
							</div>
						</div>
						<span class="dropdown">
							<button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i
								 class="ft-download-cloud white"></i></button>
							<span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
								<a href="#" class="dropdown-item"><i class="ft-upload"></i> Import</a>
								<a href="#" class="dropdown-item"><i class="ft-download"></i> Export</a>
								<a href="#" class="dropdown-item"><i class="ft-shuffle"></i> Find Duplicate</a>
							</span>
						</span>
						<button class="btn btn-default btn-sm"><i class="ft-settings white"></i></button>
					</div>
				</div>
			</div>
			<div class="card-content">
				<div class="card-body">
					<!-- Task List table -->
					<button type="button" class="btn btn-danger btn-sm delete-all mb-1">Delete All</button>
					<div class="table-responsive">
						<table id="users-contacts" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle text-center">
							<thead>
								<tr>
									<th><input type="checkbox" class="input-chk" id="check-all" onclick="toggle();"></th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Favorite</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-2.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Alice Collins</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">alice@example.com</a>
									</td>
									<td class="phone">+658-254-256</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-11.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Margaret Govan</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">margaret@example.com</a>
									</td>
									<td class="phone">+125-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right secondary"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-14.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Eugene Woods</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">eugene@example.com</a>
									</td>
									<td class="phone">+987-654-564</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-3.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Russell Bryant</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">russell@example.com</a>
									</td>
									<td class="phone">+235-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-6.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Cynthia Tucker</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">cynthia@example.com</a>
									</td>
									<td class="phone">+987-654-564</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-5.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Scott Marshall</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">scott@example.com</a>
									</td>
									<td class="phone">+954-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-8.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Catherine Smith</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">catherine@example.com</a>
									</td>
									<td class="phone">+254-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-off rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-7.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Eric Howard</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">eric@example.com</a>
									</td>
									<td class="phone">+545-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-9.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Donald Watkins</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">donald@example.com</a>
									</td>
									<td class="phone">+987-654-564</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-10.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Brittany Barnes</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">brittany@example.com</a>
									</td>
									<td class="phone">+632-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-5.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Andrew Marsh</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">andrew@example.com</a>
									</td>
									<td class="phone">+932-741-123</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-18.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Cherry Smith</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">cherry@example.com</a>
									</td>
									<td class="phone">+296-021-604</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop13" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-off rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-17.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Erica Red</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">erica@example.com</a>
									</td>
									<td class="phone">+595-680-123</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop14" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-9.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Will Trumpt</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">will@example.com</a>
									</td>
									<td class="phone">+289-614-504</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop15" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-10.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Verty Barny</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">verty@example.com</a>
									</td>
									<td class="phone">+132-954-114</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>

								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-2.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Steffy Agile</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">steffy@example.com</a>
									</td>
									<td class="phone">+699-654-238</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop17" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-1.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Meggi Jelly</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">meggi@example.com</a>
									</td>
									<td class="phone">+932-854-554</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-4.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Ken Woodsy</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">ken@example.com</a>
									</td>
									<td class="phone">+896-320-964</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-13.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Rushee Brent</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">rushee@example.com</a>
									</td>
									<td class="phone">+135-614-594</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-6.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Sinthia Tecker</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">Sinthia@example.com</a>
									</td>
									<td class="phone">+987-654-564</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop21" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>



								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-4.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Rose Wends</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">rose@example.com</a>
									</td>
									<td class="phone">+387-694-567</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop22" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-3.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="name media-heading">Russell Bryant</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">grees@example.com</a>
									</td>
									<td class="phone">+295-634-567</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop23" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-16.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Chimmi React</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">chimmi@example.com</a>
									</td>
									<td class="phone">+997-684-565</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop24" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-22.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Andy Chews</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">andy@example.com</a>
									</td>
									<td class="phone">+987-478-965</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-1.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Missy Loen</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">missi@example.com</a>
									</td>
									<td class="phone">+987-654-564</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop26" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-5.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Prezi Henz</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">prezi@example.com</a>
									</td>
									<td class="phone">+194-854-857</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop27" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-8.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">John Stric</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">john@example.com</a>
									</td>
									<td class="phone">+154-704-904</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop28" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-off rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-7.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Creta Hord</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">creta@example.com</a>
									</td>
									<td class="phone">+165-651-594</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop29" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-9.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Daizy kigs</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">daizy@example.com</a>
									</td>
									<td class="phone">+627-054-524</td>
									<td class="text-center">
										<div class="favorite active"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop30" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop30" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
								<tr>
									<td><input type="checkbox" class="input-chk check"></td>
									<td>
										<div class="media">
											<div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-10.png"
													 alt="avatar"><i></i></span></div>
											<div class="media-body media-middle">
												<a class="media-heading name">Lara Barndy</a>
											</div>
										</div>
									</td>
									<td class="text-center">
										<a class="email" href="mailto:email@example.com">lara@example.com</a>
									</td>
									<td class="phone">+502-611-569</td>
									<td class="text-center">
										<div class="favorite"><i class="ft-star"></i></div>
									</td>
									<td>
										<a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
										<a class="danger delete mr-1"><i class="fa fa-trash-o"></i></a>
										<span class="dropdown">
											<a id="btnSearchDrop31" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle dropdown-menu-right"><i
												 class="fa fa-ellipsis-v"></i></a>
											<span aria-labelledby="btnSearchDrop31" class="dropdown-menu mt-1 dropdown-menu-right">
												<a data-toggle="modal" data-target="#EditContactModal" class="dropdown-item edit"><i class="ft-edit-2"></i>
													Edit</a>
												<a href="#" class="dropdown-item delete"><i class="ft-trash-2"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle primary"></i> Projects</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle info"></i> Team</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle warning"></i> Clients</a>
												<a href="#" class="dropdown-item"><i class="ft-plus-circle success"></i> Friends</a>
											</span>
										</span>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Favorite</th>
									<th>Actions</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><div class="bug-list-sidebar-content">
    <!-- Predefined Views -->
    <div class="card">
        <div class="card-head">
            <div class="media p-1">
                <div class="media-left pr-1"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="{{asset('/')}}app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                <div class="media-body media-middle">
                    <h5 class="media-heading">Margaret Govan</h5>
                </div>
            </div>
        </div>

        <!-- contacts view -->
        <div class="card-body border-top-blue-grey border-top-lighten-5">
            <div class="list-group">
                <a href="#" class="list-group-item active">All Contacts</a>
                <a href="#" class="list-group-item list-group-item-action">Recently contacted</a>
                <a href="#" class="list-group-item list-group-item-action">Favorite contacts</a>
            </div>
        </div>
        
        <!-- Groups-->
        <div class="card-body">
            <p class="lead">Groups</p>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge badge-primary badge-pill float-right">14</span> <a href="#"> Project</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-info badge-pill float-right">22</span> <a href="#"> Team</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-warning badge-pill float-right">10</span> <a href="#"> Clients</a>
                </li>
                <li class="list-group-item">
                    <span class="badge badge-success badge-pill float-right">5</span> <a href="#"> Friends</a>
                </li>
            </ul>
        </div>
        <!--/ Groups-->

        <!--More-->
        <div class="card-body ">
            <p class="lead">More</p>
            <ul class="list-group">
              <li><a href="#" class="list-group-item">Import</a></li>
              <li><a href="#" class="list-group-item">Export</a></li>
              <li><a href="#" class="list-group-item">Print</a></li>
              <li><a href="#" class="list-group-item">Restore contacts</a></li>
              <li><a href="#" class="list-group-item">Find duplicate</a></li>
            </ul>
        </div>
        <!--/More-->

    </div>
    <!--/ Predefined Views -->

</div>
          </div>
        </div>

@endsection

@push('script')


      <script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/')}}app-assets/vendors/js/tables/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/extensions/jquery.raty.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js"></script>
    <script src="{{asset('/')}}app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/')}}app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('/')}}app-assets/js/core/app.min.js"></script>
    <script src="{{asset('/')}}app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/')}}app-assets/js/scripts/pages/app-contacts.min.js"></script>
@endpush
