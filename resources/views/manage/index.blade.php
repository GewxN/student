@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ระบบการจัดการข้อมูลคณะ สาขาวิชา
                  <table class ="table table-striped">
                    <tr>
                        <th>รหัสคณะ</th>
                        <th>=ชื่อคณะ</th>
                    </tr>
                    @foreach ($manage as $faculty)
                    <tr>
                    <td>{{ $faculty->fac_id }}</td>
                    <td>{{ $faculty->fac_name }}</td>

                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
