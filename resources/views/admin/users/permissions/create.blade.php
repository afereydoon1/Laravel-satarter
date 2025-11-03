@extends('admin.layouts.master')

@section('title','dashboard | origin-create')

@section('content')
    <div class="col-lg-12">
        <div class="card card-default card-md mb-4">
            <div class="card-header">
                <h6>Create New Permission</h6>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-arrow-left"></i>Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-md-50">
                <form action="{{ route('permissions.store') }}" method="post" class="was-validated">
                    @csrf
                    <div class="form-row mx-n15">
                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Origin Name</label>
                            <input name="name" type="text" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('name') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="permission name" required>
                            @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <button class="btn btn-primary px-30" type="submit">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
@endsection





