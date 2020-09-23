<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<form method="post">
    <input class="mt-4" name="99b02f1b87d20f2eda501b23f559159e[organizationName]" type="text" placeholder="<?=GetMessage("sopduOrganizationName")?>"><br />
    <input class="mt-4" name="99b02f1b87d20f2eda501b23f559159e[tin]" type="number" placeholder="<?=GetMessage("sopduTin")?>"><br />
    <input class="mt-4" name="99b02f1b87d20f2eda501b23f559159e[nameManager]" type="text" placeholder="<?=GetMessage("sopduNameManager")?>"><br />
    <input class="mt-4" name="99b02f1b87d20f2eda501b23f559159e[email]" type="email" placeholder="<?=GetMessage("sopduEmail")?>"><br />
    <input class="mt-4" name="99b02f1b87d20f2eda501b23f559159e[password]" type="password" placeholder="<?=GetMessage("sopduPassword")?>"><br />
    <button class="mt-4" type="submit"><?=GetMessage("sopduRegister")?></button>
</form>
