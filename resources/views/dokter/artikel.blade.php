@extends('adminlte.master')

@section('content')
<div class="p-3">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Artikel</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th style="width: 40px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($artikels as $key => $artikel)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$artikel -> judul}}</td>
                        <td style="display: flex;">
                            <a href="/dokter/1/artikel/{{$artikel->id}}" class="btn btn-info btn-sm mr-1">detail</a>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">Tidak ada data</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection