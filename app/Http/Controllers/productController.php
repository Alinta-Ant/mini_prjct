<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\productmodel;
use App\Models\cartmodel;
use DB;
//use Validator;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addcategory');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addtoorder(Request $request)
    {
           
         $ordermodels=new cartmodel();
            $ordermodels->email=session('LoggedUser');
            //$request->session()->get('newmodel')['id'];
            $ordermodels->librarybookName=$request->address;
            $ordermodels->librarybookName=$request->librarybookName;
            $ordermodels->librarybookPrice=$request->librarybookPrice;
            $ordermodels->save();

            if($ordermodels)
            {
                //return redirect('product');
                
                return back()->with('success','Ordered Successfuly ');
            }
        else
        {
           
            return back()->with('fail','Something wrong,try again later');
        }
    }



    public function cartdelete($id)
    {
        $delete=DB::table('cartmodels')->where('id',$id)->delete();

        return redirect('/cartview');

    }
    public function addtocart(Request $request)
    {
           
         $cartmodels=new cartmodel();
            $cartmodels->email=session('LoggedUser');//$request->session()->get('newmodel')['id'];
            $cartmodels->librarybookName=$request->librarybookName;
            $cartmodels->librarybookPrice=$request->librarybookPrice;
            $cartmodels->save();

            if($cartmodels)
            {
                //return redirect('product');
                
                return back()->with('success','Successfuly added to cart');
            }
        else
        {
           
            return back()->with('fail','Something wrong,try again later');
        }
    }

    public function cartview()
    {
        $cats=cartmodel::all();
      return view('cartview',compact('cats'));

    }
    public function create()
    { 
        $cat=categorymodel::all();
        return view('addproduct',compact('cat'));
        
        
    }
    
    public function prodview()
    { 
        return view('productview',compact('prod'));
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'CategoryId' => 'unique:App\Models\categorymodel,CategoryId',
            'CategoryName' => 'unique:App\Models\categorymodel,CategoryName',
        ]); 

        $getcid=request('CategoryId');
        $getcname=request('CategoryName');

        $cat=new categorymodel();
        $cat->CategoryId = $getcid;
        $cat->CategoryName=$getcname;

        $cat->save();

        if($cat)
        {
            return back()->with('success','New Category has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    public function productview(Request $request)
    {
       /* $this->validate($request,[
            'CategoryId' => 'unique:App\Models\categorymodel,CategoryId',
            'CategoryName' => 'unique:App\Models\categorymodel,CategoryName',
        ]); */

        $getlibrarybookCategory=request('librarybookCategory');
        $getlibrarybookId=request('librarybookId');
        $getlibrarybookName=request('librarybookName');
        $getlibrarybookPrice=request('librarybookPrice');
        $getlibrarybookDescription=request('librarybookDescription');
        
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        $prod=new productmodel();
        $prod->librarybookCategory = $getlibrarybookCategory;
        $prod->librarybookId=$getlibrarybookId;
        $prod->librarybookName=$getlibrarybookName;
        $prod->librarybookPrice=$getlibrarybookPrice;
        $prod->librarybookDescription=$getlibrarybookDescription;
        $prod->pimage=$name;

        $prod->save();

        if($prod)
        {
            return back()->with('success','New librarybook has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    
    public function catview()
    {
        $cat=categorymodel::all();
        return view('addcategory',compact('cat'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=DB::table('productmodels')->where('id',$id)->first();
        $prod=['info'=>$row];
        return view('editview',compact('prod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'librarybookCategory'=>'required',
            'librarybookId'=>'required',
            'librarybookName'=>'required',
            'librarybookPrice'=>'required',
            'librarybookDescription'=>'required'
            
        ]);

        $updating=DB::table('productmodels')->where('id',$request->input('id'))->update([
            'librarybookCategory'=>$request->input('librarybookCategory'),
            'librarybookId'=>$request->input('librarybookId'),
            'librarybookName'=>$request->input('librarybookName'),
            'librarybookPrice'=>$request->input('librarybookPrice'),
            
            'librarybookDescription'=>$request->input('librarybookDescription')
        ]);

       
            return redirect('/productview');
      


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete=DB::table('productmodels')->where('id',$id)->delete();

        return redirect('/productview');

    }
    public function destroy($id)
    {
        $prod=productmodel::find($id);

        $prod->delete();

        return redirect('/productview');
    }


    public function historycreate()
    {
        $prod=productmodel::all();
        $history = DB::table('productmodels')->where('librarybookCategory','HISTORY')->get();
        return view('history',compact('history'));
    }
    public function sciencecreate()
    {
        $prod=productmodel::all();
        $science = DB::table('productmodels')->where('librarybookCategory','SCIENCE')->get();
        return view('science',compact('science'));
    }
    public function literaturecreate()
    {
        $prod=productmodel::all();
        $literature = DB::table('productmodels')->where('librarybookCategory','LITERATURE')->get();
        return view('literature',compact('literature'));
    }
    public function journalcreate()
    {
        $prod=productmodel::all();
        $journal= DB::table('productmodels')->where('librarybookCategory','JOURNAL')->get();
        return view('journal',compact('journal'));
    }
}
