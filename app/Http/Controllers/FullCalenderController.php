<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Event;


class FullCalenderController extends Controller
{
	public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('layouts.full-calender');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
				$total_hours_db = 0;

				$sql = "SELECT CAST(start as DATE) as date ,ROUND(SUM(time_to_sec(timediff(end,start))/3600),2)  as total_hours
						FROM events 
						WHERE title like '%$request->title%'
						GROUP BY CAST(start as DATE)
						HAVING date like '%". date('Y-m-d', strtotime($request->start)) ."%';";

				$query = DB::select($sql);

				if ($query) {
					$total_hours_db = $query[0]->total_hours;
				}

				$diff_new_event = (strtotime($request->end) - strtotime($request->start)) /3600;

				$total_hours = (int)$total_hours_db + $diff_new_event;

				if ($total_hours > 8) {
					return response()->json(['message' => 'Auncun rendez-vous est disponible  , veuillez choisir un autre jour'] , 400);
				}else {
					$event = Event::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);
				}

    			

    			return response()->json($event, 200);
    		}

    		if($request->type == 'update')
    		{
    			$event = Event::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Event::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
