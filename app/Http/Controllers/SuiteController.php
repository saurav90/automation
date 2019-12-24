<?php
/**
 * Created by PhpStorm.
 * User: 660869
 * Date: 12/24/2019
 * Time: 5:04 PM
 */

namespace App\Http\Controllers;


class SuiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $viewData = ['title' => "Add new suite model"];
        return view('suitemodels.addsuitemodel',compact('viewData'));
    }
    public function suiteModelList()
    {
        $viewData = ['title' => "Test Suite Models"];
        return view('suitemodels.listsuitemodel',compact('viewData'));
    }
    public function suiteList()
    {
        $viewData = ['title' => "Test Cases List"];
        return view('suite.listsuites',compact('viewData'));
    }
    public function createSuite()
    {
        $viewData = ['title' => "Add New Test Case"];
        return view('suite.addsuite',compact('viewData'));
    }
}