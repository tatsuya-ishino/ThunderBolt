<?php
//******************************************************************
//
// Classファイル
// 作成者：Tatsuya Ishino 2015/01/08
//
//******************************************************************
class CreateTagLink {
//======================================
//
// ◆CSSタグを出す関数
//
//======================================
function CreateTagCssLink($css_array){
	//配列検証
	if(!empty($css_array)):
	if(is_array($css_array)):
		foreach ($css_array as $key => $val){
			$tag = '';
			$rel = '';
			$type = '';
			$href = '';
			$media = '';
			$charset = '';
			$id = '';
				foreach($val as $key2 => $val2){
					//キーを検証
					if($key2=='tag'):
						$tag = $val2;
				
					elseif($key2=='rel'):
						$rel = $val2;
				
					elseif($key2=='type'):
						$type = $val2;
						
					elseif($key2=='href'):
						$href = $val2;

					//---ここから無くてもよいオプション---
					elseif($key2=='media')://メディアタイプ
						if(!empty($val2)):
							$media = " media=\"".$val2."\"";
						else:
							$media = '';
						endif;
						
					elseif($key2==='charset')://文字コードセット
						if(!empty($val2)):
							$charset = " charset=\"".$val2."\"";
						else:
							$charset = '';
						endif;
						
					elseif($key2==='id')://ID
						if(!empty($val2)):
							$id = " id=\"".$val2."\"";
						else:
							$id = '';
						endif;
					//---無くてもいいオプション終わり---					
					else:
						//キーに不正な文字が入っていたらエラーで止める
						echo "[".$key."][CSS] This Array key is Invalid!\n";
						break 2;
					endif;
		
				}
		echo "<".$tag." rel=\"".$rel."\" type=\"".$type."\" href=\"".$href."\"".$media.$charset.$id." />\n";//CSSタグを出す
	}//foreach END
	else:
		echo "[CSS] This Value is No Array\n";//配列ではないよとメッセージ
	endif;

	else:
		echo "[CSS] This Value is Empty!\n";//中身が空だとメッセージ
	endif;
}
//======================================
//
// ◆JSタグを出す関数
//
//======================================
function CreateTagJsLink($js_array){
	//配列検証
	if(!empty($js_array)):
	if(is_array($js_array)):
		foreach ($js_array as $key => $val){
			$tag = '';
			$type = '';
			$src = '';
				foreach($val as $key2 => $val2){
					//キーを検証
					if($key2=='tag'):
						$tag = $val2;
				
					elseif($key2=='type'):
						$type = $val2;
				
					elseif($key2=='src'):
						$src = $val2;
					
					else:
						//キーに不正な文字が入っていたらエラーで止める
						echo "[".$key."][JS] This Array key is Invalid!\n";
						break 2;
					endif;
		
				}
		echo "<".$tag." type=\"".$type."\" src=\"".$src."\"></script>\n";//JSタグを出す
	}//foreach END
	else:
		echo "[JS] This Value is No Array\n";//配列ではないよとメッセージ
	endif;

	else:
		echo "[JS] This Value is Empty!\n";//中身が空だとメッセージ
	endif;
}
}
?>