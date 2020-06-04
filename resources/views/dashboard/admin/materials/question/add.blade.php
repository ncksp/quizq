@extends('layouts.app')
@section('title','Question Management')

@section('pages', 'Add New Question')

@section('content')
    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <div class="container-fluid">
        <a href="{{URL::previous()}}">Back</a>
    </div>
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <div class="row">
            <div class="col-xs-12">
                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                </div>
                <div>
                    <form class="form-horizontal" role="form" action="{{route('store-question', $material_id)}}" method="post" id="form-add-new-question">
                        @csrf
                        <input type="hidden" name="id_material" id="id_material" value="{{$material_id}}">
                        @error('id_material')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="Question"> Question</label>

                            <div class="col-sm-6">
                                <textarea id="question" class="form-control" name="question" placeholder="Question" spellcheck="false" required></textarea>
                                @error('question')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="option_a"> Option A</label>

                            <div class="col-sm-9">
                                <input type="text" id="option_a" name="option_a" placeholder="Option A" class="col-xs-10 col-sm-5" required>
                                @error('option_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="option_b"> Option B</label>

                            <div class="col-sm-9">
                                <input type="text" id="option_b" name="option_b" placeholder="Option B" class="col-xs-10 col-sm-5" required>
                                @error('option_b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="option_c"> Option C</label>

                            <div class="col-sm-9">
                                <input type="text" id="option_c" name="option_c" placeholder="Option C" class="col-xs-10 col-sm-5" required>
                                @error('option_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="option_d"> Option D</label>

                            <div class="col-sm-9">
                                <input type="text" id="option_d" name="option_d" placeholder="Option D" class="col-xs-10 col-sm-5" required>
                                @error('option_d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="answer"> Answer</label>

                            <div class="col-sm-3">
                                <select class="form-control" id="answer" name="answer" required>
                                    <option value="" hidden>Choose</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                                @error('answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="pull-right">
                            <button type="reset" class="btn btn-info">Reset</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
@endsection
