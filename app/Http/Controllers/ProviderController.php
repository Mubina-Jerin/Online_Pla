<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\User;
use App\AppUser;
use DB;
use Illuminate\Support\Facades\Session;
//use App\Http\HomeController;
/**
* 
*/
class ProviderController extends Controller
{
	
	function index(){

      
    $singleQuery=DB::select('select * from provider');           
    return view('provider.providerLanding',['provider'=>$singleQuery,'error'=>""]);
		
  }
 

  function providerSignup(Request $request){
     
    $loginQuery=DB::select('select * from login where loginID= ?',[$request->phoneNumber]);
    if($loginQuery){
      $singleQuery=DB::select('select * from provider');           
      return view('provider.providerLanding',['provider'=>$singleQuery,'error'=>"ব্যবহারকারীর ফোন নম্বর ইতিমধ্যে বিদ্যমান"]);
        }
    else{
      $userType="provider";
      $userArray = array('user_name' => $request->phoneNumber,'user_type'=> 'provider', 'role_id'=>'1');
      DB::table('user')->insert($userArray);
      $pdo = DB::connection()->getPdo();
      $last_id=$pdo->lastInsertId();
      //var_dump($last_id);
      if($request->is_broker=="true"){
        $val1=true;
        $val2=false;
      }
        else{
        $val1=false;
        $val2=true;
        }
        $nameArray=explode(' ',$request->userName);
        $cnt=sizeof($nameArray);
        $i=0;
          if(sizeof($nameArray)>0){
            $firstName="";
            foreach($nameArray as $row){
              $firstName=$firstName." ".$row;
              if($i==$cnt-1){
              break;
              }
              $i++;
            }           
            $lastName=$nameArray[$cnt-1];
          }
          else{
            $firstName=$nameArray[0];
            $lastName=null;
          }
      $providerArray=array('user_id'=>$last_id,'first_name'=>$firstName,'last_name'=>$lastName, 'address'=>$request->address,'phone_number'=>$request->phoneNumber,'is_broker'=>$val1,'is_sourcer'=>$val2,'bloger_id'=>null); 

      $result=DB::table('provider')->insert($providerArray);
      $last_id1=$pdo->lastInsertId();
      
      $singleQuery=DB::select('select * from provider where id = ?', [$last_id1]);
      //var_dump($singleQuery);
      //exit();
      if($result){
               $uniqueToken=$request->phoneNumber;
               $resultLogin=DB::table('login')->insert(array('loginID'=>$uniqueToken,'password'=>$request->pwd,'user_id'=>$last_id));
           }

       if($resultLogin){
            //var_dump($singleQuery);
            //exit();
           
            Session::put('id', $last_id1);
            Session::put('nursery_id', null);
            return view('provider.providerProfile', ['user' => $singleQuery,'loginID'=> $uniqueToken]);
            //return redirect()->route('customer.userProfile')->with([$singleQuery,$uniqueToken]);
           // $this->showUserProfile($singleQuery,$uniqueToken);
                   
             }


    }
         }

   function nurseryCreate(Request $request){
    $provider_id=$request->session->get('id');
    $nurseryArray=array('nursery_name' => $request->nursery_name,'description'=>$request->nursery_desc,'user_id'=>$provider_id);
    
      $result=DB::table('nursery')->insert($nurseryArray);
      $pdo = DB::connection()->getPdo();      
       $last_id=$pdo->lastInsertId();
       Session::put('nursery_id',$last_id);
      $this->nurseryLanding($last_id);
      //return view('provider.nurseryPage', ['nursery_id'=>$last_id]);
   }

   function nurseryLanding(Request $request,$id){

    if($request->session->get('nursery_id')){
      $id=$request->session->get('nursery_id');
      $singleQuery=DB::select('select * from nursery where id = ?', [$id]);
      return view('provider.nurseryPage', ['nursery'=>$singleQuery]);
      }
      else{
        $singleQuery=DB::select('select * from nursery where id = ?', [$id]);
        return view('provider.nurseryPage', ['nursery'=>$singleQuery]);
      }
   }

   function addPlant(Request $request){

    $plantArray=array('plant_name'=>$request->plant_name,'plant_type'=>$request->plant_type,'preferred_season'=>$request->preferred_season,'plant_info'=>$request->plant_info,'cultivation_tips'=>$request->$cultivation_tips);
       }

    function addMaterial(Request $request){

    
   }

   

   function editDetails(Request $request,$id){
    $last_id1=$request->session->get('id');
         
    $singleQuery=DB::select('select * from provider where id = ?', [$last_id1]);

    return view('provider.providerProfile', ['user' => $singleQuery,'loginID'=> $uniqueToken]);
  }







}

?>