<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class CommentsController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $comment->ticket_id = $ticket->id;
        $comment->response = $request->response;
        $comment ->number_points = $request->number_points;
        $ticket ->comment = $request->comment;
        $comment->save();
        return redirect()->route('tickets.index');
    }
}
