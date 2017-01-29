@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js" integrity="sha256-Gn7MUQono8LUxTfRA0WZzJgTua52Udm1Ifrk5421zkA=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

    <style>
        .fa-window-close, .afa-window-close:hover {
            color: red;
            text-decoration: none;
        }
        .fc-content {
            cursor: pointer;
        }
        .popover-content li {
            border: 5px solid;
            padding: 5px;
        }
    </style>
@endsection

@section('content')

<h1>Calendar</h1>

<div id='calendar'></div>

<div id="closePopoverBtn">
    <a href="#" class="afa-window-close" onclick="return closePopover(this)" >
        <i class="fa fa-window-close" aria-hidden="true"></i>
    </a>
</div>

<script>
$(document).ready(function() {
    $('#calendar').fullCalendar({
        events: '/api/events',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listYear'
        },
        eventClick: function(calEvent, jsEvent, view) {
            $(this).popover({
                placement: 'bottom',
                container: 'body',
                trigger: 'focus',
                html : true,
                title: $('#closePopoverBtn').clone().removeAttr('id').append(calEvent.title),
                content: renderPopoverEventContent(calEvent)
            });

            $(this).popover('show');
        }
    });
});

function renderPopoverEventContent(calEvent) {
    var content = '<strong>start:</strong> ' +
        calEvent.start._i;

    if (calEvent.allDay && !calEvent.end) {
        content += '<br><strong>end:</strong> 23:59:59';
    }

    if (calEvent.end) content +=
        '<br><strong>end:</strong> ' +
        calEvent.end._i;

    if (calEvent.description) content +=
        '<br><strong>description:</strong> ' + calEvent.description;

    if (calEvent.points) content +=
        '<br><strong>points:</strong> ' + calEvent.points;

    if (calEvent.categories) {
        var categories = [];

        calEvent.categories.forEach(function(category) {
            var listitem = '<strong>' + category.name + '</strong>';

            if (category.description) {
                listitem += '<p>' + category.description + '</p>';
            }

            listitem = '<li style="border-color:' + category.color + '">' + listitem + '</li>';

            categories.push(listitem);
        });

        content += '<br><strong>categories:</strong>' + categories.join('');
    }

    return content;
}

function closePopover(anchor) {
    $(anchor).parents('.popover').hide();
    return false;
}
</script>

@endsection
