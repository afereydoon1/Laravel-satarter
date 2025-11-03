@extends('admin.layouts.master')

@section('title','dashboard | admin-create')

@section('content')
    <div class="col-lg-12">
        <div class="card card-default card-md mb-4">
            <div class="card-header">
                <h6>Create New Origin</h6>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <div class="action-btn">
                        <a href="{{ route('admin_user.index') }}" class="btn btn-sm btn-primary btn-add">
                            <i class="la la-arrow-left"></i>Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-md-50">
                <form action="{{ route('admin_user.store') }}" method="post" class="was-validated">
                    @csrf
                    <div class="form-row mx-n15">
                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Name</label>
                            <input name="name" type="text" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('name') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="name" required>
                            @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Email</label>
                            <input name="email" type="email" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('email') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="email" required>
                            @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Password</label>
                            <input name="password" type="password" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('password') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="password" required>
                            @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('password_confirmation') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="password" required>
                            @error('password_confirmation')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3 px-15">
                            <label for="validationServer03" class="il-gray fs-14 fw-500 align-center">Phone</label>
                            <input name="phone" type="text" class="form-control is-valid ih-medium ip-light radius-xs b-light @error('phone') is-invalid @enderror" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="phone" required>
                            @error('phone')
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


