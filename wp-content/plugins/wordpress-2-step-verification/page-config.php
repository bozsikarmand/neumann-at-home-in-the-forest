<div class="wrap">
    <div class="icon32" id="icon-options-general"><br/></div>
    <h2><?php _e('Wordpress 2-step verification','wp2sv')?></h2>
    <?php if(!$this->is_configuring()):?>
    <div id="message" class="updated">
        <p>
        <?php printf(__('2-step verification is <strong>%s</strong> for %s','wp2sv'),$this->get_status(),$this->user->display_name);?>
            <span class="smaller" style="float:right;margin-left: 10px;">
            Your server time in UTC is: <?php echo date('Y-m-d H:i:s',$this->otp->time());?> <a href="#" id="sync-clock">Sync now</a>
            </span>
        </p>
        <p>
            <?php //echo $this->otp->time()-time();?>
            <?php if($this->wp2sv_enabled=='yes'):?>
                <a href="#" id="wp2sv-disable-link"><?php _e('Turn off 2-step verification...','wp2sv');?></a>
            <?php else:?>
                <a href="#" id="wp2sv-enable-link"><?php _e('Turn on 2-step verification...','wp2sv');?></a>
            <?php endif;?>
            
        </p>

    </div>
    <?php endif;?>
    <div class="wp2sv-config default-content-area" id="wp2sv-config-section">
    <form method="POST" action="" id="theform">
        <input type="hidden" name="wp2sv_save" value="<?php $this->save_key();?>"/>
        <input type="hidden" name="wp2sv_action" value="" id="wp2sv_action"/>
        <input type="hidden" name="wp2sv_page_config" value="" id="wp2sv_page_config"/>
        <input type="hidden" name="wp2sv_current_page_config" value="<?php echo $this->get_current_page_config_name()?>" id="wp2sv_current_page_config"/>
        <input type="hidden" name="wp2sv_device_type" id="wp2sv_device_type" value=""/>
        <input type="hidden" id="wp2sv_remove_confirm" value="<?php $this->remove_confirm();?>"/>
        <?php $this->get_current_page_config();?>
        
  </form>
  </div>
  
</div>