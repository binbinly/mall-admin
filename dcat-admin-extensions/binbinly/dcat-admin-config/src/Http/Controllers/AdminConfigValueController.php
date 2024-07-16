<?php

namespace Dcat\Admin\Config\Http\Controllers;

use Dcat\Admin\Config\Models\Config;
use Dcat\Admin\Config\Models\ConfigGroup;
use Dcat\Admin\Config\Models\ConfigValue;
use Dcat\Admin\Form;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Http\JsonResponse;
use Dcat\Admin\Layout\Content;

class AdminConfigValueController extends AdminController
{
    public function field(Content $content, $key)
    {
        $group = ConfigGroup::query()->where('key', $key)->where('is_open', 1)->firstOrFail();
        return $content
            ->title($group->name)
            ->description($group->desc)
            ->body($this->form($group->id));
    }

    public function save()
    {
        $data = request()->except(['_token']);
        ConfigValue::saveAll($data);
        return JsonResponse::make()->success('操作成功');
    }

    protected function form($groupId)
    {
        return Form::make(new ConfigValue(), function (Form $form) use($groupId) {
            $form->disableListButton();
            $form->disableViewButton();
            $form->disableEditingCheck();
            $form->disableCreatingCheck();
            $form->disableViewCheck();
            $configs = ConfigGroup::query()->where('pid', $groupId)->where('is_open', 1)->with(['fields.value'])->get();
            foreach ($configs as $config) {
                $form->tab($config->name, function (Form $form) use($config) {
                    foreach ($config->fields as $field) {
                        $method = Config::$fieldTypes[$field->type];
                        $form->$method($field->key, $field->name)->help($field->desc)->required($field->is_required)
                            ->rules($field->rules)->value($field->value->value ?? '');
                    }
                });
            }
        })->title('配置信息');
    }
}
