@extends('acckt_master.layouts.panel')
@section('content')


          <section class="users-list-wrapper">
              <div class="users-list-filter px-1">
                  <form method="get" action="/portal_idea/idea/my">
                      {{csrf_field()}}
                      <div class="row border rounded py-2 mb-2">
                          <div class="col-12 col-sm-6 col-lg-4">
                              <label for="users-list-role">عنوان ایده</label>
                              <fieldset class="form-group">
                                <input type="text" class="form-control text-left" id="users-list-role" name="q" />
                              </fieldset>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-4">
                              <label for="users-list-status">وضعیت</label>
                              <fieldset class="form-group">
                                  <select class="form-control" id="users-list-status" name="status">
                                      <option value="">همه</option>
                                      <option value="فعال">فعال</option>
                                      <option value="بسته شده">بسته شده</option>
                                      <option value="غیرفعال">غیرفعال</option>
                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-12 col-sm-6 col-lg-4 d-flex align-items-center">
                              <button type="submit" class="btn btn-primary btn-block glow users-list-clear mb-0 mt-75">پاکسازی</button>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="users-list-table">
                  <div class="card">
                      <div class="card-content">
                          <div class="card-body">
                              <!-- datatable start -->
                              <div class="table-responsive">
                                  <table id="users-list-datatable" class="table">
                                      <thead>
                                          <tr>
                                              <th>ردیف</th>
                                              <th>عنوان ایده</th>
                                              <th>خلاصه ایده</th>
                                              <th>زمان ثبت</th>
                                              <th>تعداد درخواست</th>
                                              <th>وضعیت</th>
                                              <th>ویرایش</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                            @foreach(Auth::user()->ideas as $item)
                                              <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td><a href="/portal_idea/idea/{{$item->id}}">{{$item->group_name}}</a></td>
                                                  <td>{{$item->description}}</td>
                                                  <td> {{$item->date_fa}}</td>
                                                  <td>
                                                      <a href="/portal_idea/idea/{{$item->id}}/demand" >
                                                          <span class="badge bg-rgba-success text-success">{{$item->demands->count()}}</span>
                                                      </a>
                                                  </td>
                                                  <td><span class="badge bg-rgba-success text-success">فعال</span></td>
                                                  <td>
                                                      <a href="/portal_idea/idea/{{$item->id}}/edit"><i class="bx bx-edit-alt"></i></a>
                                                  </td>
                                              </tr>
                                            @endforeach
                                      </tbody>

                                  </table>
                              </div>
                              <!-- datatable ends -->
                          </div>
                      </div>
                  </div>
              </div>
          </section>
@endsection

@section('footerScript')
    <script>
        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var recipient = button.data('whatever');
            var modal = $(this);
            modal.find('.modal-body p').text(recipient)
            $.ajax(
                {
                   type:'get',
                   url:'/portal_idea/idea/'+recipient+'/demand',
                    data:{
                        "_token"    : "{{ csrf_token() }}",
                    },
                    success:function(data)
                    {
                        modal.find('.modal-body').html(data)

                    },
                    error : function(data)
                    {
                        modal.find('.modal-body p').html(data.responseJSON.errors)
                        errorsHtml='<div class="alert alert-danger text-left"><ul>';
                        $.each( data.responseJSON.errors, function( key, value ) {
                            errorsHtml += '<li>'+ value[0] + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';

                        modal.find('.modal-body p').htm( errorsHtml );
                    }
                });
        })
    </script>
@endsection
