<x-back-end.master>
    @section('page-title')
    Create New Discount
    @endsection
    @section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript: void(0);">Discounts</a></li>
    <li class="breadcrumb-item"><a href="javascript: void(0);">Create New Discount</a></li>
    @endsection
    @section('content')
    <div class="card-box overflow-hidden">

        <x-back-end.validationAlert></x-back-end.validationAlert>

        <form action="{{route('admin.discount.post.create')}}" method="POST" id="form">
            @csrf
            <div class="form-group">
                <label for="label">Discount Label</label>
                <input type="text" class="form-control" id="label" name="label">
            </div>
            <div class="d-flex">
                <div class="form-group col-3">
                    <label for="code">Discount Code</label>
                    <input type="text" class="form-control" id="code" name="code">
                </div>
                <div class="form-group col-3">
                    <label for="quantity">Discount Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                </div>
                <div class="form-group col-3">
                    <label for="rate">Discount Rate %</label>
                    <input type="number" class="form-control" id="rate" name="rate" placeholder="example:13 12.4 15.6">
                </div>
                <div class="form-group col-3">
                    <label for="status">Status</label>
                    <select name="status" class="custom-select" id="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
    @section('script')
    <script src="{{asset('assets/libs/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 300
            });
        });
        $("#form").validate({
            rules: {
                label: 'required',
                code: 'required',
                rate: 'required',
                status: 'required',
            },
            messages: {
                label: 'Please enter a label',
                code: 'Please enter a Discount Code',
                rate: 'Please enter a Discount Rate',
                status: 'Please select a status',

            }
        });

    </script>
    @endsection
    @section("css")
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .error {
            color: red;
        }

    </style>
    @endsection
</x-back-end.master>