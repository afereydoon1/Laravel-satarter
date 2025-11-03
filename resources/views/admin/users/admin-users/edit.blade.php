@extends('admin.layouts.master')

@section('head-tag','داشبورد | ویرایش کاربران ادمین')

@section('content')
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <h5>
                        edit admin user
                    </h5>
                    <a href="{{ route('admin_user.index') }}" class="btn btn-info btn-sm">back</a>
                </section>

                <section>
                    <form action="{{ route('admin_user.update',$adminUser->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">fullName</label>
                                    <input type="text"
                                           class="form-control form-control-sm @error('full_name') is-invalid @enderror"
                                           name="full_name" value="{{ old('full_name',$adminUser->full_name) }}">
                                    @error('full_name')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                     </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="email"
                                           class="form-control form-control-sm @error('email') is-invalid @enderror "
                                           name="email" value="{{ old('email',$adminUser->email) }}">
                                    @error('email')
                                    <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">password</label>
                                    <input type="password"
                                           class="form-control form-control-sm @error('password') is-invalid @enderror"
                                           name="password" value="{{ old('password',$adminUser->password) }}">
                                    @error('password')
                                    <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">confirm password</label>
                                    <input type="password"
                                           class="form-control form-control-sm @error('password') is-invalid @enderror"
                                           name="password_confirmation" value="{{ old('password') }}">
                                    @error('password')
                                    <span class="invalid-feedback">
                                      {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">mobile</label>
                                    <input type="text"
                                           class="form-control form-control-sm @error('mobile') is-invalid @enderror "
                                           name="mobile" value="{{ old('mobile',$adminUser->mobile) }}">
                                    @error('mobile')
                                    <span class="invalid-feedback">
                                {{ $message }}
                            </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">status</label>
                                    <select name="status"
                                            class="form-control form-control-sm @error('status') is-invalid @enderror">
                                        <option value="0">in-active</option>
                                        <option value="1">active</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback">
                                {{ $message }}
                           </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">submit</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>
@endsection


