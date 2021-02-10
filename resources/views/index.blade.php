@extends('layouts._layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Lens</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6 text-right">
                            <a class="btn btn-primary" href="{{route('lens.create')}}">Add New</a>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>@sortablelink('name', 'Name')</th>
                                        <th>@sortablelink('color', 'Color')</th>
                                        <th>@sortablelink('material', 'Material')</th>
                                        <th>@sortablelink('company', 'Company')</th>
                                        <th>@sortablelink('series', 'Series')</th>
                                        <th>@sortablelink('life', 'Life')</th>
                                        <th>@sortablelink('curve', 'Curve')</th>
                                        <th>@sortablelink('diameter', 'Diameter')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($lens as $l)
                                    <tr>
                                        <td><a href="{{route('lens.edit',[$l->id])}}">{{$l->name}}</a></td>
                                        <td>{{$l->color}}</td>
                                        <td>{{$l->material}}</td>
                                        <td>{{$l->company}}</td>
                                        <td>{{$l->series}}</td>
                                        <td>{{$l->life}}</td>
                                        <td>{{$l->curve}}</td>
                                        <td>{{$l->diameter}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            {{$lens->links()}}
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection