<x-back-end.master>
    @section('page-title')
    Create New Payment
    @endsection
    @section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Payments</a></li>
    <li class="breadcrumb-item"><a href="javascript: void(0);">Create New Payment</a></li>
    @endsection
    @section('content')
    <div class="card-box overflow-hidden">

        <x-back-end.validationAlert></x-back-end.validationAlert>

        <form action="{{route('admin.payment.post.create')}}" method="POST" id="form">
            @csrf
            <div class="form-group">
                <label for="label" class="required">Label</label>
                <input type="text" class="form-control" value="{{ request()->input('label', old('label')) }}" name="label">
            </div>
            <div class="form-group">
                <label for="status" class="required">Status</label>
                <select name="status" class="custom-select" id="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
    @section('script')
    <script src="{{asset('assets/libs/jquery-validation/jquery.validate.min.js')}}"></script>
    <script>
        $("#form").validate({
            rules: {
                label: 'required',
                status: 'required',
            },
            messages: {
                label: 'Please enter a label',
                status: 'Please select a status',

            }
        });

    </script>
    @endsection
    @section("css")
    <style>
        .error {
            color: red;
        }
        .required:after {
            content:" *";
            color: red;
        }

    </style>
    @endsection
</x-back-end.master>
