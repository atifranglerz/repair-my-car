@extends('admin.layout.app')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Car Model</h4>
                            </div>
                            <form action="{{ route('admin.store-model') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Select Comapny Name</label>
                                        <select id="test_name" name="company_id" class="form-control test_name" required>
                                            <option value="">Select Comapny Name </option>
                                            @foreach ($company as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->id }}. {{ $item->company }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('company')
                                        <div class="text-danger p-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Add a New Model</label>
                                        <input type="text" class="form-control" name="car_model" required>
                                        {{-- @error('model')
                                        <div class="text-danger p-2">{{ $message }}</div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Add Model</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Company With Model</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Car Company Name</th>
                                            <th>Car Model</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $a)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ ucwords($a->company) }}</td>
                                                <td> @foreach($a->model as $data){{ $data->car_model }},  @endforeach</td>
                                                <td>

                                                     <a href="{{ route('admin.view-model', $a->id) }}" class="btn btn-info
                                                        "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"                                                                                 viewBox="0
                                                        0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>

                                                     <a>     <svg xmlns="http://www.w3.org/2000/svg" data-id="{{ $a->id }}" class="fas fa-trash text-danger glyphicon glyphicon-trash" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                         </a>
                                                        <form id="del_form{{ $a->id }}"
                                                         action="{{ url('admin/delete-models/' . $a->id) }}">
                                                          @csrf
                                                           @method('DELETE')
                                                         </form>
                                                </td>
                                            </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
<script>
     $(document).on('click', '.glyphicon-trash', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del_form' + $(this).data('id')).submit();
                }
            });
        });
</script>
@endsection

