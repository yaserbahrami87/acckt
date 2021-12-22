@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endsection
@section('content')
    <div style="margin-top: 3rem;direction: rtl !important;">
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="card pb-5">
                    <div class="card-body">

                        <div class="container">

                            <!--Section: Contact v.2-->
                            <section class="section">

                                <!--Section heading-->
                                <h5 class="font-weight-bold text-center h1 my-5">  فرم ویرایش چالش {{$challenge->name}}</h5>


                                <div class="row pt-5">

                                    <!--Grid column-->
                                    <div class="col-md-12 col-xl-11">
                                        <form method="POST" action="{{route('admin.company.challenges.edit.post',$challenge->id)}}">
                                        @csrf
                                        @method('patch')
                                        <!--Grid row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="md-form">
                                                        <input type="text" id="contact-Subject" class="form-control @error('title') is-invalid @enderror" placeholder="عنوان چالش" name="title" value="{{ old('title') ?? $challenge->title}}">
                                                        @error('title')
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->
                                            <!--Grid row-->
                                            <div class="input-group">
                                                <input type="text" id="image_label" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image')?? $challenge->image}}"
                                                       aria-label="Image" aria-describedby="button-image">
                                                @error('image')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm btn-outline-secondary" type="button" id="button-image">تصویر شاخص</button>
                                                </div>
                                            </div>
                                            <!--Grid row-->
                                            <!--Grid column-->
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">دسته بندی اصلی</label>
                                                <select class="form-control @error('category') is-invalid @enderror" id="exampleFormControlSelect2" name="category" value="{{ old('category') ?? $challenge->main_category}}">
                                                    <option disabled>لطفا دسته ی اصلی را انتخاب کنید ...</option>

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Grid column -->
                                            <!--Grid column-->
                                            <div class="form-group text-right">
                                                <label for="exampleFormControlSelect2">دسته بندی ها</label>
                                                <select multiple class="form-control @error('categories') is-invalid @enderror" id="exampleFormControlSelect2" name="categories[]" value="{{ old('categories')}}">
                                                    <option disabled>لطفا دسته های مرتبط را انتخاب کنید ...</option>

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('categories')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <!-- Grid column -->
                                            <!--Grid row-->
                                            <div class="row" >
                                                <div class="col-md-12">
                                                    <div class="md-form">
                                                        <textarea id="contact-editor" rows="10" class="form-control text-right @error('desc') is-invalid @enderror"  placeholder="توضیحات چالش" name="desc" value="{{ old('desc')}}"></textarea>
                                                        @error('desc')
                                                        <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="col-8 text-center text-md-left my-4 ">
                                                <button  class="btn btn-lg m-5" style="background-color: #69f0ae" type="submit">ویرایش چالش</button>
                                            </div>

                                        </form>


                                    </div>
                                    <!--Grid column-->

                                </div>

                            </section>
                            <!--Section: Contact v.2-->

                        </div>
                    </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        CKEDITOR.replace('contact-editor', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>
@endsection
