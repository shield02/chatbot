<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Conversation extends Controller
{
    //

    public function __constructor() {

    }

    public function date() {
        return response()->json([
            "messages" => [
                ["text" => "Today's date is " . Carbon::now()],
            ]
        ]);
    }

    public function governors(Request $request) {

        $query = $request->query();
        foreach ($query as $key => $state) {
       
            switch ($key) {
                case "Abia": return response()->json([
                    "messages" => [ ["text" => "Abia state governor is Okezie Ikpeazu."], ] ]); 
                break;
                case "Adamawa": return response()->json([
                    "messages" => [ ["text" => "Adamawa state governor is Bindo Jibrilla."], ] ]); 
                break;
                case "Akwa Ibom": return response()->json([
                    "messages" => [ ["text" => "Akwa Ibom state governor is Udom Emmanuel."], ] ]); 
                break;
                case "Anambra": return response()->json([
                    "messages" => [ ["text" => "Anambra state governor is Willie Obiano."], ] ]); 
                break;
                case "Bauchi": return response()->json([
                    "messages" => [ ["text" => "Bauchi state governor is Mohammed Abdullahi Abubakar."], ] ]); 
                break;            
                case "Bayelsa": return response()->json([
                    "messages" => [ ["text" => "Bayelsa state governor is Henry Dickson."], ] ]); 
                break;
                case "Benue": return response()->json([
                    "messages" => [ ["text" => "Benue state governor is Samuel Ortom."], ] ]); 
                break;            
                case "Borno": return response()->json([
                    "messages" => [ ["text" => "Borno state governor is Kashim Shettima."], ] ]); 
                break;            
                case "Cross River": return response()->json([ 
                    "messages" => [ ["text" => "Cross River state governor is Benedict Ayade"], ] ]);
                break;
                case "Delta": return response()->json([
                    "messages" => [ ["text" => "Delta state governor is Ifeanyi Okowa."], ] ]); 
                break;
                case "Ebonyi": return response()->json([
                    "messages" => [ ["text" => "Ebonyi state governor is Dave Umahi."], ] ]); 
                break;
                case "Edo": return response()->json([
                    "messages" => [ ["text" => "Edo state governor is Godwin Obaseki."], ] ]); 
                break;
                case "Ekiti": return response()->json([
                    "messages" => [ ["text" => "Ekiti state governor is Ayo Fayose."], ] ]); 
                break;
                case "Enugu": return response()->json([
                    "messages" => [ ["text" => "Enugu state governor is Ifeanyi Ugwuanyi."], ] ]); 
                break;
                case "Gombe": return response()->json([
                    "messages" => [ ["text" => "Gombe state governor is Ibrahim Hassan Dankwambo."], ] ]); 
                break;
                case "Imo": return response()->json([
                    "messages" => [ ["text" => "Imo state governor is Owelle Rochas Okorocha."], ] ]); 
                break;
                case "Jigawa": return response()->json([
                    "messages" => [ ["text" => "Jigawa state governor is Badaru Abubakar."], ] ]); 
                break;
                case "Kaduna": return response()->json([
                    "messages" => [ ["text" => "Kaduna state governor is Nasir Ahmad el-Rufai."], ] ]); 
                break;
                case "Kano": return response()->json([
                    "messages" => [ ["text" => "Kano state governor is Abdullahi Umar Ganduje."], ] ]); 
                break;
                case "Katsina": return response()->json([
                    "messages" => [ ["text" => "Katsina state governor is Aminu Bello Masari."], ] ]); 
                break;
                case "Kebbi": return response()->json([
                    "messages" => [ ["text" => "Kebbi state governor is Abubakar Atiku Bagudu."], ] ]); 
                break;
                case "Kogi": return response()->json([
                    "messages" => [ ["text" => "Kogi state governor is Yahaya Bello."], ] ]); 
                break;
                case "Kwara": return response()->json([
                    "messages" => [ ["text" => "Kwara state governor is Adbulfatah Ahmed."], ] ]); 
                break;
                case "Lagos": return response()->json([
                    "messages" => [ ["text" => "Lagos state governor is Akinwunmi Ambode."], ] ]); 
                break;
                case "Nasarawa": return response()->json([
                    "messages" => [ ["text" => "Nasarawa state governor is Umaru Tanko Al-Makura."], ] ]); 
                break;
                case "Niger": return response()->json([
                    "messages" => [ ["text" => "Niger state governor is Abubakar Sani Bello."], ] ]); 
                break;
                case "Ogun": return response()->json([
                    "messages" => [ ["text" => "Ogun state governor is Ibikunle Oyelaja Amosun."], ] ]); 
                break;
                case "Ondo": return response()->json([
                    "messages" => [ ["text" => "Ondo state governor is Oluwarotimi Odunayo Akeredolu."], ] ]); 
                break;
                case "Osun": return response()->json([
                    "messages" => [ ["text" => "Osun state governor is Rauf Aregbesola."], ] ]); 
                break;
                case "Oyo": return response()->json([
                    "messages" => [ ["text" => "Oyo state governor is Isiaka Abiola Ajimobi."], ] ]); 
                break;
                case "Plateau": return response()->json([
                    "messages" => [ ["text" => "Plateau state governor is Simon Lalong."], ] ]); 
                break;
                case "Rivers": return response()->json([ 
                    "messages" => [ ["text" => "Rivers state governor is Ezenwo Nyesom Wike"], ]  ]); 
                break;
                case "Sokoto": return response()->json([
                    "messages" => [ ["text" => "Sokoto state governor is Aminu Waziri Tambuwal."], ] ]); 
                break;
                case "Taraba": return response()->json([
                    "messages" => [ ["text" => "Taraba state governor is Arch. Darius Ishaku."], ] ]); 
                break;
                case "Yobe": return response()->json([
                    "messages" => [ ["text" => "Yobe state governor is Ibrahim Geidam."], ] ]); 
                break;
                case "Zamfara": return response()->json([
                    "messages" => [ ["text" => "Zamfara state governor is Abdul-Aziz Yari Abubakar."], ] ]); 
                break;
                case "Abuja": return response()->json([
                    "messages" => [ ["text" => "The federal capital minister Mohammed Bello."], ] ]); 
                break;
                default: return response()->json([ "messages" => ["text" => "Which state do you hail from?"] ]);
            }
        }

    }
}
