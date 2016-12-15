<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
	private $user_id;

	public function __construct(Request $request)
	{
		$this->user_id = $request->user()->id;
	}

	/**
	 * get all task by user id
	 */
	public function index(Request $request)
	{
		$tasks = Task::where('user_id', $this->user_id)->get();
		if (count($tasks) !== 0) {
			$res['success'] = true;
			$res['result']  = $tasks;
		} else {
			$res['success'] = true;
			$res['result']  = 'No task created.';
		}
		return response($res);
	}

	/**
	 * get all task by user id and status
	 */
	public function get(Request $request, $status)
	{
		$tasks = Task::where(['user_id' => $this->user_id, 'status' => $status])->get();
		if (count($tasks) !== 0) {
			$res['success'] = true;
			$res['result']  = $tasks;
		} else {
			$res['success'] = true;
			$res['result']  = 'No task created.';
		}
		return response($res);
	}

	public function create(Request $request)
	{
		$task = new Task();
		$task->fill([
			'user_id'		=> $this->user_id,
			'title'	  		=> $request->input('title'),
			'description'	=> $request->input('description')
		]);
		
		if ($task->save()) {
			$res['success'] = true;
			$res['message'] = 'New task created.';
		} else {
			$res['success'] = false;
			$res['message'] = 'Failed adding new task!';
		}
		return response($res);
	}

	public function update(Request $request, $id)
	{
		$task = Task::find($id);

		$task->title = $request->input('title');
		$task->description = $request->input('description');
		$task->status = $request->input('status');
		if ($task->save()) {
			$res['success'] = true;
			$res['message'] = 'Task updated.';
		} else {
			$res['success'] = false;
			$res['message'] = 'Failed updating task!';
		}
		return response($res);
	}

	public function delete(Request $request, $id)
	{
		$task = Task::find($id);
		if ($task->delete()) {
			$res['success'] = true;
			$res['message'] = 'Task deleted.';
		} else {
			$res['success'] = false;
			$res['message'] = 'Failed deleting task!';
		}
		return response($res);
	}
}