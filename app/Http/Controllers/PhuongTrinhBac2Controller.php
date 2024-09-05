<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhuongTrinhBac2Controller extends Controller
{
    //
    public function index()
    {
        return \view('index');
    }

    public function giai(Request $request)
    {
        $request->validate([
            'a' => 'required|numeric|not_in:0', 
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ],
        [
            'a.required' => 'Trường "a" là bắt buộc. Vui lòng nhập giá trị.',
            'a.numeric' => 'Trường "a" phải là một số.',
            'a.not_in' => 'Trường "a" không thể bằng 0.',
            'b.required' => 'Trường "b" là bắt buộc. Vui lòng nhập giá trị.',
            'b.numeric' => 'Trường "b" phải là một số.',
            'c.required' => 'Trường "c" là bắt buộc. Vui lòng nhập giá trị.',
            'c.numeric' => 'Trường "c" phải là một số.',
        ]
    
    );

        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');

       
        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            $result = "Phương trình vô nghiệm.";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            $result = "Phương trình có nghiệm kép: x = $x.";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $result = "Phương trình có 2 nghiệm: x₁ = $x1, x₂ = $x2.";
        }

       
        return redirect('/')->with('result', $result);
    }
}
