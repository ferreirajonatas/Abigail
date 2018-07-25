
//Remove Linha
(function($) {
  RemoveTableRow = function(item) {
    var tr = $(item).closest('tr');

      tr.fadeOut(400, function() {
        tr.remove();  
      });
    return false;
  }
})(jQuery);

//Adicona Linha
(function($) {
  AddTableRow = function() {


   var newRow = $("<tr>");
   var cols = "";

   cols += '<td><input class="cod" type="text" readonly="true" name="codigo" value="&nbsp;"></td>';
   cols += '<td>';
   cols +='<select name="produtos" class="produtos">';
   cols +='<option>Selecione o Produto</option>';
   //cols +='<?php while($prod = mysqli_fetch_array($query)) { ?><option value="<?php echo $prod['COD_PRODUTO'] ?>"><?php echo $prod['NOME'] ?></option><?php } ?>';
   cols +='</select>';
   cols += '</td>';
   cols += '<td><input class="unid" type="text" readonly="true" name="codigo" value="&nbsp;"></td>';
   cols += '<td><input class="qtd" type="number" name="quantity" value="&nbsp;" min="0" max="10"></td>';
   cols += '<td>';
   cols += '<button onclick="RemoveTableRow(this)" type="button" class="glyphicon glyphicon-minus-sign img-circle btn-icon"></button>';
   cols += '</td>';

    newRow.append(cols);
    $("#products-table").append(newRow);

    return false;
  };
})(jQuery);
