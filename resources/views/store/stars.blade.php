<span class="item-rating text-warning">
    @for($i = 0; $i < $full; $i++)
        <i class="material-icons star"></i>
    @endfor
    @for($i = 0; $i < $half; $i++)
        <i class="material-icons star_half"></i>
    @endfor
    @for($i = 0; $i < $empty; $i++)
        <i class="material-icons star_border"></i>
    @endfor
</span>