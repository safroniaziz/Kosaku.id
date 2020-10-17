<div class="form-group increment col-md-6" >
    <div class="input-group">
        <input type="file" name="foto_detail[]" class="form-control" style="padding-bottom: 30px !important;">
        <div class="input-group-append">
            <a class="btn btn-outline-primary btn-add" style="cursor: pointer"><i class="fa fa-plus-square"></i></a>
        </div>
    </div>
</div>
<div class="clone invisible col-md-6">
    <div class="input-group mt-2">
        <input type="file" name="foto_detail[]" class="form-control" style="padding-bottom: 30px !important;">
        <div class="input-group-append">
            <a class="btn btn-outline-danger btn-remove" style="cursor: pointer"><i class="fa fa-minus-square"></i></a>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.action = "submit"
        jQuery(document).ready(function(){
            jQuery(".btn-add").click(function(){
                let markup = jQuery(".invisible").html();
                jQuery(".increment").append(markup);
            });
            jQuery("body").on("click",".btn-remove", function(){
                jQuery(this).parents(".input-group").remove();
            });
        });
    </script>
@endpush