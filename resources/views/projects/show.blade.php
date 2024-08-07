<!-- resources/views/projects/show.blade.php -->

@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Project Details</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td>{{ $project->title }}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{ $project->categoryId }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $project->description }}</td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><a href="{{ $project->videoUrl }}" target="_blank">{{ $project->videoUrl }}</a></td>
                        </tr>
                        <tr>
                            <th>Client</th>
                            <td>{{ $project->client }}</td>
                        </tr>
                        <tr>
                            <th>Agency</th>
                            <td>{{ $project->agency }}</td>
                        </tr>
                        <tr>
                            <th>PH</th>
                            <td>{{ $project->ph }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
