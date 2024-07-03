<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeaksController extends Controller
{
    public function index(Request $request){

        $query=Task::query();
        $date=$request->filter;

        switch ($date){
            case 'complated_tasks':
                $query = $query->where('status','1' );
                break;
            case 'pending_tasks':
                $query = $query->where('status','0' );
                break;
        }

        $tasks=$query->get();


//        dd(count($tasks));
        $all_tasks=DB::table('tasks')->count();
        $complate_task=DB::table('tasks')->where('status',1)->count();
        $pending_task=DB::table('tasks')->where('status',0)->count();




        return view('dashboard',compact('tasks','all_tasks','complate_task','pending_task') );

    }
    public function create(){
        return view('task.create');
    }
    public function store(Request $request){
        DB::table('tasks')->insert([
            'title'=> $request->title,
        ]);

        return redirect('dashboard');
    }

    public function getdate(){
        $tasks=DB::table('tasks')->get();

    }

    public function edit($id){
        $task=DB::table('tasks')->find($id);
        return view('task.edit' ,compact('task'));
    }

    public function update(Request $request, $id){
        $task=Task::find($id);
        $task->title=$request->input('title');
        $task->update();

        return redirect('dashboard');
    }

    public function delete($id){
        DB::table('tasks')->where('id',$id)->delete();
        return redirect('dashboard');
    }
    public function deleteAll(){
        DB::table('tasks')->truncate();
        return redirect('dashboard');
    }
    public function change_status($id){
        $task=Task::find($id);
//        $stat= $task->status;


            if ($task->status === '1'){
                $task->status=0;
                $task->update();
            }
            else{
                $task->status=1;
                $task->update();
            }

        return redirect('dashboard');
    }


}
