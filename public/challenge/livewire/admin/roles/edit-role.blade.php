@extends('livewire.admin.layouts.bladeIndex')
@section('adminMain')
    <style>
        #contact-Subject {
            font-size: .75rem !important;

        }
    </style>
    <div>

        <div class="breadcrumb-dn font-weight-bold text-right  d-flex justify-content-end">
            <p class="mt-2 mr-2 ml-2" style="font-size: .8rem;font-weight: 500;color: #5472d3">ثبت مقام جدید</p>
            <i class="fas fa-chevron-left mr-3 ml-2 mt-2" style="margin-top: 1.5vh;color: #757575"></i>
            <p class="mt-2 mr-2" style="font-size: .8rem;font-weight: 500;color: #757575">مقام های شتابدهنده</p>
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
                            <form method="POST" action="{{route('edit.backend.role.post',$id)}}" style="font-size: .8rem">

                            @csrf
                            <!--Grid row-->
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group text-right">
                                            <label for="exampleFormControlSelect2">نام مقام</label>
                                            <input type="text" id="contact-Subject" class="form-control  @error('name') is-invalid @enderror" placeholder="نام مقام..." name="name" value="{{ old('name')}}" wire:model.lazy="name">
                                            @error('name')
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
                                            <label for="exampleFormControlSelect2">کد مقام</label>
                                            <input type="text" id="contact-Subject" class="form-control  @error('code') is-invalid @enderror" placeholder="کد مقام..." name="code" value="{{ old('code')}}" wire:model.lazy="code">
                                            @error('code')
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
                                            <label for="exampleFormControlSelect2">توضیح مقام</label>
                                            <input type="text" id="contact-Subject" class="form-control  @error('label') is-invalid @enderror" placeholder="توضیح مقام" name="label" value="{{ old('label')}}" wire:model.lazy="label">
                                            @error('label')
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
                                            <label for="exampleFormControlSelect2">سطوح دسترسی</label>
                                            <select class="form-control @error('permissions') is-invalid @enderror" name="permissions[]" id="permissions" multiple>
                                                @foreach($permissions as $permission)
                                                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('permissions')
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
                                        <button  class="btn btn-sm mt-3 ml-3 text-light font-weight-bold" style="background-color: #9e9e9e;font-size: .9rem" type="submit">انصراف</button>

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

@endsection
