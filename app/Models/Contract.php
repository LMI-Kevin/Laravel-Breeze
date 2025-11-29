<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = ['pwp', 'brand', 'details', 'name', 'start_date', 'end_date', 'deliverables', 'terms', 'amount', 'number_of_kols', 'number_of_posts', 'status', 'date_fulfilled', 'remarks', 'date_forwarded'];

    public static function allContracts() {
        return Contract::query()
                            ->leftjoin('brands', 'contracts.brand', '=', 'brands.id')
                            ->leftjoin('details', 'contracts.details', '=', 'details.id')
                            ->select('contracts.*', 'brands.brand AS brand_name', 'details.detail AS detail_name')
                            ->get();
    }

    public static function addContract($data) {
        return Contract::create($data);
    }

    public static function getContract($contractId) {
        return Contract::query()
                            ->leftjoin('brands', 'contracts.brand', '=', 'brands.id')
                            ->leftjoin('details', 'contracts.details', '=', 'details.id')
                            ->select('contracts.*', 'brands.brand AS brand_name', 'details.detail AS detail_name')
                            ->where('contracts.id', $contractId)
                            ->get();
    }

    public static function getData($field, $value, $fields) {
        return Contract::query()
                            ->leftjoin('brands', 'contracts.brand', '=', 'brands.id')
                            ->leftjoin('details', 'contracts.details', '=', 'details.id')
                            ->select($fields)
                            ->where($field, $value)
                            ->get();
    }
}
