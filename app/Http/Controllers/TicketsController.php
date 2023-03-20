<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Ticket;


class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET

        return view('admin.admin_dashboard',[

            'tickets' => Ticket::all(),
            'userInput' => '<script>alert("hello")</script>'


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST
        $ticket = new Ticket();

        $ticket ->region = $request->region;
        $ticket ->network_type = $network_type;
        $ticket ->affected_user = $request->affected_user;
        $ticket ->ticket_number = $request->ticket_number;
        $ticket ->contact = $request->contact;
        $ticket ->title = $request->title;
        $ticket ->technician = $request->technician;
        $ticket ->alternate_contact= $request->alternate_contact;
        $ticket ->description = $request->description;
    
        $res = $user->save();


        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //POST
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //EDIT
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //POST
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
    }
}
