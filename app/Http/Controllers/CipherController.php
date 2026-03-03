<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CipherController extends Controller
{
    public function index()
    {
        return view('cipher');
    }

    public function encrypt(Request $request)
    {
        $text = $request->text;
        $shift = $request->shift;

        $result = $this->caesarCipher($text, $shift);

        return back()->with([
            'result' => $result,
            'text' => $text,
            'shift' => $shift
        ]);
    }

    public function decrypt(Request $request)
    {
        $text = $request->text;
        $shift = $request->shift;

        $result = $this->caesarCipher($text, -$shift);

        return back()->with([
            'result' => $result,
            'text' => $text,
            'shift' => $shift
        ]);
    }

    private function caesarCipher($text, $shift)
    {
        $result = '';
        $shift = $shift % 26;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? 65 : 97;
                $result .= chr((ord($char) - $asciiOffset + $shift + 26) % 26 + $asciiOffset);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}