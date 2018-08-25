<?php

namespace App\Http\Controllers;

use App\Bounty;
use Illuminate\Http\Request;

class BountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return redirect()->route('bounty.register');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('bounty.register');
        }

        $validatedData = $request->validate([
            // 'fullname' => 'required|max:255',
            'email' => 'required|string|email|max:255',
            'work_link' => 'max:255',
            'eth_address' => 'max:255',
         ]);

        $success = $this->create($request);
        if($success)
            return redirect()->back()->with('message-success', "Let's process your request.");
        return redirect()->back()->with('message-error', 'Try again!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){   
        // Airdrop::create('')
        try{
            $bounty = new Bounty;
            // $airdrop->fullname = $request->fullname;
            $bounty->email = $request->email;
            $bounty->work_link = $request->work_link;
            $bounty->eth_address = $request->eth_address;
            $bounty->save();  
            return true; 
        }catch(Exception $e){
            return false;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bounty  $bounty
     * @return \Illuminate\Http\Response
     */
    public function show(Bounty $bounty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bounty  $bounty
     * @return \Illuminate\Http\Response
     */
    public function edit(Bounty $bounty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bounty  $bounty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bounty $bounty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bounty  $bounty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bounty $bounty)
    {
        //
    }
}
