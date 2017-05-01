<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <div class="clear"></div>

    <div class="t-col-12">
        <div class="toret-box box-info">
            <div class="box-header">
                <h3 class="box-title"><?php _e( 'Nastavení', $this->plugin_name ); ?></h3>
            </div>
            <div class="box-body">
                <form method="post">
                    <table class="table-bordered">
                        <tr>
                            <th><?php _e('...label...', $this->plugin_name); ?></th>
                            <td>
                                <input type="text" name="field_name" value="<?php if( !empty( $option['field_name'] ) ){ echo $option['field_name']; } ?>" />
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="update" value="ok" />
                    <input type="submit" class="btn btn-info" unselectable="on" value="<?php _e( 'Uložit nastavení', $this->plugin_name ); ?>" />
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>



</div>