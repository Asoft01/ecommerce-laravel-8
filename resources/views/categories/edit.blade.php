@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Category</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn-btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            {{---------------}}
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> Hover Data Table</h3>
                                    <a href="{{ route('categories.index') }}" class="btn btn-primary btn-xs pull-right">Category List</a>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Category Name</label>
                                        <input class="form-control" type="text" name="category_name" id="category_name" value="{{ $category->category_name }}" required placeholder="Category Name">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input class="form-control" type="text" name="description" value="{{ $category->description }}" required placeholder="Description">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Active</label>
                                        <input type="checkbox" name="is_active" id="is_active" {{ $category->is_active != 0 ? 'checked' : null }} value="{{ $category->is_active }}" placeholder="Description">
                                    </div>
                                </div>

                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input class="form-control" type="file" name="image" id="image"  placeholder="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" value="Save" class="btn btn-primary btn-md">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            {{---------------}}
            
        </div>
    </section>
@endsection