<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\City;

use App\District;

use App\Ward;

use App\Kind;

class AjaxController extends Controller
{
    public function getDistricts($city_id)
    {
    	$districts = District::where('city_id', $city_id)->orderBy('name', 'ASC')->get();
        echo "<option value=''>Chọn quận/huyện</option>";   
    	foreach ($districts as $district) {
    		echo "<option value = $district->id>$district->name</option>";
    	}
    }

    public function getWards($district_id)
    {
        $wards = Ward::where('district_id', $district_id)->orderBy('name', 'ASC')->get();
        echo "<option value=''>Chọn xã/phường</option>";   
        foreach ($wards as $ward) {
            echo "<option value = $ward->id>$ward->name</option>";
        }
    }

    public function getSelectedDistrict($city_id, $district_id)
    {
        $districts = District::where('city_id', $city_id)->orderBy('name', 'ASC')->get();
        echo "<option disabled selected value=''>Chọn quận/huyện</option>";
        foreach ($districts as $district) {
            $str = '';
            if($district->id == $district_id)
                $str = "selected = 'selected'";
            echo "<option ".$str." value = $district->id>$district->name</option>";
        }
        //echo $city_id. ' ' .$district_id;
    }

    public function getSelectedWard($district_id, $ward_id)
    {
        $wards = Ward::where('district_id', $district_id)->orderBy('name', 'ASC')->get();
        echo "<option disabled selected value=''>Chọn xã/phường</option>";
        foreach ($wards as $ward) {
            $str = '';
            if($ward->id == $ward_id)
                $str = "selected = 'selected'";
            echo "<option ".$str." value = $ward->id>$ward->name</option>";
        }
    }

    //function get kinds
    public function getKinds($category_id)
    {
        $kinds = Kind::where('category_id', $category_id)->orderBy('name', 'ASC')->get();
        echo "<option value=''>--Chọn loại nhà--</option>";   
        foreach ($kinds as $kind) {
            echo "<option value = $kind->id>$kind->name</option>";
        }
    }

    
}
