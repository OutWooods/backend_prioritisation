<?php

namespace App\Http\Controllers;

use App\Job;

class JobController extends Controller
{
    /**
     * Get all jobs.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getJobs()
    {
        $jobs = Job::all();
        $response = [
            'jobs' => $jobs
        ];
        return response()->json($response, 200);
    }

    /**
     * Get job.
     *
     * @param  \App\Job $job
     * @return \Illuminate\Http\JsonResponse
     */
    public function getJob(Job $job)
    {
        $response = [
            'job' => $job
        ];
        return response()->json($response, 200);
    }
}
