@extends('layouts.app')

@section('title', 'Teacher Dashboard')

@section('content')
<div class="dashboard-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="dashboard-card card">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-chalkboard-teacher me-2"></i>{{ __('Teacher Dashboard') }}</span>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-circle bg-primary text-white me-3">
                                        <i class="fas fa-user fa-2x"></i>
                                    </div>
                                    <div>
                                        <h4 class="mb-1">Welcome, {{ Auth::guard('teacher')->user()->name }}!</h4>
                                        <p class="text-muted mb-0">You are logged in as a teacher</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="dashboard-card card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <i class="fas fa-user-circle me-2 text-primary"></i>Profile Information
                                        </h5>
                                        <div class="profile-info">
                                            <p class="mb-2">
                                                <i class="fas fa-envelope me-2 text-muted"></i>
                                                <strong>Email:</strong> {{ Auth::guard('teacher')->user()->email }}
                                            </p>
                                            <p class="mb-2">
                                                <i class="fas fa-phone me-2 text-muted"></i>
                                                <strong>Phone:</strong> {{ Auth::guard('teacher')->user()->phone ?? 'Not provided' }}
                                            </p>
                                            <p class="mb-2">
                                                <i class="fas fa-graduation-cap me-2 text-muted"></i>
                                                <strong>Qualification:</strong> {{ Auth::guard('teacher')->user()->qualification }}
                                            </p>
                                            <p class="mb-3">
                                                <i class="fas fa-book me-2 text-muted"></i>
                                                <strong>Subject Specialty:</strong> {{ Auth::guard('teacher')->user()->subject_specialty }}
                                            </p>
                                            <a href="{{ route('teachers.edit', Auth::guard('teacher')->user()) }}" class="btn btn-primary">
                                                <i class="fas fa-edit me-2"></i>Edit Profile
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="dashboard-card card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <i class="fas fa-bolt me-2 text-primary"></i>Quick Actions
                                        </h5>
                                        <div class="list-group">
                                            <a href="{{ route('teachers.index') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                                                <i class="fas fa-users me-2 text-primary"></i>View All Teachers
                                            </a>
                                            <a href="{{ route('teachers.create') }}" class="list-group-item list-group-item-action d-flex align-items-center">
                                                <i class="fas fa-user-plus me-2 text-primary"></i>Add New Teacher
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .avatar-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-info p {
        font-size: 0.95rem;
    }

    .list-group-item {
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }
</style>
@endsection 