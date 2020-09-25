<?php

namespace App\Services;

class FileUploadServices
{
    public static function fileUpload($imageFile)
    {
        //$imageFileからファイル名を取得(拡張子あり)
        $fileNameWithExt = $imageFile->getClientOriginalName();

        //拡張子を除いたファイル名を取得
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        
        //拡張子を取得
        $extension = $imageFile->getClientOriginalExtension();

        // ファイル名_時間_拡張子 として設定
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        
        //画像ファイル取得
        $fileData = file_get_contents($imageFile->getRealPath());
        
        //PHPでは関数の戻り値は1つしか設定できないため、一度配列でまとめておいて、後から分解する。
        //下記コマンドで、3つの変数を配列として$list変数に設定している。
        $list = [$extension, $fileNameToStore, $fileData];

        return $list;
    }
}
