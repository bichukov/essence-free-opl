<?php

$arARRAY = [];
$property_enums = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>14, "CODE"=>"HHH"));
while($enum_fields = $property_enums->GetNext())
{
    $arARRAY[] = $enum_fields;
}

$arResult["V1"]=$arARRAY;



