<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use ColorContrast\ColorContrast;
use jpuck\ColorMixer\Color;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::all()->map(function($event, $key){
            // all day event
            $start = new Carbon($event->start);
            $end   = new Carbon($event->end);
            if ( $start->diffInMinutes($end) === 1439 ) {
                $event->allDay = true;
            }

            // background color
            $event->color = $event->categories->first()->color ?? 'powderblue';
            $hex = (new Color($event->color))->hex();

            // text color
            $contrast = new ColorContrast;
            $complimentary = $contrast->complimentaryTheme($hex);
            if ( $complimentary === ColorContrast::LIGHT ) {
                $event->textColor = 'white';
            } else {
                $event->textColor = 'black';
            }

            return $event;
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
