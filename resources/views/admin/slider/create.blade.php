@extends('layouts.partial.admin_design')
@section('content')
    <div id="content">
        <div class="container-fluid">
            @include('layouts.partial.msg')
            <div class="widget-box">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                <h5>Sauvegarde Slider</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form class="form-horizontal" method="post" action="{{route('slider.store')}}">
                                    {{ csrf_field() }}
                                    <div class="control-group">
                                        <label class="control-label">Title</label>
                                        <div class="controls">
                                            <input type="text" name="title" id="category_name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Sous Title</label>
                                        <div class="controls">
                                            <input type="text" name="sub_title" id="category_name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Image</label>
                                        <div class="controls">
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="Ajouter" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>


@endsection