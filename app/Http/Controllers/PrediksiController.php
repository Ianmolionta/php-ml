<?php

namespace App\Http\Controllers;

use App\Models\nilaiModel;
use Illuminate\Http\Request;
use Phpml\Classification\DecisionTree;
use Phpml\ModelManager;

class PrediksiController extends Controller
{
    public function train(){

        $nilai = nilaiModel::all();

        $sample = [];
        $labels = [];

        foreach ($nilai as $data) {
            $sample[] = [$data->Usia, $data->Jenis_Kelamin, $data->Berat_Badan, $data->Tinggi_Badan, $data->IMD];
            $labels[] = $data->Status;
        }

        $clasifire = new DecisionTree(5);
        $clasifire->train($sample, $labels);

        $modelManager = new ModelManager();
        $modelManager->saveToFile($clasifire, storage_path('c45_model.model'));

        return response()->json([
            'message' => 'Model berhasil di training'
        ]);
    }

    public function predict(Request $request){
        $modelManager = new ModelManager();
        $clasifire = $modelManager->restoreFromFile(storage_path('c45_model.model'));

        $sample = [(int)$request->Usia, (int)$request->Jenis_Kelamin, (int)$request->Berat_Badan, (int)$request->Tinggi_Badan, (boolean)$request->IMD];
        $result = $clasifire->predict($sample);

        return response()->json(['prediksi' => $result]);
    }
}
