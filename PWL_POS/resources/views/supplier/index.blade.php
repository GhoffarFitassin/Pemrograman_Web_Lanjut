@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('supplier/import') }}')" class="btn btn-sm btn-info">
                    Import Data
                </button>
                <a href="{{ url('supplier/export_excel') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-file-excel"></i>
                    Export Excel
                </a>
                <button onclick="modalAction('{{ url('supplier/create_ajax') }}')" class="btn btn-sm btn-success">
                    Tambah Ajax
                </button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session ('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
                <thead>
                    <tr><th>ID</th><th>Kode supplier</th><th>Nama supplier</th><th>Alamat Supplier</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_supplier').DataTable({
                // Serverside: true, jika ingin menggunakan server side processing
                serverSide: true,
                ajax: {
                    "url": "{{ url('supplier/list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: 'text-center',
                        orderable: false,
                        searchable: false
                    }, {
                        data: "supplier_kode",
                        className: "",
                        orderable: true,
                        searchable: true
                    }, {
                        data: "supplier_nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    }, {
                        data: "supplier_alamat",
                        className: "",
                        orderable: true,
                        searchable: true
                    }, {
                        data: "aksi",
                        className: '',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endpush