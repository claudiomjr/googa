<?php

namespace App\Http\Controllers;

use App\Airdrop;
use Illuminate\Http\Request;

class AirdropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "TUDO ok";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('airdrops/register');
        }

        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:airdrops',
            'twitter_profile' => 'max:255',
            'telegram_profile' => 'max:255',
            'reddit_profile' => 'max:255',
            'medium_profile' => 'max:255',
            'bitcointalk_profile' => 'max:255',
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
            $airdrop = new Airdrop;
            $airdrop->fullname = $request->fullname;
            $airdrop->email = $request->email;
            $airdrop->twitter_profile = $request->twitter_profile;
            $airdrop->telegram_profile = $request->telegram_profile;
            $airdrop->reddit_profile = $request->reddit_profile;
            $airdrop->medium_profile = $request->medium_profile;
            $airdrop->bitcointalk_profile = $request->bitcointalk_profile;
            $airdrop->eth_address = $request->eth_address;
            $airdrop->save();  
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
     * @param  \App\Airdrop  $airdrop
     * @return \Illuminate\Http\Response
     */
    public function show(Airdrop $airdrop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Airdrop  $airdrop
     * @return \Illuminate\Http\Response
     */
    public function edit(Airdrop $airdrop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Airdrop  $airdrop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airdrop $airdrop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Airdrop  $airdrop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airdrop $airdrop)
    {
        //
    }
}
