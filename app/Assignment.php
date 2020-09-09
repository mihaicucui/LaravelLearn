<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    public function complete(){
        $this->completed=true;
        $this->save();
    }

//    public function testMe()
//    {
//        echo 2;
//        return 123;
//    }
}
