<?php

namespace App\Http\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Content;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Content $content)
    {
        Admin::script(
            <<<JS
    (function () {
        let name = 'test';
        console.log('所有JS脚本都加载完毕啦~~', name)
    })()
JS
        );

        return $content->header('标题')->body('fdfdfdfd');
    }
}
