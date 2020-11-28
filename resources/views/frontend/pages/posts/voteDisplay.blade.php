<style>
    .reply-button {
        color: #377dff;
    }

    .reply-button:hover {
        color: #0052ea;
    }

    div.stars {
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked~label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    input.star-5:checked~label.star:before {
        color: rgb(255, 238, 0);
        text-shadow: 0 0 20px rgb(248, 236, 56);
    }

    input.star-1:checked~label.star:before {
        color: #F62;
    }

    label.star:hover {
        color: rgb(255, 238, 0);
        transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
        content: '\f005';
        color: #444;
        font-family: 'Font Awesome 5 Free';
    }

</style>
@if (Auth::check())
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

@else
    <div class="stars" style="float: right;">
        @for ($i = 0; $i < round($votes->avg('rate')); $i++)
            <i class="fas fa-star" style="color: rgb(255, 225, 0)"></i>
        @endfor
        @for ($i = 0; $i < 5 - round($votes->avg('rate')); $i++)
            <i class="fas fa-star"></i>
        @endfor
    </div>
@endif
