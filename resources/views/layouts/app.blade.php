@extends('razorbacks::layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"></link>
@endsection

@section('navbar')
    <li><a href="{{ route('syllabus') }}">Syllabus</a></li>
    <li><a href="{{ route('calendar') }}">Calendar</a></li>
    <li><a href="{{ route('project') }}">Project</a></li>
    <li><a href="https://github.com/ISYS4283">Github</a></li>
    <li><a href="{{ route('resources') }}">Resources</a></li>
@endsection

@include('flash::message')

@section('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.datatable').DataTable({
                "order": [[ 1, "desc" ]]
            });
        });
    </script>
@endsection
