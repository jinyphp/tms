<?php
namespace Jiny\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

use Jiny\Table\Http\Controllers\ConfigController;
class Setup extends ConfigController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['filename'] = "jiny/admin/setting"; // 설정파일명(경로)
        $this->actions['view_main'] = "jinyadmin::setup.main";
        $this->actions['view_form'] = "jinyadmin::setup.form";

        // 테마설정
        setTheme("admin/sidebar");
    }

    public function index(Request $request)
    {
        // 설정파일이 있는 경우, 제외
        $path = config_path($this->actions['filename']);
        if(file_exists($path.".php")) {
            return "관리자 설정 파일이 존재합니다.";
        }

        // 설정파일 없음.
        return parent::index($request);
    }

    public function hookStoring($wire, $form)
    {
        // setup 관리자 사용자 및 권한 등록
        if(isset($form['email'])) {
            $row = DB::table('users')->where('email', $form['email'])->first();
            if(!$row) {
                // 새로운 사용자 등록
                $id = User::create([
                    'name' => 'Super Admin',
                    'email' => $form['email'],
                    'password' => Hash::make($form['password'])
                ])->id;
                //dump($id);
                DB::table('users')->where('email', $form['email'])->update(['utype'=>"super-admin"]);

                // roles
                $roles = DB::table('roles')->where('name', "admin")->first();
                if($roles) {
                    $roleAdmin = $roles->id;
                } else {
                    $roleAdmin = DB::table('roles')->insertGetId([
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s"),
                        'name'=>"admin"
                    ]);
                }

                // admin Roles
                DB::table('role_user')->insertGetId([
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
                    'role_id'=>$roleAdmin,
                    'user_id'=>$id
                ]);
            }
        }
        return $form;
    }


    public function hookStored($wire, $form)
    {
        // redirect 주소 지정
        if(isset($form['prefix'])) {
            $wire->redirect = "/".$form['prefix']."/login";
        } else {
            $wire->redirect = "/admin/login";
        }

        return $form;
    }



}
