<ul class="list-group list-group-flush">
    @foreach($categories as $cate)
    <li class="list-group-item">
            <div class="d-flex">
                <span>{{ $cate->name }}</span>
                <div class="actions mr-5">
                    <form method="POST" action="{{route('admin.category.delete',$cate->id)}}">
                        @csrf
                        <button class="btn btn-sm btn-outline-danger mr-2" type="submit"> حذف</button>
                    </form>
                </div>

            </div>
            </li>
    @endforeach
</ul>
