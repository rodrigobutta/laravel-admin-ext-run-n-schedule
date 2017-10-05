<?php

namespace RodrigoButta\Admin\RunSchedule;

use RodrigoButta\Admin\Facades\Admin;
use RodrigoButta\Admin\Layout\Content;
use Illuminate\Http\Request;

class RunScheduleController
{
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('Task scheduling');

            $scheduling = new RunSchedule();

            $content->body(view('laravel-admin-ext-run-n-schedule::index', [
                'events' => $scheduling->getTasks(),
            ]));
        });
    }

    /**
     * @param Request $request
     *
     * @return array
     */
    public function runEvent(Request $request)
    {
        $scheduling = new RunSchedule();

        try {
            $output = $scheduling->runTask($request->get('id'));

            return [
                'status'    => true,
                'message'   => 'success',
                'data'      => $output,
            ];
        } catch (\Exception $e) {
            return [
                'status'    => false,
                'message'   => 'failed',
                'data'      => $e->getMessage(),
            ];
        }
    }
}
