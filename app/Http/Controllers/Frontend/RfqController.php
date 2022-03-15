<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rfq;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class RfqController extends Controller
{
   public function add(Request $request){
    if($request->isMethod('post')){
        // dd($request->all());
        $data=new Rfq();
        if($request->hasFile('image'))
        {
        $image=$request->file('image');
        $currentDate=Carbon::now()->toDateString();
        $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
        
        if(Storage::disk('public')->exists('images/admin/rfq'))
        {
        Storage::disk('public')->makeDirectory('images/admin/rfq');
        }
        $packageImage = Image::make($image)->resize(900,500)->stream();
        Storage::disk('public')->put('images/admin/rfq/'.$imageName,$packageImage);
        $data->image=$imageName;
        }else{
            $data->image='default.png';
        }
        $data->industry_name=$request->industry_name;
        $data->want_buy=$request->want_buy;
        $data->keywords=$request->keywords;
        $data->details=$request->details;
        $data->qty=$request->qty;
        $data->unit=$request->unit;
        $data->frequency=$request->frequency;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->p_methods=json_encode($request->p_methods);
        $data->port=$request->port;
        $data->validity=$request->validity;
        $data->t_c=$request->t_c;
        $data->save();
        Toastr::success('Uploaded!');
        return redirect()->back();die;
    }

      $units=[
        "<option value='Acre'>Acre</option><option value='Ampere'>Ampere</option>",
        "<option value='Bag'>Bag</option>",
        "<option value='Barrel'>Barrel</option>",
        "<option value='Box'>Box</option>",
        "<option value='Bushel'>Bushel</option>",
        "<option value='Carton'>Carton</option>",
        "<option value='Case'>Case</option>",
        "<option value='Centimeter'>Centimeter</option>",
        "<option value='Chain'>Chain</option>",
        "<option value='Cubic Centimeter'>Cubic Centimeter</option>",
        "<option value='Cubic Foot'>Cubic Foot</option>",
        "<option value='Cubic Inch'>Cubic Inch</option>",
        "<option value='Cubic Meter'>Cubic Meter</option>",
        "<option value='Cubic Yard'>Cubic Yard</option>",
        "<option value='DEGREES Celsius'>DEGREES Celsius</option>",
        "<option value='Degrees Fahrenheit'>Degrees Fahrenheit</option>",
        "<option value='Dozen'>Dozen</option>",
        "<option value='Dram'>Dram</option>",
        "<option value='Fluid Ounce'>Fluid Ounce</option>",
        "<option value='Foot'>Foot</option>",
        "<option value='Forty-Foot Container '>Forty-Foot Container </option>",
        "<option value='Furlong'>Furlong</option>",
        "<option value='Gallon'>Gallon</option>",
        "<option value='Gill'>Gill</option>",
        "<option value='Grain'>Grain</option>",
        "<option value='Gram'>Gram</option>",
        "<option value='Gross'>Gross</option>",
        "<option value='Hectare'>Hectare</option>",
        "<option value='Hertz'>Hertz</option>",
        "<option value='Inch'>Inch</option>",
        "<option value='Kiloampere'>Kiloampere</option>",
        "<option value='Kilogram'>Kilogram</option>",
        "<option value='Kilohertz'>Kilohertz</option>",
        "<option value='Kilometer'>Kilometer</option>",
        "<option value='Kiloohm'>Kiloohm</option>",
        "<option value='Kilovolt'>Kilovolt</option>",
        "<option value='Kilowatt'>Kilowatt</option>",
        "<option value='Liter'>Liter</option>",
        "<option value='Long Ton'>Long Ton</option>",
        "<option value='Megahertz'>Megahertz</option>",
        "<option value='Meter'>Meter</option>",
        "<option value='Metric Ton'>Metric Ton</option>",
        "<option value='Mile'>Mile</option>",
        "<option value='Milliampere'>Milliampere</option>",
        "<option value='Milligram'>Milligram</option>",
        "<option value='Millihertz'>Millihertz</option>",
        "<option value='Milliliter'>Milliliter</option>",
        "<option value='Millimeter'>Millimeter</option>",
        "<option value='Milliohm'>Milliohm</option>",
        "<option value='Millivolt'>Millivolt</option>",
        "<option value='Milliwatt'>Milliwatt</option>",
        "<option value='Nautical Mile'>Nautical Mile</option>",
        "<option value='Ohm'>Ohm</option>",
        "<option value='Ounce'>Ounce</option>",
        "<option value='Pack'>Pack</option>",
        "<option value='Pallet'>Pallet</option>",
        "<option value='Pair'>Pair</option>",
        "<option value='Parcel'>Parcel</option>",
        "<option value='Perch'>Perch</option>",
        "<option value='Piece'>Piece</option>",
        "<option value='Pint'>Pint</option>",
        "<option value='Plant'>Plant</option>",
        "<option value='Pole'>Pole</option>",
        "<option value='Pound'>Pound</option>",
        "<option value='Quart'>Quart</option>",
        "<option value='Quarter'>Quarter</option>",
        "<option value='Rod'>Rod</option>",
        "<option value='Roll'>Roll</option>",
        "<option value='Set'>Set</option>",
        "<option value='Sheet'>Sheet</option>",
        "<option value='Short Ton'>Short Ton</option>",
        "<option value='Square Centimeter'>Square Centimeter</option>",
        "<option value='Square Foot'>Square Foot</option>",
        "<option value='Square Inch'>Square Inch</option>",
        "<option value='Square Meter'>Square Meter</option>",
        "<option value='Square Mile'>Square Mile</option>",
        "<option value='Square Yard'>Square Yard</option>",
        "<option value='Stone'>Stone</option>",
        "<option value='Strand'>Strand</option>",
        "<option value='Ton'>Ton</option>",
        "<option value='Tonne'>Tonne</option>",
        "<option value='Tray'>Tray</option>",
        "<option value='Twenty-Foot Container'>Twenty-Foot Container</option>",
        "<option value='Unit'>Unit</option>",
        "<option value='Volt'>Volt</option>",
        "<option value='Watt'>Watt</option>",
        "<option value='Wp'>Wp</option>",
        "<option value='Yard'>Yard</option>",
      ];

      $validities=[
        '<option value="0">Select Buying Frequency *</option>',
        '<option value="One time">One time</option>',
        '<option value="Daily">Daily</option>',
        '<option value="Weekly">Weekly</option>',
        '<option value="Monthly">Monthly</option>',
        '<option value="Quarterly">Quarterly</option>',
        '<option value="Semi Annually">Semi Annually</option>',
        '<option value="Annually">Annually</option>',
        '<option value="Other">Other</option>',
      ];

      $freqs=[
        '<option value="0">Select Time of Validity</option>',
        '<option value="1-w">1 Week</option>',
        '<option value="2-w">2 Weeks</option>',
        '<option value="3-w">3 Weeks</option>',
        '<option value="1-m">1 Month</option>',
        '<option value="2-m">2 Months</option>',
        '<option value="3-m">3 Months</option>',
        '<option value="4-m">4 Months</option>',
        '<option value="5-m">5 Months</option>',
        '<option value="6-m">6 Months</option>',
        '<option value="1-y">1 Year</option>',
      ];
    return view('frontend.pages.postrfq')->with(compact('units','validities','freqs'));
   }
}
