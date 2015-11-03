<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Content;
use DB;

class IndexController extends Controller
{
    public $_contents_obj = null;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = '')
    {
        // カテゴリ取得
        if (empty($id)) {
            $this->_setObject();
            // トップ(表示)
            $contents['list']  = $this->_contents_obj
                                      ->orderBy('regist_date', 'desc')
                                      ->groupBy('content')
                                      ->take(60)
                                      ->get()
                                      ->toArray();
            $this->_unsetObject();
            $this->_setObject();
            $contents['count'] = $this->_contents_obj->distinct('content')->count();

        } else {
            // ジャンル選択
            $this->_setObject('category', $id);
            $contents['list']  = $this->_contents_obj
                                      ->orderBy('regist_date', 'desc')
                                      ->groupBy('content')
                                      ->take(60)
                                      ->get()
                                      ->toArray();
            $this->_unsetObject();
            $this->_setObject('category', $id);
            $contents['count'] = $this->_contents_obj->distinct('content')->count();
        }
        return view('index.index')->with(compact('contents'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    private function _setObject($type = null, $value = null)
    {
            if (empty($type)) {
                $this->_contents_obj = Content::select(DB::raw('contents.*, category.name, contents_category_relationships.category_id'))
                                          ->leftJoin('contents_category_relationships', 'contents_category_relationships.contents_id', '=', 'contents.id')
                                          ->leftJoin('category', 'category.id', '=', 'contents_category_relationships.category_id')
                                          ->where('status', 'active');
            } else if ($type = 'category') {
                $this->_contents_obj = Content::select(DB::raw('contents.*, category.name, contents_category_relationships.category_id'))
                                          ->leftJoin('contents_category_relationships', 'contents_category_relationships.contents_id', '=', 'contents.id')
                                          ->leftJoin('category', 'category.id', '=', 'contents_category_relationships.category_id')
                                          ->where('status', 'active')
                                          ->where('category.id', $value);
            }
    }
    
    private function _unsetObject()
    {
        unset($this->_contents_obj);
    }
}
