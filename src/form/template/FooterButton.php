<?php
namespace xqkeji\app\member\form\template;
class FooterButton
{
	public static function getTemplate()
    {
        return '<div class="form-group row">
            <div class="col-6 col-sm-10 text-center">
                <?=$content?>
            </div>
        </div>';
    }
}