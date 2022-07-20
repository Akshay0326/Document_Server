<?php

namespace App\Http\Controllers;
use App\VSE;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\File;


use App\Models\Product;




class TaskController extends Controller


{
   public function index()
   {
   	
   	// return view('management');
      return view('product');
   }

    public function uploadpage()
   {
   	
   	return view('product');

   }

     public function store(Request $request)
   {

   		$data=new product();
   	
   	  
			$file=$request->file;
		        
	$filename=time().'.'.$file->getClientOriginalExtension();

		        $request->file->move('assets',$filename);

		        $data->file=$filename;


		        $data->name=$request->name;
		        $data->description=$request->description;

		        $data->save();
		        return redirect()->back();



   }


   public function show()
   {

   	$data=product::all();
   	return view('showproduct',compact('data'));
   }


      public function download(Request $request,$file)
   {

   	
return response()->download(public_path('assets/'.$file));
   }



   public function view($id)
   {
   	$data=product::find($id);

   	return view('viewproduct',compact('data'));
      

   }
  
  public function showproduct(){
    $data=product::all();
    return view('showproduct',['products'=>$data]);
 }
 
 public function delete($id)
   {
   	$data=product::find($id);
      if ($data != null){
         $data->delete();
         
   	 return '<script type="text/javascript">
alert("Record DELETED successfully.");
window.location.href = "/show";
</script>';
      }
      // return redirect('list')->
          // $data->delete();
   }
   public function redirectTo(){
      return ('/showproduct');     
  }  
   // protected $redirectTo ='/showproduct';



   // edit
             // function showData($id){
             //   $data= Product::find($id);
             //   return view('/edit' , ['data'=>$data]);
             // }

  public function showData($id){
     $data= Product::find($id);
     return view('/edit' , compact('data'));
   }



  public function update(Request $req )
  {
      // commented on 4-7-2022   (one-comment)

// function edit(Request $req){
   $return = $req->id;
   // dd($return);
   $data=Product::where('id',$return)->first()->save();
   // dd($data);
   $data->update()->fill($return->all())->save();
   // $data->name=$req->name;
   // $data->description=$req->description;
   // $data->file=$req->file;
   // $data-> update();
   return redirect('/showproduct');
      // return $req->input();

   // commented on 4-7-2022   


  

//   $data = Product::find($id);
    
//   $file=$request->file;
		        
//   $filename=time().'.'.$file->getClientOriginalExtension();

//              $request->file->move('assets',$filename);

             
//              $data->file=$filename;
//              $data->name=$request->name;
//              $data->description=$request->description;

//              $data->save();
//              return redirect()->back();


   }
}

// function edit(Request $req){
//    $return = $req->id;
//    // dd($return);
//    $data=Product::where('id',$return)->first()->save();
//    // dd($data);
//    $data->update()->fill($return->all())->save();
//    // $data->name=$req->name;
//    // $data->description=$req->description;
//    // $data->file=$req->file;
//    // $data-> update();
//    return redirect('/showproduct');
//       // return $req->input();