@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>{{ __('Teacher Details') }}</span>
                    <div>
                        <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->name }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Email') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->email }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Phone') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->phone ?? 'Not provided' }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Address') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->address ?? 'Not provided' }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Qualification') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->qualification }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Subject Specialty') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->subject_specialty }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Status') }}</label>
                        <div class="col-md-6">
                            <span class="badge bg-{{ $teacher->status === 'active' ? 'success' : 'danger' }}">
                                {{ ucfirst($teacher->status) }}
                            </span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Created At') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->created_at->format('F j, Y, g:i a') }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-4 text-md-end">{{ __('Last Updated') }}</label>
                        <div class="col-md-6">
                            {{ $teacher->updated_at->format('F j, Y, g:i a') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 