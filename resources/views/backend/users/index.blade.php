@extends('backend.layouts.master')


@push('style')
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
<!-- END VENDOR CSS-->
<!-- BEGIN STACK CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
<!-- END STACK CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END Custom CSS-->
@endpush

@section('titolopagina')Pagina Utenti @endsection

@section('content')


@push('breadcumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item"><a href="#">Page Layouts</a>
    </li>
    <li class="breadcrumb-item active">Content detached left sticky sidebar
    </li>
</ol>
@endpush

@push('iconsright')
<button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-bell"></i></button>
<button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-life-buoy"></i></button>
<button class="btn-icon btn btn-secondary btn-round" type="button"><i class="ft-settings"></i></button>
@endpush


<div class="content-body">
    <!-- Description -->
    <div class="row">
      <div class="col-md-4">
    <section id="description" class="card">
        <div class="card-header">
            <h4 class="card-title">Description</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                    <p>2 Columns layout is the most common and popular layout, it has a
                        navigation with content section. This layout use the common navbar
                        and footer sections, however you can add customized header or footer
                        on page level.</p>
                </div>
            </div>
        </div>
    </section>
    <!--/ Description -->
      </div>
      <div class="col-md-8">
    <section id="description" class="card">
        <div class="card-header">
            <h4 class="card-title">Description</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="card-text">
                    <p>2 Columns layout is the most common and popular layout, it has a
                        navigation with content section. This layout use the common navbar
                        and footer sections, however you can add customized header or footer
                        on page level.</p>
                </div>
            </div>
        </div>
    </section>
    <!--/ Description -->
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
                                    <input type="text" id="password" class="password form-control" placeholder="Password">
                                  </fieldset>
                                    <fieldset class="form-group col-12">
                                    <input type="file" id="immagine" class="image form-control" placeholder="Immagine">
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

    <!-- JADE Code -->
    <section id="jade-code" class="card">
        <div class="card-header">
            <h4 class="card-title">JADE Configuration</h4>

        </div>

        <div class="card-content">
            <div class="card-body">
                <table id="tabella-utenti" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th style="display:none;">id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Stato</th>
                            <th>Creato il:</th>
                            <th>Ruolo</th>
                            <th>Azioni</th>
                            <th>Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td style="display:none;">{{ $user->id }}</td>
                            <td>
                              <div class="media">
                                <div class="media-left pr-1">
                                  <span class="avatar avatar-sm avatar-online rounded-circle">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i>
                                  </span>
                                </div>
                                <div class="media-body media-middle">
                                  <a class="media-heading name"> {{ $user->name }}</a>
                                </div>
                              </div>
                             </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            <td>{{ $user->created_at->toFormattedDateString() }}</td>
                            <td>
                                @foreach( $user->roles as $role)
                                {{ $role->name }}
                                @endforeach
                            </td>
                            <td>
										        <a data-toggle="modal" data-target="#EditContactModal" class="primary edit mr-1"><i class="fa fa-pencil"></i></a>
                               <a   class="purple edit mr-1" alt="visualizza" aria-describedat="visualizza" href="{{route('users.show', $user->id )}}">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            <a   class="amber new mr-1 " alt="modifica" href="{{route('users.edit', $user->id )}}"><i
                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                          </td>
                            <td>
                                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                    {{ method_field('DELETE') }} {{csrf_field()}}
                                    <button type="submit" name="del-user" class="btn btn-sm btn-danger  flat ">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <!--/ JADE Code -->
</div>

@endsection

@push('script')
<!-- BEGIN VENDOR JS-->
<script src="{{asset('/')}}app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{asset('/')}}app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{asset('/')}}app-assets/vendors/js/ui/prism.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/vendors/js/extensions/jquery.raty.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/vendors/js/extensions/jquery.knob.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/vendors/js/extensions/wNumb.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/vendors/js/extensions/dragula.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN STACK JS-->
<script src="{{asset('/')}}app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/js/core/app.js" type="text/javascript"></script>
{{-- <script src="{{asset('/')}}app-assets/js/scripts/customizer.js" type="text/javascript"></script> --}}
<!-- END STACK JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('/')}}app-assets/js/scripts/extensions/knob.js" type="text/javascript"></script>
<script src="{{asset('/')}}app-assets/js/scripts/cards/draggable.js" type="text/javascript"></script>
@endpush
