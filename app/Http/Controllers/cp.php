<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jury;
use App\Models\Offer;
use App\Models\avis;
use App\Models\cps;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\TemplateProcessor;
class cp extends Controller
{
    //
 function afficher(){
    $data_cps = cps::all();
    $offre_table = array();
    $offre_facu = array();
for($i = 0; $i < count($data_cps); $i++){
    $aa = offer::find($data_cps[$i]['id']);
    $offre_facu['id']=$aa['id'];
    $offre_facu['num']=$aa['Num'];
    $offre_facu['objet']=$aa['objet'];
    $offre_facu['avis']=$data_cps[$i]['num_avis'];
    array_push($offre_table, $offre_facu);
}

return view('liste_cps',['offer'=>$offre_table]);


 }

 function imprimerr($id){

 $offre = DB::table('offers')->where('id', $id)->first();
 $cps = DB::table('cps')->where('id', $id)->first();
 $aviii = DB::table('avis')->where('num_avis', $cps->num_avis)->first();

 $templateProcessor = new TemplateProcessor( documentTemplate: 'Word-files/cps.docx');
 $templateProcessor->setValue( 'num_offre', $offre->Num);
 $templateProcessor->setValue( 'objet', $offre->objet);
 $templateProcessor->setValue( 'caution', $offre->caution);
 $templateProcessor->setValue( 'date_avis', $aviii->date_ouverture);


 $templateProcessor->saveAs( fileName: 'cps.docx');
 return response()->download(file : 'cps.docx')->deleteFileAfterSend(shouldDelete:true);

 }

}
