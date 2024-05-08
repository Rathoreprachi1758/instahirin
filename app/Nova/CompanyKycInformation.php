<?php

namespace App\Nova;

use App\Events\KycUpdateNotifications;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class CompanyKycInformation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\CompanyKycInformation>
     */
    public static $model = \App\Models\CompanyKycInformation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static function authorizedToCreate(Request $request): bool
    {
        // Implement your authorization logic here.
        // For example, you may check if the user has certain permissions.
        return false; // Return false to deny creating new instances.
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make(' Name', 'Company_Name'),
            Text::make('Licence Number', 'Licence_number')->onlyOnDetail(),
            Date::make('Date Incorporation', 'Date_incorporation')->onlyOnDetail(),
            Text::make('Place Incorporation', 'Place_incorporation')->onlyOnDetail(),
            Text::make('Company Address Line1', 'Company_address_line1')->onlyOnDetail(),
            Text::make('Company Address Line', 'Company_address_line2')->onlyOnDetail(),
            Text::make('Beneficiary Owner', 'beneficiary_owner')->onlyOnDetail(),
            Text::make('Nationality', 'nationality')->onlyOnDetail(),
            Text::make('City', 'city')->onlyOnDetail(),
            Text::make('Country', 'country'),
            Text::make('Kyc Type', 'kyc_for'),
            Text::make('Passport Id No', 'Passport_id_no')->onlyOnDetail(),
            Text::make('PostOffice Box', 'p_o_Box')->onlyOnDetail(),
            Text::make('Complete Address', 'complete_address')->onlyOnDetail(),
            Date::make('Date OF Birth', 'dob')->onlyOnDetail(),
            Date::make('Date Id Passport Address Line', 'date_id_passport')->onlyOnDetail(),
            Text::make('Tax Identification Number', 'tax_identification_number')->onlyOnDetail(),
            Text::make('Remit Money From Sanctioned Countries?', 'sanctionedcountries')->onlyOnDetail(),
            Text::make('Subsidiary Office Or Presence In Sanctioned Country?', 'subsidiary_office_sanctioned_Country')->onlyOnDetail(),
            Text::make('Any Service Provided In Sactioned Country?', 'any_service_provided_in_sactioned_country')->onlyOnDetail(),
            Image::make('Scanned Passport', 'Scanned_passport'),
            Image::make('Trade Licence', 'Trade_licence')->onlyOnDetail(),
            Image::make('Beneficiary Owner', 'other_doc')->onlyOnDetail(),
            Image::make('FATCA', 'FATCA')->onlyOnDetail(),
            Image::make('W 8BEN Form', 'w_8BEN_form')->onlyOnDetail(),
            Image::make('Customer Compliance', 'customer_compliance'),
            Text::make('Agreement Checkbox', 'agrement_checkbox')->onlyOnDetail(),
            Select::make('Action', 'is_approved')->options(['approved' => 'Approve', 'rejected' => 'Reject',])->displayUsingLabels()->rules('required'),

        ];

    }

    /**
     * Get the cards available for the request.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {

        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {

        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

    /**
     * Determine if the current user can delete the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    public function authorizedToDelete(Request $request)
    {
        // Implement your authorization logic here.
        // For example, check if the user has a specific role or permission.
        return false; // Return false to deny delete action.
    }

    public function authorizedToReplicate(Request $request)
    {
        // Implement your authorization logic here.
        // For example, check if the user has a specific role or permission.
        return false; // Return false to deny delete action.
    }

    /**
     * Boot the resource.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // Observer for field changes
        self::updating(function ($model) {
            // Check if 'is_approved' field is being updated
            if ($model->isDirty('is_approved')) {
                $originalApproved = $model->getOriginal('is_approved');
                $newApproved = $model->is_approved;

                if ($originalApproved !== $newApproved) {
                    // Dispatch the custom event when 'is_approved' is updated
                    event(new KycUpdateNotifications($model));
                }
            }
        });
    }
}
