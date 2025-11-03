@extends('admin.layouts.master')

@section('title','admin|customers')

@section('head-tag')
    <link rel="stylesheet" href="{{ asset('assets/vendor_assets/css/data_table.css') }}">
@endsection

@section('content')
    <div class="col-12 mt-30">
        <div class="card border-0">
            <div class="card-header">
                <h6>Customers Lists</h6>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-plus"></i> Add New</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="t_channel-today" role="tabpanel" aria-labelledby="t_channel-today-tab">
                        <div class="table-responsive">
                            <table class="table table--default traffic-table" id="myTable">
                                <thead>
                                <tr>
                                    <th>#id</th>
                                    <th>FullName</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customerUsers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name ?? '--' }}</td>
                                        <td>{{ Str::mask($item->email,'*',3,-3) ?? '--' }}</td>
                                        <td>{{ Str::mask($item->phone,'*',3,-4) ?? '--' }}</td>
                                        <td>
                                            <div class="table-actions">

                                                <form id="delete-item" class="d-inline" action="{{ route('customers.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="javascript:{}" onclick="document.getElementById('delete-item').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
            });
        });
    </script>
    <script src="{{ asset('assets/vendor_assets/js/data_table.js') }}"></script>
@endsection



