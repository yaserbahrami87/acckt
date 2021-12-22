@extends('livewire.admin.layouts.bladeIndex')

<style>
    #contact-Subject {
        font-size: .75rem !important;
    }
</style>
@section('adminMain')
    <div>

        <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">ویرایش خبر</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">اخبار شتابدهنده</p>
            <i class="fas fa-chevron-left mr-2 ml-2 mt-2"  style="color: #757575"></i>
            <a href="{{route('homePage')}}"><i class="fas fa-home mr-2 ml-2 mt-2" style="font-size: 1rem;color: #524c00"></i></a>
            <i class="fas fa-grip-lines-vertical ml-1 mt-2" style="font-size: 1rem;color: #524c00"></i>
            <p class="mt-1 mr-2 ml-2" style="font-weight: 900;color: #524c00 !important;">مدیریت صاحبان چالش</p>

        </div>

        <div  dir="rtl">
            <!--Grid row-->
            <div class="row"  >


                <!--Grid column-->
                <div class="col-md-12 " >

                    <div class="card ml-5" style="border-radius: 5px">
                        <div class="card-body " style="background-color: #fafafa;border-radius: 5px">


                            <!--Section: Contact v.2-->

                            <!--Section heading-->
                            <!--Grid column-->
                            <form method="POST" action="{{route('admin.articles.update.post',$id)}}" style="font-size: .8rem" enctype="multipart/form-data">
                            @csrf
                            <!--Grid row-->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="exampleFormControlSelect2">عنوان خبر</label>
                                            <input type="text" id="contact-Subject" class="form-control  @error('title') is-invalid @enderror" placeholder="عنوان خبر..." name="title" value="{{ old('title')}}">
                                            @error('title')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right" id="contact-Subject">
                                            <label for="exampleFormControlSelect2">دسته بندی</label>
                                            <select class="form-control @error('category') is-invalid @enderror" name="category" id="categories">
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
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <div class="d-flex justify-content-center">
                                                <label for="select-files" class="btn text-center ml-50" style="background-color: #aab6fe;font-size: .75rem;font-weight: bold; cursor: pointer;height: 4vh">
                                                    <span>آپلود تصویر شاخص</span>
                                                    <input id="select-files" name="image" type="file" hidden>
                                                </label>
                                                @error('image')
                                                <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="exampleFormControlSelect2">توضیحات خبر</label>
                                            <textarea id="article-editor" class="form-control  @error('desc') is-invalid @enderror" placeholder="توضیحات خبر را وارد کنید ... " name="desc" value="{{ old('desc')}}" rows="5"></textarea>
                                            @error('desc')
                                            <span class="invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="mr-auto text-center text-md-right ">
                                        <button  class="btn btn-primary btn-sm mt-3 ml-2 font-weight-bold" style="background-color: #69f0ae;font-size: .9rem" type="submit">ثبت تغییرات</button>
                                        <button  class="btn btn-sm mt-3 ml-3 text-light font-weight-bold" style="background-color: #9e9e9e;font-size: .9rem" >انصراف</button>

                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--Grid column-->


                        <!--Section: Contact v.2-->
                    </div>
                </div>
            </div>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->
    <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

    <script>
        CKEDITOR.replace('article-editor', {
            // Setting default language direction to right-to-left.
            contentsLangDirection: 'rtl',
            height: 270,
        });

    </script>

@endsection
