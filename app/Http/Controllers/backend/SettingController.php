<?php

namespace App\Http\Controllers\backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    public function index()
    {
        $data['title'] =  __('setting');
        $data['settings'] = Setting::all();
        return view('backend.pages.setting.index', $data);
    }
    public function edit(Setting $setting)
    {
        $data['setting'] = $setting;
        $data['title'] =  __('setting/edit');
        return view('backend.pages.setting.edit', $data);
    }
    public function update(SettingRequest $request, Setting $setting)
    {
        $params = $request->only([
            'name',
            'address',
            'number',
            'email',
            'twitter',
            'facebook',
            'instagram',
            'skype',
            'linkedin',
            'copyright',
        ]);
        if($setting->update($params)){
            return redirect()->route('setting.index');
        }
    }
}
