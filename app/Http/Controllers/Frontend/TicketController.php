<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //
    function ticket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->name=$request->name;
        $ticket->email=$request->email;
        $ticket->noft=$request->noft;
        $ticket->date=$request->date;
        $ticket->splan=$request->splan;
        if($ticket->save())
        {
            return view('frontend.success');
        }
        else
        {
            
        }
    }
}
