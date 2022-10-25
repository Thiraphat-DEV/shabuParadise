?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\sale;

class Website extends Controller
{
    
        public function Website ()
        {
            $sale =sale::select("price","quantity")->get();
            $answer =['price','quantity'];
            foreach($sale as $key=> $value
            {

                $answer[++$key]=[$value->price,$value->quantity];

            } 
            return view ('Website',compact('answer'));
        }







        // $result=DB::select(DB::raw("SELECT COUNT(*) as total_Title, 
        // Title FROM products GROUP BY description"));
        // // dd($result);
        // $chartData="";
        // foreach($result as $list){
        //     $chartData.="['".$list->description."',     ".
        //     $list->total_description.",";
        // }
        // $arr['chartData']=rtrim($chartData,",");
        // echo $chartData;
        // return view('chart',$arr);
    }
}