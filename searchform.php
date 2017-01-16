<?php
/**
 * Modelo para exibição de formulários de pesquisa em Twenty Sixteen
 *
 * @package WordPress
 * @subpackage NatNat
 * @since Nat Nat 1.0
 */
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="input-group">								
                                <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentysixteen'); ?>"  value="<?php echo get_search_query(); ?>" name="s" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>