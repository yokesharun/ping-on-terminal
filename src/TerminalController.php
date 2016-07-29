<?php

namespace Yokesharun\PingOnTerminal;

use App\Http\Controllers\Controller;
use Artisan;

class TerminalController extends Controller
{

    public function use_artisan($command)
    {
        try{
        	Artisan::call($command);
        	return 'Done';
        }

	    catch (Exception $e) {
	      return Response::make($e->getMessage(), 500);
	    }
    }

    public function use_default($command)
    {
        try{
        	exec($command);
        	return 'Done';
        }

	    catch (Exception $e) {
	      return Response::make($e->getMessage(), 500);
	    }
    }

}

?>