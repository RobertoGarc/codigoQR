<?php 
namespace App\Data;
use App\Models\Placa;

class PlacaDT{
    public static function GetDatosPlaca($id){
        try {
            $data=Placa::select('persona.*','persona.id as id_persona','placa.*','placa.id as placa_id')
            ->join('persona','placa.id_persona','persona.id')
            ->where('placa.id',$id)
            ->first();
            return $data;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

?>

