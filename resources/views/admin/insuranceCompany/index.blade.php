@extends('admin.layout.app')
@section('style')
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4>All Insurance Company List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Role</th>
                                                <th>Phone</th>
                                                <th>Country</th>
                                                <th>City</th>
                                                <th>Address</th>
                                                <th>Post Box</th>
                                                <th>ID Card</th>
                                                <th>Image License</th>
                                                <th>Owner Name</th>
                                                <th>Trading License</th>
                                                <th>Billing Area</th>
                                                <th>Billing City</th>
                                                <th>Billing Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($company as $company)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $company->name }}</td>
                                                    <td>{{ $company->email }}</td>
                                                    <td><img alt="image"
                                                            @if ($company->image) src="{{ asset('/' . $company->image) }}" @else src="https://ranglerz.pw/repairmycar/public/admin/assets/img/user.png" @endif
                                                            style="height: 50px;width:50px"></td>
                                                    <td>{{ $company->type }}</td>
                                                    <td>{{ $company->phone }}</td>
                                                    <td>{{ $company->country }}</td>
                                                    <td>{{ $company->city }}</td>
                                                    <td>{{ $company->address }}</td>
                                                    <td>{{ $company->post_box }}</td>
                                                    <td><img alt="image"
                                                            @if ($company->insurance->id_card) src="{{ asset('/' . $company->insurance->id_card) }}" @else src="https://ranglerz.pw/repairmycar/public/admin/assets/img/user.png" @endif
                                                            style="height: 50px;width:50px"></td>
                                                    <td><img alt="image"
                                                            @if ($company->insurance->image_license) src="{{ asset('/' . $company->insurance->image_license) }}" @else src="https://ranglerz.pw/repairmycar/public/admin/assets/img/user.png" @endif
                                                            style="height: 50px;width:50px"></td>
                                                    <td>{{ $company->insurance->owner_name }}</td>
                                                    <td>{{ $company->insurance->trading_license }}</td>
                                                    <td>{{ $company->insurance->billing_area }}</td>
                                                    <td>{{ $company->insurance->billing_city }}</td>
                                                    <td>{{ $company->insurance->billing_address }}</td>
                                                    <td>
                                                        @if ($company->action == 1)
                                                            <div class="badge badge-success badge-shadow">Activate</div>
                                                        @else
                                                            <div class="badge badge-danger badge-shadow">DeActivate</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.insurance-company.edit', ['id' => $company->id]) }}"
                                                            class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg></a>
                                                        @if ($company->action == 0)
                                                            <a href="{{ route('admin.insurance-company.activate', ['id' => $company->id]) }}"
                                                                class="btn btn-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-toggle-right">
                                                                    <rect x="1" y="5" width="22"
                                                                        height="14" rx="7" ry="7"></rect>
                                                                    <circle cx="16" cy="12" r="3">
                                                                    </circle>
                                                                </svg></a>
                                                        @else
                                                            <a href="{{ route('admin.insurance-company.deactivate', ['id' => $company->id]) }}"
                                                                class="btn btn-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-toggle-left">
                                                                    <rect x="1" y="5" width="22"
                                                                        height="14" rx="7" ry="7"></rect>
                                                                    <circle cx="8" cy="12" r="3">
                                                                    </circle>
                                                                </svg></a>
                                                        @endif
                                                        {{-- <form action="{{ route('admin.insurance-company.destroy', $company->id ) }}" method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                        </form> --}}
                                                        <a>
                                                            {{-- <i class="fas fa-trash text-danger glyphicon glyphicon-trash"
                                                               data-toggle="tooltip" data-placement="top" title="delete"
                                                             data-id="{{ $content->id }}"></i> --}}
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                data-id="{{ $company->id }}"
                                                                class="fas fa-trash text-danger glyphicon glyphicon-trash"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash-2">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                                <line x1="10" y1="11" x2="10"
                                                                    y2="17"></line>
                                                                <line x1="14" y1="11" x2="14"
                                                                    y2="17"></line>
                                                            </svg>
                                                        </a>
                                                        <form id="del_form{{ $company->id }}"
                                                            action="{{ url('admin/delete-insurance/' . $company->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7"> No More Insurance Company In this Table.</td>
                                                </tr>
                                            @endforelse
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
