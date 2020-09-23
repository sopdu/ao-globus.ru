<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if($arResult == 'N'):?>
    <form method="post">
        <div class="contpage_order mt-5 mbfix_order">
            <div class="cont_title text-center"><?=GetMessage("sopduLeaveEequest")?></div>
            <div class="d-flex justify-content-between adaptation_block">
                <div>
                    <input class="mt-2" name="be4d1a4a0e7667d8b171d4e5dcc93bb4[email]" type="email" placeholder="<?=GetMessage("sopduEmail")?>" />
                    <br />
                    <input class="mt-4 fixholdername" name="be4d1a4a0e7667d8b171d4e5dcc93bb4[name]" type="text" placeholder="<?=GetMessage("sopduName")?>" />
                </div>
                <input class="mt-2" type="messege" name="be4d1a4a0e7667d8b171d4e5dcc93bb4[message]" placeholder="<?=GetMessage("sopduMessage")?>" />
            </div>
            <button class="mt-4" type="submit"><?=GetMessage("sopduSubmit")?></button>
        </div>
    </form>
<?else:?>
    <div class="contpage_order mt-5 mbfix_order">
        <div class="cont_title text-center">Ваше сообщение не вероятно успешно отправлено</div>
    </div>
<?endif;?>
