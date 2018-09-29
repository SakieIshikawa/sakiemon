







var plus = function(){
var group = document.getElementById('ingredient');
var count = group.getElementsByTagName('tr').length;
var parent_node = group.getElementsByTagName('tr')[0].parentNode;
var tr_node = document.createElement('tr');

  // tr要素に属性値を追加
tr_node.setAttribute('id', 'tr' + (count + 1));

  // tr要素をノードに追加
parent_node.appendChild(tr_node);

  // 入力枠を追加する
document.getElementById('tr' + (count + 1)).innerHTML = '<td id="td' + (count + 1) + '"><input type="text" name="mtl_' + (count + 1) + '[]"></td><td id="td' + (count + 1) + '"><input type="text" name="ing_' + (count + 1) + '[]"></td>';
}
