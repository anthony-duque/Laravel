<?php

    namespace App\Models;

    use Illuminate\Support\Arr;

    class Stage
    {
        public static function all() : array
        {
            $stages = [];

            $rec = ['order_no' => 1, 'description' => "Check-in"];
            array_push($stages, $rec);

            $rec = ['order_no' => 2, 'description' => "Disassembly"];
            array_push($stages, $rec);

            $rec = ['order_no' => 3, 'description' => "Repair Plan"];
            array_push($stages, $rec);

            $rec = ['order_no' => 4, 'description' => "Waiting Approval"];
            array_push($stages, $rec);

            return $stages;

        }   // all()


        public static function get($id) : array
        {
            $stage = Arr::first(Stage::all(), fn($stage) => $stage['order_no'] == $id);

            if(!$stage){
                abort(404);
            } else{
                return $stage;
            }

        }   // find()
    }

?>
