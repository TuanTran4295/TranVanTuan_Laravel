<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    //create
    public function modelCreate(){
        $photo = "";
        //neu co anh thi update anh
        if(Request::hasFile("photo")){
            //Request::file("photo")->getClientOriginalName() lay ten file
            $photo = time()."_".Request::file("photo")->getClientOriginalName();
            //thuc hien upload anh
            Request::file("photo")->move("upload/tasks",$photo);
        }
        //create ban ghi
        DB::table("task")->insert(["photo"=>$photo]);    
    }
}
