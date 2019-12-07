<?php
/**
 * PHP Version 7.1.7-1
 * Functions for users
 *
 * @category  File
 * @package   Access
 * @author    Jonas Henrique
 * @copyright ULEARN  
 * @license   BSD Licence
 * @link      Link
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Access;
use Illuminate\Http\Request;
/**
 * Class contain functions for admin
 *
 * @category  Class
 * @package   Category
 * @author    Jonas Henrique
 * @copyright ULEARN
 * @license   BSD Licence
 * @link      Link
 */
class AccessController extends Controller
{
    /**
     * Function to display the accesses for admin
     *
     *
     *
     * @return contents to display in access page
     */
    public function index(Request $request)
    {
        $paginate_count = 10;
        if($request->has('search')){
            $search = $request->input('search');
            $accesses = Access::where('first_name', 'LIKE', '%' . $search . '%')
                           ->paginate($paginate_count);
        }
        else {
            $accesses = Access::paginate($paginate_count);
        }

        return view('admin.access.index', compact('accesses'));
    }

}
