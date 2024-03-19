<?php

namespace App\Http\Controllers;

use App\Models\Plainte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class PlainteController extends Controller
{
    //

    // public function fetch()
    // {
    //     $response = Http::get('https://kobo.humanitarianresponse.info/api/v2/assets/a39nkP5p4YpjVEBku2yWB8/data.json?fields=["start","end","_index"]', [
    //         'apiKey' => 'token 415bcc00288418e78156e95d90352b1a119b1b91',
    //         'limit' => "3",
    //     ]);
    //     $quizzes = json_decode($response->body());


    //     foreach($quizzes as $quiz){
    //             $question = new Plainte();
    //             $question->question = $quiz->question;
    //             $question->answer_a = $quiz->answers->answer_a;
    //             $question->answer_b = $quiz->answers->answer_b;
    //             $question->answer_c = $quiz->answers->answer_c;
    //             $question->answer_d = $quiz->answers->answer_d;
    //             $question->save();
    //     }
    //     return "DONE";
    // }


 public function convert_to_UTF8($dat)
   {

      if (is_string($dat)) {
         return utf8_encode($dat);
      } elseif (is_array($dat)) {
         $ret = [];
         foreach ($dat as $i => $d) $ret[ $i ] = convert_to_UTF8($d);

         return $ret;
      } elseif (is_object($dat)) {
         foreach ($dat as $i => $d) $dat->$i = convert_to_UTF8($d);

         return $dat;
      } else {
         return $dat;
      }
   }

// public function cleantext($string) {
//    	    $ch0 = array(
//             "'"=>"\'",
//             "\\"=>",",
//             "/"=>",",

//    	    );
//         $str = strtr($str,$ch0);
//         return $str;
//     }


    public function callApiKobo(){
        $ch ="";
        $ch = curl_init();
        $kobo_url = "";
        //$kobo_url =  'https://kobo.humanitarianresponse.info/api/v2/assets/a4oyR7eNLpExaEFPuuEFMU/data.json';
      //  $kobo_url =  'https://kobo.humanitarianresponse.info/api/v2/assets/a4oyR7eNLpExaEFPuuEFMU/data.json?fields=["today","info_formulaire/operateur","info_formulaire/composante","identif_plaignant/nom_plaignant","identif_plaignant/phone_number","identif_plaignant/sexe","identif_plaignant/code_id","localisation/province","localisation/territoire_ville","localisation/secteur_district","localisation/groupement_commune","localisation/village_quartier","enregistrement_mgp/code_long","info_mgp/categorie_plainte","info_mgp/nature_plainte","enregistrement_mgp/description_plainte","enregistrement_mgp/personne_impliquee","enregistrement_mgp/date_incident","info_formulaire/localisation_incident","enregistrement_mgp/code_court","enregistrement_mgp/round_process","enregistrement_mgp/note_id","enregistrement_mgp/proposition_1","enregistrement_mgp/action_1","enregistrement_mgp/autorite_cloture","enregistrement_mgp/avis_call_center","enregistrement_mgp/feed_back_plainte","enregistrement_mgp/statut_plainte","enregistrement_mgp/code_cgp"]';
      //  $kobo_url =  'https://kobo.humanitarianresponse.info/api/v2/assets/aFX5rbjdpJqtb9k6UrdSEd/data.json?fields=["today","info_formulaire/operateur","info_formulaire/composante","iidentif_plaignant/nom_plaignant","identif_plaignant/phone_number","identif_plaignant/sexe","identif_plaignant/code_id","localisation/province","localisation/territoire_ville","localisation/secteur_district","localisation/groupement_commune","localisation/village_quartier","enregistrement_mgp/code_long","info_mgp/categorie_plainte","info_mgp/nature_plainte","enregistrement_mgp/description_plainte","enregistrement_mgp/personne_impliquee","info_formulaire/date_incident","info_formulaire/localisation_incident","enregistrement_mgp/code_court","enregistrement_mgp/round_process","enregistrement_mgp/note_id","enregistrement_mgp/proposition_1","enregistrement_mgp/action_1","enregistrement_mgp/autorite_cloture","enregistrement_mgp/avis_call_center","enregistrement_mgp/feed_back_plainte","enregistrement_mgp/statut_plainte","enregistrement_mgp/code_cgp"]';
          $kobo_url = 'https://kobo.humanitarianresponse.info/api/v2/assets/a4oyR7eNLpExaEFPuuEFMU/data.json?fields=["identif_plaignant/phone_number","enregistrement_mgp/code_court","enregistrement_mgp/code_long","start","end","info_formulaire/heure_enquete","info_formulaire/operateur","info_formulaire/composante","identif_plaignant/bene_oui_non","identif_plaignant/nom_plaignant","identif_plaignant/code_id","identif_plaignant/sexe","localisation/province","localisation/territoire_ville","localisation/secteur_district","localisation/groupement_commune","localisation/village_quartier","info_mgp/nature_plainte","info_mgp/categorie_plainte","enregistrement_mgp/personne_impliquee","enregistrement_mgp/date_incident","enregistrement_mgp/localisation_incident","enregistrement_mgp/description_plainte","enregistrement_mgp/input_operateur","enregistrement_mgp/round_process","enregistrement_mgp/statut_plainte","enregistrement_mgp/code_cgp","enregistrement_mgp/proposition_1","enregistrement_mgp/action_1","enregistrement_mgp/autorite_cloture","enregistrement_mgp/avis_call_center","enregistrement_mgp/feed_back_plainte","enregistrement_mgp/statut_final","_id","_uuid","_submission_time","_submitted_by"]';

        try {
            curl_setopt($ch, CURLOPT_URL, $kobo_url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Cache-Control: no-cache",
                // "Authorization: Token cecfb6a36320cd4d9259608fd4560f2de36afb4c",
                "Authorization: Token cecfb6a36320cd4d9259608fd4560f2de36afb4c",
                "content-type: application/json ",
                "Accept: */*"	));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $resapimarta = utf8_decode(curl_exec($ch));


            if (curl_errno($ch)) {
                echo 'Curl error: ' . curl_error($ch);
                die();
            }

            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if($http_code == intval(200)){
                  // print 'DATA FROM MARTA OK';
            }
            else{
                echo "Ressource introuvable : " . $http_code;

            }
        } catch (\Throwable $th) {
            throw $th;

        } finally {

                curl_close($ch);
                return $resapimarta;
            }
        }



     public function call(){
            $json = $this->callApiKobo();
            $json = $this->convert_to_UTF8($json);
            $arrayjson = json_decode($json,true);


           // var_dump($arrayjson);

            $error_msg =json_last_error_msg();
            $error_last = json_last_error();

            //print $error_msg;
            //print $error_last;

           //global $db;
            $sql_insdata = '';
            $dataexport = array();
            $data = array();
            $row = array();
       if ($arrayjson){

                $num = $arrayjson["count"];

               // dd($num);

                $i=0;
                $errors_insert = 0;
                $insertion_ok =0;
                $errors_insert_details ='';

            try {

                    while ($i<$num){

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/code_court"])){$Id_plainte = $arrayjson["results"][$i]["enregistrement_mgp/code_court"];}else{$Id_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/code_long"])){$ticket = $arrayjson["results"][$i]["enregistrement_mgp/code_long"];}else{$ticket="";}

                                        if(isset($arrayjson["results"][$i]["start"])){$start_encodage = $arrayjson["results"][$i]["start"];}else{$start_encodage="";}

                                        if(isset($arrayjson["results"][$i]["end"])){$end_encodage = $arrayjson["results"][$i]["end"];}else{$end_encodage="";}

                                        if(isset($arrayjson["results"][$i]["info_formulaire/heure_enquete"])){$time_encodage = $arrayjson["results"][$i]["info_formulaire/heure_enquete"];}else{$time_encodage="";}

                                        if(isset($arrayjson["results"][$i]["info_formulaire/operateur"])){$Operateur = $arrayjson["results"][$i]["info_formulaire/operateur"];}else{$Operateur="";}

                                        if(isset($arrayjson["results"][$i]["info_formulaire/composante"])){$Composante = $arrayjson["results"][$i]["info_formulaire/composante"];}else{$Composante="";}

                                        if(isset($arrayjson["results"][$i]["identif_plaignant/bene_oui_non"])){$Benef_yes_No_Question = $arrayjson["results"][$i]["identif_plaignant/bene_oui_non"];}else{$Benef_yes_No_Question="";}

                                        if(isset($arrayjson["results"][$i]["identif_plaignant/nom_plaignant"])){$Nom_prenom_plaignant = $arrayjson["results"][$i]["identif_plaignant/nom_plaignant"];}else{$Nom_prenom_plaignant="";}

                                        if(isset($arrayjson["results"][$i]["identif_plaignant/code_id"])){$Phone_or_id_identification = $arrayjson["results"][$i]["identif_plaignant/code_id"];}else{$Phone_or_id_identification="";}

                                        if(isset($arrayjson["results"][$i]["identif_plaignant/phone_number"])){$Phone_plaignant = $arrayjson["results"][$i]["identif_plaignant/phone_number"];}else{$Phone_plaignant="";}

                                        if(isset($arrayjson["results"][$i]["identif_plaignant/sexe"])){$Sexe = $arrayjson["results"][$i]["identif_plaignant/sexe"];}else{$Sexe="";}

                                        if(isset($arrayjson["results"][$i]["localisation/province"])){$Province = $arrayjson["results"][$i]["localisation/province"];}else{$Province="";}

                                        if(isset($arrayjson["results"][$i]["localisation/territoire_ville"])){$Territoire_ville = $arrayjson["results"][$i]["localisation/territoire_ville"];}else{$Territoire_ville="";}

                                        if(isset($arrayjson["results"][$i]["localisation/secteur_district"])){$Secteur_district = $arrayjson["results"][$i]["localisation/secteur_district"];}else{$Secteur_district="";}

                                        if(isset($arrayjson["results"][$i]["localisation/groupement_commune"])){$Groupement_commune = $arrayjson["results"][$i]["localisation/groupement_commune"];}else{$Groupement_commune="";}

                                        if(isset($arrayjson["results"][$i]["localisation/village_quartier"])){$Village_quartier = $arrayjson["results"][$i]["localisation/village_quartier"];}else{$Village_quartier="";}

                                        if(isset($arrayjson["results"][$i]["info_mgp/nature_plainte"])){$Type_plainte = $arrayjson["results"][$i] ["info_mgp/nature_plainte"];}else{$Type_plainte="";}

                                        if(isset($arrayjson["results"][$i]["info_mgp/categorie_plainte"])){$Categorie_plainte = $arrayjson["results"][$i] ["info_mgp/categorie_plainte"];}else{$Categorie_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/personne_impliquee"])){$Personne_impliquee = $arrayjson["results"][$i]["enregistrement_mgp/personne_impliquee"];}else{$Personne_impliquee="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/date_incident"])){$Date_incident = $arrayjson["results"][$i]["enregistrement_mgp/date_incident"];}else{$Date_incident="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/localisation_incident"])){$Localisation_incident = $arrayjson["results"][$i]["enregistrement_mgp/localisation_incident"];}else{$Localisation_incident="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/description_plainte"])){$Description_plainte = $arrayjson["results"][$i]["enregistrement_mgp/description_plainte"];}else{$Description_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/input_operateur"])){$Commentaire_operateur = $arrayjson["results"][$i]["enregistrement_mgp/input_operateur"];}else{$Commentaire_operateur="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/round_process"])){$Round_process = $arrayjson["results"][$i]["enregistrement_mgp/round_process"];}else{$Round_process="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/statut_plainte"])){$Statut_plainte_start = $arrayjson["results"][$i]["enregistrement_mgp/statut_plainte"];}else{$Statut_plainte_start="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/code_cgp"])){$Id_traitement_plainte = $arrayjson["results"][$i]["enregistrement_mgp/code_cgp"];}else{$Id_traitement_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/proposition_1"])){$Proposition_1 = $arrayjson["results"][$i]["enregistrement_mgp/proposition_1"];}else{$Proposition_1="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/action_1"])){$Action_1 = $arrayjson["results"][$i]["enregistrement_mgp/action_1"];}else{$Action_1="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/autorite_cloture"])){$Autorite_cloture_plainte = $arrayjson["results"][$i]["enregistrement_mgp/autorite_cloture"];}else{$Autorite_cloture_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/avis_call_center"])){$Feedback_plainte = $arrayjson["results"][$i]["enregistrement_mgp/avis_call_center"];}else{$Feedback_plainte="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/feed_back_plainte"])){$Feedback_plaingant = $arrayjson["results"][$i]["enregistrement_mgp/feed_back_plainte"];}else{$Feedback_plaingant="";}

                                        if(isset($arrayjson["results"][$i]["enregistrement_mgp/statut_final"])){$Statut_plainte_end = $arrayjson["results"][$i]["enregistrement_mgp/statut_final"];}else{$Statut_plainte_end="";}

                                        if(isset($arrayjson["results"][$i]["_id"])){$id = $arrayjson["results"][$i]["_id"];}else{$id="";}

                                        if(isset($arrayjson["results"][$i]["_uuid"])){$uuid = $arrayjson["results"][$i]["_uuid"];}else{$uuid="";}

                                        if(isset($arrayjson["results"][$i]["_submission_time"])){$submission_time = $arrayjson["results"][$i]["_submission_time"];}else{$submission_time="";}

                                        if(isset($arrayjson["results"][$i]["_submitted_by"])){$submitted_by = $arrayjson["results"][$i]["_submitted_by"];}else{$submitted_by="";}

                                                                //call the sql function transaction which could verify if each instance is inserted else could relance the process
                                                                    DB::beginTransaction();
                                                 $resultinsertion = DB::insert('INSERT ignore INTO mgp_step (
                                                                        Id_plainte,
                                                                        Ticket,
                                                                        Start_encodage,
                                                                        End_encodage,
                                                                        Time_encodage,
                                                                        Operateur,
                                                                        Composante,
                                                                        Benef_yes_No_Question,
                                                                        Nom_prenom_plaignant,
                                                                        Phone_or_id_identification,
                                                                        Phone_plaignant,
                                                                        Sexe,
                                                                        Province,
                                                                        Territoire_ville,
                                                                        Secteur_district,
                                                                        Groupement_commune,
                                                                        Village_quartier,
                                                                        Type_plainte,
                                                                        Categorie_plainte,
                                                                        Personne_impliquee,
                                                                        Date_incident,
                                                                        Localisation_incident,
                                                                        Description_plainte,
                                                                        Commentaire_operateur,
                                                                        Round_process,
                                                                        Statut_plainte_start,
                                                                        Id_traitement_plainte,
                                                                        Proposition_1,
                                                                        Action_1,
                                                                        Autorite_cloture_plainte,
                                                                        Feedback_plainte,
                                                                        Feedback_plaingant,
                                                                        Statut_plainte_end,
                                                                        id,
                                                                        uuid,
                                                                        submission_time,
                                                                        submitted_by
                                                                        )
                                                                    VALUES
                                                                        (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                                                                        [
                                                                            addslashes($Id_plainte),
                                                                            addslashes($ticket),
                                                                            $start_encodage,
                                                                            $end_encodage,
                                                                            $time_encodage,
                                                                            addslashes($Operateur),
                                                                            addslashes($Composante),
                                                                            addslashes($Benef_yes_No_Question),
                                                                            addslashes($Nom_prenom_plaignant),
                                                                            addslashes($Phone_or_id_identification),
                                                                            addslashes($Phone_plaignant),
                                                                            addslashes($Sexe),
                                                                            addslashes($Province),
                                                                            addslashes($Territoire_ville),
                                                                            addslashes($Secteur_district),
                                                                            addslashes($Groupement_commune),
                                                                            addslashes($Village_quartier),
                                                                            addslashes($Type_plainte),
                                                                            addslashes($Categorie_plainte),
                                                                            addslashes($Personne_impliquee),
                                                                            $Date_incident,
                                                                            addslashes($Localisation_incident),
                                                                            addslashes($Description_plainte),
                                                                            addslashes($Commentaire_operateur),
                                                                            addslashes($Round_process),
                                                                            addslashes($Statut_plainte_start),
                                                                            addslashes($Id_traitement_plainte),
                                                                            addslashes($Proposition_1),
                                                                            addslashes($Action_1),
                                                                            addslashes($Autorite_cloture_plainte),
                                                                            addslashes($Feedback_plainte),
                                                                            addslashes($Feedback_plaingant),
                                                                            addslashes($Statut_plainte_end),
                                                                            addslashes($id),
                                                                            addslashes($uuid),
                                                                            $submission_time,
                                                                            addslashes($submitted_by)
                                                                        ]
                                                             );

                                            If($resultinsertion){$insertion_ok++;}
                                            else {$errors_insert++;
                                                  $errors_insert_details .="Row n° = ".$i." -> Id_plainte  = ".$Id_plainte."<br>";
                                                 }
                                            $i++;
                    }
                                         $retour_msg='::::: RESULTAT INSERTION DES DONNEES FORMULAIRE MGP :::::';
                                         $retour_msg_ok='Nombre insertion avec succes ='.$insertion_ok;
                                         $retour_msg_err='Nombre erreur insertion ='.$errors_insert;

                                        // update id for category
                                        // UPDATE mgp_hsensible set Id_categorie =1 WHERE Categorie_plainte ="1. Plainte Hypert sensbible";
                                        //DB::update('UPDATE mgp_hsensible set Id_categorie = ? WHERE  Categorie_plainte = ?', [1 , "1. Plainte Hypert sensbible"]);
                                        DB::update('UPDATE mgp_process set Id_categorie = ? WHERE  Categorie_plainte = ?', [2 , "2. Plainte sensible"]);
                                        DB::update('UPDATE mgp_process set Id_categorie = ? WHERE  Categorie_plainte = ?', [3 , "3. Plainte technique"]);
                                        DB::update('UPDATE mgp_process set Id_categorie = ? WHERE  Categorie_plainte = ?', [4 , "4. Plainte generale"]);

                                        // update id for composante
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [1 , "CERC"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [2 , "THIMO"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [3 , "TMI"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [4 , "MEDAC"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [5 , "IDB"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [6 , "CLD"]);
                                        DB::update('UPDATE mgp_process set Id_composante = ? WHERE  Composante = ?', [7 , "STEP"]);

                                        // update id composante for hsensible
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [1 , "CERC"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [2 , "THIMO"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [3 , "TMI"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [4 , "MEDAC"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [5 , "IDB"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [6 , "CLD"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [7 , "STEP"]);


                                        // update id for province
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [4 , "NU"]);
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [5 , "SU"]);
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [3 , "SK"]);
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [9 , "KC"]);
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [7 , "IT"]);
                                        DB::update('UPDATE mgp_process set Id_province = ? WHERE  Province = ?', [2 , "NK"]);

                                         // update id province for hsensible
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [4 , "NU"]);
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [5 , "SU"]);
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [3 , "SK"]);
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [9 , "KC"]);
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [7 , "IT"]);
                                        //  DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [2 , "NK"]);


                                        // update id for status
                                        DB::update('UPDATE mgp_process set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [1 , "cloture"]);
                                        DB::update('UPDATE mgp_process set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [2 , "reouverte"]);
                                        DB::update('UPDATE mgp_process set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [3 , "Rejeté"]);
                                        DB::update('UPDATE mgp_process set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [4 , "En cours"]);
                                        DB::update('UPDATE mgp_process set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [4 , ""]);

                                        // update id status for hsensible
                                        // DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [1 , "cloture"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [2 , "reouverte"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [3 , "Rejeté"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [4 , "En cours"]);
                                        // DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [4 , ""]);


                                        // update id for type
                                        // DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["1. Harcelement Sexuel - Abus sexuel" , 1]);
                                        // DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["2. Detournement des fonds par staff du projet" , 2]);
                                        // DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["3. Decès d'un Beneficiaire" , 3]);
                                        // DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["4. Exploitation d'enfant - Mineurs" , 4]);

                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?', ["5. Conflit communautaire" , 5]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?', ["6. Conflit dans le menage (verbal ou physique)" , 6]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?', ["7. Vol - Fraude_pot_de_vin" , 7]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?', ["8. Insecurite empêche le beneficiaire à acceder à l'assistance" , 8]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?', ["9. Influence negative sur les prix des denrees de premières necessites du marche local" , 9]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["10. Montant reçu non conforme", 10]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["11. Conflit physique sur le chantier", 11]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["12. Problème avec le PSF (Banque, Operateur, IMF)", 12]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["13. Beneficiaire a fourni des informations eronees lors de l'enregistrement", 13]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["14. Beneficiaire pas enregistre dans MoMo", 14]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["15. Mise à jour des details du beneficiaire ou du substitut", 15]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["16. Transfer envoye mais pas reçu", 16]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["17. Problème de retrait", 17]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["18. Remplacement d'un Beneficiaire", 18]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["19. Desistement ou Refus du Beneficiaire à participer au projet", 19]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["20. Perte de la carte de beneficiaire", 20]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["21. Changement de substitut", 21]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["22.Demande de suppression de beneficiaire", 22]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["23.Demande d'informations sur le projet", 23]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["24. Retard de paiement", 24]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["25. Doleance du beneficiaire auprès du projet", 25]);
                                        DB::update('UPDATE mgp_process set Type_plainte = ? WHERE  Id_type_f = ?',  ["26. Remerciement du beneficiaire au projet", 26]);



                                        $queryStatus = "::::: LES MISES A JOUR DES ID ONT REUSSI :::::";

                                        DB::commit();

            } catch(Exception $e) {
                                        DB::rollback();
                                        $queryStatus = "::::: LES MISES A JOUR DES ID N'ONT PAS REUSSI :::::";
                                    }

                                    // return $retour_msg_ok."<br>". $retour_msg_no."<br>".$retour_msg_err."<br>".$queryStatus;

                                    return view('dashboard/import_mgp_data', [
                                                'retour_msg' => $retour_msg,
                                                'retour_msg_ok' => $retour_msg_ok,
                                                'retour_msg_err' => $retour_msg_err,
                                                'queryStatus' => $queryStatus
                                      ]);

        }



    }


    public function insert_hsensible(){
                   try {
                        DB::beginTransaction();
                        $select_all_hsensible = DB::select('SELECT * FROM mgp_step WHERE Categorie_plainte = "1. Plainte Hypert sensbible"');
                        foreach($select_all_hsensible as $select_all){

                                                $Id_plainte=$select_all->Id_plainte;
                                                $Ticket=$select_all->Ticket;
                                                $Start_encodage=$select_all->Start_encodage;
                                                $End_encodage=$select_all->End_encodage;
                                                $Time_encodage=$select_all->Time_encodage;
                                                $Operateur=$select_all->Operateur;
                                                $Composante=$select_all->Composante;
                                                $Benef_yes_No_Question=$select_all->Benef_yes_No_Question;
                                                $Nom_prenom_plaignant=$select_all->Nom_prenom_plaignant;
                                                $Phone_or_id_identification=$select_all->Phone_or_id_identification;
                                                $Phone_plaignant=$select_all->Phone_plaignant;
                                                $Sexe=$select_all->Sexe;
                                                $Province=$select_all->Province;
                                                $Territoire_ville=$select_all->Territoire_ville;
                                                $Secteur_district=$select_all->Secteur_district;
                                                $Groupement_commune=$select_all->Groupement_commune;
                                                $Village_quartier=$select_all->Village_quartier;
                                                $Type_plainte=$select_all->Type_plainte;
                                                $Categorie_plainte=$select_all->Categorie_plainte;
                                                $Personne_impliquee=$select_all->Personne_impliquee;
                                                $Date_incident=$select_all->Date_incident;
                                                $Localisation_incident=$select_all->Localisation_incident;
                                                $Description_plainte=$select_all->Description_plainte;
                                                $Commentaire_operateur=$select_all->Commentaire_operateur;
                                                $Round_process=$select_all->Round_process;
                                                $Statut_plainte_start=$select_all->Statut_plainte_start;
                                                $Id_traitement_plainte=$select_all->Id_traitement_plainte;
                                                $Proposition_1=$select_all->Proposition_1;
                                                $Action_1=$select_all->Action_1;
                                                $Autorite_cloture_plainte=$select_all->Autorite_cloture_plainte;
                                                $Feedback_plainte=$select_all->Feedback_plainte;
                                                $Feedback_plaingant=$select_all->Feedback_plaingant;
                                                $Statut_plainte_end=$select_all->Statut_plainte_end;
                                                $id=$select_all->id;
                                                $uuid=$select_all->uuid;
                                                $submission_time=$select_all->submission_time;
                                                $submitted_by=$select_all->submitted_by;



                        $resultinsertion = DB::insert('INSERT ignore INTO mgp_hsensible (
                                               Id_plainte,
                                               Ticket,
                                               Start_encodage,
                                               End_encodage,
                                               Time_encodage,
                                               Operateur,

                                               Composante,
                                               Benef_yes_No_Question,
                                               Nom_prenom_plaignant,
                                               Phone_or_id_identification,
                                               Phone_plaignant,
                                               Sexe,

                                               Province,
                                               Village_quartier,

                                               Id_type_f,

                                               Categorie_plainte,
                                               Personne_impliquee,
                                               Date_incident,
                                               Localisation_incident,
                                               Description_plainte,
                                               Commentaire_operateur,
                                               Round_process,
                                               Statut_plainte_start,
                                               Proposition_1,
                                               Action_1,
                                               Autorite_cloture_plainte,
                                               Feedback_plainte,
                                               Feedback_plaingant,

                                               Statut_plainte_end

                                               )
                                           VALUES
                                               (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
                                               [
                                                   addslashes($Id_plainte),
                                                   addslashes($Ticket),
                                                   $Start_encodage,
                                                   $End_encodage,
                                                   $Time_encodage,
                                                   addslashes($Operateur),
                                                   addslashes($Composante),
                                                   addslashes($Benef_yes_No_Question),
                                                   addslashes($Nom_prenom_plaignant),
                                                   addslashes($Phone_or_id_identification),
                                                   addslashes($Phone_plaignant),
                                                   addslashes($Sexe),
                                                   addslashes($Province),
                                                   addslashes($Village_quartier),
                                                   addslashes($Type_plainte),
                                                   addslashes($Categorie_plainte),
                                                   addslashes($Personne_impliquee),
                                                   $Date_incident,
                                                   addslashes($Localisation_incident),
                                                   addslashes($Description_plainte),
                                                   addslashes($Commentaire_operateur),
                                                   addslashes($Round_process),
                                                   addslashes($Statut_plainte_start),
                                                   addslashes($Proposition_1),
                                                   addslashes($Action_1),
                                                   addslashes($Autorite_cloture_plainte),
                                                   addslashes($Feedback_plainte),
                                                   addslashes($Feedback_plaingant),
                                                   addslashes($Statut_plainte_end)


                                               ]
                                    );


              }

                if($resultinsertion){
                         DB::update('UPDATE mgp_hsensible set Id_categorie = ? WHERE  Categorie_plainte = ?', [1 , "1. Plainte Hypert sensbible"]);
                         // update id composante for hsensible
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [1 , "CERC"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [2 , "THIMO"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [3 , "TMI"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [4 , "MEDAC"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [5 , "IDB"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [6 , "CLD"]);
                         DB::update('UPDATE mgp_hsensible set Id_composante = ? WHERE  Composante = ?', [7 , "STEP"]);

                          // update id province for hsensible
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [4 , "NU"]);
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [5 , "SU"]);
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [3 , "SK"]);
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [9 , "KC"]);
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [7 , "IT"]);
                          DB::update('UPDATE mgp_hsensible set Id_province = ? WHERE  Province = ?', [2 , "NK"]);

                          // update id status for hsensible
                           DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [1 , "Cloture"]);
                           DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [2 , "En cours"]);
                           DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [3 , "Reouverte"]);
                           DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [4 , "Ouvert"]);
                           DB::update('UPDATE mgp_hsensible set Id_statut_plainte_end = ? WHERE  Statut_plainte_end = ?', [5 , "En attente"]);


                            // update id for type
                           DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["1. Harcelement Sexuel - Abus sexuel" , 1]);
                           DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["2. Detournement des fonds par staff du projet" , 2]);
                           DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["3. Decès d'un Beneficiaire" , 3]);
                           DB::update('UPDATE mgp_hsensible set Type_plainte = ? WHERE  Id_type_f = ?', ["4. Exploitation d'enfant - Mineurs" , 4]);

                           $retour_msg_hsensible="::::: LES INSERTIONS HSENSIBLES ENREGISTRELEES AVEC SUCCES :::::";
                           return view('dashboard/import_mgp_data', [
                            'retour_msg_hsensible' => $retour_msg_hsensible
                         ]);

                         //   print "Yes";
                }
                DB::commit();

                } catch(Exception $e) {
                                        DB::rollback();
                                        // $queryStatus = "::::: LES MISES A JOUR DES ID N'ONT PAS REUSSI :::::";
                                    }

    }
}
