<?php

namespace App\Http\Controllers\Dashboard;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    /**
     *All section is showing with this function

     **/
    public function sections(){
        $allSections = Section::get();
        return view('backend.layouts.section.sections', compact('allSections'));
    }

    /**
     *It is an ajax request
     *update data if status is 0 it will make 1 or if status is 1 then it will make 0
    **/
    public function updateSectionStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Section::where('id',$data['section_id'])->update(['Status'=>$status]);
            return response()->json(['status'=>$status, 'section_id'=>$data['section_id']]);
        }
    }

    public function deleteSection($id){
        Section::find($id)->delete();
        $message = "Section Deleted Successfully !!";
        return redirect()->back()->with('success', $message);
    }
}
