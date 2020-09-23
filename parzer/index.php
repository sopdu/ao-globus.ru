<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("parzer");

function getPriceType(){
    $zapros = CCatalogGroup::GetList();
    while ($row = $zapros->Fetch()){
        $result[$row["ID"]] = [
            "ID"        =>  $row["ID"],
            "NAME"      =>  $row["NAME"],
            "NAME_LANG" =>  $row["NAME_LANG"]
        ];
    }
    return $result;
}
function getID($article){
    $zapros = CIBlockElement::GetList(
        [],
        [
            "IBLOCK_ID"         =>  2,
            "PROPERTY_ARTICLE"  =>  $article
        ],
        false,
        false,
        ["ID"]
    );
    return $zapros->Fetch()["ID"];
}
if(!empty($_POST["f38b0d0a481ef8a486a1ad9f805d45ac"])){
    if(isset($_FILES) && $_FILES["f38b0d0a481ef8a486a1ad9f805d45ac"]["error"] == 0){
        $destiation_dir = $_SERVER["DOCUMENT_ROOT"] .'/parzer/file/'.$_FILES['f38b0d0a481ef8a486a1ad9f805d45ac']['name'];
        move_uploaded_file($_FILES['f38b0d0a481ef8a486a1ad9f805d45ac']['tmp_name'], $destiation_dir );
        require_once __DIR__ . '/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
        $xls = PHPExcel_IOFactory::load($destiation_dir);
        $xls->setActiveSheetIndex(0);
        $sheet = $xls->getActiveSheet();
        foreach ($sheet->toArray() as $row) {
            // $row[1] артикул
            // $row[2] цена
            // 1 base
            if(!empty($row[1])){
                $arFields = [
                    "PRODUCT_ID"        =>  getID($row[1]),
                    "CATALOG_GROUP_ID"  =>  $_POST["f38b0d0a481ef8a486a1ad9f805d45ac"]["TYPE"],
                    "PRICE"             =>  $row[2],
                    "CURRENCY"          =>  "RUB",
                    "QUANTITY_FROM"     =>  false,
                    "QUANTITY_TO"       =>  false
                ];
                $res = CPrice::GetList(
                    [],
                    [
                        "PRODUCT_ID"        =>  getID($row[1]),
                        "CATALOG_GROUP_ID"  =>  $_POST["f38b0d0a481ef8a486a1ad9f805d45ac"]["TYPE"]
                    ]
                );
                if ($arr = $res->Fetch()){
                    CPrice::Update($arr["ID"], $arFields);
                } else {
                    CPrice::Add($arFields);
                }
            }

            //echo '<pre>'; print_r($row); '</pre>';
        }
        echo '<h2 style="color: green">Файл выгружен</h2>';
    } else {
        echo '<h2 style="color: red">Файл не загружен</h2>';
    }
}
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
    }
</style>
<h1>Парсинг из экселя</h1>
<form method="post" enctype="multipart/form-data">
    <table style="width:100%">
        <tr>
            <td>Тип цен</td>
            <td>
                <select required name="f38b0d0a481ef8a486a1ad9f805d45ac[type]">
                    <option disabled selected>Выбор типа</option>
                    <?foreach (getPriceType() as $getPriceType):?>
                        <option value="<?=$getPriceType["ID"]?>"><?=$getPriceType["NAME_LANG"]?></option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Эксель файл</td>
            <td>
                <input type="file" required name="f38b0d0a481ef8a486a1ad9f805d45ac" />
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="отправить"></td>
        </tr>
    </table>
</form>
<p><br /></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>