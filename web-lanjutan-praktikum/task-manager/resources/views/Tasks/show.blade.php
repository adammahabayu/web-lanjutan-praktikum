@extends('layouts.app')

@section('content')
    <h1>Detail Task</h1>

    <div class="form-group">
        <label for="title">Judul</label>
        <p class="form-control">{{ $task->title }}</p>
    </div>

    <div class="form-group">
        <label for="description">Deskripsi</label>
        <p class="form-control">{{ $task->description }}</p>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <p class="form-control">
            @if($task->status == 'pending')
                Pending
            @elseif($task->status == 'in_progress')
                In Progress
            @else
                Completed
            @endif
        </p>
    </div>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-info">Edit</a>
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali ke Daftar Task</a>
@endsection

@push('styles')
    <style>
        /* Tempelkan CSS yang telah dibuat di sini */
        h1 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #343a40;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
        }
        
        /* Tambahkan semua CSS dari contoh sebelumnya */
        .form-group label {
            font-weight: bold;
            color: #495057;
            margin-bottom: 5px;
            display: block;
        }

        /* Seluruh style lainnya seperti form-control, button, container, dll */
        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            margin-right: 10px;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush