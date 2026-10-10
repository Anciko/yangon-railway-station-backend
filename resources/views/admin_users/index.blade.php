@extends('layouts.app')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('assets/datatable-3.13/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/> --}}
@endsection

@section('content')
    <table class="table table-borderless dt-responsive nowrap w-100 display" id="Datatable">
        <thead>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Action
                </th>

            </tr>
        </thead>

    </table>
@endsection

@push('scripts')
    <script src="{{ asset('assets/datatable-3.13/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatable-3.13/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Required datatable js -->
    {{-- <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            const table = new DataTable('#Datatable', {
                ajax: "{{ route('admin-user-data') }}",
                processing: true,
                serverSide: true,
                columns: [{
                        data: 'name',
                        class: 'text-center'
                    },
                    {
                        data: 'email',
                        class: 'text-center'
                    },
                    {
                        data: 'created_at',
                        class: 'text-center'
                    },
                    {
                        data: 'action',
                        class: 'text-center'
                    }
                ],
                columnDefs: [{
                    // Target all columns or specific indices like [4, 5] (Start Date and Salary)
                    targets: '_all',
                    className: 'dt-left' // Forces DataTables to apply its built-in left alignment class
                }],
                layout: {
                    topStart: function() {
                        let container = document.createElement('div');
                        container.className = 'custom-search-container';

                        container.innerHTML = `
                    <div class="app-search d-none d-lg-block">
                                        <div class="position-relative">
                                           <input class="form-control" placeholder="Type to Search..." type="text" id="datatable-search">
                                           <button class="btn" type="button">
                                           <i class="bx bx-search-alt align-middle">
                                           </i>
                                           </button>
                                        </div>
                                     </div>
                `;

                        return container;
                    },
                    topEnd: function() {
                        let button = `<a href="{{ route('admin-users.create') }}" class="btn btn-primary">
                    <i class="bx bx-plus-circle align-middle"></i> Add New</a>`;
                        return button;
                    },
                    bottomStart: 'info',
                    bottomEnd: 'paging'
                }
            });

            // Connect custom search input to DataTables
            $('#datatable-search').on('input', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endpush

{{-- <!-- Scrollable modal button -->
            <button class="btn btn-primary waves-effect waves-light" data-bs-target="#exampleModalScrollable" data-bs-toggle="modal" type="button">
             Scrollable Modal
            </button>
            <!-- Scrollable modal -->
            <div aria-hidden="true" aria-labelledby="exampleModalScrollableTitle" class="modal fade" id="exampleModalScrollable" role="dialog" tabindex="-1">
             <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                 Scrollable Modal
                </h5>
                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button">
                </button>
               </div>
               <div class="modal-body">
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
                <p>
                 Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                                                                    in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                </p>
                <p>
                 Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                                                    lacus vel augue laoreet rutrum faucibus dolor auctor.
                </p>
                <p>
                 Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                                                    scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                                                                    auctor fringilla.
                </p>
               </div>
               <div class="modal-footer">
                <button class="btn btn-light" data-bs-dismiss="modal" type="button">
                 Close
                </button>
                <button class="btn btn-primary" type="button">
                 Save changes
                </button>
               </div>
              </div>
              <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
            </div>
            <!-- /.modal --> --}}
