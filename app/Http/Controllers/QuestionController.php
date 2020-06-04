<?php

namespace App\Http\Controllers;

use App\Material;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends HomeController
{
    public function validationData(Request $request)
    {
        $request->validate([
            'id_material' => ['required', 'string', 'size:20', 'exists:materials,id_material'],
            'question' => ['required', 'string', 'min:20'],
            'option_a' => ['required', 'string'],
            'option_b' => ['required', 'string'],
            'option_c' => ['required', 'string'],
            'option_d' => ['required', 'string'],
            'answer' => ['required', 'string'],
        ]);
    }
    public function question($material_id)
    {
        $questions =  Question::where('id_material', $material_id)->get();
        $material = Material::where('id_material', $material_id)->firstOrFail();
        $data = [
            "questions" => $questions,
            "material" => $material,
        ];
        return view('dashboard.admin.materials.question.questions', $data);
    }

    public function details($material_id, $id)
    {
        $question =  Question::findOrFail($id);
        $material = Material::where('id_material', $material_id)->firstOrFail();
        $data = [
            "question" => $question,
            "material" => $material,
        ];
        return view('dashboard.admin.materials.question.details', $data);
    }
    public function show($material_id, $id)
    {
        $question =  Question::findOrFail($id);
        $material = Material::where('id_material', $material_id)->firstOrFail();
        $data = [
            "question" => $question,
            "material" => $material,
        ];
        echo json_encode($data);
    }
    public function add($material_id)
    {
        return view('dashboard.admin.materials.question.add', ['material_id' => $material_id]);
    }

    public function store(Request $request)
    {
        $this->validationData($request);
        Question::create($request->all());
        return redirect(route('material-question', $request->id_material))->with('status', 'Success add new question');
    }
    public function update(Request $request)
    {
        Question::findOrFail($request->id);
        $this->validationData($request);

        Question::find($request->id)->update($request->all());
        return redirect()->back()->with('status', 'Success update question');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;

        Question::findOrFail($id)->delete();

        return redirect()->back()->with('status', 'Success remove question');
    }
}
