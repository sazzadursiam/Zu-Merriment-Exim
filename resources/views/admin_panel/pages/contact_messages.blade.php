@extends('admin_panel.layout.master')
@section('page_title', 'Dashboard')
@section('contacts_menu_active', 'active')
@section('custom_style')
    <style>
        .myTable .tbody,
        .myTable td,
        .myTable tfoot,
        .myTable th,
        .myTable thead,
        .myTable tr {
            border-color: inherit;
            /* border-style: solid; */
            border-width: 0;
            border-style: none;
        }
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <div class="col-md-7 my-auto page_title">
                        Dashboard <i class="fas fa-angle-right"></i> Contact Messages
                    </div>
                    <div class="ms-auto d-flex">
                        {{-- <div>
                            <a class="btn btn-outline-primary me-1" href="{{ route('admin.student.list') }}"
                                role="button"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
                        </div>
                        <div>
                            <a class="btn btn-outline-primary" href="{{ route('admin.add_student') }}" role="button">
                                <i class="fa-solid fa-square-plus"></i> Add Student</a>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body" style="overflow-x: auto;">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Mesage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp

                            @foreach ($all_messages as $item)
                                <tr>
                                    <td>
                                        {{ $sl++ }}
                                    </td>
                                    <td>{{ $item->f_name }} {{ $item->l_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->message }}</td>

                                    <td class="d-flex">
                                        <form class="d-inline"
                                            action="{{ route('admin.contact_messages_delete', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit"
                                                onclick="return confirm('Are you sure you want to delete?');" type="button"
                                                class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection

@section('custom_js')

    <script>
        $(document).ready(function() {
            //data-table-settings
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": false,
            });
            //tooltip-settings
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection
