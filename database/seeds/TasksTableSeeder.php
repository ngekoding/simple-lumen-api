<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$hasher = app()->make('hash');

        DB::table('tasks')->delete();
        $task = app()->make('App\Task');
        $task->fill([
        	'user_id' 	=> 1,
        	'title'		=> 'Go to school',
        	'description' => 'Go to school at 7 oclock'
        ]);
        $task->save();
    }
}
