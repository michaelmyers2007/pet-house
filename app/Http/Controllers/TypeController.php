<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use App\animal;
use App\item;
use App\behavior;
use App\accessory;
use App\food;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal=animal::all();

        return view('backend/type',compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function fish()

    {   
         
    $type=DB::table('types')
    ->join('animals','types.animal_id','=','animals.id')
    ->join('items','types.id','=','items.type_id')
    ->select('types.*','items.*')
    ->where('animals.name','=','fish')
    ->get();
    return view('frontend/fish',compact('type'));     
        
        
    }

    public function dog()
    {
        $type=DB::table('types')
    ->join('animals','types.animal_id','=','animals.id')
    ->join('items','types.id','=','items.type_id')
    ->select('types.*','items.*')
    ->where('animals.name','=','dog')
    ->get();
    return view('frontend/dog',compact('type'));   
    }
      public function cat()
    {
        $type=DB::table('types')
    ->join('animals','types.animal_id','=','animals.id')
    ->join('items','types.id','=','items.type_id')
    ->select('types.*','items.*')
    ->where('animals.name','=','cat')
    ->get();
    return view('frontend/cat',compact('type')); 
    }
      public function bird()
    {
        $type=DB::table('types')
    ->join('animals','types.animal_id','=','animals.id')
    ->join('items','types.id','=','items.type_id')
    ->select('types.*','items.*')
    ->where('animals.name','=','bird')
    ->get();

    return view('frontend/bird',compact('type')); 
    }
      public function creeper()
    {
   $type=DB::table('types')
    ->join('animals','types.animal_id','=','animals.id')
    ->join('items','types.id','=','items.type_id')
    ->select('types.*','items.*',)
    ->where('animals.name','!=','fish')
    ->where('animals.name','!=','dog')
    ->where('animals.name','!=','cat')
    ->where('animals.name','!=','bird')
    ->get();
    
    return view('frontend/creeper',compact('type')); 
    }

    public function detail($id)
    {
        return view('frontend/animal_detail');
    }


    public function getsearch(Request $request)
    {
        $keyword=$request->get('q');
        $query=Type::where('name','like','%'.$keyword.'%')->get();
        $accessory=Accessory::where('name','like','%'.$keyword.'%')->get();
        $food=Food::where('name','like','%'.$keyword.'%')->get();
        
         if(count($query) > 0) {

         return view('backend/selfservice',compact('query'));     
         
          }
          if (count($accessory)>0) {
              return view('backend/selfservice',compact('accessory'));   
          }
          if(count($food)>0){
            return view('backend/selfservice',compact('food'));
          }
    else{
           return view('backend/selfservice');
    }
    
    }

    public function find(Request $request)
    {
           $keyword=$request->get('w');
        $query=Type::where('name','like','%'.$keyword.'%')->get();
        $accessory=Accessory::where('name','like','%'.$keyword.'%')->get();
        $food=Food::where('name','like','%'.$keyword.'%')->get();
        
        
         if(count($query) > 0) {

         return view('frontend/selfservice',compact('query'));     
         
          }
          if (count($accessory)>0) {
              return view('frontend/selfservice',compact('accessory'));   
          }
          if(count($food)>0){
            return view('frontend/selfservice',compact('food'));
          }
    else{
           return view('frontend/selfservice');
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        $request->validate([
            'photo' => 'required|',
                       
        ]);
        //
        //Upload files
        // if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = $photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name);
            $photo = '/storage/image/'.$name;
          Type::create([
            'animal_id' => request('category_id'),
          'name'=>request('name'),
          "photo" => $photo,
          
          
         

        ]);
       

          return redirect('/item');


        
    }

    public function test($id)
    {
        $type=Type::find($id);
        $test=Type::all();
        return view('frontend/test1',compact('type','test'));
    }

    public function display($id)
    {
        $type=Type::find($id);
        
        return view ('frontend/detail',compact('type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type=Type::find($id);
        
        return view('backend/detail',compact('type'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $type=Type::find($id);
        $animal=Animal::all();
        return view('backend/update',compact('type','animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     /*   dd($request);*/
              if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=$photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;
           }else{
            $photo=request('oldimage');
           }
           //Update
       $type=Type::find($id);
       $type->animal_id=request('category_id');
       $type->name=request('name');
       $type->photo=$photo;
       $type->item->price=request('price');
       $type->item->codeno=request('code');
       $type->behavior->description=request('desc');
    
  
       $type->save();
       $type->item->save();
       $type->behavior->save();

       
       return redirect('/')->with('success', 'Booking has been created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
         $type=Type::find($id);
        
        $type->item->delete();
         $type->behavior->delete();
        $type->delete();
        

        return redirect('/');
    }
}
