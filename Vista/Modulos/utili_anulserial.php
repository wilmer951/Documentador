<!--  DIV ANUL SERIALES  -->



<div class="anullserial" id="anullserial" style="display:none;">
  



<div class="card mt-5 mb-3">
  <div class="card-header">Generar borrado de seriales terminados</div>
  <div class="card-body">
   
  <div class="d-inline ">
        <input type="text" name="conserialt" id="conserialt" maxlength="3" placeholder="codigo oficina" style="width:120px;">
        <button  id="btnconserialt" type="submit" class="btn btn-sm  btntwo">GO</button>
        
        <div class="textareaoculto"><textarea  id="queryconestado"></textarea></div>

        
        <div id="queryconestado" style="display:none;"></div>
        <button id="btncopycons" id="copy" onclick="CopyToClipboard('queryconestado');" class="btn btn-sm btnone" style="display:none;">Copy</button>
    </div>

  </div>
</div>





 <div class="card mb-3">
  <div class="card-header">Generar borrado de seriales terminados</div>
  <div class="card-body text-primary">
   

  <div class="d-inline ">
        <input type="text" id="delserialt" name="delserialt" maxlength="3" placeholder="codigo oficina" style="width:120px;">
        <button  id="btndelserialt" type="submit" class="btn btn-sm btntwo">GO</button>
        
        <div class="textareaoculto"><textarea  id="querydeleteserial"></textarea></div>
        
        <button id="btncopydelete" class="btn btn-sm btnone" onclick="CopyToClipboard('querydeleteserial');" style="display:none;">Copy</button>
    </div>

  </div>
</div>





 <div class="card mb-3">
  <div class="card-header">Consultar si los seriales están asignados</div>
  <div class="card-body text-primary">
   

<div class="">
   <input type="text" id="codoficinacon" name="codoficinacon" maxlength="3" placeholder="codigo oficina" style="width:120px;">
   
   <select id="tiporcxcon">
     <option value="N">N</option>
     <option value="M">M</option>
     <option value="D">D</option>
   </select>
</div>

    <div class="d-inline ">
      <textarea id="listcuposcon" class="mt-1" rows="3" cols="40" placeholder="0012345678,0098765321"></textarea>
       
    </div>

    
    <button  id="btnquerycon" type="submit" class="btn btn-sm btntwo">GO</button>

    <div class="textareaoculto"><textarea  id="queryconcupo"></textarea></div>
     <button id="btncopycon" class="btn btn-sm btnone" onclick="CopyToClipboard('queryconcupo');" style="display:none;">
     copy</button>

  </div>
</div>





 <div class="card mb-3">
  <div class="card-header">Inserción masiva de cupos</div>
  <div class="card-body text-primary">
   

<div class=>
   <input type="text" id="codoficina" name="codoficina" maxlength="3" placeholder="codigo oficina" style="width:120px; ">
   <input type="text" id="fechaasig" name="fechaasig" maxlength="10" placeholder="AAA-MM-DD = fech asig">
   <select id="tiporcx">
     <option value="N">N</option>
     <option value="M">M</option>
     <option value="D">D</option>
   </select>
</div>

    <div class="d-inline ">
      <textarea id="listcupos" class="mt-1" rows="3" cols="40" placeholder="0012345678,0098765321"></textarea>
       
    </div>
    
    <button  id="btnqueryinsert" type="submit" class="btn btn-sm btntwo">GO</button>
    <div class="textareaoculto"><textarea  id="queryinsercupo"></textarea></div>
     <button id="btncopyinsert" class="btn btn-sm btnone" onclick="CopyToClipboard('queryinsercupo');" style="display:none;">
     copy</button>
  </div>
</div>



<!--  DIV ANUL SERIALES  -->
