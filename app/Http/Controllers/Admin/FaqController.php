<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FaqModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FaqModel::latest()->paginate(10);
        return view('admin.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question'=>'required',
            'answer'=>'required'
        ]);
        $data=[
            'question'=>$request->question,
            'answer'=>$request->answer,
            'user_id'=>Auth::user()->id
        ];
        FaqModel::create($data);
        return redirect()->route('faq.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faq=FaqModel::where('id',$id)->first();
        return view('admin.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        FaqModel::where('id',$id)->update([
            'question'=>$request->question,
            'answer'=>$request->answer
        ]);
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FaqModel::where('id',$id)->delete();
        return redirect()->route('faq.index');
    }
}


// <?php

// namespace App\Http\Controllers\admin;

// use App\Http\Controllers\Controller;
// use App\Models\FaqModel;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

// class FaqController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $faqs=FaqModel::all();
//         return view('admin.faq.index', compact('faqs'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('admin.faq.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         // return $request->all();
//         $data=[
//             'question'=>$request->question,
//             'answer'=>$request->answer,
//             'user_id'=>Auth::user()->id,

//         ];

//         FaqModel::create($data);

//         return redirect()->route('faq.index');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         $faq=FaqModel::where('id',$id)->first();
//         return view('admin.faq.edit',compact('faq'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         // return $request->all();
//         FaqModel::where('id', $id)->update([
//             'question'=>$request->question,
//             'answer'=>$request->answer,
//         ]);
//         return redirect()->route('faq.index');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         FaqModel::where('id', $id)->delete();
//         return redirect()->route('faq.index');
//     }
// }
