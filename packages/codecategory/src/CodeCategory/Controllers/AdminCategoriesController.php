<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 30/01/2016
 * Time: 19:47
 */

namespace CodePress\CodeCategory\Controllers;


use CodePress\CodeCategory\Models\Category;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{
    private $category;
    private $response;
    /*
     * Utilizar o ResponseFactory para poder o codigo ficar menos desacoplado,
     * podendo ser injetado para utilizar o methodo view().
     *  Em vez de usar o view() global.
     *
     */
    public function __construct(ResponseFactory $response, Category $category)
    {
        $this->category = $category;
        $this->response = $response;
    }
    public function index()
    {
        $categories = $this->category->all();
        return $this->response->view('codecategory::index', compact('categories'));
    }

    public function create()
    {
        $categories = $this->category->all();
        return view('codecategory::create', compact('categories'));
    }

    public function store(Request $request)
    {

        $this->category->create($request->all());
        return redirect()->route('admin.categories.index');
        
    }

}