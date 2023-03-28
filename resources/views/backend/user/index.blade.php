<x-back-end.master>
    @section('page-title')
        Users <a href="{{route('admin.user.create')}}" class="btn btn-outline-primary waves-effect waves-light">Add New</a>
    @endsection
    @section('breadcrumb')
        <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">All Users</a></li>
    @endsection
    @section('content')
    <div class="card-box pb-0 overflow-hidden">
        <x-back-end.message></x-back-end.message>
        <div class="table-responsive">
            <table class="table table-bordered mb-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data['rows'] as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td>{{$row->updated_at->diffForHumans()}}</td>
                        <td>
                            <div class="d-inline">
                                <a href="{{route('admin.user.update',$row->id)}}" class="btn d-inline-block waves-effect waves-light btn-primary ">
                                        <i class="far fa-edit"></i>
                                </a>
                               
                                <x-back-end.button.delete :row="$row" :action="route('admin.user.delete',$row->id)"></x-back-end.button.delete>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
                
                
                
                </tbody>
            </table>
        </div>
        <div class="mt-2 float-right">
            {{ $data['rows']->links() }}
        </div>
    </div>
    @endsection
    @section('script')
    <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
            title: 'Are you sure, You want to delete this user?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#DD3333',
            cancelButtonColor: '#3085D6',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
                form.submit();
            }
            })
        });

    </script>
    @endsection
    @section('css')
        <link rel="stylesheet" href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}">
    @endsection 
</x-back-end.master>