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
        foreach ($query as $key => $value) {

            $state = strtolower($key);            

            switch ($state) {
                case "abia": return response()->json([
                    "messages" => [ ["text" => "Abia state governor is Okezie Ikpeazu."], ] ]); 
                break;
                case "adamawa": return response()->json([
                    "messages" => [ ["text" => "Adamawa state governor is Bindo Jibrilla."], ] ]); 
                break;
                case "akwa ibom": return response()->json([
                    "messages" => [ ["text" => "Akwa Ibom state governor is Udom Emmanuel."], ] ]); 
                break;
                case "anambra": return response()->json([
                    "messages" => [ ["text" => "Anambra state governor is Willie Obiano."], ] ]); 
                break;
                case "bauchi": return response()->json([
                    "messages" => [ ["text" => "Bauchi state governor is Mohammed Abdullahi Abubakar."], ] ]); 
                break;            
                case "bayelsa": return response()->json([
                    "messages" => [ ["text" => "Bayelsa state governor is Henry Dickson."], ] ]); 
                break;
                case "benue": return response()->json([
                    "messages" => [ ["text" => "Benue state governor is Samuel Ortom."], ] ]); 
                break;            
                case "borno": return response()->json([
                    "messages" => [ ["text" => "Borno state governor is Kashim Shettima."], ] ]); 
                break;            
                case "cross river": return response()->json([ 
                    "messages" => [ ["text" => "Cross River state governor is Benedict Ayade"], ] ]);
                break;
                case "delta": return response()->json([
                    "messages" => [ ["text" => "Delta state governor is Ifeanyi Okowa."], ] ]); 
                break;
                case "ebonyi": return response()->json([
                    "messages" => [ ["text" => "Ebonyi state governor is Dave Umahi."], ] ]); 
                break;
                case "edo": return response()->json([
                    "messages" => [ ["text" => "Edo state governor is Godwin Obaseki."], ] ]); 
                break;
                case "ekiti": return response()->json([
                    "messages" => [ ["text" => "Ekiti state governor is Ayo Fayose."], ] ]); 
                break;
                case "enugu": return response()->json([
                    "messages" => [ ["text" => "Enugu state governor is Ifeanyi Ugwuanyi."], ] ]); 
                break;
                case "gombe": return response()->json([
                    "messages" => [ ["text" => "Gombe state governor is Ibrahim Hassan Dankwambo."], ] ]); 
                break;
                case "imo": return response()->json([
                    "messages" => [ ["text" => "Imo state governor is Owelle Rochas Okorocha."], ] ]); 
                break;
                case "jigawa": return response()->json([
                    "messages" => [ ["text" => "Jigawa state governor is Badaru Abubakar."], ] ]); 
                break;
                case "kaduna": return response()->json([
                    "messages" => [ ["text" => "Kaduna state governor is Nasir Ahmad el-Rufai."], ] ]); 
                break;
                case "kano": return response()->json([
                    "messages" => [ ["text" => "Kano state governor is Abdullahi Umar Ganduje."], ] ]); 
                break;
                case "katsina": return response()->json([
                    "messages" => [ ["text" => "Katsina state governor is Aminu Bello Masari."], ] ]); 
                break;
                case "kebbi": return response()->json([
                    "messages" => [ ["text" => "Kebbi state governor is Abubakar Atiku Bagudu."], ] ]); 
                break;
                case "kogi": return response()->json([
                    "messages" => [ ["text" => "Kogi state governor is Yahaya Bello."], ] ]); 
                break;
                case "kwara": return response()->json([
                    "messages" => [ ["text" => "Kwara state governor is Adbulfatah Ahmed."], ] ]); 
                break;
                case "lagos": return response()->json([
                    "messages" => [ ["text" => "Lagos state governor is Akinwunmi Ambode."], ] ]); 
                break;
                case "nasarawa": return response()->json([
                    "messages" => [ ["text" => "Nasarawa state governor is Umaru Tanko Al-Makura."], ] ]); 
                break;
                case "niger": return response()->json([
                    "messages" => [ ["text" => "Niger state governor is Abubakar Sani Bello."], ] ]); 
                break;
                case "ogun": return response()->json([
                    "messages" => [ ["text" => "Ogun state governor is Ibikunle Oyelaja Amosun."], ] ]); 
                break;
                case "ondo": return response()->json([
                    "messages" => [ ["text" => "Ondo state governor is Oluwarotimi Odunayo Akeredolu."], ] ]); 
                break;
                case "osun": return response()->json([
                    "messages" => [ ["text" => "Osun state governor is Rauf Aregbesola."], ] ]); 
                break;
                case "oyo": return response()->json([
                    "messages" => [ ["text" => "Oyo state governor is Isiaka Abiola Ajimobi."], ] ]); 
                break;
                case "plateau": return response()->json([
                    "messages" => [ ["text" => "Plateau state governor is Simon Lalong."], ] ]); 
                break;
                case "rivers": return response()->json([ 
                    "messages" => [ ["text" => "Rivers state governor is Ezenwo Nyesom Wike"], ]  ]); 
                break;
                case "sokoto": return response()->json([
                    "messages" => [ ["text" => "Sokoto state governor is Aminu Waziri Tambuwal."], ] ]); 
                break;
                case "taraba": return response()->json([
                    "messages" => [ ["text" => "Taraba state governor is Arch. Darius Ishaku."], ] ]); 
                break;
                case "yobe": return response()->json([
                    "messages" => [ ["text" => "Yobe state governor is Ibrahim Geidam."], ] ]); 
                break;
                case "zamfara": return response()->json([
                    "messages" => [ ["text" => "Zamfara state governor is Abdul-Aziz Yari Abubakar."], ] ]); 
                break;
                case "abuja": return response()->json([
                    "messages" => [ ["text" => "The federal capital minister is Mohammed Bello."], ] ]); 
                break;
                default: return response()->json([ "messages" => ["text" => "Which state do you hail from?"] ]);
            }
        }

    }
}
