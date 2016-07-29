<?php 


Route::get('yokesharun/terminal/{command}', 'yokesharun\PingOnTerminal\TerminalController@use_artisan');
Route::get('yokesharun/terminal_default/{command}', 'yokesharun\PingOnTerminal\TerminalController@use_default');


?>