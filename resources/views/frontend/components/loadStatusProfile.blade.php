<div class="select2-custom">
    <select class="js-custom-select status-select form-control" data-hs-select2-options='{
"minimumResultsForSearch": "Infinity",
"customClass": "custom-select"
}'>
        <option  value="0" data-option-template='<span class="media"><i class="fas fa-globe-americas text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Anyone</span><small class="select2-custom-hide">Visible to anyone who can view your content. Accessible by installed apps.</small></span></span>' @if(Auth::user()->status != 0) {{"selected"}} @endif>Công khai</option>
        <option value="1" data-option-template='<span class="media"><i class="fas fa-user-lock text-body mt-1 mr-2"></i><span class="media-body"><span class="d-block">Only you</span><small class="select2-custom-hide">Only visible to you.</small></span></span>' @if(Auth::user()->status != 1) {{"selected"}} @endif>Riêng tư</option>
     </select>
</div>
<script src="{{asset('frontend/assets/js/load-status.js')}}"></script>
