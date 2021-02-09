@extends('layouts._layout')

@section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Add Lens</h1>
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
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <select class="form-control" name="color" id="color">
                                                <option value="Blue">Blue</option>
                                                <option value="Green">Green</option>
                                                <option value="Brown">Brown</option>
                                                <option value="Hazel">Hazel</option>
                                                <option value="Grey">Grey</option>
                                                <option value="Purple">Purple</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="material">Material</label>
                                            <select class="form-control" name="material" id="material">
                                                <option value="Polymer">Polymer</option>
                                                <option value="Silicon_Hydrogel">Silicon Hydrogel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <select class="form-control" name="company" id="company">
                                                <option value="fresh_kon">Fresh Kon</option>
                                                <option value="bella">Bella</option>
                                                <option value="fresh_look">Fresh Look</option>
                                                <option value="solotica">solotica</option>
                                                <option value="bauser_lomb">bauser & Lomb</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="series">Series</label>
                                            <select class="form-control" name="series" id="series">
                                                <option value="hydrocore">Hydrocore</option>
                                                <option value="elite">Elite</option>
                                                <option value="diamond">Diamond</option>
                                                <option value="dazzler">Dazzler</option>
                                                <option value="sparkler">Sparkler</option>
                                                <option value="color_blend">Color Blend</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="life">Life</label>
                                            <select class="form-control" name="life" id="life">
                                                <option value="one_daily">One Daily</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="extendend">Extended</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="curve">Curve</label>
                                            <select class="form-control" name="curve" id="curve">
                                                <option value="8.4">8.4 mm</option>
                                                <option value="8.5">8.5 mm</option>
                                                <option value="8.6">8.6 mm</option>
                                                <option value="8.7">8.7 mm</option>
                                                <option value="8.8">8.8 mm</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="diameter">Diameter</label>
                                            <select class="form-control" name="diameter" id="diameter">
                                                <option value="13.00">13.00 mm</option>
                                                <option value="13.00">13.50 mm</option>
                                                <option value="13.00">14.00 mm</option>
                                                <option value="13.00">14.30 mm</option>
                                                <option value="13.00">14.40 mm</option>
                                                <option value="13.00">14.50 mm</option>
                                                <option value="13.00">14.60 mm</option>
                                                <option value="13.00">14.70 mm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
@endsection