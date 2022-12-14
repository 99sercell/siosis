@extends('template.sbadmin.layouts.app')

@section('title', 'Periode')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-4 text-gray-800">Periode</h1>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb float-sm-right" style="background-color: none;">
                <li class="breadcrumb-item active"><small>Periode</small></li>
            </ol>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('periode/add') }}" class="btn btn-primary">
                        <h6 class="m-0 font-weight-bold text-white">Add Data</h6>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Periode</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_periode }}</td>
                                        <td>
                                            @if ($item->status == 'active')
                                                <div class="badge badge-success">{{ $item->status }}</div>
                                            @else
                                                <div class="badge badge-danger">{{ $item->status }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('periode/' . $item->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ url('periode/' . $item->id) }}" class="form d-inline"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
    </div>
@endsection

@section('js')
    <script type="module">
        $('#dataTable').DataTable();
    </script>
@endsection
