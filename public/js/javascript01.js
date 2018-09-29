/*ここから
<div class="howtocook">


<textarea name="textarea" rows="7" cols="50"></textarea>';}  + (count + 1)

ここまで*/


  var plus2 = function(){
  var group = document.getElementById('howtocook');
  var count = group.getElementsByTagName('tr').length;
  var parent_node = group.getElementsByTagName('tr')[0].parentNode;
	var tr_node = document.createElement('tr');

  	// tr要素に属性値を追加
  tr_node.setAttribute('id', 'tr' + (count + 1));

  	// tr要素をノードに追加
	parent_node.appendChild(tr_node);

  	// 入力枠を追加する
	document.getElementById('tr' + (count + 1)).innerHTML = '<th>' + (count + 1) + '<td id="td' + (count + 1) + '"><textarea class=name="" rows="7" cols="50">';
  }
