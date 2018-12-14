<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $uid = $request->get('uid',1);
        $notes = DB::table('notes')->where(['uid'=>$uid])->select();

        return [
            'code'=> 200,
            'data'=> [
                'notes'=> $notes
            ]
        ];
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $note = DB::table('notes')->find($id);

        return [
            'code'=> 200,
            'data'=> [
                'note'=> $note
            ]
        ];
    }

    public function create(Request $request)
    {
        $uid = $request->post('uid',1);
        $content = $request->post('content');

        $result = DB::table('users')->insert(['uid'=>$uid, 'content'=>$content]);

        return [
            'code'=> 200,
            'data'=> [
                'result'=> $result,
                'content'=> $content
            ]
        ];
    }
}
