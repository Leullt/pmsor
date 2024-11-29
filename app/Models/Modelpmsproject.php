<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Modelpmsproject extends Model
{
    const CREATED_AT = 'prj_create_time';
    const UPDATED_AT = 'prj_update_time';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pms_project';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'prj_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prj_id','prj_name','prj_code','prj_project_status_id','prj_project_category_id','prj_project_budget_source_id','prj_total_estimate_budget','prj_total_actual_budget','prj_geo_location','prj_sector_id','prj_location_region_id','prj_location_zone_id','prj_location_woreda_id','prj_location_kebele_id','prj_location_description','prj_owner_region_id','prj_owner_zone_id','prj_owner_woreda_id','prj_owner_kebele_id','prj_owner_description','prj_start_date_et','prj_start_date_gc','prj_start_date_plan_et','prj_start_date_plan_gc','prj_end_date_actual_et','prj_end_date_actual_gc','prj_end_date_plan_gc','prj_end_date_plan_et','prj_outcome','prj_deleted','prj_remark','prj_created_by','prj_created_date','prj_create_time','prj_update_time','prj_owner_id','prj_urban_ben_number','prj_rural_ben_number',];

    

    /**
     * Change activity log event description
     *
     * @param string $eventName
     *
     * @return string
     */
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
}

