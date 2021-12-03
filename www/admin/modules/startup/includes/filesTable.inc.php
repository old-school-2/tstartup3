<div class="table-responsive">
   <table class="table table-responsive-md">
     <thead>
       <tr>
         <th style="width:80px;"><strong>#</strong></th>
         <th><strong>ДОКУМЕНТ</strong></th>
         <th><strong>ДОБАВИЛ</strong></th>
         <th><strong>ДАТА</strong></th>
         <th></th>
       </tr>
     </thead>
        <tbody>
          <?$i=1; foreach($files as $fl):?>
          <tr>
            <td><strong><?=$i;?></strong></td>
            <td><a class="startupInfoLink" href="<?=DOMAIN;?>/admin/files/startup/<?=$fl['filename'];?>" target="_blank"><?=$fl['name']?></a></td>
            <td><?=$fl['userName'];?></td>
            <td><?=date('d.m.Y',strtotime($fl['add_date']));?></td>
                                                
              <td>
			    <div class="dropdown">
					<button type="button" class="btn btn-success light sharp" data-bs-toggle="dropdown" aria-expanded="false">
					   <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
					</button>
					<div class="dropdown-menu" style="margin: 0px;">
					  <a class="dropdown-item" href="#">Edit</a>
					  <a class="dropdown-item" href="#">Delete</a>
			        </div>
			    </div>
			  </td>
            </tr>
			<?$i++; endforeach;?>								
											
           </tbody>
   </table>
</div>