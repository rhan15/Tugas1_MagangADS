@extends('app-layout')
@section('content')
    <div class="text-center py-5">
        <h1>DATA TABLE</h1>
    </div>

    <div class="d-flex justify-content-center p-5">
        <table id="table-dummy" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Nama Toko</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            var datatable;
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

            $(function() {
                datatable = $('#table-dummy').DataTable({
                    processing: true,
                    serverSide: true,
                    order: [[2, 'desc']],
                    pageLength : 2,
                    lengthMenu: [2, 10, 50, 100],
                    pagingType: "simple",
                    ajax: "{{url()->current()}}",
                    columns: [
                        {data: 'DT_RowIndex'},
                        {data: 'name'},
                        {data: 'price'},
                        {data: 'store_name'},
                    ],
                });
            });
        });
    </script>
@endpush
