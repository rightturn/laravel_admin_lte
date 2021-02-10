@extends('layouts._layout')

@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Lens</h1>
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
                            <form method="post" action="{{route('lens.update',[$lens->id])}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <img width="300" src="/{{str_replace('public','storage',$lens->image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name </label>
                                            <input type="text" required value="{{$lens->name}}" name="name" class="form-control" autofocus id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <select class="form-control" name="color" id="color">
                                                <option value="Blue" {{ $lens->color == 'Blue' ? 'selected' : '' }}>Blue</option>
                                                <option value="Green" {{ $lens->color == 'Green' ? 'selected' : '' }}>Green</option>
                                                <option value="Brown" {{ $lens->color == 'Brown' ? 'selected' : '' }}>Brown</option>
                                                <option value="Hazel" {{ $lens->color == 'Hazel' ? 'selected' : '' }}>Hazel</option>
                                                <option value="Grey" {{ $lens->color == 'Grey' ? 'selected' : '' }}>Grey</option>
                                                <option value="Purple" {{ $lens->color == 'Purple' ? 'selected' : '' }}>Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="material">Material</label>
                                            <select class="form-control" name="material" id="material">
                                                <option value="Polymer" {{ $lens->color == 'Polymer' ? 'selected' : '' }} >Polymer</option>
                                                <option value="Silicon_Hydrogel" {{ $lens->color == 'Silicon_Hydrogel' ? 'selected' : '' }} >Silicon Hydrogel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <select class="form-control" name="company" id="company">
                                                <option value="fresh_kon" {{ $lens->color == 'fresh_kon' ? 'selected' : '' }}>Fresh Kon</option>
                                                <option value="bella" {{ $lens->color == 'bella' ? 'selected' : '' }}>Bella</option>
                                                <option value="fresh_look" {{ $lens->color == 'fresh_look' ? 'selected' : '' }}>Fresh Look</option>
                                                <option value="solotica" {{ $lens->color == 'solotica' ? 'selected' : '' }}>solotica</option>
                                                <option value="bauser_lomb" {{ $lens->color == 'bauser_lomb' ? 'selected' : '' }}>bauser & Lomb</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="series">Series</label>
                                            <select class="form-control" name="series" id="series">
                                                <option value="hydrocore" {{ $lens->color == 'hydrocore' ? 'selected' : '' }} >Hydrocore</option>
                                                <option value="elite" {{ $lens->color == 'elite' ? 'selected' : '' }} >Elite</option>
                                                <option value="diamond" {{ $lens->color == 'diamond' ? 'selected' : '' }} >Diamond</option>
                                                <option value="dazzler" {{ $lens->color == 'dazzler' ? 'selected' : '' }}>Dazzler</option>
                                                <option value="sparkler" {{ $lens->color == 'sparkler' ? 'selected' : '' }}>Sparkler</option>
                                                <option value="color_blend" {{ $lens->color == 'color_blend' ? 'selected' : '' }} >Color Blend</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="life">Life</label>
                                            <select class="form-control" name="life" id="life">
                                                <option value="one_daily" {{ $lens->color == 'one_daily' ? 'selected' : '' }}>One Daily</option>
                                                <option value="monthly" {{ $lens->color == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                                <option value="extendend" {{ $lens->color == 'extendend' ? 'selected' : '' }}>Extended</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="curve">Curve</label>
                                            <select class="form-control" name="curve" id="curve">
                                                <option value="8.4" {{ $lens->color == '8.4' ? 'selected' : '' }}>8.4 mm</option>
                                                <option value="8.5"  {{ $lens->color == '8.5' ? 'selected' : '' }}>8.5 mm</option>
                                                <option value="8.6" {{ $lens->color == '8.6' ? 'selected' : '' }}>8.6 mm</option>
                                                <option value="8.7" {{ $lens->color == '8.7' ? 'selected' : '' }}>8.7 mm</option>
                                                <option value="8.8" {{ $lens->color == '8.8' ? 'selected' : '' }}>8.8 mm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="diameter">Diameter</label>
                                            <select class="form-control" name="diameter" id="diameter">
                                                <option value="13.00" {{ $lens->color == '13.00' ? 'selected' : '' }}>13.50 mm</option>
                                                <option value="13.50" {{ $lens->color == '13.50' ? 'selected' : '' }}>13.00 mm</option>
                                                <option value="14.00" {{ $lens->color == '14.00' ? 'selected' : '' }}>14.00 mm</option>
                                                <option value="14.30" {{ $lens->color == '14.30' ? 'selected' : '' }}>14.30 mm</option>
                                                <option value="14.40" {{ $lens->color == '14.40' ? 'selected' : '' }}>14.40 mm</option>
                                                <option value="14.50" {{ $lens->color == '14.50' ? 'selected' : '' }}>14.50 mm</option>
                                                <option value="14.60" {{ $lens->color == '14.60' ? 'selected' : '' }}>14.60 mm</option>
                                                <option value="14.70" {{ $lens->color == '14.70' ? 'selected' : '' }}>14.70 mm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" required class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 text-right">
                                        <button>Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{route('lens.destroy',[$lens->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection