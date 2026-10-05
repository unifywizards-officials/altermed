@extends('admin.layouts.app')

@section('content')
<div class="row">
    <!--<div class="col-12 d-flex justify-content-between align-items-center mb-3">-->
    <!--    <h4 class="mb-0">Manage Sliders</h4>-->
    <!--    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary" style="background-color: #2b2b5e;border-color: #2b2b5e;">Add Slider</a>-->
    <!--</div>-->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                              
                                <th>Description
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <!--<td><img src="{{ asset('storage/'.$slider->image_path) }}" alt="{{ $slider->title }}" style="width: 100px; height: auto;"></td>-->
                                <!--<td>{{ $slider->title }}</td>-->
                               <td>{{ \Illuminate\Support\Str::limit($slider->description, 80) }}</td>
                                
                                <td>
                                    <span class="badge bg-{{ $slider->is_active ? 'success' : 'secondary' }}">{{ $slider->is_active ? 'Yes' : 'No' }}</span>
                                </td>
                               
                                <td>
                                    <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-green"><i class="fas fa-edit"></i> Edit</a>
                                    <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" style="display:inline-block" class="js-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No sliders found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div>
                    {{ $sliders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


