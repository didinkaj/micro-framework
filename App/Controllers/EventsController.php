<?php

namespace App\Controllers;

use App\Core\App;


class EventsController
{

    public function index()
    {
        $events = App::get('database')->selectAll('events', 'Event');

        return view('events', compact('events'));

    }

    public function store()
    {
        App::get('database')->insert('events',
            [
                'user_id' => 1,
                'description' => $_POST['description']
            ]
        );

        redirect('events');
    }

}