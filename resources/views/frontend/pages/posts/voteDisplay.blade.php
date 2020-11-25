@if ($post_id != null)
    <div class="stars" style="float: right;">
        @for ($i = 0; $i < round($votes->avg('rate')); $i++)
            <i class="fas fa-star" style="color: rgb(255, 225, 0)"></i>
        @endfor
        @for ($i = 0; $i < 5 - round($votes->avg('rate')); $i++)
            <i class="fas fa-star"></i>
        @endfor
    </div>
@else
    <div class="stars" style="float: right;">
        <input class="star star-5" id="star-5" type="radio" value="5" name="star" />
        <label style="padding: 2px;font-size: 16px;    margin-top: 8px;" class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" value="4" name="star" />
        <label style="padding: 2px;font-size: 16px;    margin-top: 8px;" class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" value="3" name="star" />
        <label style="padding: 2px;font-size: 16px;    margin-top: 8px;" class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" value="2" name="star" />
        <label style="padding: 2px;font-size: 16px;    margin-top: 8px;" class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" value="1" name="star" />
        <label style="padding: 2px;font-size: 16px;    margin-top: 8px;" class="star star-1" for="star-1"></label>
    </div>
@endif
