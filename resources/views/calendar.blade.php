@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js" integrity="sha256-Gn7MUQono8LUxTfRA0WZzJgTua52Udm1Ifrk5421zkA=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
@endsection

@section('content')

<h1>Calendar</h1>

<div id='calendar'></div>

<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        events: '/api/events',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listYear'
        }
    });
});
</script>

@endsection
