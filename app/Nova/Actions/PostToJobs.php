<?php

namespace App\Nova\Actions;

use App\Models\Job;
use App\Models\InstaHirinRequirement;
use Illuminate\Bus\Queueable;
use Laravel\Nova\Actions\Action;
use Illuminate\Support\Collection;
use Laravel\Nova\Fields\ActionFields;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Laravel\Nova\Http\Requests\NovaRequest;

class PostToJobs extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $instaRequirement) {
            // Create a new Job entry
            $job = Job::create([
                'title' => $instaRequirement->position_title,
                'work_mode' => $instaRequirement->work_mode,
                'description' => $instaRequirement->project_description,
                'availability' => $instaRequirement->employment_type,
                'ctc_currency' => $instaRequirement->salary_currency_yearly,
                'min_price' => $instaRequirement->min_salary_yearly,
                'max_price' => $instaRequirement->max_salary_yearly,
                'salary_period' => $instaRequirement->salary_period,
                'experience' => $instaRequirement->min_experience,
                'location' => $instaRequirement->location,
                'qualification' => $instaRequirement->education_qualification,
                'company' => $instaRequirement->company_name,
                'prefer_qualification' => $instaRequirement->company_address,
            ]);

            // Transfer skills
            $skills = $instaRequirement->experty()->pluck('id')->toArray();
            // $skills = $instaRequirement->all();
            \Log::info('Skills:');
            \Log::info($skills);            
            $job->keySkills()->attach($skills);
            // dd($skills);
            \Log::channel('single')->info('Skills:', $skills);

            // Delete the entry from InstaHirinRequirement
            $instaRequirement->delete();
        }

        return Action::message('Data posted to Jobs successfully!');
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [];
    }
}
