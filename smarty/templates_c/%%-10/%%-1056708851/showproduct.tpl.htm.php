<?php /* Smarty version 2.6.0, created on 2015-12-15 13:47:51
         compiled from smarty/templates/showproduct.tpl.htm */ ?>
      <!-- - - - - - - - - - - - - - Start Show Product - - - - - - - - - - - - - - - -->          
         <?php if (isset($this->_sections['id'])) unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['LstProduct']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?> 
            <button class="button default">
                  <ul>
                      <li><p><?php echo $this->_tpl_vars['LstProduct'][$this->_sections['id']['index']][1]; ?>
</p></li>                    
                      <li>قیمت:<label><?php echo $this->_tpl_vars['LstProduct'][$this->_sections['id']['index']][3]; ?>
</label></li>                      
                      <li>توضیحات:<label><?php echo $this->_tpl_vars['LstProduct'][$this->_sections['id']['index']][2]; ?>
</label></li>   
                  </ul>
            </button>            
         <?php endfor; endif; ?>  
         <form action="index.php" method="post">
             <div class="border-divider" style="margin: 50px;"> 
             <input type="hidden" name="recno" value="<?php echo $this->_tpl_vars['recno']; ?>
"/> 
                <?php if ($this->_tpl_vars['HideBtnNext'] != 'Yes'): ?>
                   <button name="btnnext" class="button default" >بعدی</button>  
                <?php endif; ?>     
                <?php if ($this->_tpl_vars['HideBtnPerv'] != 'Yes'): ?>
                   <button name="btnperv" class="button default" >قبلی</button>
                <?php endif; ?>                              
             </div>	
         </form>         
    
   
     
     