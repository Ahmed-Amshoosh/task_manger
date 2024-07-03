@extends('layouts.index')

@section('content')
    <div class="analytics">

        <div class="card">
            <div class="card-head">
                <h2>{{($all_tasks)}}</h2>
                <span class="las la-clipboard-list" style="color: #11a8c3;"></span>
            </div>
            <div class="card-progress">
                <small>All Tasks</small>
                <div class="card-indicator">
                    <div class="indicator one" style="width: 60%"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-head">
                <h2>{{($complate_task)}}</h2>
                <span class="las la-clipboard-check" style="color: #0080008a;"></span>
            </div>
            <div class="card-progress">
                <small>Page views</small>
                <div class="card-indicator">
                    <div class="indicator two" style="width: 80%"></div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-head">
                <h2>{{($pending_task)}}</h2>
                <span class="las la-window-close" style="color:#dd7f7f"></span>
            </div>
            <div class="card-progress">
                <small>Monthly revenue growth</small>
                <div class="card-indicator">
                    <div class="indicator three" style="width: 65%"></div>
                </div>
            </div>
        </div>

        <!-- <div class="card">
            <div class="card-head">
                <h2>47,500</h2>
                <span class="las la-envelope"></span>
            </div>
            <div class="card-progress">
                <small>New E-mails received</small>
                <div class="card-indicator">
                    <div class="indicator four" style="width: 90%"></div>
                </div>
            </div>
        </div> -->

    </div>


    <div class="records table-responsive">

        <div class="record-header">
            <div class="add">
                <span>Entries</span>
                <form style="display: contents" action="{{url('filter')}}" method="get">
                <select onchange="submit()" name="filter" id="" style="width: fit-content">
                    <option >All Tasks</option>
                    <option value="complated_tasks">Complated Tasks</option>
                    <option value="pending_tasks">Pending Tasks</option>
                </select>
                </form>
                <a href="{{url('create_teak')}}"><button >Add New Task</button></a>
                <a style="margin-left: 20px" href="{{url('delete_all')}}"><button >Delete All</button></a>
            </div>

            <div class="browse">
                <input type="search" placeholder="Search" class="record-search">
                <!-- <select name="" id="">
                    <option value="">Status</option>
                </select> -->
            </div>
        </div>

        <div>
            <table width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th><span class="las la-sort"></span> Task Name</th>
                    <th><span class="las la-sort"></span> StatUs</th>
                    <th><span class="las la-sort"></span> ACTIONS</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tasks as $task)

{{--                    <?php--}}
{{--                        $complate_task=0;--}}
{{--                        $pending_task=10;--}}
{{--                        if ($task->status === '0'){--}}
{{--                            $pending_task=1;--}}
{{--                        }--}}
{{--                        else{--}}
{{--                            $complate_task++;--}}
{{--                        }--}}


{{--                        ?>--}}

                    <tr>
                        <td>{{$task->id}}</td>
                        <td>
                            <div class="client">
                                <div class="client-info">
                                    <h4>{{$task->title}}</h4>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="{{$task->status === '1' ? 'green':'red'}}" style="padding: 10px;font-weight: 500; ">
                                {{ $task->status === '1' ? 'complated' : 'pending' }}

                            </span>
                        </td>

                        <td>
                            <div class="actions">

                                <a href="{{url('change_status/'.$task->id)}}" style="width: fit-content;height: fit-content">
                                    <form style="display: contents" action="{{url('change_status/'.$task->id)}}" method="post">
                                        {{csrf_field()}}
                                    <input type="checkbox" onclick="submit()" {{ $task->status === '1' ? 'checked' : '' }}

                                    style="    width: 20px;height: 16px;" name="" id="">
                                    </form>
                                </a>

{{--                                  </form>--}}


                                <a href="{{url('edit/'.$task->id)}}"><span class="las la-pen"></span></a>
                                <a href="{{url('delete/'.$task->id)}}"><span class="las la-trash-alt"></span></a>


                            </div>
                        </td>
                    </tr>



                @endforeach


                </tbody>
            </table>
        </div>

    </div>
@endsection



{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}




